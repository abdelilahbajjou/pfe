@extends('layouts.frontendlayout')

@section('title',$products->title)

@section('content')

<div class="py-3 mb-4 shadow-sm border-top">
    <div class="container">
        <h2 style="color:orangered">Collections/{{$products->category->name}}/{{$products->title}}</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{asset('assests/uploads/products/'.$products->image)}}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                        {{$products->title}}
                        @if($products->trending==1)
                        <label style="font-size:16px" class="float-end badge bg-danger trending-tag">Trending</label>
                        @endif
                        </h2>

                        <hr>
                        <label class="me-3">Original Price:<s> ${{$products->original_price}}</s></label>
                        <label class="fw-bold">Selling Price:<s>${{$products->selling_price}}</s></label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if($products->quantity>0)
                           <label class="badge bg-success">In Stock</label>
                        @else
                           <label class="badge bg-danger">Out Of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <input type="hidden" class="product_id" value="{{$products->id}}">
                                <label for="quantity">Quantity</label>
                                <div  style="width: 80px" class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control quantity-input" />
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                                <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist</button>
                                <button type="button" class="btn btn-primary me-3 float-start addToCartBtn">Add to Card</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h3>Description</h3>
                    <p>{{$products->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
$(document).ready(function (){
    $('.addToCartBtn').click(function (e){
       e.preventDefault();
       var product_id=$(this).closest('.product_data').find('.product_id').val();
       var product_quantity=$(this).closest('.product_data').find('.quantity-input').val();
       alert(product_id);
       alert(product_quantity);

       $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                 });

       $.ajax({
           method : "POST",
           url : "/add-to-cart",
           data : {
               'product_id': product_id,
               'product_quantity': product_quantity,
           },
           success : function(response){
              swal(response.status);
           }
       });
    });

    $('.increment-btn').click(function (e){
       e.preventDefault();
       var inc_value=$('.quantity-input').val();
    // var inc_value=$(this).closest('product_data').find('quantity-input').val();
       var value=parseInt(inc_value,10);
       value=isNaN(value) ? 0: value;
       if(value<10){
           value++;
           $('.quantity-input').val(value);
        //  $(this).closest('product_data').find('quantity-input').val(value);
      }
    });

    $('.decrement-btn').click(function (e){
       e.preventDefault();
       var dec_value=$('.quantity-input').val();
    //    var dec_value=$(this).closest('product_data').find('quantity-input').val();
       var value=parseInt(dec_value,10);
       value=isNaN(value) ? 0: value;
       if(value>=1){
           value--;
           $('.quantity-input').val(value);
        // $(this).closest('product_data').find('quantity-input').val(value);
       }
    });
}); 
</script>
@endsection