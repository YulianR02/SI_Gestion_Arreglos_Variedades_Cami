<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
    <meta content="Spruko" name="author">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    {{-- Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {!! Html::style('assets/vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}
    {!! Html::style('assets/vendor/boxicons/css/boxicons.min.css') !!}
    {!! Html::style('assets/vendor/glightbox/css/glightbox.min.css') !!}
    {!! Html::style('assets/vendor/swiper/swiper-bundle.min.css') !!}

    {!! Html::style('assets/css/style.css') !!}
    <!-- Icons -->
    <link href="/assets/css/icons.css" rel="stylesheet">

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Ansta CSS -->
    <link href="/assets/css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Data table css -->
    <link href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />


    <!-- Tabs CSS -->
    <link href="/assets/plugins/tabs/style.css" rel="stylesheet" type="text/css">



    <!-- jvectormap CSS -->
    <link href="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />




    <!-- Custom scroll bar css-->
    <link href="/assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- Sidemenu Css -->
    <link href="/assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">
    @yield('style')
</head>

<body class="app sidebar-mini rtl">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar ">
                <div class="sidebar-img">
                    <a class="navbar-brand" href="index-2.html"><img alt="..." class="navbar-brand-img main-logo"
                            src="/assets/img/brand/LogoT.png"> <img alt="..." class="navbar-brand-img logo"
                            src="/assets/img/brand/logo.png"></a>
                    <ul class="side-menu">

                        @if (@Auth::user()->hasRole('Administrador'))
                            <li>
                                <span class="side-menu__item">ADMINISTRADOR</span>
                            </li>
                        @elseif(@Auth::user()->hasRole('Cliente'))
                            <li>
                                <span class="side-menu__item">CLIENTE</span>
                            </li>
                        @else
                            <li>
                                <span class="side-menu__item">USUARIO SIN ROL</span>
                            </li>
                        @endif
                        <li class="slide">
                            <a class="side-menu__item active" data-toggle="slide" href="#"><i
                                    class="side-menu__icon fe fe-home"></i><span
                                    class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a class="slide-item" href="index-2.html">Retail Sales Dashboard</a>
                                </li>
                                <li>
                                    <a class="slide-item" href="dashboard-social.html">Social Dashboard</a>
                                </li>
                                <li>
                                    <a class="slide-item" href="dashboard-marketing.html">Marketing Dashboard</a>
                                </li>
                                <li>
                                    <a class="slide-item" href="dashboard-it.html">IT Dashboard</a>
                                </li>
                                <li>
                                    <a class="slide-item" href="dashboard-cryptocurrency.html">Cryptocurrency
                                        Dashboard</a>
                                </li>

                            </ul>
                        </li>
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="cards.html" class="slide-item">Cards</a>
                                </li>
                                <li>
                                    <a href="dragable-cards.html" class="slide-item">Dragable Cards</a>
                                </li>
                                <li>
                                    <a href="widgets.html" class="slide-item">Widgets</a>
                                </li>
                                <li>
                                    <a href="full-calendar.html" class="slide-item">Full Calendar</a>
                                </li>
                                <li>
                                    <a href="range-slider.html" class="slide-item">Range Slider</a>
                                </li>
                                <li>
                                    <a href="scroll-bar.html" class="slide-item">Scroll Bar</a>
                                </li>
                                <li>
                                    <a href="sweet-alerts.html" class="slide-item">Sweet Alerts</a>
                                </li>
                                <li>
                                    <a href="timeline.html" class="slide-item">Timeline</a>
                                </li>
                                <li>
                                    <a href="users.html" class="slide-item">Users</a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="forms.html" class="slide-item">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="form-select2.html" class="slide-item">Forms Select2</a>
                                </li>
                                <li>
                                    <a href="file-uploads.html" class="slide-item">Forms Uploads</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html" class="slide-item">Form wizard</a>
                                </li>
                                <li>
                                    <a href="datepicker.html" class="slide-item">Form Datepicker</a>
                                </li>
                                <li>
                                    <a href="form-switches.html" class="slide-item">Form switches</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="maps.html" class="slide-item">Google Maps</a>
                                </li>
                                <li>
                                    <a href="vector-map.html" class="slide-item">Vector Map</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="tables.html" class="slide-item">Tables</a>
                                </li>
                                <li>
                                    <a href="datatable.html" class="slide-item">Data Tables</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-bar-chart-2"></i><span class="side-menu__label">Chart Types</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="chart-flot.html" class="slide-item">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="chart-high.html" class="slide-item">High Charts </a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html" class="slide-item">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="charts-echarts.html" class="slide-item">Echart Charts</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html" class="slide-item">Morris Charts</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="user-profile.html" class="slide-item">User Profile</a>
                                </li>
                                <li>
                                    <a href="email-inbox.html" class="slide-item">Email Inbox</a>
                                </li>
                                <li>
                                    <a href="email-compose.html" class="slide-item">Email</a>
                                </li>
                                <li>
                                    <a href="gallery.html" class="slide-item">Gallery</a>
                                </li>
                                <li>
                                    <a href="invoice.html" class="slide-item">Invoice</a>
                                </li>
                                <li>
                                    <a href="pricing.html" class="slide-item">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="empty.html" class="slide-item">Empty</a>
                                </li>
                                <li>
                                    <a href="under-construction.html" class="slide-item">Under Construction</a>
                                </li>
                                <li>
                                    <a href="400.html" class="slide-item">Page 400</a>
                                </li>
                                <li>
                                    <a href="404.html" class="slide-item">Page 404</a>
                                </li>
                                <li>
                                    <a href="500.html" class="slide-item">Page 500</a>
                                </li>
                                <li>
                                    <a href="505.html" class="slide-item">Page 505</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-italic"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="icons-feather.html" class="slide-item">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons-fontawesome.html" class="slide-item">Font Awesome Icons</a>
                                </li>
                                <li>
                                    <a href="icons-ion.html" class="slide-item">Ion Icons</a>
                                </li>
                                <li>
                                    <a href="icons-materialdesign.html" class="slide-item">Materialdesign Icons</a>
                                </li>
                                <li>
                                    <a href="icons-nucleo.html" class="slide-item">Nucleo Icons</a>
                                </li>
                                <li>
                                    <a href="icons-pe7.html" class="slide-item">pe7 Icons</a>
                                </li>
                                <li>
                                    <a href="icons-simpleline.html" class="slide-item">Simpleline Icons</a>
                                </li>
                                <li>
                                    <a href="icons-themify.html" class="slide-item">Themify Icons</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Ui Elements</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="accordion.html" class="slide-item">Accordion</a>
                                </li>
                                <li>
                                    <a href="alerts.html" class="slide-item">Alerts</a>
                                </li>
                                <li>
                                    <a href="badges.html" class="slide-item">Badges</a>
                                </li>
                                <li>
                                    <a href="buttons.html" class="slide-item">Buttons</a>
                                </li>
                                <li>
                                    <a href="carousel.html" class="slide-item">Carousels</a>
                                </li>
                                <li>
                                    <a href="colors.html" class="slide-item">Colors</a>
                                </li>
                                <li>
                                    <a href="dropdowns.html" class="slide-item">Drop downs</a>
                                </li>
                                <li>
                                    <a href="grids.html" class="slide-item">Grids</a>
                                </li>
                                <li>
                                    <a href="modal.html" class="slide-item">Modal</a>
                                </li>
                                <li>
                                    <a href="navigation.html" class="slide-item">Navigation</a>
                                </li>
                                <li>
                                    <a href="pagination.html" class="slide-item">Pagination</a>
                                </li>
                                <li>
                                    <a href="popovers.html" class="slide-item">Popovers</a>
                                </li>
                                <li>
                                    <a href="progress.html" class="slide-item">Progress</a>
                                </li>
                                <li>
                                    <a href="tabs.html" class="slide-item">Tabs</a>
                                </li>
                                <li>
                                    <a href="tooltip.html" class="slide-item">Tooltip</a>
                                </li>
                                <li>
                                    <a href="typography.html" class="slide-item">Typography</a>
                                </li>
                            </ul>
                        </li> --}}

                        @can('categories.create', 'categories.index')
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="side-menu__icon fe fe-box"></i><span
                                        class="side-menu__label">Categorias</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="{{ route('categories.create') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-plus"></i>Crear</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('categories.index') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-list"></i>Lista</a>
                                    </li>

                                </ul>
                            </li>

                        @endcan
                        @can('subcategories.create', 'subcategories.index')
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="side-menu__icon fe fe-codepen"></i><span
                                        class="side-menu__label">Subcategorias</span><i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="{{ route('subcategories.create') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-plus"></i>Crear
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('subcategories.index') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-list"></i>Lista</a>
                                    </li>

                                </ul>
                            </li>
                        @endcan
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                    class="side-menu__icon fe fe-shopping-cart"></i><span
                                    class="side-menu__label">Productos</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                @can('products.create')
                                    <li>
                                        <a href="{{ route('products.create') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-plus"></i>Crear</a>
                                    </li>
                                @endcan
                                    <li>
                                        <a href="{{ route('products.index') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-list"></i>Lista</a>
                                    </li>
                                    @can('apartados.index')
                                    <li>
                                        <a href="{{ route('apartados.index') }}" class="slide-item">
                                            <i class=" side-menu__icon far fa-list-alt"></i>Apartados</a>
                                    </li>
                                    @endcan

                                    <li>
                                        <a href="{{ route('misapartados.index') }}" class="slide-item">
                                            <i class="side-menu__icon fas fa-clipboard-list"></i>Mis apartados</a>
                                    </li>


                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                    class="side-menu__icon fe fe-shopping-bag"></i><span
                                    class="side-menu__label">Arreglos</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                @can('arreglos.create')
                                    <li>
                                        <a href="{{ route('arreglos.create') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-plus"></i>Crear</a>
                                    </li>
                                @endcan
                                @can('arreglos.index')
                                <li>
                                    <a href="{{ route('arreglos.index') }}" class="slide-item"><i
                                            class="side-menu__icon fe fe-list"></i>Lista</a>
                                </li>
                                @endcan
                                <li>
                                    <a href="{{ route('misarreglos.index') }}" class="slide-item"><i
                                            class="side-menu__icon fe fe-list"></i>Mis arreglos</a>
                                </li>

                            </ul>
                        </li>
                        @can('users.index', 'users.create')
                            <li class="slide">
                                <a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="side-menu__icon fe fe-user"></i><span
                                        class="side-menu__label">Usuarios</span><i class="angle fa fa-angle-right"></i></a>
                                <ul class="slide-menu">
                                    <li>
                                        <a href="{{ route('users.index') }}" class="slide-item"><i
                                                class="side-menu__icon fe fe-list"></i>Lista</a>
                                    </li>

                                </ul>
                            </li>
                        @endcan
                        @can('roles.create', 'roles.update', 'roles.index')
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                    class="side-menu__icon fe fe-users"></i><span
                                    class="side-menu__label">roles</span><i class="angle fa fa-angle-right"></i>
                            </a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="{{ route('roles.create') }}" class="slide-item"><i
                                            class="side-menu__icon fe fe-plus"></i>Crear</a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.index') }}" class="slide-item"><i
                                            class="side-menu__icon fe fe-list"></i>Lista</a>
                                </li>

                            </ul>
                        </li>
                        @endcan



                        {{-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i
                                    class="side-menu__icon fe fe-shopping-cart"></i><span
                                    class="side-menu__label">E-commerce</span><i
                                    class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a href="shop.html" class="slide-item">Products</a>
                                </li>
                                <li>
                                    <a href="cart.html" class="slide-item">Shopping Cart</a>
                                </li>
                            </ul>
                        </li> --}}



                        <li>
                            <a class="side-menu__item" href="https://themeforest.net/user/sprukosoft/portfolio"><i
                                    class="side-menu__icon fa fa-question-circle"></i><span
                                    class="side-menu__label">Help & Support</span></a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Sidebar menu-->

            <!-- app-content-->
            <div class="app-content ">
                <div class="side-app">
                    <div class="main-content">
                        <!-- Top navbar -->
                        <nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
                            <div class="container-fluid">
                                <a aria-label="Hide Sidebar" data-toggle="sidebar" href="#"><i
                                        class="fas fa-bars"></i></a>

                                <!-- Horizontal Navbar -->

                                <!-- Brand -->
                                <a class="navbar-brand pt-0 d-md-none" href="{{ route('home') }}">
                                    <img src="#" class="navbar-brand-img" alt="...">
                                </a>

                                <!-- User -->
                                <ul class="navbar-nav align-items-center ">
                                    <!-- Form -->
                                    <form class="navbar-search navbar-search-dark form-inline mr-3 ml-lg-auto">
                                        <div class="form-group mb-0">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-search"></i></span>
                                                </div><input class="form-control" placeholder="Search" type="text">
                                            </div>
                                        </div>
                                    </form>

                                    @guest
                                    @else
                                        <li class="nav-item dropdown">
                                            <a aria-expanded="false" aria-haspopup="true" class="nav-link pr-md-0"
                                                data-toggle="dropdown" href="#" role="button">
                                                <div class="media align-items-center">

                                                    <div class="media-body ml-2 d-none d-lg-block">
                                                        <span class="mb-0 ">{{ Auth::user()->name }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                                <div class=" dropdown-header noti-title">
                                                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                                                </div>
                                                <a class="dropdown-item" href="{{route('users.profile.index')}}"><i
                                                        class="ni ni-single-02"></i> <span>Mi perfil</span></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                                    <i class="ni ni-user-run"></i>
                                                    {{ __('Cerrar Sesión') }}
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                    <span></span>
                                                </a>
                                            </div>
                                        </li>
                                    @endguest

                                </ul>
                            </div>
                        </nav>
                        <!-- Top navbar-->
                        <div class="dropdown-divider"></div>
                        <!-- Page content -->
                        <div class="container-fluid pt-8">
                            <!-- dejar -->
                            <div class="page-header mt-0 shadow p-3">
                                <ol class="breadcrumb mb-sm-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                                    @yield('breadcrumb')
                                </ol>
                                {{-- <div class="btn-group mb-0">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Actions</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fas fa-plus mr-2"></i>Add new
                                            Page</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-eye mr-2"></i>View the
                                            page Details</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit mr-2"></i>Edit
                                            Page</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>
                                            Settings</a>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- dejar -->


                            @if (session('info'))

                                <div class="alert alert-success" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                                    <span class="alert-inner--text">{{ session('info') }}</span>
                                </div>
                                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('info') }}
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div> --}}
                            @endif
                            {{-- @if ($errors->any())
                                <div class="alert alert-warning" role="alert">
                                    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                    <span class="alert-inner--text">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </span>
                                </div>
                            @endif --}}
                            <!-- Default box -->
                            @yield('content')
                            <!-- /.card -->





                            <!-- Footer -->
                            <footer class="footer">
                                <div class="row align-items-center justify-content-xl-between">
                                    <div class="col-xl-6">
                                        <div class="copyright text-center text-xl-left text-muted">
                                            <p class="text-sm font-weight-500">Copyright 2020 © All Rights
                                                Reserved.</p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6">
                                        <p class="float-right text-sm font-weight-500"><a
                                                href="www.templatespoint.net">Templates Point</a></p>
                                    </div> --}}
                                </div>
                            </footer>
                            <!-- Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- app-content-->
        </div>
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    {{-- sweetAlerts Script --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Ansta Scripts -->
    <!-- Core -->
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Optional JS -->
    <script src="/assets/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/plugins/chart.js/dist/Chart.extension.js"></script>

    <!-- Data tables -->
    <script src="/assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

    <!-- Fullside-menu Js-->
    <script src="/assets/plugins/toggle-sidebar/js/sidemenu.js"></script>

    <!-- Custom scroll bar Js-->
    <script src="/assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Ansta JS -->
    <script src="/assets/js/custom.js"></script>
    <script>
        $(function(e) {
            $('#example').DataTable();

            var table = $('#example1').DataTable();
            $('button').click(function() {
                var data = table.$('input, select').serialize();

            });
            $('#example2').DataTable({
                "scrollY": "200px",
                "scrollCollapse": true,
                "paging": false
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
