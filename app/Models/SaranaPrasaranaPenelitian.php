<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranaPrasaranaPenelitian extends Model
{
    protected $fillable = [
        'nama_prasarana',
        'daya_tampung',
        'luas_ruang',
        'status',
        'lisensi',
        'perangkat',
        'bukti_file',
    ];

    protected $casts = [
        'daya_tampung' => 'integer',
        'luas_ruang'   => 'integer',
    ];
}