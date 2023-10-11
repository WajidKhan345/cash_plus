<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\Sale;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
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
    public function edit(Payment $payment){
        
        return view('payments.edit', compact('payment'));
    }
    public function update(Request $request){
        $data = $request->validate([
            'date' => 'required',
            'payment_id' => 'required',
            'amount' => 'required',
            'description' => 'nullable'
        ]);
        $payment = Payment::where('id', $data['payment_id'])->first();
        
        unset($data['payment_id']);
        
        $payment->update($data);

        return redirect(route('sales.payments', $payment->sale_id))->with('success', 'Payments Upadated Successfully');

    }
}
