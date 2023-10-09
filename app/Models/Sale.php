<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable =[
    'stone_type',
    'drang_commission',
    'weight',
    'rate',
    'total_amount',
    'driver_prize',
    'mineral',
    'gov_tax',
    'agent_amount',
    'safi_amount',
    'recieved_amount',
    'discount',
    'extra_amount',
    'Description',
    'driver_id',
    'factory_id',
    'date'
    ];

    public function factory() {
        return $this->belongsTo(Factory::class);
    }
    public function driver() {
        return $this->belongsTo(Driver::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }

}
