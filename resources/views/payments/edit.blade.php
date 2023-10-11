@extends('payments.master')
@section('content')
    <div class="container-fluid bg-success text-light py-1 ">
        <header class="text-center">
            <h1 class="display-10"> Edit Payments Entry</h1>
        </header>
    </div>
    <section class="container my-2 w-100  text-black p-2 border border-primary rounded">

        <form class="row g-3 p-2" method="post" action="{{ route('sales.payments.update')}}">
            @csrf
            <input type="hidden" name="payment_id" value="{{$payment->id}}">
            <div class="col-md-4">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$payment->date}}">
            </div>
            <div class="col-md-3">
                <label for="inputAmount" class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" id="inputAmount" value="{{$payment->amount}}">
            </div>
            
            
            <div class="col-md-6">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="inputDescription" value="{{$payment->description}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-3">Update Payment</button>
            </div>
        </form>


    </section>
@endsection
