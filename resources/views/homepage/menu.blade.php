<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
    <title>Menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/homepage/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/hero-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage/templatemo-style.css')}}">
    <script src="{{ asset('assets/js/homepage/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
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


    <section class="page-heading" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Menu Kami</h1>
                    <p>berbagai makanan camilan unik dan menarik, bermacam kue kering dan juga aneka macam pizza</p>
                </div>
            </div>
        </div>
    </section>

    @foreach($categories as $category)
    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breakfast-menu-content" style="background-color: #f2f6ff;">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>{{$category->name}}</h2>
                                @foreach($category->products as $product)
                                <div class="item col-md-4">
                                    <div class="food-item">
                                        <img src="{{asset('storage/'.$product->image)}}" alt="">
                                        <div class="price">Rp. {{$product->price}}</div>
                                        <div class="text-content">
                                            <h4 class="border-bottom-food">{{$product->name}}</h4>
                                            <p>{{ Str::limit($product->description, 120) }}</p>
                                            <p>
                                                <button class="btn btn-block button" data-toggle="modal" data-target="#{{$product->id}}">
                                                    Detail
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- for each berakhir disini -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Modal -->
    @foreach($products as $product)
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
    @endforeach
    <!-- modal -->

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


    <footer>
        <div class="container">
            <div class="row">
                <div class="coltext-center">
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