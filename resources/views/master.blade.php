<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <title>Bitrader</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
  <meta name="description"
    content="Experience the power of Bitrader, the ultimate HTML template designed to transform your trading business. With its sleek design and advanced features, Bitrader empowers you to showcase your expertise, engage clients, and dominate the markets. Elevate your online presence and unlock new trading possibilities with Bitrader.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta property="og:site_name" content=Bitrader>
  <meta property="og:url" content="index.html">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og.png">



  <link rel="shortcut icon" href="{{ asset('') }}assets/images/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/aos.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('') }}assets/css/swiper-bundle.min.css">



  <!-- main css for template -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="{{ asset('') }}assets/images/logo/preloader.png" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="{{ asset('') }}assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
@include('body.header')
  <!-- ===============>> Header section end here <<================= -->


@yield('contents')

  <!-- ===============>> footer start here <<================= -->
@include('body.footer')
  <!-- ===============>> footer end here <<================= -->



  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->

  <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/js/all.min.js"></script>
  <script src="{{ asset('') }}assets/js/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}assets/js/aos.js"></script>
  <script src="{{ asset('') }}assets/js/fslightbox.js"></script>
  <script src="{{ asset('') }}assets/js/purecounter_vanilla.js"></script>



  <script src="{{ asset('') }}assets/js/custom.js"></script>


</body>


<!-- Mirrored from thetork.com/demos/html/bitrader/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2024 18:35:48 GMT -->
</html>