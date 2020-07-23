<!DOCTYPE html>
<html class="no-js" lang="es">

@include('layouts.head')

<body>

    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
    

    <div class="wrapper">
        @include('layouts.header')

        <div class="page-wrap">
            @include('layouts.aside')
            @yield('contenido')

        @include('layouts.footer')

        </div>

        
    </div>

    @include('layouts.scripts')

</body>

</html>