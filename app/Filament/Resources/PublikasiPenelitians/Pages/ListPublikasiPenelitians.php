<?php

namespace App\Filament\Resources\PublikasiPenelitians\Pages;

use App\Filament\Resources\PublikasiPenelitians\PublikasiPenelitianResource;
use Filament\Actions\CreateAction;
use App\Models\PublikasiPenelitian;
use App\Exports\PublikasiPenelitianExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPublikasiPenelitians extends ListRecords
{
    protected static string $resource = PublikasiPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PublikasiPenelitianExport, 'Publikasi_Penelitian.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = PublikasiPenelitian::orderBy('tahun_terbit', 'desc')->get();
                    $pdf = Pdf::loadView('exports.publikasi-penelitian-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena judul penelitian panjang
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Publikasi_Penelitian.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
