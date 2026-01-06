<?php

namespace App\Filament\Resources\KesesuaianBidangKerjas\Pages;

use App\Filament\Resources\KesesuaianBidangKerjas\KesesuaianBidangKerjaResource;
use Filament\Actions\CreateAction;
use App\Models\KesesuaianBidangKerja;
use App\Exports\KesesuaianBidangKerjaExport;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class ListKesesuaianBidangKerjas extends ListRecords
{
    protected static string $resource = KesesuaianBidangKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('exportExcel')
                ->label('Ekspor Excel')
                ->icon('heroicon-o-document-chart-bar')
                ->color('success')
                ->action(fn () => Excel::download(new KesesuaianBidangKerjaExport, 'Kesesuaian_Bidang_Kerja.xlsx')),

            // Export PDF
            Action::make('exportPdf')
                ->label('Ekspor PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('danger')
                ->action(function () {
                    $records = KesesuaianBidangKerja::orderBy('graduation_year_label')->get();
                    $pdf = Pdf::loadView('exports.kesesuaian-bidang-kerja-table', ['records' => $records])
                              ->setPaper('a4', 'landscape'); // Landscape karena kolom cukup banyak
                    
                    return response()->streamDownload(
                        fn () => print($pdf->output()),
                        'Kesesuaian_Bidang_Kerja.pdf'
                    );
                }),
            CreateAction::make(),
        ];
    }
}
