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


    <section class="banner" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Lely cake</h4>
                    <h2>Nikmati Renyahnya</h2>
                    <p>
                        Produk olahan kue 100% halal yang aman, bergizi, dan berkualitas sesuai kepuasan konsumen
                    </p>
                    <div class="primary-button">
                        <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" target="_blank" data-id="book-table">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-food" style="background: url({{asset('assets/img/homepage/bg.svg')}});">
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
                            <p>{{ Str::limit($product->description, 100) }}</p>
                            <p>
                                <button class="btn btn-block button" data-toggle="modal" data-target="#{{$product->id}}">
                                    Detail
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="breakfast-menu-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="left-image-modal">
                                                                <img src="{{asset('storage/'.$product->image)}}" alt="Breakfast">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 modal-food">
                                                            <div class="food-item">
                                                                <div class="food-item-content">
                                                                    <h2>{{$product->name}}</h2>
                                                                    <h4>Harga : Rp. {{$product->price}}</h4>
                                                                    <p>
                                                                        {{$product->description}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="button-group mt-5">
                                                                <a href="#" class="button-cancel" data-dismiss="modal">Batal</a>
                                                                <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}&text=Hai%20Lely%20Cake%20%21%0ASaya%20tertarik%20membeli%20{{$product->name}}" target="_blank" class="button">Pesan Sekarang</a>
                                                                <!-- delete me -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal -->
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
                <div class="category-list">
                    @foreach($categories as $category)
                    <div class="service-item">
                        <a href="{{route('menu')}}">
                            <h4 class="kategori">{{$category->name}}</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
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
                            <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" target="_blank" data-id="book-table">Chat dengan kami</a>
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
                    <p>Lely Cake - 2020</p>
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