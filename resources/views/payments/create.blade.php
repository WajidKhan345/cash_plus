@extends('payments.master')
@section('content')
    <div class="container-fluid bg-success text-light py-1 ">
        <header class="text-center">
            <h1 class="display-10">Payments Entry
                <a type="button" href="{{ route('sales.payments', $sale->id) }}"
                    title="Payments" class="btn btn-info" style="float: right; margin-right: 20px;">
                    Payments list
                </a>
                <a type="button" href="{{ route('sales.master', $sale->id) }}"
                    title="Payments" class="btn btn-info" style="float: left; margin-left: 20px;">
                    Home
                </a>
            </h1>
        </header>
    </div>
    <div class="p-3">
        
    </div>
    <section class="container my-2 w-100  text-black p-2 border border-primary rounded">

        <form class="row g-3 p-2" method="post" action="{{route('sales.payment.store')}}">
            @csrf
            <input type="hidden" name="sale_id" value="{{$sale->id}}">
            <div class="col-md-4">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="col-md-3">
                <label for="inputAmount" class="form-label">Amount</label>
                <input type="number" class="form-control" name="amount" id="inputAmount">
            </div>
            
            
            <div class="col-md-6">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="inputDescription">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-3">Add New Payment</button>
            </div>
        </form>


    </section>
@endsection
