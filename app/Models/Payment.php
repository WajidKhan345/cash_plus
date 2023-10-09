<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =[
        'amount',
        'sale_id',
        'description',
        'date'
        ];
    
        public function sale() {
            return $this->belongsTo(Sale::class);
        }
}
