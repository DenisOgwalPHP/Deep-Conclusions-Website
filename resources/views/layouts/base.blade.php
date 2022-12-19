<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Data Science</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Fontawesome Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <!-- ionicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/Chart.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <!-- wow -->
    <link rel="stylesheet" href="{{ asset('assets/css/wow.css') }}" />
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revslider/css/rs6.css') }}" />
    <!-- Xamin custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/xamin-style.css') }}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    @livewireStyles
  </head>

  <body>
    <!-- Loader -->
    {{-- <div id="loading">
      <div id="loading-center">
        <img src="{{ asset('assets/images/loader.gif') }}" alt="loader" />
      </div>
    </div> --}}
    <!-- loading end -->
    <a class="skip-link screen-reader-text" href="#content"></a>
    <!-- Header -->
    @livewire('header-component')
    <!-- Header End-->

    {{ $slot }}

    <!-- Footer -->
    @livewire('footer-component')
    <!-- Footer End-->
    <!-- back-to-top -->
    <div id="back-to-top">
      <a class="top" href="#top" id="top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- jQuery, Popper JS -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <!-- CountTo JS -->
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Isotope JS-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- REVOLUTION SLIDER JS-->
    <script src="{{ asset('assets/revslider/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revslider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/revslider-custom.js') }}"></script>
    <!-- Custom JS-->
    <script src="{{ asset('assets/js/xamin-custom.js') }}"></script>

    @livewireScripts
  </body>
</html>
