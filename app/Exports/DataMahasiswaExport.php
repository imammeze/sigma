<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataMahasiswaExport implements FromView, WithTitle, ShouldAutoSize
{
    protected $records;
    protected $totals;

    public function __construct($records = null, $totals = null)
    {
        $this->records = $records ?? \App\Models\DataMahasiswa::all();
        $this->totals = $totals ?? $this->calculateTotals($this->records);
    }

    protected function calculateTotals($records)
{
    $fields = [
        'capacity', 'applicants_total', 'applicants_affirmation',
        'applicants_special_needs', 'new_regular_accepted',
        'new_regular_affirmation', 'new_regular_special_needs',
        'new_rpl_accepted', 'new_rpl_affirmation',
        'new_rpl_special_needs', 'active_regular_accepted',
        'active_regular_affirmation', 'active_regular_special_needs',
        'active_rpl_accepted', 'active_rpl_affirmation',
        'active_rpl_special_needs',
    ];

    $totals = [];
    
    // Bungkus $records dengan collect() untuk memastikan sum() bisa dipanggil
    $collection = collect($records);

    foreach ($fields as $field) {
        $totals[] = $collection->sum($field);
    }

    return $totals;
}

    public function view(): View
    {
        return view('exports.data-mahasiswa', [
            'records' => $this->records,
            'totals' => $this->totals,
            'isExcel' => true, // Flag untuk membedakan styling jika perlu
        ]);
    }

    public function title(): string
    {
        return 'Data Mahasiswa';
    }
}