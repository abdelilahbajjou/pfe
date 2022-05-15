@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Users Page</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
              <tr>
                      <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a  href="{{url('delete-users/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
