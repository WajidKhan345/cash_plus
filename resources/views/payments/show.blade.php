@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row" style="margin:1px">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header container-fluid bg-success text-light py-2">
                        <h2 style="text-align: center">Per Sale List
                            <a type="button" href="{{ route('sales.payment', $sale->id) }}"
                                title="Payments" class="btn btn-info" style="float: left; margin-left: 20px;">
                                Payments Entry
                            </a>
                            <a type="button" href="{{ route('sales.master', $sale->id) }}"
                                title="Payments" class="btn btn-info" style="float: right; margin-right: 20px;">
                                Home
                            </a>
                        </h2>
                    </div> --}}
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
                            <table class="table table-sm table-hover ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Factory Owner</th>
                                        <th>Amount</th>
                                        <th>Remaining</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $amountSum = 0;
                                    @endphp
                                    @foreach ($sale->payments as $payment)
                                    @php
                                        $amountSum += $payment->amount;
                                    @endphp
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $payment->date }}</td>
                                            <td>{{ $sale->factory->factory_owner }}</td>
                                            <td>{{ $payment->amount}}</td>
                                            <td>{{ $sale->total_amount - $amountSum }}</td>
                                            <td>{{ $payment->description }}</td>
                                            <td>
                                                {{-- <a href="{{ route('sales.payment', $sale->id) }}"
                                                    title="Payment"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Payment</button>
                                                </a> --}}

                                                <a href="{{ route('sales.payments.edit', ['payment' => $payment])}}"
                                                    title="Edit Sale Payment"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button>
                                                </a>

                                                {{-- <form method="get"
                                                    action="{{ route('sales.delete', ['sale' => $sale]) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Sale"
                                                        onclick="return confirm('Are you sure you want to delete this sale?')"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th>Remaining</th>
                                        <td>{{$sale->total_amount-$sale->payments->sum('amount')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
