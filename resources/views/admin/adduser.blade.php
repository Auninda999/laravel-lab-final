@extends('layouts.master')

@section('title')
    Add Users
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
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="" name='username' required="true">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="" name='phone' required="true">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="" name='email' required="true">
                                            <label>Password</label>
                                            <input type="password" class="form-control" value="" name='password' required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Give Role</label>
                                            <select name="usertype" class="form-control">
                                                <option value="admin">Admin</option>
                                                <option value="member">Member</option>
                                                <option value="">None</option>
                                            </select>
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