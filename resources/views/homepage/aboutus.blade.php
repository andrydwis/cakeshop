<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Lely Cake</title>

    <!-- Template CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/homepage/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/hero-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/templatemo-style.css')}}">
    <script src="{{ asset('assets/js/homepage/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <!-- CustomCSS -->
    @yield('customCSS')

</head>

<body>
    <div class="header">
        <div class="container container-logo">
            <div class="logo">
                <div>
                    <a href="#" class="navbar-brand scroll-top">
                        <img class="logo-img" src="{{asset('assets/img/homepage/logo.png')}}" alt="" srcset="">
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="{{route('init')}}">Beranda</a></li>
                        @auth
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        @endauth
                        <li><a href="{{route('menu')}}">Menu Kami</a></li>
                        <li><a href="{{route('information')}}">Kontak</a></li>
                        <li><a href="{{route('aboutus')}}">Tentang Kami</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2">
                    <div class="blog-item">
                        <div class="down-content">
                            <h4>Lely Cake</h4>
                            {!!$other->description!!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Lely Cake - 2020</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>