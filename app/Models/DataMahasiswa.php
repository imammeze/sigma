<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $appends = ['ts_label'];
    protected $fillable = [
        'ts_label',
        'capacity',
        'applicants_total',
        'applicants_affirmation',
        'applicants_special_needs',
        'applicants_accepted',
        'new_regular_accepted',
        'new_regular_affirmation',
        'new_regular_special_needs',
        'new_rpl_accepted',
        'new_rpl_affirmation',
        'new_rpl_special_needs',
        'active_regular_accepted',
        'active_regular_affirmation',
        'active_regular_special_needs',
        'active_rpl_accepted',
        'active_rpl_affirmation',
        'active_rpl_special_needs',
    ];

    

public function getTsLabelAttribute()
{
    $tahunSekarang = date('Y');
    $selisih = $tahunSekarang - $this->tahun;

    if ($selisih == 0) return 'TS';
    return 'TS-' . $selisih;
}
}