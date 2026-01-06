<?php

namespace App\Exports;

use App\Models\UnitSpmi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UnitSpmiExport implements FromView, WithTitle, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.unit-spmi-table', [
            'records' => UnitSpmi::all()
        ]);
    }

    public function title(): string
    {
        return 'Unit SPMI';
    }
}