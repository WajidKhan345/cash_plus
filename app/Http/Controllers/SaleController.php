<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Factory;
use App\Models\Payment;
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
        Payment::create([
            'sale_id' => $newSale->id,
            'amount' => $request->recieved_amount,
            'date' => $request->date,
            'description' => 'First Payment'
        ]);
        
        return redirect(route('sales.master'));

    }
    public function edit(Sale $sale){
        $drivers  = Driver::all();
        $factories = Factory::all();
        return view('sales.edit', compact('sale', 'drivers', 'factories'));

    }
    public function update(Sale $sale, Request $request){
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
        $sale->update($data);
        return redirect(route('sales.master'))->with('success', 'Sale Updated Successfully');
    }
    public function delete(Sale $sale){
        $sale->delete();
        return redirect(route('sales.master'))->with('success', 'Sale Deleted Successfully');

    }

    public function payment(Sale $sale) {
        return view('payments.create', compact('sale'));
    }

    public function storePayment(Request $request) {
        // dd($request->all());

        $data = $request->validate([
            'date' => 'required',
            'sale_id' => 'required',
            'amount' => 'required',
            'description' => 'nullable'
        ]);

        
        $newPayment = Payment::create($data);
        return redirect(route('sales.master'));
    }
    public function payments(Sale $sale){
        $sale = $sale->load('payments');
        return view('payments.show', compact('sale'));
    }

    

}
