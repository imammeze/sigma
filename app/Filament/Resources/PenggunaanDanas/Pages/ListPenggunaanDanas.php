<?php

namespace App\Filament\Resources\PenggunaanDanas\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PenggunaanDanas\PenggunaanDanaResource;
use App\Models\PenggunaanDana;
use App\Exports\PenggunaanDanaExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListPenggunaanDanas extends ListRecords
{
    protected static string $resource = PenggunaanDanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->extraAttributes([
                'class' => ' text-black',
                ])
                ->action(fn () => Excel::download(new PenggunaanDanaExport, 'Laporan_Penggunaan_Dana.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ])
                ->action(function () {
                    $records = PenggunaanDana::orderBy('category')->get();
                    $pdf = Pdf::loadView('exports.penggunaan-dana-table', ['records' => $records])
                              ->setPaper('a4', 'landscape');
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Laporan_Penggunaan_Dana.pdf'
                    );
                }),

            CreateAction::make()
            ->extraAttributes([
                'class' => 'bg-[#b3232b] text-white hover:bg-red-800',
            ]),
        ];
    }
}