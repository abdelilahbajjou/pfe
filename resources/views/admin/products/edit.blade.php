@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Edit/Update Products</h1>
    </div>
    <div class="card-body">
        <form action="{{url('update-products/'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row">
             <div class="col-md-6 mb-3" name="category_id">
                 <label for="">Category</label>
                 <select class="form-select" name="category_id">
                      <option value="">{{$products->category->name}}</option>
                  </select>   
             </div> 
             <div class="col-md-6 mb-3">
                <label for="">Title</label>
                <input type="text" value="{{$products->title}}" class="form-control" name="title">
            </div> 

            <div class="col-md-6 mb-3">
                <label for="">Author</label>
                <input type="text" value="{{$products->author}}" class="form-control" name="author">
            </div> 

            <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" value="{{$products->slug}}" class="form-control" name="slug">
            </div> 
            <div class="col-md-6 mb-3">
                <label for="">Small description</label>
                <input type="text" value="{{$products->small_description}}" class="form-control" name="small_description">
            </div> 
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" rows="3" class="form-control">{{$products->description}}</textarea>
            </div> 
            <div class="col-md-6 mb-3">
                <label for="">Original price</label>
                <input type="number" value="{{$products->original_price}}" class="form-control" name="original_price">
            </div> 
            <div class="col-md-6 mb-3">
                <label for="">Selling price</label>
                <input type="number" value="{{$products->selling_price}}" class="form-control" name="selling_price">
            </div> 
            <div class="col-md-6 mb-3">
                <label for=""> Quantity</label>
                <input type="number" value="{{$products->quantity}}" class="form-control" name="quantity">
            </div> 
            <div class="col-md-6 mb-3">
                <label for=""> Taxes</label>
                <input type="number" value="{{$products->taxes}}" class="form-control" name="taxes">
            </div> 
            <div class="col-md-6 mb-3">
                <label for=""> Status</label>
                <input type="checkbox" {{$products->status=='1' ? 'checked':''}} name="status">
            </div> 
            <div class="col-md-6 mb-3">
                <label for=""> Trending</label>
                <input type="checkbox" {{$products->trending=='1' ? 'checked':''}} name="trending">
            </div> 

            <div class="col-md-6 mb-3">
                <label for="">Language</label>
                <input type="text" value="{{$products->language}}" name="language">
        </div> 

        <div class="col-md-6 mb-3">
            <label for="">Number of pages</label>
             <input type="number" value="{{$products->nb_page}}" class="form-control" name="nb_page">
        </div> 

        <div class="col-md-6 mb-3">
          <label for="">Edition year</label>
          <input type="date"  value="{{$products->edition_year}}" class="form-control" name="edition_year">
        </div> 

            <div class="col-md-6 mb-3">
                <label for=""> Meta title</label>
                <input type="text" value="{{$products->meta_title}}" class="form-control" name="meta_title">
            </div>
            <div class="col-md-6 mb-3">
                <label for=""> Meta keywords</label>
                <input type="text" value="{{$products->meta_keywords}}" class="form-control" name="meta_keywords">
            </div> 
            <div class="col-md-6 mb-3">
                <label for=""> Meta description</label>
                <input type="text" value="{{$products->meta_description}}" class="form-control" name="meta_description">
            </div>
            @if ($products->image)
                <img  class="cate-image2" src="{{ asset('assests/uploads/products/'.$products->image)}}">
            @endif
            <div class="col-md-12 mb-3">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
           </div>
        </form>
    </div>
</div>
@endsection