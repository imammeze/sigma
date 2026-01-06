<?php

namespace App\Filament\Resources\SaranaPrasaranaPkms\Pages;

use App\Filament\Resources\SaranaPrasaranaPkms\SaranaPrasaranaPkmResource;
use Filament\Actions\CreateAction;
use App\Models\SaranaPrasaranaPkm;
use App\Exports\SaranaPrasaranaPkmExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListSaranaPrasaranaPkms extends ListRecords
{
    protected static string $resource = SaranaPrasaranaPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new SaranaPrasaranaPkmExport, 'Sarpras_PKM.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = SaranaPrasaranaPkm::all();
                    $pdf = Pdf::loadView('exports.sarana-prasarana-pkm-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Sarpras_PKM.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
