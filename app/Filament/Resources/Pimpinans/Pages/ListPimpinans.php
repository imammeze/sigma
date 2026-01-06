<?php

namespace App\Filament\Resources\Pimpinans\Pages;

use App\Filament\Resources\Pimpinans\PimpinanResource;
use App\Models\Pimpinan;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Exports\PimpinanExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPimpinans extends ListRecords
{
    protected static string $resource = PimpinanResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new PimpinanExport, 'Daftar_Pimpinan.xlsx')),

            // Tombol Ekspor PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = Pimpinan::all();
                    $pdf = Pdf::loadView('exports.pimpinan-table', ['records' => $records])
                              ->setPaper('a4', 'portrait'); // Menggunakan Portrait (berdiri)
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Daftar_Pimpinan.pdf'
                    );
                }),

            CreateAction::make()
            ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]), 
        ];
    }
}