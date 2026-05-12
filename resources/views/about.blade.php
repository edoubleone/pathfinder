@extends('layouts.app')

@section('title', 'About Pathfinders527 LLC – Independent Life Insurance & Financial Protection Specialist')
@section('meta_description', 'Pathfinders527 LLC is an independent insurance agency committed to helping people navigate life insurance and financial protection with confidence.')

@section('header-top')
<div class="header-top__area black-bg header-top__blue-bg header-top__blue-bg-none">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-9 col-lg-8 col-md-6">
            <div class="header-top__left-info">
               <ul>
                  <li class="d-none d-xl-inline-block"><a href="javascript:void(0);"><i class="fas fa-clock"></i>Mon-Fri: 9 AM – 6 PM</a></li>
                  <li class="d-none d-lg-inline-block"><a href="#" target="_blank"><i class="fas fa-shield-alt"></i>Clarity. Protection. Trust.</a></li>
                  <li><a href="mailto:info@pathfinders311.com"><i class="fas fa-envelope"></i>Email: info@pathfinders311.com</a></li>
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
               <h3 class="breadcrumb__title">About Pathfinders527 LLC</h3>
               <div class="breadcrumb__list">
                  <span><a href="{{ route('home') }}">Home</a></span>
                  <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                  <span class="theme-color">About Us</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb area end -->

<!--service-area-start -->
<div class="service__area pt-115 pb-90 p-relative">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-9 col-lg-9">
            <div class="service__section-box text-center mb-50">
               <h4 class="section-subtitle">THE PROBLEM WE SOLVE</h4>
               <h2 class="section-title">Costly Mistakes Prevention Before They Become Serious Problems</h2>
               <p class="mt-20" style="font-size: 18px; line-height: 1.8;">Many businesses struggle not because they are unprofitable, but because they lack structure, compliance, and financial clarity. Common challenges include improper registration, disorganized finances, incorrect tax filings, poor banking structure, missing profit and loss statements, and lack of audit readiness. <br><br>
                  Pathfinders527 LLC exists to prevent these costly mistakes before they become serious financial problems.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12 text-center mb-40">
            <h3 class="section-title-sm" style="font-size: 32px; color: #001246;">We Believe:</h3>
         </div>
      </div>
      <div class="row align-items-stretch">
         <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
            <div class="service__item service__item-bg-none service__item-inner-bg text-start h-100">
               <div class="service__top-icon">
                  <span><i class="fas fa-bullseye"></i></span>
               </div>
               <div class="service__content z-index text-start">
                  <h4 class="service__title-sm">Our Mission</h4>
                  <p>To help businesses protect their financial future through compliance, structure, and clarity.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
            <div class="service__item service__item-bg-none service__item-inner-bg text-start h-100">
               <div class="service__top-icon">
                  <span><i class="fas fa-handshake"></i></span>
               </div>
               <div class="service__content z-index text-start">
                  <h4 class="service__title-sm">Our Promise</h4>
                  <ul class="tp-about__list" style="list-style-type: none; padding-left: 0;">
                     <li><i class="fas fa-check-circle theme-color mr-10"></i> Legitimate tax reduction strategies</li>
                     <li><i class="fas fa-check-circle theme-color mr-10"></i> Proper business formation and setup</li>
                     <li><i class="fas fa-check-circle theme-color mr-10"></i> Clean, audit-ready financial records</li>
                     <li><i class="fas fa-check-circle theme-color mr-10"></i> Long-term financial protection</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--service-area-end -->

@endsection