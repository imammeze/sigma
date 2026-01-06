<?php

namespace App\Filament\Resources\IsiPembelajarans\Pages;

use App\Filament\Resources\IsiPembelajarans\IsiPembelajaranResource;
use Filament\Actions\CreateAction;
use App\Models\IsiPembelajaran;
use App\Exports\IsiPembelajaranExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
class ListIsiPembelajarans extends ListRecords
{
    protected static string $resource = IsiPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new IsiPembelajaranExport, 'Isi_Pembelajaran.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = IsiPembelajaran::all();
                    $pdf = Pdf::loadView('exports.isi-pembelajaran-table', ['records' => $records])
                              ->setPaper('a4', 'portrait');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Isi_Pembelajaran.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
