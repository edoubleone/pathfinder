@extends('layouts.app')

@section('title', 'Our Process & Who We Serve – Pathfinder311 | Independent Life Insurance Specialist')
@section('meta_description', 'Discover our simple 4-step process for life insurance and learn about the diverse communities and individuals we serve at Pathfinder311.')

@section('header-top')
<div class="header-top__area black-bg fix">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-9 col-lg-8 col-md-6">
            <div class="header-top__left-info">
               <ul>
                  <li class="d-none d-xl-inline-block"><a href="javascript:void(0);"><i class="fas fa-clock"></i>Mon-Fri: 9 AM – 6 PM</a></li>
                  <li class="d-none d-lg-inline-block"><a href="#" target="_blank"><i class="fas fa-shield-alt"></i>Clarity. Protection. Trust.</a></li>
                  <li><a href="mailto:info@pathfinder311.com"><i class="fas fa-envelope"></i>Email: info@pathfinder311.com</a></li>
               </ul>
            </div>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="header-top__social header-top__social-white text-end z-index-5 d-none d-md-block">
               <span>Follow Us:</span>
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-skype"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('content')

   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="{{ asset('assets/img/breadcurmb/breadcurmb-3.jpg') }}">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content text-center z-index">
                  <h3 class="breadcrumb__title">Our Process & Who We Serve</h3>
                  <div class="breadcrumb__list">
                     <span><a href="{{ route('home') }}">Home</a></span>
                     <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                     <span class="theme-color">Our Process</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb area end -->

   <!-- our-process-area-start -->
   <div class="process-area pt-120 pb-120 grey-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-8">
               <div class="section-title-wrapper text-center mb-60">
                  <h4 class="section-subtitle">HOW WE WORK</h4>
                  <h2 class="section-title">Our Simple, Transparent 4-Step Process</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
               <div class="service__item text-center h-100">
                  <div class="service__top-icon">
                     <span style="font-size: 24px; font-weight: bold; color: #58a81d;">1</span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Assessment</h4>
                     <p>Business & financial assessment to understand your unique needs.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
               <div class="service__item text-center h-100">
                  <div class="service__top-icon">
                     <span style="font-size: 24px; font-weight: bold; color: #58a81d;">2</span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Strategy</h4>
                     <p>Detailed strategy and education to empower your financial decisions.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
               <div class="service__item text-center h-100">
                  <div class="service__top-icon">
                     <span style="font-size: 24px; font-weight: bold; color: #58a81d;">3</span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Implementation</h4>
                     <p>Direct implementation support for structure and compliance setup.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
               <div class="service__item text-center h-100">
                  <div class="service__top-icon">
                     <span style="font-size: 24px; font-weight: bold; color: #58a81d;">4</span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Protection</h4>
                     <p>Ongoing financial protection and regular reviews for lasting stability.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- our-process-area-end -->

   <!-- who-we-serve-area-start -->
   <div class="who-we-serve-area pt-120 pb-120">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-40">
               <div class="why-insurance-content">
                  <h4 class="section-subtitle">WHO WE SERVE</h4>
                  <h2 class="section-title mb-30">We Help Diverse Communities Navigate Protection</h2>
                  <p style="font-size: 18px; line-height: 1.8;">If you value clarity, honesty, and long-term partnership — you're in the right place. Our expertise is tailored to meet the unique needs of those looking for reliable guidance.</p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-40">
               <div class="grey-bg-2 p-5" style="border-radius: 10px;">
                  <h4 class="mb-20" style="color: #001246;">Who We Serve:</h4>
                  <ul style="list-style: none; padding-left: 0;">
                     <li class="mb-15" style="font-size: 18px;"><i class="fas fa-check-circle theme-color mr-10"></i> Small business owners</li>
                     <li class="mb-15" style="font-size: 18px;"><i class="fas fa-check-circle theme-color mr-10"></i> Entrepreneurs</li>
                     <li class="mb-15" style="font-size: 18px;"><i class="fas fa-check-circle theme-color mr-10"></i> Independent professionals</li>
                     <li class="last-child" style="font-size: 18px;"><i class="fas fa-check-circle theme-color mr-10"></i> Growing SMBs</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- who-we-serve-area-end -->

   <!-- cta-area-start -->
   <div class="cta-2__area cta-2__bg pt-120 pb-120" data-background="{{ asset('assets/img/cta/cta-bg-2.jpg') }}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="cta-2__item z-index text-center">
                  <div class="cta-2__title">
                     <h4 class="section-title text-white mb-20">Ready to Start Your Journey?</h4>
                     <p class="text-white mb-40" style="font-size: 20px;">Experience our 4-step process firsthand. Schedule your discovery call today.</p>
                     <a class="tp-btn back-bg" href="{{ route('contact') }}"><span>Schedule Your Strategy Call</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cta-area-end -->

@endsection
