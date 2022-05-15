@extends('layouts.acceuil')

@section('content')
   <!--===== HEADER =====-->
   <header class="l-header">
      <nav class="nav bd-grid">
         <div>
            <a href="#" class="nav__logo">
               <img width="70" src="frontend/img/icons/img3.png" alt="logo img" />
            </a>
         </div>

         <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
         </div>

         <div class="nav__menu" id="nav-menu">
            <div class="nav__close" id="nav-close">
               <i class='bx bx-x'></i>
            </div>

            <ul class="nav__list">
               <li class="nav__item"><a href="#home" class="nav__link active">All Books</a></li>
               <!-- <li class="nav__item dropdown">
                  
                     <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                        Categories
                        <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" class="nav__link">Sciences</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" class="nav__link">Busniss</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" class="nav__link">Self-Developpement</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Kids</a></li>
                     </ul>
                  
               </li> -->
               <li class="nav__item"><a href="#about" class="nav__link">Categories</a></li>
               <li class="nav__item"><a href="#skills" class="nav__link">About Us</a></li>
               <li class="nav__item"><a href="#contact" class="nav__link">Cart <i class='bx bx-cart'></i></a></li>
               <li class="nav__item"><a href="#contact" class="nav__link">Account <i class='bx bx-user'></i></a></li>
            </ul>
         </div>
      </nav>
   </header>

   <main class="l-main">
      <!--===== HOME =====-->
      <section class="home" id="home">
         <div class="home__container bd-grid">
            <div class="home__img">
               <img src="frontend/img/icons/img1.png" alt="" data-speed="-2" class="move">
            </div>

            <div class="home__data">
               <h1 class="home__title">Ebook<br>Buy A Book</h1>
               <p class="home__description">Let's help discover the best books <br> of the mounth.</p>
               <a href="#" class="home__button">See All The Books</a>
            </div>
         </div>
      </section>
   </main>


   <br><hr><br>
    
   <!--carousel with jquery-->



<!--my carousel-->


 {{-- @foreach ($trending_products->chunk(4) as $productCollection)

  <!-- Product Row Start -->
  <div class="row">

    @foreach ($productCollection as $product)
<!-- Display Product -->
<h2>{{ $product->title }}</h2>
<img src="{{ $product->image }}" />
<!-- End Product Display -->
    @endforeach

</div>
<!-- End Product Row -->

@endforeach --}}


<div  class="container">
   <div class="row">
      <div class="col-md-12">
         <a href="newArrivals.html">
            <h2>Trending <b>Books</b></h2>
         </a>
         <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">

               @foreach ($trending_products->chunk(4) as $productCollection)
               <div class="item {{ $loop->first ? 'active' : '' }}">
                  <div class="row">
                        
                     @foreach ($productCollection as $product)

                     <div class="col-sm-3">
                        <div class="thumb-wrapper">
                           <div class="img-box">
                              <img src="{{asset('assests/uploads/products/'.$product->image)}}" class="img-responsive" alt="">
                           </div>
                           <div class="thumb-content">
                              <h4>{{$product->name}}</h4>
                              <p class="item-price"><strike>{{$product->original_price}} MAD</strike> <span>{{$product->selling_price}}
                                    MAD</span></p>
                              <div class="star-rating">
                                 <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                 </ul>
                              </div>
                              <a href="#" class="btn btn-primary">Add to Cart</a>
                           </div>
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>
                 
               @endforeach
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right" href="#myCarousel3" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
   </div>
</div>



<!--end of my carousel-->





   <div style="border: solid red;"  class="container">
      <div class="row">
         <div class="col-md-12">
            <a href="newArrivals.html">
               <h2>our <b>suggestions</b></h2>
            </a>
            <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
               <!-- Carousel indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="row">


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/3087295-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>$book->nom</h4>
                                 <p class="item-price"><strike>$book->prix MAD</strike> <span>$book->name
                                       MAD</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/692-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Headphone</h4>
                                 <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/1028642-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Air</h4>
                                 <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/4103374-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Nikon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/5001645-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Play Station</h4>
                                 <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/9780141033570-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Pro</h4>
                                 <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/images-7-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Bose Speaker</h4>
                                 <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/une-fois-dans-vie-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Samsung Galaxy S8</h4>
                                 <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/Une-terre-promise-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple iPhone</h4>
                                 <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Canon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Google Pixel</h4>
                                 <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple Watch</h4>
                                 <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control right" href="#myCarousel3" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>


   <br><hr><br>

   <div style="border: solid red;"  class="container">
      <div class="row">
         <div class="col-md-12">
            <a href="newArrivals.html">
               <h2>new <b>arrivals</b></h2>
            </a>
            <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
               <!-- Carousel indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="row">


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/3087295-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>$book->nom</h4>
                                 <p class="item-price"><strike>$book->prix MAD</strike> <span>$book->name
                                       MAD</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/692-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Headphone</h4>
                                 <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/1028642-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Air</h4>
                                 <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/4103374-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Nikon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/5001645-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Play Station</h4>
                                 <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/9780141033570-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Pro</h4>
                                 <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/images-7-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Bose Speaker</h4>
                                 <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/une-fois-dans-vie-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Samsung Galaxy S8</h4>
                                 <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/Une-terre-promise-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple iPhone</h4>
                                 <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Canon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Google Pixel</h4>
                                 <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple Watch</h4>
                                 <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control right" href="#myCarousel2" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>


   <br><hr><br>

   <div style="border: solid red;"  class="container">
      <div class="row">
         <div class="col-md-12">
            <a href="newArrivals.html">
               <h2>our <b>suggestions</b></h2>
            </a>
            <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
               <!-- Carousel indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="row">


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/3087295-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>$book->nom</h4>
                                 <p class="item-price"><strike>$book->prix MAD</strike> <span>$book->name
                                       MAD</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>


                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/692-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Headphone</h4>
                                 <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/1028642-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Air</h4>
                                 <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/4103374-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Nikon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/5001645-270x400.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Play Station</h4>
                                 <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/9780141033570-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Pro</h4>
                                 <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/images-7-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Bose Speaker</h4>
                                 <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/une-fois-dans-vie-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Samsung Galaxy S8</h4>
                                 <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/Une-terre-promise-160x237.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple iPhone</h4>
                                 <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Canon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Google Pixel</h4>
                                 <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <div class="img-box">
                                 <img src="frontend/img/w2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple Watch</h4>
                                 <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control right" href="#myCarousel3" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="full">
                  <div class="logo_footer">
                     <a href="#"><img width="50" src="frontend/img/icons/img1.png" alt="logo img" /></a>
                  </div>
                  <br>
                  <div class="information_f">
                     <p><strong>ADDRESS:</strong> 28 White tower, Avenue Mohammed V Tetouan City, MOROCCO</p>
                     <p><strong>TELEPHONE:</strong><a href="tel:+212660252214"> +212 660 252 214 </a></p>
                     <p><strong>EMAIL:</strong><a href="mailto:ebook@gmail.com"> ebook@gmail.com</a></p>
                  </div>
               </div>
            </div>
            <div class="col-md-8">
               <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="widget_menu">
                              <h3>Ebook</h3>
                              <ul>
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Services</a></li>
                                 <li><a href="#">Your Opnions</a></li>

                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="widget_menu">
                              <h3>Account</h3>
                              <ul>
                                 <li><a href="#">Account</a></li>
                                 <li><a href="#">Login</a></li>
                                 <li><a href="#">Register</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Social</h3>
                        <div class="social">
                           <p>Follow Us on:</p>
                           <a style="font-size: x-large;" href=""><i  class='fa fa-facebook' aria-hidden="true"></i></a>
                           <a style="font-size: x-large;" href=""><i class='fa fa-twitter' aria-hidden="true"></i></a>
                           <a style="font-size: x-large;" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <br>
                        <div class="whatsapp">
                           <p>Contact Us on: </p>
                           <a style="font-size: x-large;" href=""><i class='fa fa-whatsapp' aria-hidden="true"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>


   @endsection


   @section('scripts')
   <script>
   $('.trending-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })
  </script>
 @endsection