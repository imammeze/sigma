<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KualifikasiTendik extends Model
{
    protected $guarded = [];
    
    protected $fillable = [
        'category', 'jenis_tendik', 'other_name',
        's3','s2','s1','d4','d3','d2','d1','sma',
        'unit_kerja', 'ijazah_files',
    ];

    protected $casts = [
        's3' => 'integer', 's2' => 'integer', 's1' => 'integer',
        'd4' => 'integer', 'd3' => 'integer', 'd2' => 'integer', 'd1' => 'integer',
        'sma' => 'integer',
        'ijazah_files' => 'array',
    ];
}