<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <title>Qorva Markets - Leading Currencies, Crypto, Stocks & Commodities Trading Platform</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO Meta Data -->
  <meta name="application-name" content="Qorva Markets - Currencies, Crypto, Stocks, and Commodities Trading Platform">
  <meta name="author" content="Qorva Markets">
  <meta name="keywords" content="Qorva Markets, currencies trading, cryptocurrency trading, stocks trading, commodities, online trading platform, CFDs, day trading, investment solutions, trading tools">
  <meta name="description"
    content="Join Qorva Markets, the ultimate trading platform offering Currencies, Crypto, Stocks, and Commodities. Empower your trading with advanced tools, low spreads, and a user-friendly interface. Start trading with Qorva Markets today and unlock new market opportunities.">

  <!-- OG Meta Data -->
  <meta property="og:title" content="Qorva Markets - Currencies, Crypto, Stocks & Commodities Trading Platform">
  <meta property="og:site_name" content="Qorva Markets">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:description"
    content="Qorva Markets offers a powerful, secure, and intuitive platform for trading Currencies, Crypto, Stocks, and Commodities. Benefit from tight spreads, high liquidity, and a comprehensive trading experience.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ url('/') }}assets/images/og-image.png">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('') }}assets/images/logo/favicon.png" type="image/x-icon">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/aos.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/swiper-bundle.min.css">

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/megamenu.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/mobile.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/tradeview.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/feature.css">
</head>

<body>


  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="{{ asset('') }}assets/images/logo/logo.svg" alt="preloader icon" style="width:350px;height:auto;">
    <!-- <img src="{{ asset('') }}assets/images/logo/logo-removebg.png" alt="preloader icon"> -->
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="{{ asset('') }}assets/images/icon/moon.svg" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch end here <<================= -->



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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/js/all.min.js"></script>
  <script src="{{ asset('') }}assets/js/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}assets/js/aos.js"></script>
  <script src="{{ asset('') }}assets/js/fslightbox.js"></script>
  <script src="{{ asset('') }}assets/js/purecounter_vanilla.js"></script>

  <script src="{{ asset('') }}assets/js/custom.js"></script>
  <script type="text/javascript">

    $(function () {
        $('#pills-home-tab').click(function () {
          $(".stocks").removeClass("active");
          $(".crypto").removeClass("active");
          $(".commodities").removeClass("active");
          $(".indices").removeClass("active");
          $(".metals").removeClass("active");
          $(".currencies").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    }); 

    $(function () {
        $('#pills-profile-tab').click(function () {
         $(".stocks").removeClass("active");
          $(".crypto").removeClass("active");
          $(".commodities").removeClass("active");
          $(".indices").removeClass("active");
          $(".currencies").removeClass("active");
          $(".metals").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    }); 

    $(function () {
        $('#pills-contact-tab').click(function () {
          $(".stocks").removeClass("active");
          $(".crypto").removeClass("active");
          $(".commodities").removeClass("active");
          $(".currencies").removeClass("active");
          $(".metals").removeClass("active");
          $(".indices").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    });

    $(function () {
        $('#pills-crypto-tab').click(function () {
         $(".stocks").removeClass("active");
          $(".currencies").removeClass("active");
          $(".commodities").removeClass("active");
          $(".indices").removeClass("active");
          $(".metals").removeClass("active");
          $(".crypto").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    });

    $(function () {
        $('#pills-commodities-tab').click(function () {
          $(".stocks").removeClass("active");
          $(".crypto").removeClass("active");
          $(".currencies").removeClass("active");
          $(".indices").removeClass("active");
          $(".metals").removeClass("active");
          $(".commodities").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    });

    $(function () {
        $('#pills-stocks-tab').click(function () {
         $(".currencies").removeClass("active");
          $(".crypto").removeClass("active");
          $(".commodities").removeClass("active");
          $(".indices").removeClass("active");
          $(".metals").removeClass("active");
          $(".stocks").addClass("active");
          $(this).addClass('active').siblings().removeClass('active');
        });
    });

    $(function () {
        $('.click_act li').click(function () {
          $(this).addClass('active').siblings().removeClass('active');
        });
    });

  </script>

</body>

</html>
