<?php

namespace App\Filament\Resources\KeberagamanAsalMahasiswas\Pages;

use App\Filament\Resources\KeberagamanAsalMahasiswas\KeberagamanAsalMahasiswaResource;
use Filament\Actions\CreateAction;
use App\Models\KeberagamanAsalMahasiswa;
use App\Exports\KeberagamanAsalMahasiswaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKeberagamanAsalMahasiswas extends ListRecords
{
    protected static string $resource = KeberagamanAsalMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KeberagamanAsalMahasiswaExport, 'Keberagaman_Asal_Mahasiswa.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KeberagamanAsalMahasiswa::all();
                    $pdf = Pdf::loadView('exports.keberagaman-asal-mahasiswa-table', ['records' => $records])
                              ->setPaper('a4', 'portrait'); // Menggunakan Portrait (A4 Berdiri)
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Keberagaman_Asal_Mahasiswa.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
