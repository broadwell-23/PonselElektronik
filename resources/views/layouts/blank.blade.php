<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Informasi Pengiriman Barang</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  @stack('stylesheets')

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" href="styles/roboto.css">
  <link rel="stylesheet" href="styles/font-awesome.css">
  <link rel="stylesheet" href="styles/panel.css">
  <link rel="stylesheet" href="styles/feather.css">
  <link rel="stylesheet" href="styles/animate.css">
  <link rel="stylesheet" href="styles/urban.css">
  <link rel="stylesheet" href="styles/urban.skins.css">
  <!-- endbuild -->

</head>

<body>

  <div class="app layout-fixed-header">

    @include('includes/sidebar')

    <!-- content panel -->
    <div class="main-panel">

      @include('includes/topbar')

      @yield('main_container')

    </div>
    <!-- /content panel -->

    @include('includes/footer')

  </div>

  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="scripts/extentions/modernizr.js"></script>
  <script src="vendor/jquery/dist/jquery.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.js"></script>
  <script src="vendor/fastclick/lib/fastclick.js"></script>
  <script src="vendor/onScreen/jquery.onscreen.js"></script>
  <script src="vendor/jquery-countTo/jquery.countTo.js"></script>
  <script src="vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="scripts/ui/accordion.js"></script>
  <script src="scripts/ui/animate.js"></script>
  <script src="scripts/ui/link-transition.js"></script>
  <script src="scripts/ui/panel-controls.js"></script>
  <script src="scripts/ui/preloader.js"></script>
  <script src="scripts/ui/toggle.js"></script>
  <script src="scripts/urban-constants.js"></script>
  <script src="scripts/extentions/lib.js"></script>
  <!-- endbuild -->

@stack('scripts')

</body>

</html>