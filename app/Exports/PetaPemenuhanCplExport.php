<?php

namespace App\Exports;

use App\Models\PetaPemenuhanCpl;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PetaPemenuhanCplExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        // Load relasi agar performa ekspor cepat (Eager Loading)
        $records = PetaPemenuhanCpl::with([
            'semester1Course', 'semester2Course', 'semester3Course', 'semester4Course',
            'semester5Course', 'semester6Course', 'semester7Course', 'semester8Course'
        ])->get();

        return view('exports.peta-pemenuhan-cpl-table', [
            'records' => $records
        ]);
    }

    public function title(): string
    {
        return 'Peta Pemenuhan CPL';
    }
}