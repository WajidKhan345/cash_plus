@extends('payments.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:1px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">Per Sale List</h2>
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
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach ($sale->payments as $payment)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $payment->date }}</td>
                                            <td>{{ $payment->amount}}</td>
                                            {{-- <td>{{ $payment->payments->sale_id }}</td> --}}
                                            <td>{{ $payment->description }}</td>
                                            <td>
                                                {{-- <a href="{{ route('sales.payment', $sale->id) }}"
                                                    title="Payment"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Payment</button>
                                                </a> --}}

                                                {{-- <a href="{{ route('sales.edit', ['sale' => $sale]) }}"
                                                    title="Edit Sale"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button>
                                                </a>

                                                <form method="get"
                                                    action="{{ route('sales.delete', ['sale' => $sale]) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale"
                                                        onclick="return confirm('Are you sure you want to delete this sale?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form>
                                            </td> --}}
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
