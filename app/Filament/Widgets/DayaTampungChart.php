<?php

namespace App\Filament\Widgets;

use App\Models\DataMahasiswa;
use Filament\Widgets\ChartWidget;

class DayaTampungChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected ?string $heading = 'Daya Tampung TS-3, TS-2, TS-1, dan TS';
    
    // Menentukan tinggi grafik agar pas di dashboard/page
    protected ?string $maxHeight = '300px';

    protected function getData(): array
    {
        // Mengambil data dengan urutan TS yang benar
        $data = DataMahasiswa::query()
            ->orderByRaw("FIELD(ts_label, 'TS-3','TS-2','TS-1','TS')")
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Daya Tampung',
                    'data' => $data->pluck('capacity')->toArray(),
                    'backgroundColor' => [
                        '#3b82f6', // Biru (TS-3)
                        '#ef4444', // Merah (TS-2)
                        '#f59e0b', // Kuning (TS-1)
                        '#10b981', // Hijau (TS)
                    ],
                    'borderColor' => 'transparent',
                    'borderWidth' => 0,
                ],
            ],
            'labels' => $data->pluck('ts_label')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false, // Kita matikan karena label sudah ada di bawah bar
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'grid' => [
                        'display' => true,
                    ],
                ],
                'x' => [
                    'grid' => [
                        'display' => false,
                    ],
                ],
            ],
        ];
    }
}