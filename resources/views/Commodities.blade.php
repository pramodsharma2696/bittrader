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
                <h2>Commodities </h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Markets</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Commodities </li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Commodities trading via CFDs</a></h3>
                                <p class="mb-3">Commodities like oil and wheat offer traders the opportunity to speculate in new markets and to hedge against inflation. </p>
                                <p class="mb-5">Go long or short on CFDs - Get competitive spreads - Trade without the need for a digital wallet.</p>
                               
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Commodities explained</a>
                                </h3>
                                <h5>Futures and spots</h5>
                                <p class="mb-2">Trade on commodities using either futures or spot contracts.</p>
                                <h5>Go long or short</h5>
                                <p class="mb-2">When you trade commodities via CFDs with us, you can profit from both rising and falling markets.</p>
                                <h5>Take advantage of leverage</h5>
                                <p class="mb-2">You only have to put up a fraction of the commodity price to start trading. However, please note that leverage can magnify both your profits and losses.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/trade-crypto-cfds.webp" alt="service-icon">
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
                                    <img src="{{ asset('') }}assets/images/others/raw-pricing-mobile.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-2"> <a class="stretched-link" href="javascript:void(0);">Award-Winning Mobile Applications</a>
                                </h3>
                                <p class="mb-3">Designed for instant control wherever you are, enjoy one-tap trading, intelligent market tools and a customizable layout to suit your trading style.</p>
                                <h5>TradingView Charts</h5>
                                <p class="mb-1">80+ indicators, 11 chart types and 14 timeframes</p>
                                <h5>Performance Analytics</h5>
                                <p class="mb-1">Analyze your decision-making with the latest behavioural science technology</p>
                                <h5>Total Control</h5>
                                <p class="mb-1">Customize your notifications and alerts to stay on top of the markets</p>
                                <h5>Trading Research</h5>
                                <p class="mb-1">Access integrated market analysis, Reuters news & a full economic calendar</p>
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