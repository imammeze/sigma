<?php

namespace App\Filament\Widgets;

use App\Models\RerataBebanDtpr;
use Filament\Widgets\ChartWidget;

class RerataBebanDtprChart extends ChartWidget
{
    protected static ?int $sort = 3;
    protected ?string $heading = 'Rata-rata Beban DTPR per semester (EWMP) pada TS';

    protected function getData(): array
    {
        // Mengambil rata-rata dari database
        $data = RerataBebanDtpr::query()
            ->selectRaw('
                AVG(sks_ps_sendiri) as ps_sendiri,
                AVG(sks_ps_lain_pt_sendiri) as ps_lain_pt_sendiri,
                AVG(sks_pt_lain) as pt_lain,
                AVG(sks_penelitian) as penelitian,
                AVG(sks_pengabdian) as pengabdian,
                AVG(sks_manajemen_pt_sendiri) as manajemen_sendiri,
                AVG(sks_manajemen_pt_lain) as manajemen_lain
            ')
            ->first();

        return [
            'datasets' => [
                [
                    'label' => 'Rata-rata SKS',
                    'data' => [
                        round($data->ps_sendiri ?? 0, 2),
                        round($data->ps_lain_pt_sendiri ?? 0, 2),
                        round($data->pt_lain ?? 0, 2),
                        round($data->penelitian ?? 0, 2),
                        round($data->pengabdian ?? 0, 2),
                        round($data->manajemen_sendiri ?? 0, 2),
                        round($data->manajemen_lain ?? 0, 2),
                    ],
                    'backgroundColor' => [
                        '#3b82f6', // Biru
                        '#ef4444', // Merah
                        '#f59e0b', // Kuning
                        '#10b981', // Hijau
                        '#f97316', // Orange
                        '#06b6d4', // Cyan
                        '#6366f1', // Indigo
                    ],
                ],
            ],
            'labels' => [
                'PS Sendiri', 
                'PS Lain, PT Sendiri', 
                'PT Lain', 
                'SKS Penelitian', 
                'SKS Pengabdian', 
                'Manajemen PT Sendiri', 
                'Manajemen PT Lain'
            ],
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
                    'display' => false, 
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'suggestedMax' => 6.00,
                ],
            ],
        ];
    }
}