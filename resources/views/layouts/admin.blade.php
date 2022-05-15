<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
       <!--Font awesome-->
       <script src="https://kit.fontawesome.com/e0e1ffda5d.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js">
    
</head>
<body>
     

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text {{Request::is('dashboard')? 'active':''}}"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{route('categories')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('categories')? 'active':''}}"><i
                        class="fas fa-project-diagram me-2"></i>Categories</a>
                        <a href="{{route('add_categories')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('add-categories')? 'active':''}}"><i
                            class="fas fa-project-diagram me-2"></i> Add Categories</a>
                <a href="{{route('products')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('products')? 'active':''}}"><i
                        class="fas fa-chart-line me-2"></i>Products</a>
                <a href="{{route('add-products')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('add-products')? 'active':''}}"><i
                        class="fas fa-paperclip me-2"></i>Add Products</a>
                <a href="{{route('orders')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('orders')? 'active':''}}"><i
                            class="fas fa-chart-line me-2"></i>Orders</a>
                <a href="{{route('users')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{Request::is('users')? 'active':''}}"><i
                         class="fas fa-chart-line me-2"></i>Users</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Abdelilah Mounir
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                   @yield('content')
            </div>
        </div>
    </div>
    








    <!--dashboard template-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
                         
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <!--sweet alert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{session('status')}}")
        </script>
    @endif
</body>
</html>

