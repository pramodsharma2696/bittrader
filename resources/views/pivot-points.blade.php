@extends('master')
@section('contents')

<!-- ================> Page header start here <================== -->
<section class="page-header bg--cover">
    <div class="background bg--cover" style="background-image:url(assets/images/header/1.png);padding: 100px">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Pivot Points</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Platforms and Tools</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/trading-tools') }}">Trading tools</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pivot Points</li>
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
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Pivot Points Calculator</a></h3>
                                <p class="mb-3">Determine significant daily, weekly and monthly support and resistance levels with the help of our pivot points calculator.</p>
                                
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
                               
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Understanding Pivot Points</a></h3>
                                <p class="mb-3">Pivot points are used by traders as a predictive indicator and denote levels of technical significance. When used in conjunction with other technical indicators such as support and resistance or Fibonacci, pivot points can be an effective trading tool.</p>
                                
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