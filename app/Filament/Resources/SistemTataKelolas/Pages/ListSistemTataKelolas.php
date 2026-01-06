<?php

namespace App\Filament\Resources\SistemTataKelolas\Pages;

use App\Filament\Resources\SistemTataKelolas\SistemTataKelolaResource;
use Filament\Actions\CreateAction;
use App\Models\SistemTataKelola;
use App\Exports\SistemTataKelolaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListSistemTataKelolas extends ListRecords
{
    protected static string $resource = SistemTataKelolaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new SistemTataKelolaExport, 'Laporan_Sistem_Tata_Kelola.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = SistemTataKelola::all();
                    $pdf = Pdf::loadView('exports.sistem-tata-kelola-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape agar kolom Nama SI & Link Bukti leluasa
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Sistem_Tata_Kelola.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
