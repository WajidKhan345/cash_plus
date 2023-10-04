<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Factory;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
    public function master(){
        $sales = Sale::all();
        return view('sales.show', ['sales' => $sales]);
    }

    public function create(){
        $drivers  = Driver::all();
        $factories = Factory::all();
        return view('sales.create', compact(['drivers', 'factories']));
    }

    public function store(Request $request){
        $data = $request->validate([
            'stone_type' => 'required',
            'drang_commission' => 'required',
            'weight' => 'required',
            'rate' => 'required',
            'total_amount' => 'required',
            'driver_prize' => 'required',
            'mineral' => 'required',
            'gov_tax' => 'required',
            'agent_amount' => 'required',
            'safi_amount' => 'required',
            'recieved_amount' => 'required',
            'discount' => 'required',
            'extra_amount' => 'required',
            'Description'=> 'nullable',
            'driver_id' =>'required',
            'factory_id' => 'required',
            'date' => 'required'
        ]);

        
        $newSale = Sale::create($data);
        return redirect(route('sales.master'));

    }
    public function edit(Sale $sale){
        dd($sale);
    }

}
