<?php

namespace App\Filament\Resources\PerolehanHkis\Pages;

use App\Filament\Resources\PerolehanHkis\PerolehanHkiResource;
use Filament\Actions\CreateAction;
use App\Models\PerolehanHki;
use App\Exports\PerolehanHkiExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPerolehanHkis extends ListRecords
{
    protected static string $resource = PerolehanHkiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PerolehanHkiExport, 'Laporan_Perolehan_HKI.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PerolehanHki::orderBy('tahun_terbit', 'desc')->get();
                    $pdf = Pdf::loadView('exports.perolehan-hki-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena judul HKI bisa panjang
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Perolehan_HKI.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
