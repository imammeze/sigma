<?php

namespace App\Filament\Resources\DiseminasiPkms\Pages;

use App\Filament\Resources\DiseminasiPkms\DiseminasiPkmResource;
use Filament\Actions\CreateAction;
use App\Models\DiseminasiPkm;
use App\Exports\DiseminasiPkmExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListDiseminasiPkms extends ListRecords
{
    protected static string $resource = DiseminasiPkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new DiseminasiPkmExport, 'Laporan_Diseminasi_PKM.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = DiseminasiPkm::orderBy('waktu', 'desc')->get();
                    $pdf = Pdf::loadView('exports.diseminasi-pkm-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Diseminasi_PKM.pdf'
                    );
                }),
            CreateAction::make()
             ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]), 
        ];
    }
}