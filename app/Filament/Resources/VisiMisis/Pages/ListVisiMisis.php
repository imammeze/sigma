<?php

namespace App\Filament\Resources\VisiMisis\Pages;

use App\Filament\Resources\VisiMisis\VisiMisiResource;
use Filament\Actions\CreateAction;
use App\Models\VisiMisi;
use App\Exports\VisiMisiExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListVisiMisis extends ListRecords
{
    protected static string $resource = VisiMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new VisiMisiExport, 'Laporan_Visi_Misi.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = VisiMisi::all();
                    $pdf = Pdf::loadView('exports.visi-misi-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena teks visi-misi biasanya panjang
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Visi_Misi.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
