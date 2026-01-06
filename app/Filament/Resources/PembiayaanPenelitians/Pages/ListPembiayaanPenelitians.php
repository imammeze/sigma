<?php

namespace App\Filament\Resources\PembiayaanPenelitians\Pages;

use App\Filament\Resources\PembiayaanPenelitians\PembiayaanPenelitianResource;
use Filament\Actions\CreateAction;
use App\Models\PembiayaanPenelitian;
use App\Exports\PembiayaanPenelitianExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPembiayaanPenelitians extends ListRecords
{
    protected static string $resource = PembiayaanPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PembiayaanPenelitianExport, 'Pembiayaan_Penelitian_DTPR.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PembiayaanPenelitian::orderBy('nama_dtpr')->get();
                    $pdf = Pdf::loadView('exports.pembiayaan-penelitian-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena kolom sangat banyak
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Pembiayaan_Penelitian_DTPR.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
