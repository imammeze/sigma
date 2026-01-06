<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IsiPembelajaran extends Model
{
    protected $fillable = [
        'mata_kuliah',
        'sks',
        'semester',
        'profil_lulusan',
    ];

    protected $casts = [
        'sks' => 'integer',
    ];
}