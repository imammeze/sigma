<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KepuasanPenggunaLulusan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'jenis_kemampuan',
        'very_good',
        'good',
        'fair',
        'poor',
        'follow_up_plan',
    ];
}