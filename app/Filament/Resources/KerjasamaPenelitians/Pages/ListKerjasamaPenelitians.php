<?php

namespace App\Filament\Resources\KerjasamaPenelitians\Pages;

use App\Filament\Resources\KerjasamaPenelitians\KerjasamaPenelitianResource;
use Filament\Actions\CreateAction;
use App\Models\KerjasamaPenelitian;
use App\Exports\KerjasamaPenelitianExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKerjasamaPenelitians extends ListRecords
{
    protected static string $resource = KerjasamaPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KerjasamaPenelitianExport, 'Kerjasama_Penelitian.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KerjasamaPenelitian::orderBy('ts', 'desc')->get();
                    $pdf = Pdf::loadView('exports.kerjasama-penelitian-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena kolom nominal dana banyak
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Kerjasama_Penelitian.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
