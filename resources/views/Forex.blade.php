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
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Forex</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Markets</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trade-markets') }}">Trade Markets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forex</li>
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
            <div class="row flex-lg-row-reverse g-5 mb-20">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Forex trading</a></h3>
                                <p class="mb-5">Since 2001, Qorva Markets has made its name by providing the most reliable service and powerful platforms to allow our customers worldwide to trade to their fullest capabilities.</p>
                               
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Forex explained</a>
                                </h3>
                                <h5>A quick snapshot of FX</h5>
                                <p class="mb-2">Forex trading is the act of speculating on the movement of exchange prices by buying one currency while simultaneously selling another.</p>
                                <h5>There’s no larger market</h5>
                                <p class="mb-2">With an average turnover in excess of $7.5 trillion a day*, currency prices are constantly fluctuating – creating endless trading opportunities in the world's most traded market.</p>
                                <h5>Forex never sleeps</h5>
                                <p class="mb-2">As a globally traded market, the foreign exchange market is open 24 hours a day, five days a week (Sunday 5PM to Friday 5PM).</p>
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
            <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/m2.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/mobile1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-2"> <a class="stretched-link" href="javascript:void(0);">Award-winning FX trading apps</a>
                                </h3>
                                <p class="mb-3">A must-have for technical traders, our charts, powered by TradingView, come with over 80 indicators, 50 drawing tools, 14 time intervals, and a host of customization features.</p>
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

            <!-- 3 -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Lower your trading costs by up to 15%</a>
                                </h3>
                                <p class="mb-3">Earn cash rebates and access other exclusive benefits with the Active Trader program.</p>
                                <h5>Functional Benefits</h5>
                                <p class="mb-1">Multi-asset rebates on FX, Indices, Commodities, Metals, cryptocurrencies and Equities, up to $50 per million traded and get bank fees on wire transfers reimbursed.</p>
                                <h5>White Glove Service</h5>
                                <p class="mb-1">Take advantage of one-on-one guidance from our relationship managers to develop and maintain a strong trading strategy.</p>
                                <h5>Red Carpet Rollout</h5>
                                <p class="mb-1">VIP access gets you invited to exclusive events and previews of our products.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/active-trader-header.svg" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 3 -->
           


        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->



@endsection