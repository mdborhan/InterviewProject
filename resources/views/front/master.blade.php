<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Page Title -->
    <title>Interview Project</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index, follow" />
    <meta name="robots" content="noodp" />
    <meta name="robots" content="imageindex" />
    <meta name="googlebot" content="index, follow" />
    <meta name="revisit-after" content="5 days" />
    <meta name="author" content="" />
    <meta name="designer" content="" />
    <meta name="copyright" content="" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="Safe For Kids" />
    <link rel="canonical" href="" />
    <meta name="identifier-url" content="" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Favicon and Touch Icons -->

    <link href="{{asset('/')}}fontend-assets/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="{{asset('/')}}fontend-assets/images/favicon.png" rel="icon">
    <link href="{{asset('/')}}fontend-assets/images/favicon.png" rel="icon" sizes="72x72">
    <link href="{{asset('/')}}fontend-assets/images/favicon.png" rel="icon" sizes="114x114">
    <link href="{{asset('/')}}fontend-assets/images/favicon.png" rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('/')}}fontend-assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('/')}}fontend-assets/css/select2.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('/')}}fontend-assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('/')}}fontend-assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('/')}}fontend-assets/css/animsition.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('/')}}fontend-assets/css/css-plugin-collections.css" rel="stylesheet" type="text/css" media="all"/>

    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('/')}}fontend-assets/css/menuzord-megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <link id="menuzord-menu-skins" href="{{asset('/')}}fontend-assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('/')}}fontend-assets/css/style-main.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('/')}}fontend-assets/css/preloader.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('/')}}fontend-assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('/')}}fontend-assets/css/responsive.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="{{asset('/')}}fontend-assets/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link  href="{{asset('/')}}fontend-assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="all"/>
    <link  href="{{asset('/')}}fontend-assets/revolution-slider/css/layers.cssjs/" rel="stylesheet" type="text/css" media="all"/>
    <link  href="{{asset('/')}}fontend-assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('/')}}fontend-assets/css/notification.css" rel="stylesheet" type="text/css" media="all">

    <!-- external javascripts -->
    <script async="async" src="{{asset('/')}}fontend-assets/js/jquery-2.2.4.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/jquery-ui.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/bootstrap.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/select2.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/animsition.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script async="async" src="{{asset('/')}}fontend-assets/js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script async="async" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script async="async" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->



    <!-- Google Tag Manager -->


    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->


</head>

<body class="">


<div id="wrapper" class="clearfix">

    <!-- Popup Code Start Code-->

@include('front.navbar.navbar')
@yield('body')
<!-- end main-content -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    </script>

    @include('front.footer.footer')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <!-- Floating Social Media bar Starts -->
{{--    @include('front.home.home')--}}

<!-- Floating Social Media bar Ends -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script>

            @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"

        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    <script async="async" src="{{asset('/')}}fontend-assets/js/custom.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/popup.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
          (Load Extensions only on Local File Systems !
           The following part can be removed on Server for On Demand Loading) -->
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script async="async" src="{{asset('/')}}fontend-assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


    <script async="async" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    </script></div>
<!-- end wrapper -->
</body>
</html>

