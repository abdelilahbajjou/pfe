@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Add categorie</h1>
    </div>
    <div class="card-body">
        <form action="{{route('insert_categories')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row">
             <div class="col-md-6 mb-3">
                 <label for="">Name</label>
                 <input type="text" class="form-control" name="name">
             </div> 
             <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug">
            </div> 
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" rows="3" class="form-control"></textarea>
            </div> 
            <div class="col-md-6 mb-3">
                <label for="">Status</label>
                <input type="checkbox" name="status">
            </div> 
            <div class="col-md-6 mb-3">
                <label for="">Popular</label>
                <input type="checkbox"  name="popular">
            </div> 
        
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
           </div>
        </form>
    </div>
</div>
@endsection