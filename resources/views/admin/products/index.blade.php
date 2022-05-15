@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Product Page</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Selling price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
              <tr>
                   <td>{{$item->id}}</td>
                   <td>{{$item->category->name}}</td>
                   <td>{{$item->title}}</td>
                  <td>{{$item->selling_price}}</td>
                  <td><img src="{{asset('assests/uploads/products/'.$item->image)}}" class="cate-image">
                      <td>
                            <a href="{{url('edit-products/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a  href="{{url('delete-products/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                  </td>
                  
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
