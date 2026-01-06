<?php

namespace App\Filament\Resources\KondisiMahasiswas\Pages;

use App\Filament\Resources\KondisiMahasiswas\KondisiMahasiswaResource;
use Filament\Actions\CreateAction;
use App\Models\KondisiMahasiswa;
use App\Exports\KondisiMahasiswaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKondisiMahasiswas extends ListRecords
{
    protected static string $resource = KondisiMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KondisiMahasiswaExport, 'Kondisi_Mahasiswa.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KondisiMahasiswa::all();
                    $pdf = Pdf::loadView('exports.kondisi-mahasiswa-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Kondisi_Mahasiswa.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
