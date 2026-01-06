<?php

namespace App\Filament\Resources\KepuasanPenggunaLulusans\Pages;

use App\Filament\Resources\KepuasanPenggunaLulusans\KepuasanPenggunaLulusanResource;
use Filament\Actions\CreateAction;
use App\Models\KepuasanPenggunaLulusan;
use App\Exports\KepuasanPenggunaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKepuasanPenggunaLulusans extends ListRecords
{
    protected static string $resource = KepuasanPenggunaLulusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KepuasanPenggunaExport, 'Kepuasan_Pengguna_Lulusan.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KepuasanPenggunaLulusan::all();
                    $pdf = Pdf::loadView('exports.kepuasan-pengguna-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena ada kolom teks rencana tindak lanjut
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Kepuasan_Pengguna_Lulusan.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
