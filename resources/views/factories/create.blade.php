@extends('layouts.admin.app')
@section('content')
  
<div class="card">
  <div class="card-header text-center bg-primary text-white border-success"><h4>Add New Factory</h4></div>
  <div class="card-body">
    
    

      <form action="{{route('factories.store')}}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        @method('post')
        <label>Owner Name</label></br>
        <input type="text" name="factory_owner" id="factory_owner" class="form-control"></br>
        <label>Factory Name</label></br>
        <input type="text" name="factory_name" id="factory_name" class="form-control"></br>
        <label>Contact</label></br>
        <input type="text" name="contact" id="contact" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Add" class="btn btn-primary"></br>
    </form>
    
  </div>
</div>
@endsection