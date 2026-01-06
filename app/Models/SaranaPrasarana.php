<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaranaPrasarana extends Model
{
    protected $fillable = [
        'nama_prasarana',
        'daya_tampung',
        'luas_ruang',
        'status',
        'lisensi',
        'perangkat',
        'link_bukti',
    ];

    protected $casts = [
        'daya_tampung' => 'integer',
        'luas_ruang'   => 'integer',
    ];
}