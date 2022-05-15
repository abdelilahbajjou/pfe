@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Categorie Page</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
              <tr>
                <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{url('edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a  href="{{url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection








