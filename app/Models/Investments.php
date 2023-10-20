<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'capital',
        'plan',
    ];

    protected $table = 'investments';
}