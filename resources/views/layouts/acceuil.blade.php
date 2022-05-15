<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- =====BOX ICONS===== -->
   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

   <!-- =====BOOTSTRAP===== -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



   <!-- ====GOOGLE FONTS-popins==== -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

   <!-- ===== CSS ===== -->
   <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
   <!--owl carousel-->
   <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">

   <title>E B O O K</title>
</head>

<body>


    @yield('content')




    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.theme.default.min.css')}}"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    
    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
 
    <!--===== MAIN JS =====-->
    <script src="{{asset('frontend/js/main.js')}}"></script>

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