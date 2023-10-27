<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'max_deposit',
        'min_deposit',
        'min-returns',
        'max_returns',
        'gift_bonus',
        'duration'
    ];

    protected $table = 'plans';
}