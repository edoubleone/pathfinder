@extends('layouts.app')

@section('title', 'Our Services – Pathfinder311 | Specialized Life Insurance & Protection')
@section('meta_description', 'Explore our range of life insurance and financial protection solutions, from family income protection to business continuation planning.')

@section('header-top')
<div class="header-top__area black-bg header-top__blue-bg header-top__blue-bg-none">
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

@section('header-bottom-class', 'header-bottom__blue-bg header-bottom__blue-bg-none white-bg')

@section('content')

   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="{{ asset('assets/img/breadcurmb/breadcurmb.jpg') }}">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content text-center z-index">
                  <h3 class="breadcrumb__title">Our Services</h3>
                  <div class="breadcrumb__list">
                     <span><a href="{{ route('home') }}">Home</a></span>
                     <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                     <span class="theme-color">Services</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb area end -->

   <!--service-area-start -->
   <div class="service__area pt-120 pb-90 grey-bg-2">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
               <div class="service__section-box text-center mb-50">
                  <h4 class="section-subtitle">OUR SERVICES</h4>
                  <h2 class="section-title">Business Formation & Tax Advisory</h2>
                  <p>We help businesses protect their financial future through compliance, structure, and clarity.</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <!-- Business Formation & Structuring -->
            <div class="col-xl-4 col-lg-6 mb-30">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon">
                     <span><i class="fas fa-briefcase"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Business Formation & Structuring</h4>
                     <ul class="text-start mt-20" style="list-style-type: none; padding-left: 0;">
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> LLC and corporate structuring guidance</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> IRS-friendly business setup</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Compliance-ready registration</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- Tax Filing & IRS Readiness -->
            <div class="col-xl-4 col-lg-6 mb-30">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon">
                     <span><i class="fas fa-file-invoice-dollar"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Tax Filing & IRS Readiness</h4>
                     <ul class="text-start mt-20" style="list-style-type: none; padding-left: 0;">
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Individual and business tax filing</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Compliance-focused preparation</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Legitimate tax reduction strategies</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> IRS-ready documentation</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- Profit & Loss (P&L) Preparation -->
            <div class="col-xl-4 col-lg-6 mb-30">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon">
                     <span><i class="fas fa-file-invoice"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Profit & Loss (P&L) Preparation</h4>
                     <ul class="text-start mt-20" style="list-style-type: none; padding-left: 0;">
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Monthly and annual P&L statements</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Expense tracking and categorization</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Financial clarity for decision-making</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- Business Bank Account Setup -->
            <div class="col-xl-4 col-lg-6 mb-30 mt-xl-0 mt-lg-0 mt-30">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon">
                     <span><i class="fas fa-university"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Business Bank Account Setup</h4>
                     <ul class="text-start mt-20" style="list-style-type: none; padding-left: 0;">
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Proper SMB banking setup</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Separation of personal and business finances</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Financial transparency</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- Audit Support -->
            <div class="col-xl-4 col-lg-6 mb-30 mt-xl-0 mt-lg-0 mt-30">
               <div class="service__item h-100 p-relative">
                  <div class="service__top-icon">
                     <span><i class="fas fa-shield-alt"></i></span>
                  </div>
                  <div class="service__content z-index">
                     <h4 class="service__title-sm">Audit Support</h4>
                     <ul class="text-start mt-20" style="list-style-type: none; padding-left: 0;">
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Audit readiness reviews</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Financial record assessment</li>
                        <li><i class="fas fa-check-circle theme-color mr-10"></i> Compliance gap identification</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--service-area-end -->

   <!--cta-area-start -->
   <div class="cta-2__area cta-2__bg pt-150 pb-95" data-background="{{ asset('assets/img/cta/cta-bg-2.jpg') }}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="cta-2__item z-index text-center">
                  <div class="cta-2__title">
                     <h4 class="section-title text-white mb-30">Protect Your Family & Business <br>
                        With Expert Guidance</h4>
                     <a class="tp-btn back-bg" href="{{ route('contact') }}"><span>Schedule Your Strategy Call</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--cta-area-end -->

@endsection
