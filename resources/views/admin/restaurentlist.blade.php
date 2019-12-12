@extends('layouts.master')

@section('title')
    Restaurent List
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
        <div class="card-header">
            <h4 class="card-title">Restaurent List</h4>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <th>ID</th>
                <th>Restaurent Name</th>
                <th>Contact No.</th>
                <th>Email</th>
                <th>Short Description</th>
                <th>Menu</th>
                <th>EDIT</th>
                <th>DELETE</th>
                </thead>
                <tbody>
                    @foreach ($restaurents as $row)    
                    <tr>
                      <td>{{$row->id}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->contact}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->shortdescription}}</td>
                      <td>{{$row->menulist}}</td>
                      <td ><a href="/restaurent-edit/{{$row->id}}" class="btn btn-info">EDIT</a></td>
                      <td >
                          <form action="/restaurent-delete/{{$row->id}}" method="post">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}              
                                <button type="submit" class="btn btn-danger">DELETE</button>
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
@endsection

@section('scripts')

@endsection