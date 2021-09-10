<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restablecer contraseña - Patron</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    {!! Html::style('\v18\images\icons\favicon.ico') !!}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--=============================================================
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\bootstrap\css\bootstrap.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\fonts\font-awesome-4.7.0\css\font-awesome.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\fonts\Linearicons-Free-v1.0.0\icon-font.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\animate\animate.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\css-hamburgers\hamburgers.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\animsition\css\animsition.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\select2\select2.min.css') !!}
    <!--===============================================================================================-->
    {!! Html::style('\v18\vendor\daterangepicker\daterangepicker.css') !!}
    <!--===============================================================================================-->

    {!! Html::style('css/util.css') !!}
    {!! Html::style('css/main.css') !!}
    @yield('style')
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                @yield('content')
                <div class="login100-more">
                </div>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/jquery/jquery-3.2.1.min.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/animsition/js/animsition.min.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/bootstrap/js/popper.js') !!}
    {!! Html::script('/v18/vendor/bootstrap/js/bootstrap.min.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/select2/select2.min.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/daterangepicker/moment.min.js') !!}
    {!! Html::script('/v18/vendor/daterangepicker/daterangepicker.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/vendor/countdowntime/countdowntime.js') !!}
    <!--===============================================================================================-->
    {!! Html::script('/v18/js/main.js') !!}

</body>

</html>
