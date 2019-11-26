<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- SEO optimization -->
    <meta name="description" content="Temairazu is Japan's leading hotel reservation channel manager.">
    <meta name="keywords" content="Temairazu, site controller, travel, channel manager, japan hotel reservation">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temairazu</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Montserrat font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Ionic Icons -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <!-- Weglot language support -->
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_c1f6e249f4478d125b12045774c4a7d20'
        });
    </script>
</head>

<body>

    <!-- Navigation-start -->
    <header class="header">
        <div class="nav-menu fixed-top p-2">
            <div class="row">
                <div class="container-fluid col-md-12">

                    @include('navigation')

                </div>
            </div>
        </div>
    </header>
    <!-- Navigation-end -->


    <!-- Main-Content-start -->
    @yield('content')
    <!-- Main-Content-end -->


    <!-- Footer-start -->
    <footer>
        @include('footer')
    </footer>
    <!-- Footer-end -->

    <!-- Loading screen start-->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Loading screen end-->

    <!-- JQuery, Bootstrap and external js file -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.easy_number_animate.min.js"></script>
    <script src="js/app.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151444263-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-151444263-1');
    </script>

</body>

</html>
