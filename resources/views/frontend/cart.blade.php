@extends('layouts.frontendlayout')


@section('title')
    My Cart
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm border-top">
    <div class="container">
        <h2 style="color:orangered"><a style="color: orangered" href="{{route('welcome')}}">Home</a>/<a style="color: orangered" href="{{route('cart')}}">Cart</a></h2>
    </div>
</div>

<div class="container my-5">
    @foreach($cartitems as $cart)
    <div class="card shadow product_data">
        <div  style="height: 100px" class="row">
            <div class="col-md-2 py-4 px-5">
                <img  style="width: 70px;height:70px"  src="{{asset('assests/uploads/products/'.$cart->products->image)}}" alt="image here">
            </div>
            <div class="col-md-5 py-5">
               <h4> {{$cart->products->title}}</h4>
            </div>
            <div class="col-md-3 py-4">
                <input type="hidden" class="product_id" value="{{$cart->product_id}}">
                <label for="Quantity">Quantity</label>
                <div class="input-group text-center mb-3 aaa" style="width: 130px">
                    <button class="input-group-text decrement-btn">-</button>
                    <input type="text" name="Quantity" value="{{$cart->product_quantity}}" class="form-control quantity-input text-center" />
                    <button class="input-group-text increment-btn">+</button>
                </div>
            </div>
            <div class="col-md-2 py-4">
                <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
        <hr>
    </div>
    @endforeach
</div>

@endsection 



@section('scripts')
<script>
    $(document).ready(function (){
    $('.increment-btn').click(function (e){
       e.preventDefault();
    //    var inc_value=$('.quantity-input').val();
    var inc_value=$(this).closest('.product_data').find('.quantity-input').val();
       var value=parseInt(inc_value,10);
       value=isNaN(value) ? 0: value;
       if(value<10){
           value++;
        //    $('.quantity-input').val(value);
           $(this).closest('.product_data').find('.quantity-input').val(value);
       }
    });

    $('.decrement-btn').click(function (e){
       e.preventDefault();
    //    var dec_value=$('.quantity-input').val();
       var dec_value=$(this).closest('.product_data').find('.quantity-input').val();
       var value=parseInt(dec_value,10);
       value=isNaN(value) ? 0: value;
       if(value>=1){
           value--;
        //    $('.quantity-input').val(value);
        $(this).closest('.product_data').find('.quantity-input').val(value);
       }
    });

    $('.delete-cart-item').click(function (e){
       e.preventDefault();
         var product_id = $(this).closest('.product_data').find('.product_id').val();

         $.ajaxSetup({
             headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                 });

         $.ajax({
             methode:"POST",
             url:"delete-cart-item",
             data:{
                 'product_id':product_id,

             },
             success: function(response){
                 window.location.reload();
                 swal(response.status);
             }
         });
    });
    
}); 
</script>
@endsection