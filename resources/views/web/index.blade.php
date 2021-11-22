@extends('layouts.web')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="assets/img/log.png" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Acerca de Patrón</a></li>
                    <li><a class="nav-link scrollto" href="#services">Módulos</a></li>
                    <li><a class="nav-link scrollto" href="#ventajas">Ventajas</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                    <li><a class="nav-link scrollto" href="{{route('login')}}">Inicio de Sesión</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Mejora el rendimiento de las actividades de tu empresa con PATRÓN </h1>
                    <div><a href="#about" class="btn-get-started scrollto">Mas Información</a></div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/central-img.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container">
                <h3>Patrón</h3>
                <p>Enfocado en la mejora de los procesos de tu empresa, la interacción con el usuario, administración de
                    datos y los clientes que ingresan a la empresa </p>
                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 d-flex justify-content-center img-box align-items-stretch position-relative">
                        <img src="assets/img/fondo-img.jpg" class="img-fluid" alt="">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">


                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-check-fill"></i></div>
                            <h4 class="title"><a href="">Mejoras al Administrador</a></h4>
                            <p class="description">Para mejorar la experiencia de uso del administrador en el programa
                                aplicamos funciones de lo mas requeridas como lo son el registro de productos, edicion y
                                eliiminacion al mismo tiempo puede gestionar nuevos usuarios o usuarios ya existentes</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-plus-fill"></i></div>
                            <h4 class="title"><a href="">Mejoras al Cliente</a></h4>
                            <p class="description">Generamos unas funciones para los clientes en los que pueden tener una
                                mejor interaccion con el administrador y todo lo que les ofrece, algunas de sus funciones
                                seria la visualización de productos a la venta ofrecidos, el poder agregarlos al corro de
                                comprass y observar los detalles y costos de los productos entro otras funciones </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-eye-fill"></i></div>
                            <h4 class="title"><a href="">Mejoras a la visualización de productos</a></h4>
                            <p class="description">Para poderle ofrecer a los cleintes los productos de la empresa
                                requerimos de un sistema optimo, ¿como estas implementado?, bueno tenemos un diseño sencillo
                                donde mostramos la foto del producto con una breve descripcion y el costo con la opcion de
                                observar unos detalles mas a fondo del producto permitiendo que lo agreguen al carro de
                                compras del cliente </p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Módulos</h2>
                    <p>Para PATRÓN es importante que los usuarios conozcan a que módulos acceden y te los explica de manera
                        rapida y sencilla </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-lines-fill" style="color:#3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Registro De Usuarios</a></h4>
                            <p class="description">Se le ofrece al administrador una manera secilla y rapida de registrar
                                todos los datos de los usuarios que se necesitan para un mejor control en la empresa </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-grid-3x3-gap-fill" style="color: #3fcdc7;"></i>
                            </div>
                            <h4 class="title"><a href="">Registro De Categorías y SubCategorías </a></h4>
                            <p class="description">Un sistema sencillo y organizado para dividir mejor lo que ofreces
                                como empresa y los clientes puedan navegar de una manera mas secilla y accedan a lo que
                                quieren en verdad</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gear-wide" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Control De Encargos</a></h4>
                            <p class="description">Como empresa siempre se va a necesitar llevar unos datos claros de
                                todas las solicitudes y encargos de los clientes por esto se ofrece algo sencillo para
                                registrar dichos datos solicitados por el cliente </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-tags" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Registro De Productos</a></h4>
                            <p class="description">Para poder mostrar los servicios que se ofrecen al usuario
                                implementamos un sistema donde pues registrar los datos de lo que ofreces con su respectiva
                                foto para una mejor interaccion con el cliente </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-eye-fill" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Visualización De Productos</a></h4>
                            <p class="description">Es necesario poder mostrar los productos que se tienen en la empresa
                                para brindarselos al cliente de la mejor manera posible y cumplir con las espectativas que
                                se tienen en la empresa de dicho producto</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cart4" style="color:#3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Apartado De Productos</a></h4>
                            <p class="description">Para los clientes es necesario poder guardar dichos productos que mas
                                le llamaron la atención para esto implementamos un sistema en el que el cliente pueda
                                guardar dichos productos y poderlos pagar posteriormente</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <!--Ventajas-->
        <!-- ======= Services Section ======= -->
        <section id="ventajas" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Ventajas De Adquirir Patrón</h2>
                    <p>Sabemos que al adquirir un producto no solo se observa que nos ofrece tambien necesitamos saber
                        cuales son las ventajas que nos da sobre otros programas mas por es PATRÓN te va a contar un poco de
                        sus ventajas </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-lines-fill" style="color:#3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Administración</a></h4>
                            <p class="description">A nivel de administración podras ejecutar todas tus actividades de
                                manera organizada y rapida donde no perderas datos y no encontraras perdida alguna en la
                                navegación de actividades </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-check-fill" style="color: #3fcdc7;"></i>
                            </div>
                            <h4 class="title"><a href="">Usuarios </a></h4>
                            <p class="description">Para usuarios se les presenta una navegacion secilla y rapida donde
                                podra encontrar todo lo que necesita productos, informacion, y detalles de cada encargo que
                                realiza</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cash-coin" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Ventas</a></h4>
                            <p class="description">Al crear el catalogo de productos y poder registrar en distintas
                                categorías y subcategorías podran realizar distintos tipos de acceso al contacto con el
                                cliente y este podra encontrar todo lo que busca </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Ventajas-->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <section id="ventajas" class="services section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>CONTACTO</h2>
                        <p>Si gustas contactarte para alguna duda sobre nuestro servicios puedes contactarte mandando un
                            email en el siguiente formato</p>
                    </div>


                </div>

                </div>
                <center>
                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <center>
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Nombres" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Sujeto" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Mensaje "
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Cargando</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Tu mensaje ha sido entregado de manera exitosa. !GRACIAS
                                        POR TU APORTE</div>
                                </div>
                                <div class="text-center"><button type="submit">Mandar Mensaje</button></div>
                            </form>

                    </div>

                    </div>

                    </div>
            </section><!-- End Contact Section -->
            </center>

    </main><!-- End #main -->
    <!--footer-->
    <footer class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo"><img src="assets/img/log.png" alt="" class="img-fluid"></a>

        <!-- Uncomment below if you prefer to use text as a logo -->
        <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li>Patrón 2021 | Gestor De Confecciones |</li>
                <li> COPYRIGHT 2021 © | </li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </footer>

@endsection
