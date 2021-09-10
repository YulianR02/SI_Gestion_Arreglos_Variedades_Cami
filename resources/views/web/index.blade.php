@extends('layouts.web')
@section('content')
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    @include('web._categories')
                    <!-- ============================================== HOT DEALS ============================================== -->

                    @include('web._hot-deals')
                    <!-- ============================================== HOT DEALS: END ============================================== -->

                    <!-- ============================================== SPECIAL OFFER ============================================== -->

                    <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                    <!-- ============================================== PRODUCT TAGS ============================================== -->
                    <div class="sidebar-widget product-tag">
                        <h3 class="section-title">Product tags</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a
                                    class="item active" title="Vest" href="category.html">Vest</a> <a class="item"
                                    title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture"
                                    href="category.html">Furniture</a> <a class="item" title="T-shirt"
                                    href="category.html">T-shirt</a> <a class="item" title="Sweatpants"
                                    href="category.html">Sweatpants</a> <a class="item" title="Sneaker"
                                    href="category.html">Sneaker</a> <a class="item" title="Toys"
                                    href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a>
                            </div>
                            <!-- /.tag-list -->
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                    <!-- ============================================== SPECIAL DEALS ============================================== -->

                    
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                    <!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter outer-bottom-small">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Subscribe to our newsletter">
                                </div>
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                        <!-- /.sidebar-widget-body -->
                    </div>
                    <!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                    <!-- ============================================== Testimonials============================================== -->
                    {{-- <div class="sidebar-widget outer-top-vs ">
                        <div id="advertisement" class="advertisement">
                            <div class="item">
                                <div class="avatar"><img src="marazzo/assets/images/testimonials/member1.png" alt="Image">
                                </div>
                                <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis.
                                    Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
                                <div class="clients_author">John Doe <span>Abc Company</span> </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="avatar"><img src="marazzo/assets/images/testimonials/member3.png" alt="Image">
                                </div>
                                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis.
                                    Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
                                <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                            </div>
                            <!-- /.item -->

                            <div class="item">
                                <div class="avatar"><img src="marazzo/assets/images/testimonials/member2.png" alt="Image">
                                </div>
                                <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis.
                                    Nunc condime tum metus eud molest sed consectetuer. Sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat.<em>"</em></div>
                                <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div> --}}

                    <!-- ============================================== Testimonials: END ============================================== -->


                </div>
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Top Brands</div>
                                        <div class="big-text fadeInDown-1"> New Collections </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit.</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a
                                                href="index6c11.html?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                            <div class="item" style="background-image: url(assets/images/sliders/02.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Spring 2018</div>
                                        <div class="big-text fadeInDown-1"> Women Fashion </div>
                                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia
                                                voluptas sit aspernatur aut odit aut fugit</span> </div>
                                        <div class="button-holder fadeInDown-3"> <a
                                                href="index6c11.html?page=single-product"
                                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->

                        </div>
                        <!-- /.owl-carousel -->
                    </div>

                    <!-- ========================================= SECTION – HERO : END ========================================= -->


                    <!-- ============================================== SCROLL TABS ============================================== -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                        <div class="more-info-tab clearfix ">
                          <h3 class="new-product-title pull-left">New Products</h3>
                          <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
                            <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
                            <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
                            <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
                          </ul>
                          <!-- /.nav-tabs -->
                        </div>

                        @include('web._new')

                        <!-- /.tab-content -->
                      </div>
                      <!-- /.scroll-tabs -->
                    <!-- ============================================== SCROLL TABS : END ============================================== -->


                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"> <img class="img-responsive"
                                            src="marazzo/assets/images/banners/home-banner1.jpg" alt=""> </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"> <img class="img-responsive"
                                            src="marazzo/assets/images/banners/home-banner3.jpg" alt=""> </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>

                            <!-- /.col -->
                            <div class="col-md-4 col-sm-4">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"> <img class="img-responsive"
                                            src="marazzo/assets/images/banners/home-banner2.jpg" alt=""> </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->

                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    @include('web._wide')
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->
                    <div class="wide-banners outer-bottom-xs">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="wide-banner1 cnt-strip">
                                    <div class="image"> <img class="img-responsive"
                                            src="marazzo/assets/images/banners/home-banner.jpg" alt=""> </div>
                                    <div class="strip strip-text">
                                        <div class="strip-inner">
                                            <h2 class="text-right">Amazing Sunglasses<br>
                                                <span class="shopping-needs">Get 40% off on selected items</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                    </div>
                                    <!-- /.new-label -->
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="wide-banner cnt-strip">
                                    <div class="image"> <img class="img-responsive"
                                            src="marazzo/assets/images/banners/home-banner4.jpg" alt=""> </div>


                                    <!-- /.new-label -->
                                </div>
                                <!-- /.wide-banner -->
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wide-banners -->
                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->



                    <!-- /.sidebar-widget -->
                    <!-- ============================================== BEST SELLER : END ============================================== -->

                    <!-- ============================================== BLOG SLIDER ============================================== -->

                    @include('web._blog')
                    <!-- ============================================== BLOG SLIDER : END ============================================== -->

                    @include('web._feactured')
                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"> <a href="#" class="image"> <img
                                    data-echo="marazzo/assets/images/brands/brand1.jpg" src="marazzo/assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item m-t-10"> <a href="#" class="image"> <img
                                    data-echo="marazzo/assets/images/brands/brand2.jpg" src="marazzo/assets/images/blank.gif"
                                    alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand3.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand4.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand5.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand6.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand2.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand4.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand1.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="marazzo/assets/images/brands/brand5.jpg"
                                    src="marazzo/assets/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->

    <!-- ============================================== INFO BOXES ============================================== -->
    {{-- <div class="row our-features-box">
        <div class="container">
            <ul>
                <li>
                    <div class="feature-box">
                        <div class="icon-truck"></div>
                        <div class="content-blocks">We ship worldwide</div>
                    </div>
                </li>
                <li>
                    <div class="feature-box">
                        <div class="icon-support"></div>
                        <div class="content-blocks">call
                            +1 800 789 0000</div>
                    </div>
                </li>
                <li>
                    <div class="feature-box">
                        <div class="icon-money"></div>
                        <div class="content-blocks">Money Back Guarantee</div>
                    </div>
                </li>
                <li>
                    <div class="feature-box">
                        <div class="icon-return"></div>
                        <div class="content">30 days return</div>
                    </div>
                </li>

            </ul>
        </div>
    </div> --}}
    <!-- /.info-boxes -->
    <!-- ============================================== INFO BOXES : END ============================================== -->


@endsection
