<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Deca Brica - Pierres Dècoratives Intérieures & Extérieures</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('visituer/assets/imgs/theme/favicon.svg')}}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('visituer/assets/css/plugins/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('visituer/assets/css/main.css?v=5.3')}}" />
</head>

<body>
    <!-- Modal -->
 
		<!--start header -->
        @include('visituer.body.header')
		<!--end header -->








    <main class="main" id="home">
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('visituer/assets/imgs/slider/slider-1.png')}}">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    Ne manquez pas l'incroyable<br />
                                </h1>
                                <p style="color: #a95c15">Pierres décoratives que vous pouvez utiliser dans la maison, le jardin, la piscine, etc.</p>
                    
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url({{asset('visituer/assets/imgs/slider/slider-2.png')}}">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40"style="color: #fff">
                                    Pierres Dècoratives <br />
                                </h1>
                                <p class="mb-40"style="color: #fff">Intérieures & Extérieures</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>






        <section class="product-tabs section-padding position-relative">
			@yield('visituer') 
        </section>
        <!--Products Tabs-->




   
      


   































  <!--Vendor List -->




 <!--End Vendor List -->





    </main>







    @include('visituer.body.footer')

    <!-- Preloader Start 
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('visituer/assets/imgs/theme/loading.gif')}}" alt="" />
                </div>
            </div>
        </div>
    </div>-->
    <!-- Vendor JS-->
    <script src="{{asset('visituer/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('visituer/assets/js/main.js?v=5.3')}}"></script>
    <script src="{{asset('visituer/assets/js/shop.js?v=5.3')}}"></script>
</body>

</html>