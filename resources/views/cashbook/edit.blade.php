@extends('layouts.admin.app')
@section('content')
<div class="container border border-dark-subtle">
    <form action="{{route('cashbooks.update', $cashbook->id)}}" method="POST">
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @csrf
    <h2 class="py-3 text-center">Edit CashBook</h2>
    
    <div class="row py-3">
        <div class="col-md-5 ml-5">
            <div class="form-group">
                <label for="name">Date</label>
                <input type="date" name="date" id="date" value="{{ $cashbook->date }}" class="form-control">

            </div>
            
            
            <div class="form-group">
                <label for="name">Giving Amount</label>
                <input type="number" name="giving_amount" id="giving_amount" value="{{ $cashbook->giving_amount }}" class="form-control">

            </div>
            
            <div class="form-group">
                <label for="name">Remaining Amount</label>
                <input type="number" name="remaining_amount" id="remaining_amount" value="{{ $cashbook->remaining_amount }}" class="form-control">

            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $cashbook->name }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Receiving Amount</label>
                <input type="number" name="receiving_amount" id="receiving_amount" value="{{ $cashbook->receiving_amount }}" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" name="description" id="description" value="{{ $cashbook->description }}" class="form-control">

            </div>
        </div>

    </div>
    <br>
    <button type="submit" value="add" class="btn btn-primary ml-5">Update</button>
</form>

</div>
@endsection
