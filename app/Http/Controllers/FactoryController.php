<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    //
    public function master(){
        $factory = Factory::all();
        return view('factories.show', ['factories' => $factory]);
    }
    public function create(){
        return view('factories.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'factory_owner' => 'required',
            'factory_name'=> 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);

        $newFactory = Factory::create($data);
        return redirect(route('factories.master'));

    }
    public function edit(Factory $factory){
        return view('factories.edit', ['factory' => $factory]);
    }
    public function update(Factory $factory, Request $request){
        $data = $request->validate([
            'factory_owner' => 'required',
            'factory_name'=> 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);
        $factory->update($data);

        return redirect(route('factories.master'))->with('success', 'Factory Updated Successfully');
    }
    public function delete(Factory $factory){
        $factory->delete();
        return redirect(route('factories.master'))->with('success', 'Factory Deleted Successfully');
    }

}