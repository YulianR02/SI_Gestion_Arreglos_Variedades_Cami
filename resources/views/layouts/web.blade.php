<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Patrón - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/brand/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {!! Html::style('assets/vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}
    {!! Html::style('assets/vendor/boxicons/css/boxicons.min.css') !!}
    {!! Html::style('assets/vendor/glightbox/css/glightbox.min.css') !!}
    {!! Html::style('assets/vendor/swiper/swiper-bundle.min.css') !!}

    <!-- Template Main CSS File -->
    {!! Html::style('assets/css/style.css') !!}

</head>

<body>

    @yield('content')

    <!-- Vendor JS Files -->
    {!! Html::script('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
    {!! Html::script('assets/vendor/glightbox/js/glightbox.min.js') !!}
    {!! Html::script('assets/vendor/isotope-layout/isotope.pkgd.min.js') !!}
    {!! Html::script('assets/vendor/php-email-form/validate.js') !!}
    {!! Html::script('assets/vendor/purecounter/purecounter.js') !!}
    {!! Html::script('assets/vendor/swiper/swiper-bundle.min.js') !!}

    <!-- Template Main JS File -->
    {!! Html::script('assets/js/main.js') !!}

</body>

</html>
