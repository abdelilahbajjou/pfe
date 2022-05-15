@extends('layouts.frontendlayout')

@section('content')




<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>upto 75% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitatibus, aliquid ex minima at!</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-10.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-11.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-12.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-4.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-5.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="frontendofficial/image/book-6.jpg" alt=""></a>
            </div>
            <img src="frontendofficial/image/stand.png" class="stand" alt="">

        </div>

    </div>

</section>

<!-- home section ense  -->



<!-- trending section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Trending books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

@foreach ($trending_products as $pro)
    
<div class="swiper-slide box">

                <div class="image">
                    <a href="{{url('category/'.$pro->category->slug.'/'.$pro->slug)}}">
                    <img src="{{asset('assests/uploads/products/'.$pro->image)}}" alt="">
                    </a>
                </div>
                <div class="content">
                    <h3>{{$pro->title}}</h3>
                    <div class="price">{{$pro->original_price}}$ <span>{{$pro->selling_price}}$</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
@endforeach

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- trending section ends -->

@endsection



