<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link href="{{ asset('frontendofficial/css/style.css') }}" rel="stylesheet">

    <!--bootstrap-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo">logo </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="{{route('cart')}}" class="fas fa-shopping-cart"></a>
            {{-- @guest --}}

            {{-- <div id="login-btn" class="fas fa-user"></div> --}}
            {{-- @endguest --}}
            {{-- @guest --}}
            @if (!Auth::user())
            <div id="login-btn" class="fas fa-user"></div>
            @else
                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <div id="login-btn" class="fas fa-user"></div>
                    {{-- <span style="font-size: 50%;color:rgb(255, 72, 0);font-weight:600">{{ Auth::user()}}</span> --}}
                </a>

                <div class="dropdown-menu dropdown-menu-end" id="dropdown-menu-logout" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        My orders
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            @endif
            

        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a class="nav-item" href="{{route('all_books')}}">all books</a>

            <div class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    categories
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @php 
                    $category=App\Models\Category::all();
                    @endphp

                    @foreach ($category as $cat)
                    <li><a class="dropdown-item" href="{{url('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                    <li><hr class="dropdown-divider"></li>
                    @endforeach

                </ul>
            </div>

            <a class="nav-item" href="{{route('welcome')}}">featured</a>
            <a class="nav-item" href="{{route('about_us')}}">about us</a>
        </nav>
    </div>

</header>

<!-- header section ends -->


<!-- login form  -->

{{-- <div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>


    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div> --}}



 {{-- @guest --}}

@if (Route::has('login'))


<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

            <h3>sign in</h3>
            <span>email</span>
            <input type="email" class="box form-control @error('email') is-invalid @enderror" name="email" placeholder="enter your email" value="{{ old('email') }}" id="email" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <span>password</span>
            <input type="password" class="box form-control @error('password') is-invalid @enderror" name="password" placeholder="enter your password" id="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


            <div class="checkbox">
                <input type="checkbox"  name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember-me"> remember me</label>
            </div>

            {{-- submit button --}}
            <input type="submit" value="sign in" class="btn"> 

            {{-- forget password --}}
           @if (Route::has('password.request'))
                <p>forget password ? <a href="{{ route('password.request') }}">click here</a></p>
            @endif

            {{-- register --}}
         @if (Route::has('register'))
            <p>don't have an account ? <a href="{{ route('register') }}">create one</a></p>

            @endif


    </form>
</div>
@endif

{{-- @else

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">
            My Profile
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endif --}}

{{-- @endguest  --}}









@yield('content')





















<section class="footer">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> top sellings </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> new arrivals </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:+212561112133" > <i class="fas fa-phone"></i> +212 561-112-133 </a>
            <a href="tel:+212660102033" > <i class="fas fa-phone"></i> +212 660-102-033 </a>
            <a href="mailto:ebook@gmail.com" > <i class="fas fa-envelope"></i> ebook@gmail.com </a>
            <br>
            <h3>adress</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> 28 white house, Mohammed V street Tetuan, MOROCCO </a>

        </div>

    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-whatsapp"></a>
    </div>

    <div class="credit"><span>EBook</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!--jQuery cdn-->
<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('frontendofficial/js/script.js')}}"></script>

<!--sweet alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
    <script>
        swal("{{session('status')}}")
    </script>
@endif

@yield('scripts')


</body>
</html>