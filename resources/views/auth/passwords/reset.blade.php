@extends('layouts._reset')

@section('content')

    <form method="POST" action="{{ route('password.update') }}" class="login100-form validate-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <span class="login100-form-title p-b-43">
            <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 523.08 77.81">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #01a0c6;
                        }

                        .cls-2 {
                            fill: url(#linear-gradient);
                        }

                    </style>
                    <linearGradient id="linear-gradient" x1="681.4" y1="981.96" x2="681.4" y2="990.75"
                        gradientTransform="matrix(8, 0, 0, -8, -4584, 8434)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#a22a91" />
                        <stop offset="1" stop-color="#17a5c3" />
                    </linearGradient>
                </defs>
                <title>logoT</title>
                <path class="cls-1"
                    d="M765.36,567.83V557.26h29.91q6.86,0,10.7-3.27a10.7,10.7,0,0,0,3.84-8.59,10.58,10.58,0,0,0-3.84-8.59q-3.84-3.18-10.7-3.18H755.83v51.55H742.92V522.72h52.35a38.47,38.47,0,0,1,11.52,1.59,25.09,25.09,0,0,1,8.56,4.47,19.06,19.06,0,0,1,5.32,7,24.1,24.1,0,0,1,0,18.52,20.25,20.25,0,0,1-5.32,7.17,25.07,25.07,0,0,1-8.56,4.68,36.55,36.55,0,0,1-11.52,1.68Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-1" d="M939.9,584.3V533.51H912V522.76h68.54v10.75H952.72V584.3Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-1"
                    d="M1061.7,584.3l-18.57-17.1h-27.46v-9.48h30.59q7,0,10.5-3.18t3.53-9.18q0-6-3.69-8.93t-10.34-2.92h-40V584.3H993.57V522.76h52.69a37.19,37.19,0,0,1,11.2,1.56,23.92,23.92,0,0,1,8.38,4.49,19.32,19.32,0,0,1,5.25,7.07,23,23,0,0,1,1.81,9.31,20.64,20.64,0,0,1-4,12.91,22,22,0,0,1-11.16,7.49l22.11,18.71Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-1"
                    d="M1122.63,584.68a40.44,40.44,0,0,1-14.18-2.41,36.15,36.15,0,0,1-11.31-6.6,29.91,29.91,0,0,1-7.47-9.95,29.19,29.19,0,0,1-2.67-12.44,28.27,28.27,0,0,1,2.67-12.36,27.78,27.78,0,0,1,7.47-9.53,35.1,35.1,0,0,1,11.31-6.09,44.75,44.75,0,0,1,14.18-2.16h17.87a46.17,46.17,0,0,1,14.58,2.2,34.49,34.49,0,0,1,11.36,6.18,27.68,27.68,0,0,1,10,21.76,29.05,29.05,0,0,1-2.68,12.44,29.75,29.75,0,0,1-7.46,9.95,36.06,36.06,0,0,1-11.36,6.6,41.54,41.54,0,0,1-14.43,2.41Zm17.87-10.75a27.37,27.37,0,0,0,9.28-1.52,22.83,22.83,0,0,0,7.32-4.19,18.73,18.73,0,0,0,4.79-6.39,19,19,0,0,0,1.72-8.05,18.58,18.58,0,0,0-1.72-8,18.34,18.34,0,0,0-4.79-6.31,22.67,22.67,0,0,0-7.32-4.11,28.13,28.13,0,0,0-9.28-1.48h-17.87a27.36,27.36,0,0,0-9.13,1.48,22.17,22.17,0,0,0-7.22,4.11,19,19,0,0,0-4.75,6.26,18.69,18.69,0,0,0-1.71,8,19,19,0,0,0,6.46,14.44,22.33,22.33,0,0,0,7.22,4.19,26.62,26.62,0,0,0,9.13,1.52Zm-18.78-54.6v-4.82l25.84-6.52v6.69Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-1"
                    d="M1202.21,539.69v45H1190V528.85a6.26,6.26,0,0,1,1.77-4.69,6.55,6.55,0,0,1,4.8-1.74,7.42,7.42,0,0,1,2.72.51,10.11,10.11,0,0,1,2.73,1.69l51.78,43.09v-45H1266v56.38a6.25,6.25,0,0,1-1.77,4.74,6.34,6.34,0,0,1-4.59,1.69,9,9,0,0,1-5.85-2.28Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-2"
                    d="M909.11,571.49V571l0,0a6.07,6.07,0,0,0-.72-2.24l-18.54-32.92-.36-.64a11.66,11.66,0,0,0-1.31-1.82l-2.14-2a16.26,16.26,0,0,0-9.36-3,14.1,14.1,0,0,0-12.75,6.73l-13.61-17.45a5.24,5.24,0,0,0,2-4c0-3.13-3-5.67-6.77-5.67s-6.76,2.54-6.76,5.67,3,5.68,6.76,5.68a8.07,8.07,0,0,0,2.49-.41l14.52,18.61L859.45,543l-6.2-5.21a2.93,2.93,0,0,0,.4-1.46c0-1.87-1.82-3.4-4.06-3.4s-4.06,1.53-4.06,3.4,1.82,3.41,4.06,3.41a4.69,4.69,0,0,0,1.74-.34l6.89,5.78-5.85,10.39-14.65-11.7a4.93,4.93,0,0,0,1-3c0-3.13-3-5.67-6.77-5.67s-6.76,2.54-6.76,5.67,3,5.68,6.76,5.68a7.63,7.63,0,0,0,3.86-1l15.29,12.21-6.2,11a5.76,5.76,0,0,0-.77,2.86c0,3.69,3.58,6.69,8,6.69h49c4.4,0,8-3,8-6.69A.76.76,0,0,0,909.11,571.49Zm-63.58-54.42c-2.23,0-4.06-1.53-4.06-3.41s1.83-3.4,4.06-3.4,4.06,1.53,4.06,3.4S847.77,517.07,845.53,517.07Zm4.06,20.42a1.15,1.15,0,1,1,1.36-1.14A1.26,1.26,0,0,1,849.59,537.49ZM832,544.3c-2.23,0-4-1.53-4-3.41s1.82-3.4,4-3.4,4.06,1.53,4.06,3.4S834.24,544.3,832,544.3Zm44.65-13.62c4.41,0,8.48,2.16,10.36,5.51l17.42,30.93-37.69-31.6A12,12,0,0,1,876.65,530.68Zm-19.73,32.9,3.5-2.93,3.49,2.93-3.49,2.94Zm1.58,4.54-3.5,2.94-3.49-2.94,3.49-2.93Zm23.56-10.68-3.5-2.93,3.5-2.94,3.5,2.94Zm5.41-1.33,3.5,2.94-3.5,2.93L884,559.05Zm-7.32,2.94-3.5,2.93-3.5-2.93,3.5-2.94Zm-3.5-6.15-3.5-2.93,3.5-2.93,3.5,2.93Zm-1.91,1.61-3.5,2.93-3.5-2.93,3.5-2.94Zm-5.41,4.54-3.5,2.93-3.5-2.93,3.5-2.94Zm-3.5,6.14,3.5,2.93-3.5,2.94-3.5-2.94Zm1.91-1.61,3.5-2.93,3.5,2.93-3.5,2.94Zm8.91,1.61,3.5,2.93-3.5,2.94-3.5-2.94Zm1.91-1.61,3.5-2.93,3.5,2.93-3.5,2.94Zm8.91,1.61,3.5,2.93-3.5,2.94L884,568.12Zm1.92-1.61,3.5-2.93,3.49,2.93-3.49,2.94Zm8.91,1.61,3.5,2.93-3.5,2.94-3.5-2.94Zm-32.84-27.54,9.28,7.78-3.5,2.94-8-6.73ZM862,543.82l7.34,6.15-3.5,2.93-6.08-5.09ZM858.52,550l5.39,4.52-3.49,2.93L856.28,554Zm-3.47,6.16,3.45,2.9L855,562l-2.2-1.84Zm-3.47,6.17,1.51,1.26-3.5,2.94-.26-.22Zm-1.9,13.2a4.43,4.43,0,0,1-2.75-3.56l2.66-2.23,3.5,2.93Zm3.18.55,2.14-1.8,2.15,1.8Zm4.06-3.41,3.5-2.93,3.49,2.93-3.49,2.94Zm6.76,3.41,2.15-1.8,2.14,1.8Zm4.06-3.41,3.5-2.93,3.5,2.93-3.5,2.94Zm6.76,3.41,2.15-1.8,2.15,1.8Zm4.06-3.41,3.5-2.93,3.5,2.93-3.5,2.94Zm6.77,3.41,2.14-1.8,2.15,1.8Zm4.06-3.41,3.5-2.93,3.49,2.93-3.49,2.94Zm6.76,3.41,2.15-1.8,2.14,1.8Zm7.47-.55-3.41-2.86,3.5-2.93,2.67,2.23A4.46,4.46,0,0,1,903.62,575.52Z"
                    transform="translate(-742.92 -507.99)" />
                <path class="cls-1"
                    d="M919.38,576.94l0-.59,0,0a7.49,7.49,0,0,0-.94-2.9l-24-42.61-.47-.83a15,15,0,0,0-1.69-2.36l-2.77-2.57a21.1,21.1,0,0,0-12.11-3.88,18.73,18.73,0,0,0-12.45,4.06l-3.53,6,3.14,4a14.08,14.08,0,0,1,12.75-6.73,16.38,16.38,0,0,1,9.37,3l2.13,2a12.23,12.23,0,0,1,1.31,1.83l.36.64L909,568.87a5.67,5.67,0,0,1,.72,2.24h0l0,.46v.15c0,3.69-3.58,6.69-8,6.69h-49c-4.41,0-8-3-8-6.69a5.81,5.81,0,0,1,.77-2.86l6.21-11-4.22-3.36-11.24,18.95a7.54,7.54,0,0,0-1,3.7c0,4.78,4.63,8.67,10.33,8.67h63.39c5.7,0,10.33-3.89,10.33-8.67A1.15,1.15,0,0,0,919.38,576.94Z"
                    transform="translate(-742.92 -507.99)" />
            </svg>
        </span>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

        @error('email')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        @error('password')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        <div class="card-header">{{ __('Restablecer Contrase??a') }}</div>
        <div class="wrap-input100 validate-input" data-validate="El email requerido debe ser: example@abc.xyz">
            <input id="email" class="input100" type="text" @error('email') is-invalid @enderror" name="email"
            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">Correo Electronico</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="La contrase??a es requerida">
            <input id="password" type="password" class="input100" @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            <span class="focus-input100"></span>
            <span class="label-input100">Contrase??a</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password-confirm" type="password" class="input100" @error('password') is-invalid @enderror"
                name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100"></span>
            <span class="label-input100">Corfirmacion Contrase??a</span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Restablecer Contrase??a
            </button>
        </div>

    </form>




@endsection
