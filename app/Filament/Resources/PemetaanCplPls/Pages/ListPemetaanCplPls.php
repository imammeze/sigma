<?php

namespace App\Filament\Resources\PemetaanCplPls\Pages;

use App\Filament\Resources\PemetaanCplPls\PemetaanCplPlResource;
use Filament\Actions\CreateAction;
use App\Models\PemetaanCplPl;
use App\Exports\PemetaanCplPlExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPemetaanCplPls extends ListRecords
{
    protected static string $resource = PemetaanCplPlResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PemetaanCplPlExport, 'Pemetaan_CPL_PL.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PemetaanCplPl::all();
                    $pdf = Pdf::loadView('exports.pemetaan-cpl-pl-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Pemetaan_CPL_PL.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
