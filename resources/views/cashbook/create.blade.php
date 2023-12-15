@extends('layouts.admin.app')
@section('content')
<div class="container border border-dark-subtle">
    <form action="{{route('cashbooks.store')}}" method="POST">
        @csrf
    <h2 class="py-3 text-center">Create CashBook</h2>
    
    <div class="row py-3">
        <div class="col-md-5 ml-5">
            <div class="form-group">
                <label for="name">Date</label>
                <input type="date" name="date" class="form-control">

            </div>
            
            
            <div class="form-group">
                <label for="name">Giving Amount</label>
                <input type="number" name="giving_amount" class="form-control">

            </div>
            
            <div class="form-group">
                <label for="name">Remaining Amount</label>
                <input type="number" name="remaining_amount" class="form-control">

            </div>
        </div>
        <div class="col-md-5 ml-5">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Receiving Amount</label>
                <input type="number" name="receiving_amount" class="form-control">

            </div>
            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" name="description" class="form-control">

            </div>
        </div>

    </div>
    <br>
    <button type="submit" value="add" class="btn btn-primary ml-5">Add New</button>
</form>

</div>
@endsection
