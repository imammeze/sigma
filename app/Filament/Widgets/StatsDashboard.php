<?php

namespace App\Filament\Widgets;

use App\Models\Pimpinan;
use App\Models\PenggunaanDana;
use App\Models\PembiayaanPenelitian;
use App\Models\PembiayaanPkm;
use App\Models\RerataMasaTungguLulus;
use App\Models\PerolehanHki;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends StatsOverviewWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // 1. Logika Keuangan
        $ts2 = (float) PenggunaanDana::sum('ts_2');
        $ts1 = (float) PenggunaanDana::sum('ts_1');
        $ts  = (float) PenggunaanDana::sum('ts');
        $grandTotalDana = $ts2 + $ts1 + $ts;

        // 2. Logika Masa Tunggu & Tracer Study
        // Mengambil rata-rata dari kolom avg_waiting_time di semua record
        $avgMasaTunggu = RerataMasaTungguLulus::avg('avg_waiting_time') ?? 0;
        $avgResponseRate = RerataMasaTungguLulus::avg('response_rate') ?? 0;

        // 3. Logika Produktivitas Penelitian & PKM
        $totalPenelitian = PembiayaanPenelitian::count();
        $totalPkm = PembiayaanPkm::count();

        // 4. Logika Luaran HKI
        $totalHki = PerolehanHki::count();

        $formatRupiah = fn (float $v) => 'Rp ' . number_format($v, 0, ',', '.');

        return [
            // Row 1: Kelembagaan & Keuangan
            Stat::make('Jumlah Pimpinan', Pimpinan::count() . ' Orang')
                ->description('Total pimpinan terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Stat::make('Total Penggunaan Dana', $formatRupiah($grandTotalDana))
                ->description('Akumulasi TS-2 s/d TS')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('primary'),

            // Row 2: Kualitas Lulusan (Tracer Study)
            Stat::make('Rerata Masa Tunggu', number_format($avgMasaTunggu, 1) . ' Bulan')
                ->description('Waktu tunggu lulusan kerja')
                ->descriptionIcon('heroicon-m-clock')
                ->color($avgMasaTunggu <= 6 ? 'success' : 'warning'),

            Stat::make('Response Rate Tracer', number_format($avgResponseRate, 1) . '%')
                ->description('Tingkat pengisian tracer study')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color($avgResponseRate >= 50 ? 'success' : 'danger'),

            // Row 3: Produktivitas & Luaran
            Stat::make('Produktivitas Riset', ($totalPenelitian + $totalPkm) . ' Judul')
                ->description($totalPenelitian . ' Penelitian | ' . $totalPkm . ' PKM')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('info'),

            Stat::make('Total Perolehan HKI', $totalHki . ' Sertifikat')
                ->description('Hak Kekayaan Intelektual terdaftar')
                ->descriptionIcon('heroicon-m-shield-check')
                ->color('success'),
        ];
    }
}