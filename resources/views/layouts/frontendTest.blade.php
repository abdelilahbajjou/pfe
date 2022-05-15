<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
       <!--Font awesome-->
       <script src="https://kit.fontawesome.com/e0e1ffda5d.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js">


<!-- =====BOX ICONS===== -->
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

   <!-- =====BOOTSTRAP===== -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



   <!-- ====GOOGLE FONTS-popins==== -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

   <!-- ===== CSS ===== d mounir frontend-->
   <link rel="stylesheet" href="frontend/css/styles.css">
    
</head>
<body>
    

    <div class="content">

     @yield('content')
   
    </div>
    









    <!--sweet alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{session('status')}}")
        </script>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
   <!--===== GSAP =====-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

   <!--===== MAIN JS  mounir frontend=====-->
   <script src="frontend/js/main.js"></script>
</body>
</html>

