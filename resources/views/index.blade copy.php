@extends('master')
@section('contents')





<!-- ===============>> Banner section start here <<================= -->
<section class="banner banner--style1">
  <div class="banner__bg">
    <div class="banner__bg-element">
      <img src="{{ asset('') }}assets/images/banner/home1/bg.png" alt="section-bg-element" class="dark d-none d-lg-block">
      <span class="bg-color d-lg-none"></span>
    </div>
  </div>
  <div class="container">
    <div class="banner__wrapper">
      <div class="row gy-5 gx-4">
        <div class="col-lg-6 col-md-7">
          <div class="banner__content" data-aos="fade-right" data-aos-duration="1000">
            <div class="banner__content-coin">
              <img src="{{ asset('') }}assets/images/banner/home1/3.png" alt="coin icon">
            </div>
            <h1 class="banner__content-heading">Gain Market Access
              through <span>Qorva Markets</span></h1>
            <p class="banner__content-moto">Unlock your trading potential with a platform designed for you.
            </p>
            <div class="banner__btn-group btn-group">

              <a href="https://www.youtube.com/watch?v=MHhIzIgFgJo&amp;ab_channel=NoCopyrightFootages"
                class="trk-btn trk-btn--outline22" data-fslightbox>
                Open An Account <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
            <div class="banner__content-social">
              <p>Follow Us</p>
              <ul class="social">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style1"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style1"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style1"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="signin.html" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-5">
          <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
            <img src="{{ asset('') }}assets/images/banner/home1/1.png" alt="banner-thumb" class="dark">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner__shape">
    <span class="banner__shape-item banner__shape-item--1"><img src="{{ asset('') }}assets/images/banner/home1/4.png"
        alt="shape icon"></span>
  </div>

</section>
<!-- ===============>> Banner section end here <<================= -->





<!-- ===============>> partner section start here <<================= -->
<div class="partner partner--gradient">
  <div class="container">
    <div class="partner__wrapper">
      <div class="partner__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="partner__item">
              <div class="partner__item-inner">
                <img src="{{ asset('') }}assets/images/partner/light/1.png" alt="partner logo" class="dark">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="partner__item">
              <div class="partner__item-inner">
                <img src="{{ asset('') }}assets/images/partner/light/2.png" alt="partner logo" class="dark">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="partner__item">
              <div class="partner__item-inner">
                <img src="{{ asset('') }}assets/images/partner/light/3.png" alt="partner logo" class="dark">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="partner__item">
              <div class="partner__item-inner">
                <img src="{{ asset('') }}assets/images/partner/light/4.png" alt="partner logo" class="dark">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="partner__item">
              <div class="partner__item-inner">
                <img src="{{ asset('') }}assets/images/partner/light/5.png" alt="partner logo" class="dark">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ===============>> partner section end here <<================= -->





<!-- ===============>> About section start here <<================= -->
<section class="about about--style1 ">
  <div class="container">
    <div class="about__wrapper">
      <div class="row gx-5  gy-4 gy-sm-0  align-items-center">
        <div class="col-lg-6">
          <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
            <div class="about__thumb-inner">
              <div class="about__thumb-image floating-content">
                <img class="dark" src="{{ asset('') }}assets/images/about/1.png" alt="about-image">
                <div class="floating-content__top-left" data-aos="fade-right" data-aos-duration="1000">
                  <div class="floating-content__item">
                    <h3>
                      <!-- <span class="purecounter" data-purecounter-start="0" data-purecounter-end="30">30</span> -->
                      About Qorva
                    </h3>
                    <!-- <p>Consulting Experience</p> -->
                  </div>
                </div>
                <div class="floating-content__bottom-right" data-aos="fade-right" data-aos-duration="1000">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about__content" data-aos="fade-left" data-aos-duration="800">
            <div class="about__content-inner">
              <h2> In a Fast Moving Market Choose <span>Stable Broker</span></h2>
              <p class="mb-0">At Qorva Markets, our wealth of experience, coupled with our support establishes us as the preferred broker for traders worldwide. We possess the knowledge and resources necessary to assist traders of all skill levels in achieving their investment objectives, embodying the capabilities of a leading brokerage firm. </p>
              <a href="about.html" class="trk-btn trk-btn--border trk-btn--primary">Explore More </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> About section start here <<================= -->




<!-- ===============>> feature section start here <<================= -->
<section class="feature feature--style1 padding-bottom padding-top bg-color">
  <div class="container">
    <div class="feature__wrapper">
      <div class="row g-5 align-items-center justify-content-between">
        <div class="col-md-6 col-lg-5">
          <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
            <div class="feature__content-inner">
              <div class="section-header">
                <h2 class="mb-10 mt-minus-5">Everything you need to <span>trade Forex</span> in one place</h2>
                <!-- <p class="mb-0">
                    Unlock the full potential of our product with our amazing features and top-notch.
                  </p> -->
              </div>

              <div class="feature__nav">
                <div class="nav nav--feature flex-column nav-pills" id="feat-pills-tab" role="tablist"
                  aria-orientation="vertical">
                  <div class="nav-link active" id="feat-pills-one-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-one" role="tab" aria-controls="feat-pills-one" aria-selected="true">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Retail Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-two-tab" data-bs-toggle="pill" data-bs-target="#feat-pills-two"
                    role="tab" aria-controls="feat-pills-two" aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Day Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="nav-link" id="feat-pills-three-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-three" role="tab" aria-controls="feat-pills-three"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Position Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-four-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-four" role="tab" aria-controls="feat-pills-four"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>The Swing Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav-link" id="feat-pills-five-tab" data-bs-toggle="pill"
                    data-bs-target="#feat-pills-five" role="tab" aria-controls="feat-pills-five"
                    aria-selected="false">
                    <div class="feature__item">
                      <div class="feature__item-inner">
                        <div class="feature__item-content">
                          <h6>Institiutional Trader</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
            <div class="feature__thumb-inner">
              <div class="tab-content" id="feat-pills-tabContent">
                <div class="tab-pane fade show active" id="feat-pills-one" role="tabpanel"
                  aria-labelledby="feat-pills-one-tab" tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/1.png" alt="Feature image">
                  </div>
                </div>
                <div class="tab-pane fade" id="feat-pills-two" role="tabpanel" aria-labelledby="feat-pills-two-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                </div>
                <div class="tab-pane fade" id="feat-pills-three" role="tabpanel"
                  aria-labelledby="feat-pills-three-tab" tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/1.png" alt="Feature image">
                  </div>
                </div>
                <div class="tab-pane fade" id="feat-pills-four" role="tabpanel" aria-labelledby="feat-pills-four-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                </div>
                <div class="tab-pane fade" id="feat-pills-five" role="tabpanel" aria-labelledby="feat-pills-four-tab"
                  tabindex="0">
                  <div class="feature__image floating-content">
                    <img src="{{ asset('') }}assets/images/feature/2.png" alt="Feature image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feature__shape">
    <span class="feature__shape-item feature__shape-item--1"><img src="{{ asset('') }}assets/images/feature/shape/1.png"
        alt="shape-icon"></span>
    <span class="feature__shape-item feature__shape-item--2"> <span></span> </span>
  </div>
</section>
<!-- ===============>> feature section end here <<================= -->




<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom">
  <div class="section-header section-header--max50">
    <p>Forex Trading</p>
    <h2 class="mb-10 mt-minus-5">The Ultimate Gateway to <span>Trading</span> Success</h2>

  </div>
  <div class="container">
    <div class="service__wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
            <div class="service__item-inner text-center">
              <div class="service__item-thumb mb-30">
                <img class="dark" src="{{ asset('') }}assets/images/others/icon-8.png" alt="service-icon">
              </div>
              <div class="service__item-content">
                <h5>
                  <a class="stretched-link" href="service-details.html">What is forex trading?</a>
                </h5>
                <p class="mb-5">Forex trading, also known as foreign exchange trading or FX trading, is the process of ...</p>
              </div>
              <h6>* Open Live Account</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="1000">
            <div class="service__item-inner text-center">
              <div class="service__item-thumb mb-30">
                <img class="dark" src="{{ asset('') }}assets/images/others/icon-10.png" alt="service-icon">
              </div>
              <div class="service__item-content">
                <h5> <a class="stretched-link" href="service-details.html">Why trade in Qorva Markets?</a> </h5>
                <p class="mb-5">Choosing Qorva Markets as your preferred trading platform offers several advantages that cater to the ...
                </p>
              </div>
              <h6>* Open Live Account</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800">
            <div class="service__item-inner text-center">
              <div class="service__item-thumb mb-30">
                <img class="dark" src="{{ asset('') }}assets/images/others/icon-12.png" alt="service-icon">
              </div>
              <div class="service__item-content">
                <h5> <a class="stretched-link" href="service-details.html">How to trade Forex </a>
                </h5>
                <p class="mb-5">Trading forex involves a combination of knowledge, strategy, and discipline. Here’s a step-by-step guide on ...</p>
              </div>
              <h6>* Open Live Account</h6>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
<!-- ===============>> Service section start here <<================= -->




<!-- ========== Roadmap Section start Here========== -->
<section class="roadmap roadmap--style1 padding-top  padding-bottom bg-color" id="roadmap">
  <div class="container">
    <div class="section-header section-header--max50">
      <p>Account Types</p>
      <h2 class="mb-10 mt-minus-5">Forex Trading <span>Accounts</span></h2>
    </div>
    <div class="roadmap__wrapper">
      <div class="row gy-4 gy-md-0 gx-5">
        <div class="col-md-6 offset-md-6">
          <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
            <div class="roadmap__item-inner">
              <div class="roadmap__item-content">
                <img src="{{ asset('') }}assets/images/others/account-1.jpg" alt="Team Image" class="dark mb-2">
                <div class="roadmap__item-header">
                  <h3>Standard a/c</h3>
                  <span>A1</span>
                </div>
                <p class="mb-5">The Standard Account at Qorva Markets offers a balanced trading experience, ideal for both novice ...</p>
                <a href="#"><span>Open your account</span><span><i class="fa-solid fa-arrow-right"></i></span> </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right"
            data-aos-duration="800">
            <div class="roadmap__item-inner">
              <div class="roadmap__item-content">
                <img src="{{ asset('') }}assets/images/others/account-2.jpg" alt="Team Image" class="dark mb-2">
                <div class="roadmap__item-header">
                  <h3>Raw a/c</h3>
                  <span>A2</span>
                </div>
                <p class="mb-5">The Raw Account at Qorva Markets caters to traders who prioritize cost-efficiency and direct market ...</p>
                <a href="#"><span>Open your account</span><span><i class="fa-solid fa-arrow-right"></i></span> </a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6 offset-md-6">
          <div class="roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
            <div class="roadmap__item-inner">
              <div class="roadmap__item-content">
                <img src="{{ asset('') }}assets/images/others/account-3.jpg" alt="Team Image" class="dark mb-2">
                <div class="roadmap__item-header">
                  <h3>STP Pro a/c</h3>
                  <span>A3</span>
                </div>
                <p class="mb-5">The STP Pro Account at Qorva Markets is tailored for traders seeking enhanced trading conditions ...</p>
                <a href="#"><span>Open your account</span><span><i class="fa-solid fa-arrow-right"></i></span> </a>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  <div class="roadmap__shape">
    <span class="roadmap__shape-item roadmap__shape-item--1"> <span></span> </span>
    <span class="roadmap__shape-item roadmap__shape-item--2"> <img src="{{ asset('') }}assets/images/icon/1.png" alt="shape-icon">
    </span>
  </div>
</section>
<!-- ========== Roadmap Section Ends Here========== -->


<!-- ===============>> Testimonial section start here <<================= -->
<section class="testimonial padding-top padding-bottom-style2 bg-color">
  <div class="container">
    <div class="row align-items-center">
      <!-- Static Image on the Left Side -->
      <div class="col-md-6">
        <div class="testimonial__static-image">
          <img src="https://qorvamarkets.com/wp-content/uploads/2023/05/tools-1.jpg" alt="Tools Image" class="img-fluid">
        </div>
      </div>

      <!-- Swiper Slider on the Right Side -->
      <div class="col-md-6">
        <div class="section-header d-md-flex align-items-center justify-content-between">
          <div class="section-header__content">
            <p class="mb-0">Trading Tools</p>
            <h2 class="mb-10">Tools for Every <span>Trader</span></h2>
          </div>
          <div class="section-header__action">
            <div class="swiper-nav">
              <button class="swiper-nav__btn testimonial__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
              <button class="swiper-nav__btn testimonial__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
            </div>
          </div>
        </div>

        <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
          <div class="testimonial__slider swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/icon-16.png" alt="author" style="width:80px !important">
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Pip Value Calculator</h5>
                      <p class="mb-0">
                        Use our provided tool to see conversion rates on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="#">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 2: Margin Calculator -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/icon-16.png" alt="author" style="width:80px !important"> <!-- Update with your icon path -->
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Margin Calculator</h5>
                      <p class="mb-0">
                        User our provided tool to calculate marging on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="#">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slide 3: Free Currency Converter -->
              <div class="swiper-slide">
                <div class="testimonial__item testimonial__item--style1">
                  <div class="testimonial__item-inner">
                    <div class="testimonial__author-thumb mb-5">
                      <img src="{{ asset('') }}assets/images/others/icon-16.png" alt="author" style="width:80px !important"> <!-- Update with your icon path -->
                    </div>
                    <hr>
                    <div class="testimonial__item-content">
                      <h5>Free Currency Converter</h5>
                      <p class="mb-0">
                        User our provided tool to see conversion rates on different products.
                      </p>
                      <div class="testimonial__footer">
                        <div class="testimonial__author">
                          <div class="testimonial__author-designation">
                            <a href="#">
                              <h6>Use Our Tool <span><i class="fa-solid fa-arrow-right"></i></span></h6>
                            </a>
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
      </div>

    </div>
  </div>
</section>

<!-- ===============>> Testimonial section end here <<================= -->

<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom">
  <div class="section-header section-header--max50">
    <p>Forex Trading</p>
    <h2 class="mb-10 mt-minus-5">Top <span> Pricing</span> List in Market</h2>
  </div>
  <div class="container">
    <div class="service__wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-12"> <!-- Ensure full width on all devices -->
          <div class="service__item service__item--style1" data-aos="fade-up" data-aos-duration="800" style="max-height: 500px; overflow-y: auto;"> <!-- Limit the height to 500px and make it scrollable -->
          <table class="pricing-table table table-bordered" style="width: 100%; border: 1px solid #ddd;"> <!-- Set full width and border around the table -->
              <thead class="table-header" style="background-color: #f8f8f8; border-bottom: 2px solid #ddd;">
                <tr>
                  <th style="border: 1px solid #ddd; padding: 10px;">Name</th>
                  
                  <th style="border: 1px solid #ddd; padding: 10px;">Sell</th>
                  <th style="border: 1px solid #ddd; padding: 10px;">Buy</th>
                  <th style="border: 1px solid #ddd; padding: 10px;">Spread</th>
                  <th style="border: 1px solid #ddd; padding: 10px;">Chart</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>eur  <i class="fas fa-exchange-alt"></i> usd</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$1.06199</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$1.06185</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="red">-0.14%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-1.png" alt="Awesome Image"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>usd  <i class="fas fa-exchange-alt"></i> jpy</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$1.22195</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$1.22199</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="green">+0.04%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-2.png" alt="Awesome Image"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>gbp  <i class="fas fa-exchange-alt"></i> usd</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$0.65982</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$0.65994</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="green">+0.12%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-3.png" alt="Awesome Image"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>aud  <i class="fas fa-exchange-alt"></i> usd</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$0.89652</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$0.89665</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="green">+0.13%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-4.png" alt="Awesome Image"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>eur  <i class="fas fa-exchange-alt"></i> gbp</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$25.458</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$22.398</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="red">-3.06%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-5.png" alt="Awesome Image"></div>
                  </td>
                  
                </tr>
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="name-box">
                      <p>aud  <i class="fas fa-exchange-alt"></i> cad</p>
                    </div>
                  </td>
                  
                  <td style="border: 1px solid #ddd; padding: 10px;">$25.458</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">$22.398</td>
                  <td style="border: 1px solid #ddd; padding: 10px;"><span class="red">-3.06%</span></td>
                  <td style="border: 1px solid #ddd; padding: 10px;">
                    <div class="chart"><img decoding="async" src="https://qorvamarkets.com/wp-content/uploads/2023/03/chart-6.png" alt="Awesome Image"></div>
                  </td>
                 
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> Service section end here <<================= -->


<!-- ===============>> Pricing section start here <<================= -->
<section class="pricing padding-top padding-bottom d-none">
  <div class="section-header section-header--max50">
    <h2 class="mb-10 mt-minus-5">Our <span>pricings </span>plan</h2>
    <p>We offer the best pricings around - from installations to repairs, maintenance, and more!</p>
  </div>
  <div class="container">
    <div class="pricing__wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-md-6 col-lg-4">
          <div class="pricing__item" data-aos="fade-right" data-aos-duration="1000">
            <div class="pricing__item-inner">
              <div class="pricing__item-content">

                <!-- pricing top part -->
                <div class="pricing__item-top">
                  <h6 class="mb-15">Basic</h6>
                  <h3 class="mb-25">$99/<span>Monthly</span> </h3>
                </div>

                <!-- pricing middle part -->
                <div class="pricing__item-middle">
                  <ul class="pricing__list">
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Weekly online meeting</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Unlimited learning access</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      24/7 technical support</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Personal training</li>
                  </ul>

                </div>

                <!-- pricing bottom part -->
                <div class="pricing__item-bottom">
                  <a href="signup.html" class="trk-btn trk-btn--outline">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="pricing__item " data-aos="fade-up" data-aos-duration="1000">
            <div class="pricing__item-inner active">
              <div class="pricing__item-content">

                <!-- pricing top part -->
                <div class="pricing__item-top">
                  <h6 class="mb-15">standard</h6>
                  <h3 class="mb-25">$149/<span>Monthly</span> </h3>
                </div>

                <!-- pricing middle part -->
                <div class="pricing__item-middle">
                  <ul class="pricing__list">
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Weekly online meeting</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Unlimited learning access</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      24/7 technical support</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Personal training</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Business analysis</li>
                  </ul>

                </div>

                <!-- pricing bottom part -->
                <div class="pricing__item-bottom">
                  <a href="signup.html" class="trk-btn trk-btn--outline active">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="pricing__item" data-aos="fade-left" data-aos-duration="1000">
            <div class="pricing__item-inner">
              <div class="pricing__item-content">

                <!-- pricing top part -->
                <div class="pricing__item-top">
                  <h6 class="mb-15">premium</h6>
                  <h3 class="mb-25">$199/<span>Monthly</span> </h3>
                </div>

                <!-- pricing middle part -->
                <div class="pricing__item-middle">
                  <ul class="pricing__list">
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      With all standard features</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Unlimited learning access</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      24/7 technical support</li>
                    <li class="pricing__list-item"><span><img src="{{ asset('') }}assets/images/icon/check.svg" alt="check"
                          class="dark"></span>
                      Personal training</li>
                  </ul>

                </div>

                <!-- pricing bottom part -->
                <div class="pricing__item-bottom">
                  <a href="signup.html" class="trk-btn trk-btn--outline">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pricing__shape">
    <span class="pricing__shape-item pricing__shape-item--1"> <span></span> </span>
    <span class="pricing__shape-item pricing__shape-item--2"> <img src="{{ asset('') }}assets/images/icon/1.png" alt="shape-icon">
    </span>
  </div>
</section>
<!-- ===============>> Pricing section start here <<================= -->





<!-- ===============>> Team section start here <<================= -->
<section class="team padding-top padding-bottom bg-color">
  <div class="section-header section-header--max50">
    <h2 class="mb-10 mt-minus-5">Meet our <span>advisers</span></h2>
    <p>Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
  </div>
  <div class="container">
    <div class="team__wrapper">
      <div class="row g-4 align-items-center">
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/1.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Dianne Russell</a> </h6>
                    <p class="mb-0">Trade Captain</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/2.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Theresa Webb</a> </h6>
                    <p class="mb-0">Strategic Advisor</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/3.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Courtney Henry</a> </h6>
                    <p class="mb-0">Management Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/4.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Albert Flores</a> </h6>
                    <p class="mb-0">Development Specialist</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/5.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Darrell Steward</a> </h6>
                    <p class="mb-0">Growth Strategist</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/6.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Wade Warren</a> </h6>
                    <p class="mb-0">Trade Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/7.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Cody Fisher</a> </h6>
                    <p class="mb-0">HR Consultant</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
            <div class="team__item-inner team__item-inner--shape">
              <div class="team__item-thumb team__item-thumb--style1">
                <img src="{{ asset('') }}assets/images/team/8.png" alt="Team Image" class="dark">
              </div>
              <div class="team__item-content team__item-content--style1">
                <div class="team__item-author team__item-author--style1">
                  <div class="team__item-authorinfo">
                    <h6 class="mb-1"><a href="team-details.html" class="stretched-link">Bessie Cooper</a> </h6>
                    <p class="mb-0">Financial Advisor</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="team.html" class="trk-btn trk-btn--border trk-btn--primary mt-25">View more </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> Team section start here <<================= -->




<!-- ===============>> Blog section start here <<================= -->
<section class="blog padding-top padding-bottom">
  <div class="container">
    <div class="section-header d-md-flex align-items-center justify-content-between">
      <div class="section-header__content">
        <h2 class="mb-10"><span>articles</span> for pro traders</h2>
        <p class="mb-0">Hey there pro traders, check out these articles with tips to take your trading game to the
          next level!</p>
      </div>
      <div class="section-header__action">
        <div class="swiper-nav swiper-nav--style1">
          <button class="swiper-nav__btn blog__slider-prev"><i class="fa-solid fa-angle-left"></i></button>
          <button class="swiper-nav__btn blog__slider-next active"><i class="fa-solid fa-angle-right"></i></button>
        </div>
      </div>
    </div>
    <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
      <div class="blog__slider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/blog/1.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <span class="blog__meta-tag blog__meta-tag--style1">Forex trading</span>
                  </div>
                  <h5 class="10"> <a href="blog-details.html">Swing Trading Definition</a> </h5>

                  <p class="mb-15">Our platform is not only about trading—it's also a hub for knowledge and learning.
                    We provide resources. Our platform is not only about trading—it's also a hub for knowledge and learning.
                    We provide resources.</p>

                  <div class="blog__writer">
                    <div class="blog__writer-thumb">
                      <img src="{{ asset('') }}assets/images/blog/author/1.png" alt="writer">
                    </div>
                    <div class="blog__writer-designation">
                      <h6 class="mb-0">Vasha Gueye</h6>
                      <span>20/6/2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/blog/2.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <span class="blog__meta-tag blog__meta-tag--style1">Trading market</span>
                  </div>
                  <h5 class="10"> <a href="blog-details.html">hedge funds work?</a> </h5>

                  <p class="mb-15">To cater to your individual trading preferences, we offer a variety of order types,
                    including market.</p>

                  <div class="blog__writer">
                    <div class="blog__writer-thumb">
                      <img src="{{ asset('') }}assets/images/blog/author/2.png" alt="writer">
                    </div>
                    <div class="blog__writer-designation">
                      <h6 class="mb-0">Abhivibha Kanmani</h6>
                      <span>30/5/2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="blog__item blog__item--style2">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{ asset('') }}assets/images/blog/3.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <span class="blog__meta-tag blog__meta-tag--style1">Investment</span>
                  </div>
                  <h5 class="10"> <a href="blog-details.html">Options Trading business?</a> </h5>

                  <p class="mb-15">Security is our top priority, and we employ robust measures to ensure the safety of
                    your funds.</p>

                  <div class="blog__writer">
                    <div class="blog__writer-thumb">
                      <img src="{{ asset('') }}assets/images/blog/author/3.png" alt="writer">
                    </div>
                    <div class="blog__writer-designation">
                      <h6 class="mb-0">Hulya Aydin</h6>
                      <span>12/07/2024</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="blogs.html" class="trk-btn trk-btn--border trk-btn--primary mt-15">View more </a>
    </div>
  </div>
  <div class="blog__shape">
    <span class="blog__shape-item blog__shape-item--1"> <span></span> </span>
  </div>
</section>
<!-- ===============>> Blog section start here <<================= -->






<!-- ===============>> FAQ section start here <<================= -->
<section class="faq padding-top padding-bottom of-hidden">
  <div class="section-header section-header--max65">
    <h2 class="mb-10 mt-minus-5"><span>Frequently</span> Asked questions</h2>
    <p>Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not satisfied? Hit
      us up.</p>
  </div>
  <div class="container">
    <div class="faq__wrapper">
      <div class="row g-5 align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
            <div class="row">
              <div class="col-12">
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq1">
                    <button class="accordion__button accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                      <span class="accordion__button-content">What does this tool do?</span>
                    </button>
                  </div>
                  <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">
                        Online trading’s primary advantages are that it allows you to manage your trades at your
                        convenience.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq2">
                    <button class="accordion-button accordion__button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="true"
                      aria-controls="faqBody2">
                      <span class=" accordion__button-content">What are the disadvantages of online trading?</span>
                    </button>
                  </div>
                  <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15">
                        You don’t need to worry, the interface is user-friendly. Anyone can use
                        it smoothly. Our user manual will help you to solve your problem.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq3">
                    <button class="accordion-button accordion__button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false"
                      aria-controls="faqBody3">
                      <span class="accordion__button-content">Is online trading safe?</span>
                    </button>
                  </div>
                  <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15"> Online trading’s primary advantages are that it allows you to manage your
                        trades at your convenience.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq4">
                    <button class="accordion-button accordion__button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false"
                      aria-controls="faqBody4">
                      <span class="accordion__button-content">What is online trading, and how does it work?</span>
                    </button>
                  </div>
                  <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faq4"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15"> Online trading’s primary advantages are that it allows you to manage your
                        trades at your convenience.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion__item accordion-item">
                  <div class="accordion__header accordion-header" id="faq5">
                    <button class="accordion-button accordion__button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false"
                      aria-controls="faqBody5">
                      <span class="accordion__button-content">Which app is best for online trading?</span>
                    </button>
                  </div>
                  <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faq5"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15"> Online trading’s primary advantages are that it allows you to manage your
                        trades at your convenience.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion__item accordion-item border-0">
                  <div class="accordion__header accordion-header" id="faq6">
                    <button class="accordion-button accordion__button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faqBody6" aria-expanded="false"
                      aria-controls="faqBody6">
                      <span class="accordion__button-content"> How to create a trading account?</span>
                    </button>
                  </div>
                  <div id="faqBody6" class="accordion-collapse collapse" aria-labelledby="faq6"
                    data-bs-parent="#faqAccordion1">
                    <div class="accordion__body accordion-body">
                      <p class="mb-15"> Online trading’s primary advantages are that it allows you to manage your
                        trades at your convenience.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="faq__thumb faq__thumb--style1" data-aos="fade-left" data-aos-duration="1000">
            <img class="dark" src="{{ asset('') }}assets/images/others/1.png" alt="faq-thumb">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="faq__shape faq__shape--style1">
    <span class="faq__shape-item faq__shape-item--1"><img src="{{ asset('') }}assets/images/others/2.png" alt="shpae-icon"></span>
  </div>
</section>
<!-- ===============>> FAQ section start here <<================= -->





<!-- ===============>> cta section start here <<================= -->
<section class="cta padding-top padding-bottom  bg-color">
  <div class="container">
    <div class="cta__wrapper">
      <div class="cta__newsletter justify-content-center">
        <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
          <div class="cta__thumb">
            <img src="{{ asset('') }}assets/images/cta/3.png" alt="cta-thumb">
          </div>
          <div class="cta__subscribe">
            <h2> <span>Subscribe</span> our news</h2>
            <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
            <form class="cta-form cta-form--style2 form-subscribe" action="#">
              <div class="cta-form__inner d-sm-flex align-items-center">
                <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                  placeholder="Email Address">
                <button class="trk-btn  trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="cta__shape">
        <span class="cta__shape-item cta__shape-item--1"><img src="{{ asset('') }}assets/images/cta/2.png" alt="shape icon"></span>
        <span class="cta__shape-item cta__shape-item--2"><img src="{{ asset('') }}assets/images/cta/4.png" alt="shape icon"></span>
        <span class="cta__shape-item cta__shape-item--3"><img src="{{ asset('') }}assets/images/cta/5.png" alt="shape icon"></span>
      </div>
    </div>
  </div>
</section>
<!-- ===============>> cta section start here <<================= -->


@endsection