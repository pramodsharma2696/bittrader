@extends('master')
@section('contents')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Currency converter</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">System and Features</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Trading tools</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Currency converter</li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Currency converter</a></h3>
                                <p class="mb-3">Convert currencies instantly with this free forex calculator</p>
                                <p class="mb-10">Check the latest forex exchange rates here. Choose any two currencies, enter an amount, and the currency converter will show you the current rate. Plus, take a look at recent price movements on a live forex chart.</p>

                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">How do currency rates work?</a></h3>
                                <p class="mb-3">Currency rates work by telling you how much one currency is worth in another. When you trade forex, you’re always exchanging currencies – whether it's euros for dollars, pounds for Swiss francs or Hungarian forints for Polish złotys. Currency calculators tell you how much you’ll get at the end of the transaction.

                                    The exchange rates of currencies are always on the move. Forex traders try to take advantage of these changing rates to earn a profit. For example, you could buy euros by selling dollars, wait for the euro to increase in value against the dollar, then convert your EUR back into USD for a profit.

                                    If the euro fell against the dollar, though, you’d sustain a loss.
                                </p>

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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Why trade with Qorva Markets</a>
                                </h3>
                                <p class="mb-3">A lot can happen in more than two decades. But throughout that time we’ve remained steadfast, providing traders with the stability and opportunities they need to make their mark on the financial markets.</p>
                                <h5>Global market leader</h5>
                                <p class="mb-2">We have been providing innovative products and helping traders achieve their goals since 2001.</p>
                                <h5>Award-winning trading platforms</h5>
                                <p class="mb-2">Enjoy a suite of powerful, industry-leading platforms and get the popular charting program TradingView for free.</p>
                                <h5>Reliable, consistent trade execution</h5>
                                <p class="mb-2">Peace of mind that your trades are executed swiftly, with a 99.94%* execution rate of less than a second.</p>
                                
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
      



        </div>
    </div>
</div>
</div>
<!-- ===============>> Service section start here <<================= -->



@endsection