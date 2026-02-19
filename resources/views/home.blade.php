@extends('layouts.app')

@section('title', 'Pathfinder311 – Independent Life Insurance & Financial Protection Specialist')

@section('header-top')
<div class="header-top__area black-bg fix">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-9 col-lg-8 col-md-6">
            <div class="header-top__left-info">
               <ul>
                  <li class="d-none d-xl-inline-block"><a href="tel:2402647547"><i class="fas fa-phone-alt"></i>240-264-7547</a></li>
                  <li class="d-none d-lg-inline-block"><a href="#" target="_blank"><i class="fas fa-map-marker-alt"></i>1401 Mercantile Lane, Largo, MD 20721 Suite 531</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('content')

   <!--slider-area-start -->
   <div class="slider__area">
      <div class="slider__active">
         <div class="slider__item">
            <div class="slider__bg slider__height slider__overlay-shape d-flex align-items-center" data-background="{{ asset('assets/img/slider/hero-5.jpeg') }}">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-7 col-xl-8 col-lg-10">
                        <div class="slider__content-box z-index-5">
                           <div class="slider__title-box">
                              <h2 class="slider__title text-white pb-25">Pathfinder311 – Financial Protection & Business Advisory</h2>
                              <p class="text-white pb-25">Pathfinder311 helps individuals and small business owners protect profits, remain compliant, and build financially sound businesses through proper structure, accurate records, and strategic tax planning.</p>
                           </div>
                           <div class="slider__btn">
                              <a class="tp-btn" href="{{ route('contact') }}"><span>Schedule a Financial Protection Consultation</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="slider__bg slider__height slider__overlay-shape d-flex align-items-center" data-background="{{ asset('assets/img/slider/hero-4.jpeg') }}">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-7 col-xl-8 col-lg-10">
                        <div class="slider__content-box z-index-5">
                           <div class="slider__title-box">
                              <h4 class="slider__sub-title text-white pb-25">Our Mission</h4>
                              <h2 class="slider__title text-white pb-25">Clarity. Compliance. Protection.</h2>
                              <p class="text-white pb-25">To help businesses protect their financial future through compliance, structure, and clarity. We solve the structure and compliance challenges businesses face.</p>
                           </div>
                           <div class="slider__btn">
                              <a class="tp-btn" href="{{ route('contact') }}"><span>Free Strategy Call</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider__item">
            <div class="slider__bg slider__height slider__overlay-shape d-flex align-items-center" data-background="{{ asset('assets/img/slider/hero-3.jpeg') }}">
               <div class="container">
                  <div class="row">
                     <div class="col-xxl-7 col-xl-8 col-lg-10">
                        <div class="slider__content-box z-index-5">
                           <div class="slider__title-box">
                              <h4 class="slider__sub-title text-white pb-25">Our Promise</h4>
                              <h2 class="slider__title text-white pb-25">Legitimate Tax Reduction & Audit Readiness</h2>
                              <p class="text-white pb-25">We provide proper business formation, setup, and clean, audit-ready financial records for long-term protection.</p>
                           </div>
                           <div class="slider__btn">
                              <a class="tp-btn" href="{{ route('contact') }}"><span>Get Started</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--slider-area-end -->

   <!--feature-area-start -->
   <div class="feature__area feature__xs-space pt-105 pb-70">
      <div class="container">
         <div class="row debug-feature-row">
            <div class="col-xl-6 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
               <div class="feature__item feature__space-1">
                  <span>01.</span>
                  <h4 class="feature__title-sm">Our Mission</h4>
                  <p>To help businesses protect their financial future through compliance, structure, and clarity.</p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
               <div class="feature__item feature__space-2">
                  <span>02.</span>
                  <h4 class="feature__title-sm">Our Promise</h4>
                  <ul class="service-list">
                     <li>Legitimate tax reduction strategies</li>
                     <li>Proper business formation and setup</li>
                     <li>Clean, audit-ready financial records</li>
                     <li>Long-term financial protection</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--feature-area-end -->

   <!--service-area-start -->
   <div class="service__area pt-115 pb-120 grey-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
               <div class="service__section-box text-center mb-50 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s" id="services">
                  <h4 class="section-subtitle">OUR SERVICES</h4>
                  <h2 class="section-title">Core Services</h2>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon mb-20">
                     <span><i class="fas fa-briefcase"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm mb-15"><a href="{{ route('services') }}">Business Formation & Structuring</a></h4>
                     <ul class="service-list">
                        <li>LLC and corporate structuring guidance</li>
                        <li>IRS-friendly business setup</li>
                        <li>Compliance-ready registration</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon mb-20">
                     <span><i class="fas fa-file-invoice-dollar"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm mb-15"><a href="{{ route('services') }}">Tax Filing & IRS Readiness</a></h4>
                     <ul class="service-list">
                        <li>Individual and business tax filing</li>
                        <li>Compliance-focused preparation</li>
                        <li>Legitimate tax reduction strategies</li>
                        <li>IRS-ready documentation</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon mb-20">
                     <span><i class="fas fa-file-invoice"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm mb-15"><a href="{{ route('services') }}">Profit & Loss (P&L) Preparation</a></h4>
                     <ul class="service-list">
                        <li>Monthly and annual P&L statements</li>
                        <li>Expense tracking and categorization</li>
                        <li>Financial clarity for decision-making</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1.1s">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon mb-20">
                     <span><i class="fas fa-university"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm mb-15"><a href="{{ route('services') }}">Business Bank Account Setup</a></h4>
                     <ul class="service-list">
                        <li>Proper SMB banking setup</li>
                        <li>Separation of personal and business finances</li>
                        <li>Financial transparency</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1.3s">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon mb-20">
                     <span><i class="fas fa-shield-alt"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm mb-15"><a href="{{ route('services') }}">Audit Support</a></h4>
                     <ul class="service-list">
                        <li>Audit readiness reviews</li>
                        <li>Financial record assessment</li>
                        <li>Compliance gap identification</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row justify-content-center wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1.1s">
            <div class="col-xl-7 col-lg-10">
               <div class="service__link text-center mt-20">
                  <span>Contact us today for a personalized recommendation <a href="{{ route('contact') }}">Get Started</a></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--service-area-end -->

   <!--about-area-start -->
   <div class="about__area pt-120 pb-40" data-background="{{ asset('assets/img/about/about-bg.jpg') }}">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-12 wow tpfadeLeft" data-wow-duration=".7s" data-wow-delay=".3s">
               <div class="about__wrapper text-center p-relative">
                  <div class="about__shape-img">
                     <img src="{{ asset('assets/img/about/about-shape-1.png') }}" alt="">
                  </div>
                  <div class="about__left-thumb z-index">
                     <img src="{{ asset('assets/img/about/about-img.png') }}" alt="">
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-12 wow tpfadeRight" data-wow-duration=".7s" data-wow-delay=".5s">
               <div class="about__right-info" id="about">
                  <div class="about__section-box pb-25">
                     <h4 class="section-subtitle">THE PROBLEM WE SOLVE</h4>
                     <h2 class="section-title text-white pb-10">Prevent Costly Mistakes Before They Become Problems</h2>
                     <p>Many businesses struggle not because they are unprofitable, but because they lack structure, compliance, and financial clarity. Common challenges include improper registration, disorganized finances, incorrect tax filings, poor banking structure, missing profit and loss statements, and lack of audit readiness. Pathfinder311 exists to prevent these costly mistakes before they become serious financial problems.</p>
                  </div>
                  <div class="about__content-box d-flex align-items-center">
                     <div class="about__content-info">
                        <a class="tp-btn" href="{{ route('contact') }}"><span>Schedule Your Call</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--about-area-end -->

   <!--webinar-area-start -->
   <div class="webinar__area pt-115 pb-120 grey-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
               <div class="webinar__section-box text-center">
                  <h4 class="section-subtitle">CALL TO ACTION</h4>
                  <h2 class="section-title pb-20">If you're asking:</h2>
                  <ul style="list-style: none; padding: 0; margin-bottom: 30px; font-size: 18px; font-weight: 500;">
                     <li>Is my business set up correctly?</li>
                     <li>Am I paying more tax than necessary?</li>
                     <li>Are my financial records audit-ready?</li>
                  </ul>
                  <div class="webinar__btn">
                     <a class="tp-btn" href="{{ route('contact') }}"><span>Schedule a Financial Protection Consultation today</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--webinar-area-end -->

   <!--journey-area-start -->
   <div class="journey__area pt-120 pb-115 grey-bg p-relative" id="process">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="journey__left-box text-end p-relative">
                  <div class="journey__thumb">
                     <img src="{{ asset('assets/img/journey/journey-1.jpeg') }}" alt="">
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="journey__right-box">
                  <div class="journey__section-box">
                     <h4 class="section-subtitle">HOW WE WORK</h4>
                     <h2 class="section-title pb-20">Our Process</h2>
                     <p>We follow a clear, strategic path to ensure your business is fully protected and compliant.</p>
                  </div>
                  <div class="journey__content">
                     <div class="journey__text">
                        <ul class="service-list" style="list-style: none; margin-left: 0;">
                           <li style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                              <span style="font-weight: bold; color: #58a81d; margin-right: 15px; font-size: 20px;">1.</span>
                              <span>Business & financial assessment</span>
                           </li>
                           <li style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                              <span style="font-weight: bold; color: #58a81d; margin-right: 15px; font-size: 20px;">2.</span>
                              <span>Strategy and education</span>
                           </li>
                           <li style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                              <span style="font-weight: bold; color: #58a81d; margin-right: 15px; font-size: 20px;">3.</span>
                              <span>Implementation support</span>
                           </li>
                           <li style="display: flex; align-items: flex-start; margin-bottom: 15px;">
                              <span style="font-weight: bold; color: #58a81d; margin-right: 15px; font-size: 20px;">4.</span>
                              <span>Ongoing financial protection and reviews</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--journey-area-end -->

   <!--choice-area-start -->
   <div class="choice__area pt-110 pb-100 grey-bg" id="faq">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="choice__right-info">
                  <div class="choice__section-box pb-30">
                     <h4 class="section-subtitle">Financial Records & Audit Support</h4>
                     <h2 class="section-title">Keep Your Finances Clean & Audit-Ready</h2>
                     <p>We provide comprehensive support to ensure your business finances are organized, compliant, and ready for any scrutiny.</p>
                  </div>
                  <div class="tp-custom-accordio-2">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-items wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <i class="fas fa-file-invoice"></i> Profit & Loss (P&L) Preparation
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show"
                              aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">Monthly and annual P&L statements. Expense tracking and categorization. Financial clarity for decision-making.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="fas fa-university"></i> Business Bank Account Setup
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Proper SMB banking setup. Separation of personal and business finances. Financial transparency.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                           <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <i class="fas fa-file-invoice-dollar"></i> Audit Support
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 Audit readiness reviews. Financial record assessment. Compliance gap identification.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="choice__left-item p-relative text-end">
                  <div class="choice__shape-1 d-none d-xl-block">
                     <img src="{{ asset('assets/img/service/ch-shape-1.png') }}" alt="">
                  </div>
                  <div class="choice__shape-2 d-none d-md-block">
                     <img src="{{ asset('assets/img/service/ch-shape-2.png') }}" alt="">
                  </div>
                  <div class="choice__thumb d-none d-md-block">
                     <img src="{{ asset('assets/img/service/ch-2.jpeg') }}" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--choice-area-end -->

   <!--blog-area-start -->
   <div class="blog__area grey-bg pt-110 pb-80">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
               <div class="blog__section-box text-center mb-50" id="who-we-serve">
                  <h4 class="section-subtitle">WHO WE SERVE</h4>
                  <h2 class="section-title">Dedicated to Your Success</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
               <div class="blog__item">
                  <div class="blog__content">
                     <div class="blog__title-box">
                        <h4 class="blog__title">Small Business Owners</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
               <div class="blog__item">
                  <div class="blog__content">
                     <div class="blog__title-box">
                        <h4 class="blog__title">Entrepreneurs</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
               <div class="blog__item">
                  <div class="blog__content">
                     <div class="blog__title-box">
                        <h4 class="blog__title">Independent Professionals</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1.1s">
               <div class="blog__item">
                  <div class="blog__content">
                     <div class="blog__title-box">
                        <h4 class="blog__title">Growing SMBs</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--blog-area-end -->

   <!-- cta-area-start -->
   <div class="cta-2__area cta-2__bg pt-120 pb-120" data-background="{{ asset('assets/img/cta/cta-bg-2.jpg') }}" id="contact">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="cta-2__item z-index text-center">
                  <div class="cta-2__title">
                     <h4 class="section-title text-white mb-20">Ready to Protect What Matters Most?</h4>
                     <p class="text-white mb-40" style="font-size: 20px;">If you're asking: <br>
                     &bull; Is my business set up correctly? <br>
                     &bull; Am I paying more tax than necessary? <br>
                     &bull; Are my financial records audit-ready? </p>
                     <a class="tp-btn back-bg" href="{{ route('contact') }}"><span>Schedule a Financial Protection Consultation</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cta-area-end -->

@endsection
