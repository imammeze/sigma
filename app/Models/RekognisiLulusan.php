<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RekognisiLulusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'recognition_source',
        'recognition_type',
        'ts_3',
        'ts_2',
        'ts_1',
        'evidence_link',
        'sort_order',
    ];
}