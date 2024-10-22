@extends('master')
@section('contents')


<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px 20px;">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Raw Spread Account</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb" class="d-none">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/account-Types') }}">Account Type</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Raw Spread Account</li>
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
 
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__thumb mb-40" data-aos="fade-up" data-aos-duration="800">
                                <div class="service-details__thumb-inner">
                                    <img src="{{ asset('') }}assets/images/others2/1.png" alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">
                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Raw Spread Account</a>
                                </h3>
                                <p class="mb-3">The Raw Account at Qorva Markets caters to traders who prioritize cost-efficiency and direct market access. It offers raw spreads starting from 0 pips, with no mark-ups, ensuring transparent pricing and optimal trading conditions. This account is ideal for high-volume traders seeking to maintain maximum control over their trading costs.</p>
                                <h5>Benefits</h5>
                                <p class="mb-2"><b>.</b>Commission $6 per lot</p>
                                <p class="mb-2"><b>.</b> No minimum deposit</p>
                                <p class="mb-2"><b>.</b> Leverage up to 1:100</p>
                                <h5>Currencies</h5>
                                <p class="mb-2"><b>.</b>Commission $6 per lot</p>
                                <p class="mb-2"><b>.</b> No minimum deposit</p>
                                <p class="mb-2"><b>.</b> Leverage up to 1:100</p>
                                <h5>Other Offers</h5>
                                <p class="mb-2"><b>.</b>Commission $6 per lot</p>
                                <p class="mb-2"><b>.</b> No minimum deposit</p>
                                <p class="mb-2"><b>.</b> Leverage up to 1:100</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Raw Spread Account Info</a>
                                </h3>
                                <p class="mb-0">Bound to ensue and equal blame belongs to those who fail in their</p>
                                <ul class="list-group">
                                    <li class="list-group-item">Initial Deposit 5100</li>
                                    <li class="list-group-item">Leverage Upto 1:100</li>
                                    <li class="list-group-item">Order Volume 0.01 – 500 lots</li>
                                    <li class="list-group-item">SpreadFixed from 0 pis</li>
                                    <li class="list-group-item">24/7 SupportYes</li>
                                    <li class="list-group-item">Multi Language CCYes</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Reason for Choose</a>
                                </h3>
                                
                                <h5>Friendly & Expert01</h5>
                                <p class="mb-2">Enjoy a friendly and expert team dedicated to your trading success, providing personalized support and expert guidance every step of the way.</p>
                                <h5>24/7 Support02</h5>
                                <p class="mb-2">Experience round-the-clock support at Qorva Markets, ensuring assistance and guidance whenever you need it to enhance your trading journey</p>
                                <h5>Social Trading</h5>
                                <p class="mb-2">With our copy trading feature, effortlessly replicate the trades of seasoned investors, leveraging their expertise to optimize your own portfolio.</p>
                                <h5>IB Rewards</h5>
                                <p class="mb-2">With our IB Rewards program, benefit from lucrative incentives and bonuses as an Introducing Broker, unlocking exclusive perks and rewards for your successful referrals.</p>
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