<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Adduser;

class AdduserController extends Controller
{
    //
    public function index(){
        $adduser = Adduser::latest()->get();
        return view('users.index', ['users' => $adduser]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:addusers',
            'role' => 'required'
        ]);
        
        $newAdduser = Adduser::create($data);
        return redirect(route('users.index'));


    }
}
