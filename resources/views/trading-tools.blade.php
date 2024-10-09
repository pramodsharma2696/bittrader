@extends('master')
@section('contents')
<style>
    img.dark {
        width: 150px;
        height: 150px;
    }
</style>

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Trading tools</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Platforms and Tools</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Trading tools</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img src="{{ asset('') }}assets/images/header/2.png"
                        alt="shape-icon"></span>
            </div>
        </div>
    </div>
</section>
<!-- ================> Page header end here <================== -->


<!-- ===============>> Service section start here <<================= -->
<div class="service-details padding-bottom section-bg-color" style="margin-top:30px;">
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Trading tools</a></h3>
                                <p class="mb-5">Enjoy exclusive trading technology with Performance Analytics and advanced charts. Take your trading to the next level with state-of-the-art tools that assist in elevating your preparation for the markets.</p>
                                <h5>Market News and Analysis Tools</h5>
                                <p class="mb-5">Keep your finger on the pulse of the global marketplace with high-quality journalism and in-depth analysis at the touch of a button.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <!-- 2 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Market 360</a>
                                </h3>
                                <p class="mb-3">Have a favorite market? Want to see all its details in one place? On our platform, simply click the down arrow next to a market name to see an encyclopedic array of information. Everything from charts, news, margin, trading hours and much more.</p>
                                <h5>Reuters news</h5>
                                <p class="mb-2">Get a live streaming news feed straight to the platform.</p>
                                <h5>Market analysis</h5>
                                <p class="mb-2">With decades of experience between them, our expert analysts give their take on the latest events and market impact.</p>
                                <h5>Economic calendar</h5>
                                <p class="mb-2">From non-farm payrolls to retail sales, know when all the major economic events occur.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/tading-tools-market-360.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/platform-tools-advancedcharts.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Advanced charts</a>
                                </h3>
                                <p class="mb-3" style="height: 216px;">A must-have for technical traders, our charts, powered by TradingView, come with over 80 indicators, 50 drawing tools, 14 time intervals, and a host of customization features.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">TradingView</a>
                                </h3>
                                <p class="mb-3">Boasting a userbase of 30 million+ traders, investors, analysts and researchers, TradingView is a leading charting company with a mission to help anyone, anywhere succeed in the financial markets – and enjoy the process along the way.

                                    At Qorva Markets we share that mission – making ours the perfect partnership. Whether you’re an expert or novice, using mobile or desktop, trade with us and elevate your experience with the most accomplished charts, tools and features available.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/whatistradingview.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 3 -->
            <div class="row">
            <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/platform-tools-smsalerts.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Alerts</a>
                                </h3>
                                <p class="mb-3">You don’t have to glue your eyes to the screen to see if a market reaches a certain level. Just set an alert and if it’s triggered, you’ll get a notification on the platform, via push or email. Our range of alerts include:</p>
                                <h5>Price alerts</h5>
                                <p class="mb-1">Price alerts when a market price hits a level.</p>
                                <h5>Trade alerts</h5>
                                <p class="mb-1">Trade alerts when an open position hits your exit orders and is closed</p>
                                <h5>Order alerts</h5>
                                <p class="mb-1">Order alerts when an entry order is filled and results in a new open position</p>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>



        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->



@endsection