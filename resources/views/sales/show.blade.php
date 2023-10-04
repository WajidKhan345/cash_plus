@extends('sales.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:1px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">All Sales List</h2>
                    </div>
                    <div>
                        @if (session()->has('success'))
                            <div class="alert-info" role="alert">
                                <div>

                                    <strong>{{ session('success') }}</strong>
                                </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <a href="{{ route('sales.create') }}" class="btn btn-success btn-sm" title="Add New Sale">
                            Add New Sale
                        </a>
                        <div>
                            <a href="{{ route('factories.master') }}" class="btn btn-success btn-sm" title="Factories Record">
                                Show Factories Record
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('driver.index') }}" class="btn btn-success btn-sm" title="Drivers Record">
                                Show Drivers Record
                            </a>
                        </div>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Factory Name</th>
                                        <th>Driver Name</th>
                                        <th>Stone Type</th>
                                        <th>Drang Commission</th>
                                        <th>Weight</th>
                                        <th>Rate</th>
                                        <th>Total Amount</th>
                                        <th>Driver Prize</th>
                                        <th>Mineral</th>
                                        <th>Gov. Tax</th>
                                        <th>Agent Amount</th>
                                        <th>Safi Amount</th>
                                        <th>Recieved Amount</th>
                                        <th>Remaining Amount</th>
                                        <th>Discount</th>
                                        <th>Extra Amount</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $sale->date }}</td>
                                            <td>{{ $sale->factory->factory_owner }}</td>
                                            <td>{{ $sale->driver->name }}</td>
                                            <td>{{ $sale->stone_type }}</td>
                                            <td>{{ $sale->drang_commission }}</td>
                                            <td>{{ $sale->weight }}</td>
                                            <td>{{ $sale->rate }}</td>
                                            <td>{{ $sale->total_amount }}</td>
                                            <td>{{ $sale->driver_prize }}</td>
                                            <td>{{ $sale->mineral }}</td>
                                            <td>{{ $sale->gov_tax }}</td>
                                            <td>{{ $sale->agent_amount }}</td>
                                            <td>{{ $sale->safi_amount }}</td>
                                            <td>{{ $sale->recieved_amount }}</td>
                                            <td>{{ $sale->remaning_amount }}</td>
                                            <td>{{ $sale->discount }}</td>
                                            <td>{{ $sale->extra_amount }}</td>
                                            <td>{{ $sale->Description }}</td>
                                            <td>

                                                <a href="{{ route('sales.edit', ['sale' => $sale])}}" 
                                                    title="Edit Factory"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method=""
                                                    action=""
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Factory"
                                                        onclick="return confirm('Are you sure you want to delete this driver?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection