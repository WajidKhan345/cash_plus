<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    //

    public function index(){
        $drivers = Driver::all();
        return view('driver.show', ['drivers' => $drivers]);
    }
    public function create(){
        return view('driver.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'phone_number' =>'required',
            'vehicle_number' => 'required'
        ]);

        $newDriver = Driver::create($data);
        return redirect(route('driver.index'));
    }
    public function edit(Driver $driver ){
        return view('driver.edit', ['driver' => $driver]);

    }
    public function update(Driver $driver, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'phone_number' =>'required',
            'vehicle_number' => 'required'
        ]);

        $driver->update($data);
        return redirect(route('driver.index'))->with('success', 'Driver Updated Successfully');


    }

    public function delete(Driver $driver){
        $driver->delete();
        return redirect(route('driver.index'))->with('success', 'Driver Deleted Successfully');
    }
}
