<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SysLBL | Registrar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/theme.min.css')}}">
    <script src="{{asset('src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 bg-white">
                <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                    <div class="lavalite-bg" style="background-image: url('../img/auth/register-bg.jpg')">
                        <div class="lavalite-overlay"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="../index.html"><img src="../src/img/brand.svg" alt=""></a>
                        </div>
                        <h3>Registrate - SysLBL</h3>
                        <p>Sistema de Gestion Escolar - Liceo Bolivariano Libertador</p>






                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre de Usuario" required="" value="{{old('name')}}">
                                <i class="ik ik-user"></i>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electronico" required="" value="{{ old('email') }}">
                                <i class="ik ik-mail"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required="">
                                <i class="ik ik-lock"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Confirma la Contraseña" required="">
                                <i class="ik ik-eye-off"></i>
                            </div>


                            
                            <div class="sign-btn text-center">
                                <button type="submit" class="btn btn-theme">Registrar</button>
                                <button class="btn btn-default" onclick="window.location.href='/'">Cancelar</button>
                            </div>
                        </form>
                        <div class="register">
                            <p>Ya tienes cuenta? <a href="{{route('login')}}">Inicia Sesion</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset('src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')
    </script>
    <script src="{{asset('plugins/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('plugins/screenfull/dist/screenfull.js')}}"></script>
    <script src="{{asset('dist/js/theme.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>

</html>