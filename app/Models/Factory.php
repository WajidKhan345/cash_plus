<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;
    protected $fillable = [
        'factory_owner',
        'factory_name',
        'contact',
        'address'
    ];
    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
