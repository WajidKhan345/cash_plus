<?php

namespace App\Http\Controllers;

use App\Models\Cashbook;
use App\Http\Requests\StoreCashbookRequest;
use App\Http\Requests\UpdateCashbookRequest;

class CashbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cashbooks = Cashbook::latest()->get();
        return view('cashbook.index')->with('cashbooks', $cashbooks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cashbook.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCashbookRequest $request)
    {
        $data = $request->validate([
        'name'=> 'required',
        'description'=> 'required',
        'date'=> 'required',
        'giving_amount'=> 'required',
        'receiving_amount'=> 'required',
        'remaining_amount'=> 'required'
        ]);

        $NewCashbook = Cashbook::create($data);
        return redirect(route('cashbooks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashbook $cashbook)
    {
    
        // dd($cashbook);
        // return view('cashbook.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashbook $cashbook)
    {
        return view('cashbook.edit', compact('cashbook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCashbookRequest $request, Cashbook $cashbook)
    {
        
        $data = $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'date'=> 'required',
            'giving_amount'=> 'required',
            'receiving_amount'=> 'required',
            'remaining_amount'=> 'required'
            ]);

        
            $cashbook->update($data);
            return redirect(route('cashbooks.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashbook $cashbook)
    {
        $cashbook->delete();
        return redirect(route('cashbooks.index'));
    }
}
