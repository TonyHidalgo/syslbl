<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{('src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')
</script>
<script src="{{('plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('plugins/screenfull/dist/screenfull.js')}}"></script>


<script src="{{asset('plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{asset('plugins/c3/c3.min.js')}}"></script>

<script src="{{asset('dist/js/theme.min.js')}}"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

@yield('scripts')