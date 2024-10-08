@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Metatrader Account</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/account-Types') }}">Account Type</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Metatrader Account</li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">MT5 trading account</a>
                                </h3>
                                <p class="mb-0">Qorva Markets with MetaTrader 5 combines an extensive range of tools with user-friendly market search, tight spreads, and superior execution.</p>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Qorva Markets elevates your MT5 experience</a>
                                </h3>
                                <p class="mb-5">Trade on a new, improved MetaTrader while maintaining your access to the unique advantages of Qorva Markets.</p>
                                <p class="mb-2"> <i class="fa-solid fa-chevron-right"></i>  Explore 500+ markets including stocks via CFDs, FX, commodities, & indices</p>
                                <p class="mb-2"><i class="fa-solid fa-chevron-right"></i>  Utilize enhanced charting with more timeframes, indicators, and tools</p>
                                <p class="mb-3"><i class="fa-solid fa-chevron-right"></i>  Expand your portfolio with intuitive market search and groupings</p>
                                <p class="mb-5">When you trade on your MT5 account with FOREX.com, you're getting the most out of your trading potential.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others/serioustrader.webp" alt="service-icon">
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
                                    <img src="{{ asset('') }}assets/images/others/mt5-desktop-mobile-group.webp" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Manage your MetaTrader account your way</a>
                                </h3>
                                <p class="mb-3">Access your upgraded MT5 experience from your desktop or mobile</p>
                                <h5>MT5 on desktop</h5>
                                <p class="mb-2">Download MetaTrader directly or trade on the fully featured, browser-based application of the platform with no additional downloads or plugins.</p>
                                <h5>MT5 on mobile</h5>
                                <p class="mb-2">Trade on the go with a full range of MT5 mobile trading apps, available across iPhone, iPad and Android.</p>
                                <h5>MT5 web</h5>
                                <p class="mb-2">Trade on the fully featured, browser-based application of the platform with no additional downloads or plugins.</p>
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