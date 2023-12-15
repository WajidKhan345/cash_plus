@extends('layouts.admin.app')
@section('content')
  
<div class="card">
  <div class="card-header text-center bg-primary text-white border-success"><h4>Update Factory</h4></div>
  <div class="card-body">
      <form action="{{route('factories.update', ['factory' => $factory])}}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        @method('put')
        <label>Owner Name</label></br>
        <input type="text" name="factory_owner" id="factory_owner" class="form-control" value="{{ $factory-> factory_owner}}"></br>
        <label>Factory Name</label></br>
        <input type="text" name="factory_name" id="factory_name" class="form-control" value="{{ $factory-> factory_name}}"></br>
        <label>Contact</label></br> 
        <input type="text" name="contact" id="contact" class="form-control" value="{{ $factory-> contact}}"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" value="{{ $factory-> address}}"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
    
  </div>
</div>
@endsection
