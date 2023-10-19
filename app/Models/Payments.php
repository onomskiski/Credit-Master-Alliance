<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'sender',
        'amount',
        'method',
        'entry_id'
    ];
    protected $table = "payments";
}
