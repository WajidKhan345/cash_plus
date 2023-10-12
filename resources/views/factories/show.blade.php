@extends('factories.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">All Factories List
                            <a type="button" href="{{ route('sales.master') }}"
                                title="Payments" class="btn btn-info" style="float: left; margin-left: 20px;">
                                Home
                            </a>
                        </h2>
                    </div>
                    <div>
                        @if (session()->has('success'))
                            <div class="alert-info" role="alert">
                                <div>

                                  <strong>{{ session('success') }}</strong>  
                                </div>
                                
                        @endif
                        @if (session()->has('error'))
                            <div class="alert-danger" role="alert">
                                <div>

                                  <strong>{{ session('error') }}</strong>  
                                </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <a href="{{ route('factories.create') }}" class="btn btn-success btn-sm" title="Add New Factory">
                            Add New Factory
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Owners Names</th>
                                        <th>Factories Names</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($factories as $factory)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $factory->factory_owner }}</td>
                                            <td>{{ $factory->factory_name }}</td>
                                            <td>{{ $factory->contact }}</td>
                                            <td>{{ $factory->address}}</td>

                                            <td>

                                                <a href="{{ route('factories.edit', ['factory' => $factory])}}"
                                                    title="Edit Factory"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="get"
                                                    action="{{ route('factories.delete', ['factory' => $factory])}}"
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
