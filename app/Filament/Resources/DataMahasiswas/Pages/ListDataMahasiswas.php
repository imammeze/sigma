<?php

namespace App\Filament\Resources\DataMahasiswas\Pages;

use App\Filament\Resources\DataMahasiswas\DataMahasiswaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataMahasiswaExport;
use Barryvdh\DomPDF\Facade\Pdf;

class ListDataMahasiswas extends ListRecords
{
    protected static string $resource = DataMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
            ->label('Ekspor Excel')
            ->icon('heroicon-o-document-chart-bar')
            ->color('success')
            ->action(function() {
                $data = $this->getViewData(); 
                return Excel::download(
                    new DataMahasiswaExport($data['records'], $data['totals']), 
                    'Data_Mahasiswa_Tabel_2A1.xlsx'
                );
            }),

        // 2. Ekspor PDF
        Action::make('exportPdf')
            ->label('Ekspor PDF')
            ->icon('heroicon-o-document-arrow-down')
            ->color('danger')
            ->action(function () {
                $data = $this->getViewData();
                $pdf = Pdf::loadView('exports.data-mahasiswa', $data)
                          ->setPaper('a4', 'landscape');
                
                return response()->streamDownload(
                    fn () => print($pdf->output()),
                    'Data_Mahasiswa_Tabel_2A1.pdf'
                );
            }),
            CreateAction::make(),
        ];
    }
}
