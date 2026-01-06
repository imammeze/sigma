<?php

namespace App\Filament\Resources\PembiayaanPkms\Pages;

use App\Filament\Resources\PembiayaanPkms\PembiayaanPkmResource;
use Filament\Actions\CreateAction;
use App\Models\PembiayaanPkm;
use App\Exports\PembiayaanPkmExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPembiayaanPkms extends ListRecords
{
    protected static string $resource = PembiayaanPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PembiayaanPkmExport, 'Laporan_Pembiayaan_PKM.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PembiayaanPkm::orderBy('nama_dtpr')->get();
                    $pdf = Pdf::loadView('exports.pembiayaan-pkm-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Pembiayaan_PKM.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
