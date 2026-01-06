<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    protected $table = 'pimpinans';

    protected $guarded = [];

    protected $fillable = [
        'unit_kerja',
        'nama',
        'periode',
        'pendidikan_terakhir',
        'jabatan',
        'tupoksi',
    ];
}