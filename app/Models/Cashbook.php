<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'date',
        'giving_amount',
        'receiving_amount',
        'remaining_amount'
    ];
}
