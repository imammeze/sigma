<?php

namespace App\Filament\Resources\KerjasamaPkms\Pages;

use App\Filament\Resources\KerjasamaPkms\KerjasamaPkmResource;
use Filament\Actions\CreateAction;
use App\Models\KerjasamaPkm;
use App\Exports\KerjasamaPkmExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKerjasamaPkms extends ListRecords
{
    protected static string $resource = KerjasamaPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KerjasamaPkmExport, 'Laporan_Kerjasama_PKM.xlsx')),

            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KerjasamaPkm::orderBy('ts', 'desc')->get();
                    $pdf = Pdf::loadView('exports.kerjasama-pkm-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Kerjasama_PKM.pdf'
                    );
                }),
            CreateAction::make()
             ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]), 
        ];
    }
}