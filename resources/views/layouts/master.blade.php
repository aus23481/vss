<!DOCTYPE html>

<html lang="en-US">

<head>
   <!-- Title -->

    <title>Real Estate Canada - Vancouver Apartment Rentals, B2B Services</title>

    <!-- Meta -->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="keywords" content="real estate canada, vancouver apartment rentals, vancouver furnished, vancouver short stay, lions gate hospital apartment, relocation vancouver, corporate accommodation vancouver, serviced apartment vancouver, victoria park apartments">

    <meta name="description" content="View our fully furnished apartments in Vancouver BC, Canada. Great for a short or extended stay for relocation, business & traveling. View rentals & reserve now!">

    <meta name="author" content="Vancouver Short Stay">

    <meta name="robots" content="noodp,noydir">

    <meta name="robots" content="follow,index">

    <meta name="google-site-verification" content="hvp-QjsmuXZ5bY_k7vcnGT8RDBhacW075dJLpNaA1mc">

    <meta name="verify-v1" content="F7ec45W408CfxhLT2aM2CkGWX979vJaNA53fW8ACt9s=">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



    <!-- Fav Icon -->

    <link rel="shortcut icon" href="http://www.vancouvershortstay.com/files/shortstay_favicon.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <!-- {{ Html::style('css/bootstrap.min.css') }} -->

    <!-- FontAwesome CSS 
        {{ Html::style('font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('font-awesome/font-awesome.css') }}-->



    <!-- CSS -->
    {{ Html::style('css/reset-fonts-base-min.css') }} {{ Html::style('css/styles.css') }} {{ Html::style('css/jquery-ui-1.10.4.custom.min.css') }}





    <!-- SCRIPTS -->

    <script src="assets/ga.js" async type="text/javascript"></script>
    <script src="assets/common.js" type="text/javascript"></script>

    <script src="assets/validate.js" type="text/javascript"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-48219362-1']); //'UA-20087957-1']);

        _gaq.push(['_trackPageview']);



        (function() {

            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;

            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);

        })();

        var _token = '<?php echo csrf_token(); ?>';
        var _baseurl = '<?php echo url("/"); ?>';
    </script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        {{ Html::script('js/html5shiv.js') }}
                {{ Html::script('js/respond.min.js') }}
        <![endif]-->

</head>

<body>
    <div id="page_wrapper" class="container">
        <div id="page">
            @include('layouts.partials._header') @yield('content')
        </div>
        <!-- END OF PAGE -->

    </div>
    <!-- END OF PAGE WRAPPER -->
    @include('layouts.partials._footer')
</body>

</html>