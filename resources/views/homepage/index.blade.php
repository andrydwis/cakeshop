<!DOCTYPE html>
<html lang="en">

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
        <div class="container">
            <a href="#" class="navbar-brand scroll-top brand-font">Lely Cake</a>
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
                        <li><a href="index.html">Beranda</a></li>
                        @auth
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        @endauth
                        <li><a href="menu.html">Menu Kami</a></li>
                        <li><a href="blog.html">Kontak</a></li>
                        <li><a href="contact.html">Tentang Kami</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <section class="banner" style="background-image: url('{{asset('assets/img/homepage/banner-bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Lely cake</h4>
                    <h2>Kue Kering terbaik di Malang</h2>
                    <p>Quisque nec nibh id lacus fringilla eleifend sed sit amet sem. Donec lectus odio, mollis a nisl
                        non, tempor interdum nisl.</p>
                    <div class="primary-button">
                        <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" target="_blank" data-id="book-table">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Produk Terbaru</h2>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>{{$product->category->name}}</h2>
                        <img src="{{asset('storage/'.$product->image)}}" alt="">
                        <div class="price">Rp. {{$product->price}}</div>
                        <div class="text-content">
                            <h4 class="border-bottom-food">{{$product->name}}</h4>
                            <p>keterangan</p>
                            <p>
                                <a href="#">
                                    <div class="food-link">
                                        link menuju detail makanan
                                    </div>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <h2 class="text-center border-bottom">
                    Kategori
                </h2>
                @foreach($categories as $category)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                            <img src="{{asset('assets/img/homepage/cook_breakfast.png')}}" alt="Breakfast">
                            <h4>{{$category->name}}</h4>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="{{asset('assets/img/homepage/cook_01.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>Customer Service</h4>
                        <div class="contact-content">
                            <span>Hubungi kami untuk info lebih lanjut :</span>
                            <h6>{{$contact->whatsapp}}</h6>
                        </div>
                        <span>atau</span>
                        <div class="primary-white-button">
                            <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" class="scroll-link" data-id="book-table">Chat dengan kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="{{asset('assets/img/homepage/cook_01.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="get-app">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2 class="quote">" Kami memberikan produk dengan bahan terbaik dan kualitas terbaik "</h2>
                    <p>
                        <h2>- Lely Cake</h2>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="brand-font">Lely Cake - 2020</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Template JS File -->
    <script src="{{ ('assets/js/scripts.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="{{('assets/js/homepage/vendor/bootstrap.min.js')}}"></script>

    <script src="{{('assets/js/homepage/plugins.js')}}"></script>
    <script src="{{('assets/js/homepage/main.js')}}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
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
</body>

</html>