@extends('layouts.admin.app')
@section('content')
  
<div class="card">
  <div class=" text-center bg-secondary text-white border-success"><h4>Add New Drivers</h4></div>
  <div class="card-body">
    
    

      <form action="{{route('driver.store')}}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone_number" id="phone_number" class="form-control"></br>
        <label>Vehicle Number</label></br>
        <input type="text" name="vehicle_number" id="vehicle_number" class="form-control"></br>
        <input type="submit" value="Add" class="btn btn-primary"></br>
    </form>
    
  </div>
</div>
@endsection