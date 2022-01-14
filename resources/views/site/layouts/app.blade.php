<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katech Imports - @yield('title')</title>

  <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-48X48.png') }}" type="image/png" sizes="48x48">
  <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-96X96.png') }}" type="image/png" sizes="96x96">
  <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-144X144.png') }}" type="image/png" sizes="144x144">

  <meta name="title" content="">
  <meta name="description" content="">
  <!-- CSS
	============================================ -->

  <!-- Bootstrap Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/bootstrap.min.css') }}">
  <!-- Font Awesome Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/font-awesome.min.css') }}">
  <!-- Material Design Font Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/material-design-iconic-font.min.css') }}">
  <!-- Animate Css -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/animate.min.css') }}">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/magnific-popup.css') }}">
  <!-- jQuery UI CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/jquery-ui.min.css') }}">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/plugins.css') }}">

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">
  <style>
    div#loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('{{url('assets/admin/dist/img/4.gif')}}') 50% 50% no-repeat white;
    }
  </style>
</head>


<body>
  @include('sweetalert::alert')

  <div id="loader"></div>
  @include('site.layouts.header')
  @yield('content')
  @include('site.layouts.footer')

  <!-- JS
============================================ -->

  <!-- jQuery JS -->
  <script src="{{ asset('assets/site/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <!-- jQuery Migrate JS -->
  <script src="{{ asset('assets/site/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
  <!-- Modernizer JS -->
  <script src="{{ asset('assets/site/js/vendor/modernizr-3.8.0.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/site/js/vendor/bootstrap.min.js') }}"></script>
  <!-- Plugins JS -->
  <script src="{{ asset('assets/site/js/plugins/plugins.js') }}"></script>
  <!-- Jquery ui JS -->
  <script src="{{ asset('assets/site/js/plugins/jquery.ui.js') }}"></script>
  <!-- Mailchimp JS -->
  <script src="{{ asset('assets/site/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
  <!-- Jquery Magnific Popup JS -->
  <script src="{{ asset('assets/site/js/plugins/jquery.magnific-popup.min.js') }}"></script>
  <!-- Slick JS -->
  <script src="{{ asset('assets/site/js/plugins/slick.min.js') }}"></script>
  <!-- Modal JS -->
  <script src="{{ asset('assets/site/js/plugins/modal.min.js') }}"></script>
  <!-- Sticky Sidebar JS -->
  <script src="{{ asset('assets/site/js/plugins/sticky-sidebar.min.js') }}"></script>
  <!-- Countdown JS -->
  <script src="{{ asset('assets/site/js/plugins/countdown.min.js') }}"></script>
  <!-- jQuery Nice Select JS -->
  <script src="{{ asset('assets/site/js/plugins/jquery.nice-select.min.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/site/js/main.js') }}"></script>


  {{-- Loading --}}
  <script>
    // Este evendo é acionado após o carregamento da página
  jQuery(window).load(function() {
      //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
      jQuery("#loader").fadeOut("slow");
  });
  </script>
</body>

</html>