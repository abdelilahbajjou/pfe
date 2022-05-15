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
                <th scope="col">Reference</th>
                <th scope="col">Date</th>
                <th scope="col">User</th>
                <th scope="col">Product</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
              <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->reference}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->product->name}}</td>
                        <td><img src="{{asset('assests/uploads/products/'.$item->product->image)}}" class="cate-image"></td>
                        <td>
                            <a href="{{url('valider-orders/'.$item->id) }}" class="btn btn-primary">Validate</a>
                            <a  href="{{url('delete-orders/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
