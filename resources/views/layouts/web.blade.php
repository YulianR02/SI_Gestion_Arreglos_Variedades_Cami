<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Home - Variedades Cami</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style('marazzo/assets/css/bootstrap.min.css') !!}
    <!-- Customizable CSS -->
    {!! Html::style('marazzo/assets/css/main.css') !!}
    {!! Html::style('marazzo/assets/css/blue.css') !!}
    {!! Html::style('marazzo/assets/css/owl.carousel.css') !!}
    {!! Html::style('marazzo/assets/css/owl.transitions.css') !!}
    {!! Html::style('marazzo/assets/css/animate.min.css') !!}
    {!! Html::style('marazzo/assets/css/rateit.css') !!}
    {!! Html::style('marazzo/assets/css/bootstrap-select.min.css') !!}
    <!-- Icons/Glyphs -->
    {!! Html::style('marazzo/assets/css/font-awesome.css') !!}
    <!-- Fonts -->
    {!! Html::style('https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,700') !!}
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">
        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li class="myaccount"><a href="#"><span>My Account</span></a></li>
                            <li class="wishlist"><a href="#"><span>Wishlist</span></a></li>
                            <li class="header_cart hidden-xs"><a href="#"><span>My Cart</span></a></li>
                            <li class="check"><a href="#"><span>Checkout</span></a></li>
                            <li class="login"><a href="{{'/login'}}"><span>Login</span></a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <a href="{{'/'}}">
                            <img src="\marazzo\assets\images\log.png" alt=""> <br>    
                        </a>
                    </div>
                    <!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- /.main-header -->
        @include('layouts._nav')
    </header>

    <!-- ============================================== HEADER : END ============================================== -->

    @yield('content')





    <!-- ============================================================= FOOTER ============================================================= -->
    <footer id="footer" class="footer color-bg">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="address-block">

                            <!-- /.module-heading -->

                            {{-- <div class="module-body">
                                <ul class="toggle-footer" style="">
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                    class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body">
                                            <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                    class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body">
                                            <p> + (888) 123-4567 / + (888) 456-7890</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                                                    class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                        <div class="media-body"> <span><a href="#">marazzo@themesground.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col -->

                    {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Customer Service</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                                <li><a href="#" title="About us">Order History</a></li>
                                <li><a href="#" title="faq">FAQ</a></li>
                                <li><a href="#" title="Popular Searches">Specials</a></li>
                                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col --> --}}

                    {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Corporation</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a title="Your Account" href="#">About us</a></li>
                                <li><a title="Information" href="#">Customer Service</a></li>
                                <li><a title="Addresses" href="#">Company</a></li>
                                <li><a title="Addresses" href="#">Investor Relations</a></li>
                                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div>
                    <!-- /.col --> --}}

                    {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="module-heading">
                            <h4 class="module-title">Why Choose Us</h4>
                        </div>
                        <!-- /.module-heading -->

                        <div class="module-body">
                            <ul class='list-unstyled'>
                                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                                <li><a href="#" title="Blog">Blog</a></li>
                                <li><a href="#" title="Company">Company</a></li>
                                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.module-body -->
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-4 no-padding social">
                    <ul class="link">
                        <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                        <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                        <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#"
                                title="GooglePlus"></a></li>
                        <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                        <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a>
                        </li>
                        <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a>
                        </li>
                        <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank"
                        href="https://www.templateshub.net">Templates Hub</a> </div>
                <div class="col-xs-12 col-sm-4 no-padding"> --}}
                    <div class="clearfix payment-methods">
                        <ul>
                            <li><img src="marazzo/assets/images/payments/1.png" alt=""></li>
                            <li><img src="marazzo/assets/images/payments/2.png" alt=""></li>
                            <li><img src="marazzo/assets/images/payments/3.png" alt=""></li>
                            <li><img src="marazzo/assets/images/payments/4.png" alt=""></li>
                            <li><img src="marazzo/assets/images/payments/5.png" alt=""></li>
                        </ul>
                    </div>
                    <!-- /.payment-methods -->
                </div>
            </div>
        </div>
    </footer>



    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    {!! Html::script('marazzo/assets/js/jquery-1.11.1.min.js') !!}
    {!! Html::script('marazzo/assets/js/bootstrap.min.js') !!}
    {!! Html::script('marazzo/assets/js/bootstrap-hover-dropdown.min.js') !!}
    {!! Html::script('marazzo/assets/js/owl.carousel.min.js') !!}
    {!! Html::script('marazzo/assets/js/echo.min.js') !!}
    {!! Html::script('marazzo/assets/js/jquery.easing-1.3.min.js') !!}
    {!! Html::script('marazzo/assets/js/bootstrap-slider.min.js') !!}
    {!! Html::script('marazzo/assets/js/jquery.rateit.min.js') !!}
    {!! Html::script('marazzo/assets/js/lightbox.min.js') !!}
    {!! Html::script('marazzo/assets/js/bootstrap-select.min.js') !!}
    {!! Html::script('marazzo/assets/js/wow.min.js') !!}
    {!! Html::script('marazzo/assets/js/scripts.js') !!}

</body>

</html>
