@extends('layouts.frontendlayout')

@section('content') 




<div class="container">
    <h1 style="text-align: center;color:orangered;margin-top:10px;margin-bottom:10px">All Books</h1>
    <div class="row">
        @foreach ($all_products as $pro)
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px;text-align:center">
                <div>
                    <a href="{{url('category/'.$pro->category->slug.'/'.$pro->slug)}}">
                    <img class="img-responsive" alt="Product image" src="{{asset('assests/uploads/products/'.$pro->image)}}" />
                    </a>
                    <br />
                    <h2 class="pull-right">{{$pro->original_price}}$</h2>
                    <h2><a href="#">{{$pro->title}}</a></h2>
                    <br />
                    <p class="text-justify">{{$pro->description}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta ad quia, eaque facere nostrum ea totam velit hic qui pariatur iusto harum necessitatibus ab voluptates rerum voluptate quibusdam voluptatibus similique? </p>
                </div>
                <br />
                <div class="ratings text-center">
                    <p>
                        <div id="rating1"></div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-half"></i>
                    </p>
                </div>
                <br />
                <div class="btn-ground text-center" style="padding-bottom: 30px">
                    <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add</button>
                    <button type="button" class="btn btn-primary"><i class="fa fa-heart"></i> wish</button>
                    <a href="{{url('category/'.$pro->category->slug.'/'.$pro->slug)}}">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-info"></i> Info</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection




<!--frontend dyal mounir-->
{{-- @extends('layouts.frontendlayout')

@section('content')

<div class="books">
    <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                 <h1 class="heading"> <span>our books</span> </h1>
                    <div class="titlepage">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                            e et dolore magna aliqua. Ut enim ad minim veniam, qui
                        </p>
                    </div>
                </div>
            </div>
    </div>
        <div class="container">

            <div class="row">
                @foreach($all_products as $pro)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="books_box">
                        <div class="books_image">
                            <img src="{{asset('assests/uploads/products/'.$pro->image)}}" alt="#"/>
                        </div>
                        <div class="books_content">
                            <h3>{{$pro->title}}</h3>
                            <div class="books_price">{{$pro->selling_price}} MAD<span>{{$pro->original_price}} MAD</span></div>
                            <a href="" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


           
        </div>
</div> --}}
      