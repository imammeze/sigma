<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranaPrasaranaPkm extends Model
{
    protected $fillable = [
        'nama_prasarana',
        'daya_tampung',
        'luas_ruang',
        'status',
        'lisensi',
        'perangkat',
        'bukti_files',
    ];

    protected $casts = [
        'daya_tampung' => 'integer',
        'luas_ruang'   => 'integer',
        'bukti_files'  => 'array',   
    ];
}