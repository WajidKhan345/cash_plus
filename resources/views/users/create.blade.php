@extends('sales.master')
@section('content')
<div class="container-fluid bg-success text-light py-1 ">
    <header class="text-center">
        <h1 class="display-10">User Management</h1>
    </header>
</div>
<section class="container my-4 w-50  text-black p-2 border border-primary rounded">

    <form class="row g-4 p-4" method="post" action="{{ route('users.store')}}">
        @csrf
        @method('post')
        <div class="col-md-8">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="inputName">
        </div>
        <div class="col-md-8">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail">
        </div>
        <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
            <select id="inputRole" class="form-select" name="role">
                <option readonly selected>Choose...</option>
                <option value="owner">Owner</option>
                <option value="manager">Manager</option>
                <option value="accountant">Accountant</option>
               
            </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary me-md-4">Add__</button>
        </div>
    
    </form>


@endsection