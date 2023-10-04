@extends('driver.index')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header text-center bg-primary text-white border-success"><h2>Edit Driver</h2></div>
  <div class="card-body">
       
      <form action="{{route('driver.update', ['driver' => $driver])}}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        @method('put')
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$driver->name}}"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{$driver->phone_number}}"></br>
        <label>Vehicle Number</label></br>
        <input type="text" name="vehicle_number" id="vehicle_number" class="form-control" value="{{$driver->vehicle_number}}"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
@endsection