@extends('layouts.master')

@section('title')
    Add Restaurants
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Users</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                                <form action="/insertuser" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label>Restaurant Name</label>
                                            <input type="text" class="form-control" value="" name='username'>
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" value="" name='phone'>
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="" name='email'>
                                            <label>Short Description</label>
                                            <input type="textarea" class="form-control" value="" name='shortdescription'>
                                            <label>Menu List</label>
                                            <input type="textarea" class="form-control" value="" name='menu'>
                                        </div>
                                        <button type="submit" class="btn btn-success">Add</button>
                                        <a href="/role-register" class="btn btn-danger">Cancel</a>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection