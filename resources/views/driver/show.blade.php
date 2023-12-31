{{-- @extends('driver.index')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center">All Drivers List
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
                        <a href="{{ route('driver.create') }}" class="btn btn-success btn-sm" title="Add New Driver">
                            Add New Driver
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Drivers Names</th>
                                        <th>Phone Numbers</th>
                                        <th>Vehicles Numbers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drivers as $driver)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $driver->name }}</td>
                                            <td>{{ $driver->phone_number }}</td>
                                            <td>{{ $driver->vehicle_number }}</td>

                                            <td>

                                                <a href="{{ route('driver.edit', ['driver' => $driver]) }}"
                                                    title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="post"
                                                    action="{{ route('driver.delete', ['driver' => $driver]) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Driver"
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
@endsection --}}
@extends('layouts.admin.app')
@section('content')
<div class="card">
    <div class="card-header">
      <h2 class="card-title text-lg text-center w-100">All Drivers List
        <a href="{{ route('driver.create') }}" class="btn btn-info float-right" title="Add New Driver">
            Add New Driver <i class="fa fa-plus-square"></i>
        </a>

      </h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped table-sm table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Drivers Names</th>
            <th>Phone Numbers</th>
            <th>Vehicles Numbers</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($drivers as $driver)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $driver->name }}</td>
                <td>{{ $driver->phone_number }}</td>
                <td>{{ $driver->vehicle_number }}</td>

                <td>

                    <a href="{{ route('driver.edit', ['driver' => $driver]) }}"
                        title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>

                    <form method="post"
                        action="{{ route('driver.delete', ['driver' => $driver]) }}"
                        accept-charset="UTF-8" style="display:inline">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger btn-sm"
                            title="Delete Driver"
                            onclick="return confirm('Are you sure you want to delete this driver?')"><i
                                class="fa fa-trash-o" aria-hidden="true"></i>
                            Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Drivers Names</th>
            <th>Phone Numbers</th>
            <th>Vehicles Numbers</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
