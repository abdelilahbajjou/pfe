@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Add Product</h1>
    </div>
    <div class="card-body">
        <form action="{{route('insert-products')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row">
            <div class="col-md-12 mb-3" >
                <select class="form-select" name="category_id">
                    <option value="">Select Category</option>
                      @foreach ($category as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                  </select>   
              </div>

             <div class="col-md-6 mb-3">
                 <label for="">Title</label>
                 <input type="text" class="form-control" name="title">
             </div> 

             <div class="col-md-6 mb-3">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author">
            </div> 

             <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug">
            </div> 

             <div class="col-md-6 mb-3">
                <label for="">Small description</label>
                <input type="text" class="form-control" name="small_description">
            </div> 
            
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" name="description" rows="3" class="form-control"></textarea>
            </div> 

            <div class="col-md-6 mb-3">
                <label for="">Original price</label>
                <input type="number" name="original_price">
            </div> 

            <div class="col-md-6 mb-3">
                <label for="">Selling price</label>
                <input type="number"  name="selling_price">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">quantity</label>
                <input type="number" class="form-control" name="quantity">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">Taxes</label>
                <input type="number" class="form-control" name="taxes">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">Status</label>
                <input type="checkbox"  name="status">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">Trending</label>
                <input type="checkbox" name="trending">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">Language</label>
                <input type="text" class="form-control" name="language">
        </div> 

        <div class="col-md-12 mb-3">
            <label for="">Number of pages</label>
             <input type="number" class="form-control" name="nb_page">
        </div> 

        <div class="col-md-12 mb-3">
          <label for="">Edition year</label>
          <input type="date" class="form-control" name="edition_year">
        </div> 

            <div class="col-md-12 mb-3">
                <label for="">Meta title</label>
                <input type="text" class="form-control" name="meta_title">
            </div> 

            <div class="col-md-12 mb-3">
                <label for="">Meta keywords</label>
                <input type="text" class="form-control" name="meta_keywords">
            </div>

            <div class="col-md-12 mb-3">
                <label for="">Meta description</label>
                <input type="text" class="form-control" name="meta_description">
            </div> 

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