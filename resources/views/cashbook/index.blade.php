{{-- @extends('layouts.admin.app')
@section('content')
<h1>Index Page of Cashbook</h1>
@foreach ($cashbooks as $items)
<h2> {{$items->name}} </h2>
<h2> {{$items->date}} </h2>
<h2> {{$items->giving_amount}} </h2>
    
@endforeach
@endsection --}}
@extends('layouts.admin.app')
@section('content')
<div class="card">
    <div class="card-header">
      <h2 class="card-title text-lg text-center w-100">All CashBooks Record
        <a href="{{ route('cashbooks.create') }}" class="btn btn-info float-right" title="Add New Cashbook">
            Add New Cashbook <i class="fa fa-plus-square"></i> 
        </a>
      </h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped table-sm table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Giving Amount</th>
            <th>Receiving Amount</th>
            <th>Remaining Amount</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($cashbooks as $cashbook)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $cashbook->date}}</td>
                <td>{{ $cashbook->name }}</td>
                <td>{{ $cashbook->description }}</td>
                <td>{{ $cashbook->giving_amount}}</td>
                <td>{{ $cashbook->receiving_amount}}</td>
                <td>{{ $cashbook->remaining_amount}}</td>

                <td>

                    <a href="{{ route('cashbooks.edit', $cashbook->id) }}"
                        title="Edit Cashbook"><button class="btn btn-primary btn-sm"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>

                    <form method="post"
                        action="{{ route('cashbooks.destroy', $cashbook->id) }}"
                        accept-charset="UTF-8" style="display:inline">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger btn-sm"
                            title="Delete Cashbook"
                            onclick="return confirm('Are you sure you want to delete this cashbook?')">
                            
                            Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Giving Amount</th>
            <th>Receiving Amount</th>
            <th>Remaining Amount</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection