@extends('driver.index')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header text-center bg-primary text-white border-success"><h2>Add New Drivers</h2></div>
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
        <input type="submit" value="Add" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
@endsection