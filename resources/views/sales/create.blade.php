@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid bg-success text-light py-1 ">
        <header class="text-center">
            <h4>Sales Entry</h4>
        </header>
    </div>
    <section class="container my-2 w-125 text-black">

        <form class="row g-3 p-2" method="post" action="{{route('sales.store')}}">
            @csrf
            @method('post')
            <div class="form-group col-md-3">
                <label for="inputFactory" class="form-label">Factory Name</label>
                <select id="inputFactory" class="form-control" name="factory_id">
                    <option selected>Choose...</option>
                    @foreach($factories as $factory)
                    <option value="{{$factory->id}}">{{$factory->factory_owner}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputDriver" class="form-label">Driver Name</label>
                <select id="inputDriver" class="form-control" name="driver_id">
                    <option selected>Choose...</option>
                    @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="col-md-3">
                <label for="inputStoneType" class="form-label">Stone Type</label>
                <input type="text" class="form-control" name="stone_type" id="inputStoneType">
            </div>
            <div class="col-md-3">
                <label for="inputDrang" class="form-label">Drang Commission</label>
                <input type="number" class="form-control" name="drang_commission" id="inputDrang">
            </div>
            <div class="col-md-3">
                <label for="inputWeight" class="form-label">Weight</label>
                <input type="number" class="form-control" name="weight" onkeyup="multiplyBy()" onchange="multiplyBy()" id="inputWeight">
            </div>
            <div class="col-3">
                <label for="inputRate" class="form-label">Rate</label>
                <input type="number" class="form-control" name="rate" onkeyup="multiplyBy()" onchange="multiplyBy()" id="inputRate">
            </div>
            <div class="col-md-3">
                <label for="inputTotalamout" class="form-label">Total Amount</label>
                <input type="number" class="form-control" name="total_amount" id="inputTotalamount" readonly>
            </div>
            <div class="col-md-3">
                <label for="inputDriverprize" class="form-label">Driver Prize</label>
                <input type="number" class="form-control" name="driver_prize" id="inputDriverprize">
            </div>
            <div class="col-md-3">
                <label for="inputMineral" class="form-label">Mineral</label>
                <input type="number" class="form-control" name="mineral" id="inputMineral">
            </div>
            <div class="col-md-3">
                <label for="inputGovtax" class="form-label">G Tax</label>
                <input type="number" class="form-control" name="gov_tax" id="inputGovtax">
            </div>
            <div class="col-md-3">
                <label for="inputAgentamount" class="form-label">Agent Amount</label>
                <input type="number" class="form-control" name="agent_amount" id="inputAgentamount">
            </div>
            <div class="col-md-3">
                <label for="inputSafiamount" class="form-label">Safi Amount</label>
                <input type="number" class="form-control" name="safi_amount" id="inputSafiamount">
            </div>
            <div class="col-md-3">
                <label for="inputReceivedamount" class="form-label">Recieved Amount</label>
                <input type="number" class="form-control" name="recieved_amount" id="inputReceivedamount">
            </div>
            <div class="col-md-3">
                <label for="inputDiscount" class="form-label">Discount</label>
                <input type="number" class="form-control" name="discount" id="inputDiscount">
            </div>
            <div class="col-md-3">
                <label for="inputExtra" class="form-label">Extra Amount</label>
                <input type="number" class="form-control" name="extra_amount" id="inputExtra">
            </div>
            <div class="col-md-6">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" name="Description" id="inputDescription">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Add New Sale</button>
            </div>
            <script>
                function multiplyBy()
                {
                  num1 = document.getElementById("inputWeight").value;
                  num2 = document.getElementById("inputRate").value;
                  document.getElementById("inputTotalamount").value = num1 * num2;
                }
            </script>
        </form>


    </section>
@endsection
