<?php

namespace App\Filament\Resources\KualifikasiTendiks\Pages;

use App\Filament\Resources\KualifikasiTendiks\KualifikasiTendikResource;
use Filament\Actions\CreateAction;
use App\Models\KualifikasiTendik;
use App\Exports\KualifikasiTendikExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKualifikasiTendiks extends ListRecords
{
    protected static string $resource = KualifikasiTendikResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KualifikasiTendikExport, 'Kualifikasi_Tendik.xlsx')),

            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KualifikasiTendik::all();
                    $pdf = Pdf::loadView('exports.kualifikasi-tendik-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Gunakan Landscape karena kolom banyak
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Kualifikasi_Tendik.pdf'
                    );
                }),
            CreateAction::make()
             ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]), 
        ];
    }
}