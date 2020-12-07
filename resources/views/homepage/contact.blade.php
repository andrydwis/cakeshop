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
                    <h1>Informasi Kontak</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="cook-content">
                        <h4>Hubungi Kami</h4>
                        <div class="contact-content">
                            <span>Hubungi kami untuk info lebih lanjut :</span>
                            <p>
                                <h4 class="sans-font">
                                    Whatsapp : {{$contact->whatsapp}}
                                </h4>
                            </p>
                            <p>
                                <h4 class="sans-font">
                                    Instagram : {{$contact->instagram}}
                                </h4>
                            </p>
                            <p>
                                <h4 class="sans-font">
                                    Facebook : {{$contact->facebook}}
                                </h4>
                            </p>
                            <p>
                                <h4 class="sans-font">
                                    Twitter : {{$contact->twitter}}
                                </h4>
                            </p>
                            <p>
                                <h4 class="sans-font">
                                    Email : {{$contact->email}}
                                </h4>
                            </p>
                            <p>
                                <h4 class="sans-font">
                                    Lokasi : {{$other->address}}
                                </h4>
                            </p>
                            <br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7912.946618131778!2d112.56353381108853!3d-7.412751441450427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78090b3f888987%3A0x84f2e1bb3e5a8be9!2sKemangsen%2C%20BalongBendo%2C%20Sidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1607251643713!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <span>atau</span>
                        <div class="primary-white-button">
                            <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" target="_blank" data-id="book-table">Chat dengan kami</a>
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

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="{{ asset('assets/js/homepage/vendor/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/homepage/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/homepage/main.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
    <!-- CustomJS -->
    @yield('customJS')

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').focus()
        })
    </script>
    <!-- CustomJS -->

</body>

</html>