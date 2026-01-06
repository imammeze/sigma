<?php

namespace App\Filament\Resources\PerolehanPkms\Pages;

use App\Filament\Resources\PerolehanPkms\PerolehanPkmResource;
use Filament\Actions\CreateAction;
use App\Models\PerolehanPkm;
use App\Exports\PerolehanPkmExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPerolehanPkms extends ListRecords
{
    protected static string $resource = PerolehanPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PerolehanPkmExport, 'Laporan_Perolehan_PKM.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PerolehanPkm::orderBy('tahun_perolehan', 'desc')->get();
                    $pdf = Pdf::loadView('exports.perolehan-pkm-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Perolehan_PKM.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
