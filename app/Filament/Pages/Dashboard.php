<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\DayaTampungChart;
use App\Filament\Widgets\RerataBebanDtprChart;
use App\Exports\LaporanAkreditasiExport;
use Filament\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;

class Dashboard extends BaseDashboard
{
    
    public function getColumns(): int | array
    {
        return [
            'default' => 1,
            'md' => 2,
            'lg' => 2, // Diubah dari 12 menjadi 2 agar chart memenuhi layar
        ];
    }

    /**
     * Mendaftarkan widget yang akan muncul di dashboard
     */
    public function getWidgets(): array
    {
        return [
            // Urutan penulisan di sini menentukan urutan tampil
            \App\Filament\Widgets\StatsDashboard::class,
            DayaTampungChart::class,
            RerataBebanDtprChart::class,
        ];
    }

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Action::make('downloadFullReport')
    //             ->label('Download Laporan Akreditasi (Excel)')
    //             ->icon('heroicon-o-document-arrow-down')
    //             ->color('success')
    //             ->action(function () {
    //                 return Excel::download(
    //                     new LaporanAkreditasiExport(), 
    //                     'Laporan_Akreditasi_Komprehensif_' . now()->format('Y-m-d') . '.xlsx'
    //                 );
    //             }),
                
    //         Action::make('downloadPdfSummary')
    //             ->label('Download Ringkasan PDF')
    //             ->icon('heroicon-o-printer')
    //             ->color('danger')
    //             ->url(fn() => route('pdf.laporan-ringkas')) 
    //             ->openUrlInNewTab(),
    //     ];
    // }
}