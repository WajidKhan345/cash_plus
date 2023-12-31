@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid bg-info text-light py-1 ">
        <header class="text-center">
            <h4>Sales Edit</h4>
        </header>
    </div>
    <section class="container my-2 w-100  text-black p-2">

        <form class="row g-3 p-2" method="post" action="{{route('sales.update', ['sale' => $sale])}}">
            @csrf
            @method('put')
            <div class="col-md-4">
                <label for="inputFactory" class="form-label">Factory Name</label>
                <select id="inputFactory" class="form-select" name="factory_id">
                    <option selected>Choose...</option>
                    @foreach($factories as $factory)
                    <option value="{{$factory->id}}" {{$factory->id == $sale->factory_id ? 'selected' : ''}}>{{$factory->factory_owner}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputDriver" class="form-label">Driver Name</label>
                <select id="inputDriver" class="form-select" name="driver_id">
                    <option selected>Choose...</option>
                    @foreach($drivers as $driver)
                    <option value="{{$driver->id}}" {{$driver->id == $sale->driver_id ? 'selected' : ''}}>{{$driver->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 p-3">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" value="{{$sale->date}}">
            </div>
            <div class="col-md-6">
                <label for="inputStoneType" class="form-label">Stone Type</label>
                <input type="text" class="form-control" name="stone_type" id="inputStoneType" value="{{$sale->stone_type}}">
            </div>
            <div class="col-md-6">
                <label for="inputDrang" class="form-label">Drang Commission</label>
                <input type="number" class="form-control" name="drang_commission" id="inputDrang" value="{{$sale->drang_commission}}">
            </div>
            <div class="col-md-6">
                <label for="inputWeight" class="form-label">Weight</label>
                <input type="number" class="form-control" name="weight" onkeyup="multiplyBy()" onchange="multiplyBy()" id="inputWeight" value="{{$sale->weight}}">
            </div>
            <div class="col-6">
                <label for="inputRate" class="form-label">Rate</label>
                <input type="number" class="form-control" name="rate" onkeyup="multiplyBy()" onchange="multiplyBy()" id="inputRate" value="{{$sale->rate}}">
            </div>
            <div class="col-md-6">
                <label for="inputTotalamout" class="form-label">Total Amount</label>
                <input type="number" class="form-control" name="total_amount" id="inputTotalamount" value="{{$sale->total_amount}}">
            </div>
            <div class="col-md-6">
                <label for="inputDriverprize" class="form-label">Driver Prize</label>
                <input type="number" class="form-control" name="driver_prize" id="inputDriverprize" value="{{$sale->driver_prize}}">
            </div>
            <div class="col-md-6">
                <label for="inputMineral" class="form-label">Mineral</label>
                <input type="number" class="form-control" name="mineral" id="inputMineral" value="{{$sale->mineral}}">
            </div>
            <div class="col-md-6">
                <label for="inputGovtax" class="form-label">G Tax</label>
                <input type="number" class="form-control" name="gov_tax" id="inputGovtax" value="{{$sale->gov_tax}}">
            </div>
            <div class="col-md-6">
                <label for="inputAgentamount" class="form-label">Agent Amount</label>
                <input type="number" class="form-control" name="agent_amount" id="inputAgentamount" value="{{$sale->agent_amount}}">
            </div>
            <div class="col-md-6">
                <label for="inputSafiamount" class="form-label">Safi Amount</label>
                <input type="number" class="form-control" name="safi_amount" id="inputSafiamount" value="{{$sale->safi_amount}}">
            </div>
            <div class="col-md-6">
                <label for="inputDiscount" class="form-label">Discount</label>
                <input type="number" class="form-control" name="discount" id="inputDiscount" value="{{$sale->discount}}">
            </div>
            <div class="col-md-6">
                <label for="inputExtra" class="form-label">Extra Amount</label>
                <input type="number" class="form-control" name="extra_amount" id="inputExtra" value="{{$sale->extra_amount}}">
            </div>
            <div class="col-md-12">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" name="Description" id="inputDescription" value="{{$sale->Description}}">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-3">Update</button>
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
