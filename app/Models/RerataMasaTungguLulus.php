<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RerataMasaTungguLulus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'graduation_year_label',
        'total_graduates',
        'tracked_graduates',
        'avg_waiting_time',
        'response_rate',  
    ];

    protected $cast = [
        'total_graduates' => 'integer',
        'tracked_graduates' => 'integer',
        'avg_waiting_time' => 'decimal:2',
        'response_rate' => 'decimal:2',
    ];
}