@extends('sales.master')
@section('content')
    <div class="container-fluid bg-dark text-light py-1 ">
        <header class="text-center">
            <h1 class="display-10">Sales Dashboard</h1>
        </header>
    </div>
    <section class="container my-2 w-100 bg-info text-black p-2">

        <form class="row g-3 p-2" method="post" action="{{route('sales.store')}}">
            @csrf
            @method('post')
            <div class="col-md-4">
                <label for="inputFactory" class="form-label">Factory Name</label>
                <select id="inputFactory" class="form-select" name="factory_id">
                    <option selected>Choose...</option>
                    @foreach($factories as $factory)
                    <option value="{{$factory->id}}">{{$factory->factory_owner}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputDriver" class="form-label">Driver Name</label>
                <select id="inputDriver" class="form-select" name="driver_id">
                    <option selected>Choose...</option>
                    @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 p-3">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date">
            </div>
            <div class="col-md-6">
                <label for="inputStoneType" class="form-label">Stone Type</label>
                <input type="text" class="form-control" name="stone_type" id="inputStoneType">
            </div>
            <div class="col-md-6">
                <label for="inputDrang" class="form-label">Drang Commission</label>
                <input type="text" class="form-control" name="drang_commission" id="inputDrang">
            </div>
            <div class="col-md-6">
                <label for="inputWeight" class="form-label">Weight</label>
                <input type="text" class="form-control" name="weight" id="inputWeight">
            </div>
            <div class="col-6">
                <label for="inputRate" class="form-label">Rate</label>
                <input type="text" class="form-control" name="rate" id="inputRate">
            </div>
            <div class="col-md-6">
                <label for="inputTotalamout" class="form-label">Total Amount</label>
                <input type="text" class="form-control" name="total_amount" id="inputTotalamount">
            </div>
            <div class="col-md-6">
                <label for="inputDriverprize" class="form-label">Driver Prize</label>
                <input type="text" class="form-control" name="driver_prize" id="inputDriverprize">
            </div>
            <div class="col-md-6">
                <label for="inputMineral" class="form-label">Mineral</label>
                <input type="text" class="form-control" name="mineral" id="inputMineral">
            </div>
            <div class="col-md-6">
                <label for="inputGovtax" class="form-label">Gov. Tax</label>
                <input type="text" class="form-control" name="gov_tax" id="inputGovtax">
            </div>
            <div class="col-md-6">
                <label for="inputAgentamount" class="form-label">Agent Amount</label>
                <input type="text" class="form-control" name="agent_amount" id="inputAgentamount">
            </div>
            <div class="col-md-6">
                <label for="inputSafiamount" class="form-label">Safi Amount</label>
                <input type="text" class="form-control" name="safi_amount" id="inputSafiamount">
            </div>
            <div class="col-md-6">
                <label for="inputReceivedamount" class="form-label">Recieved Amount</label>
                <input type="text" class="form-control" name="recieved_amount" id="inputReceivedamount">
            </div>
            <div class="col-md-6">
                <label for="inputRemainingamount" class="form-label">Remaining Amount</label>
                <input type="text" class="form-control" name="remaning_amount" id="inputRemainingamount">
            </div>
            <div class="col-md-6">
                <label for="inputDiscount" class="form-label">Discount</label>
                <input type="text" class="form-control" name="discount" id="inputDiscount">
            </div>
            <div class="col-md-6">
                <label for="inputExtra" class="form-label">Extra Amount</label>
                <input type="text" class="form-control" name="extra_amount" id="inputExtra">
            </div>
            <div class="col-md-12">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" name="Description" id="inputDescription">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-3">Add</button>
            </div>
        </form>


    </section>
@endsection
