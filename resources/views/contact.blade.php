@extends('layouts.app')

@section('title', 'Contact Us – Pathfinder311 | Independent Life Insurance Specialist')
@section('meta_description', 'Have questions about life insurance? Find answers to frequently asked questions and get in touch with a licensed independent agent at Pathfinder311.')

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
   <div class="breadcrumb__area breadcrumb__height breadcrumb__overlay p-relative" data-background="{{ asset('assets/img/breadcurmb/breadcurmb-3.jpg') }}">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content text-center z-index">
                  <h3 class="breadcrumb__title">Contact Us</h3>
                  <div class="breadcrumb__list">
                     <span><a href="{{ route('home') }}">Home</a></span>
                     <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                     <span class="theme-color">Contact Us</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb area end -->

   <!--contact-area-start -->
   <div class="tp-contact-area pt-100 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6">
               <div class="tp-contct-wrapper contact-space-40">
                  <div class="tp-contact-thumb mb-60">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.7466847841103!2d-76.84067212406211!3d38.88390717172828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7be8b9c4c1a7d%3A0xc0f1f1f1f1f1f1f1!2s1401%20Mercantile%20Ln%20%23531%2C%20Largo%2C%20MD%2020774%2C%20USA!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd" width="420" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Mail Address</h4>
                     <span><a href="mailto:info@pathfinder311.com">info@pathfinder311.com</a></span>
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Phone Number</h4>
                     <span><a href="tel:2402647547">240-264-7547</a></span>
                  </div>
                  <div class="tp-contact-info">
                     <h4 class="contact-title">Location</h4>
                     <span>1401 Mercantile Lane, Largo, MD 20721 Suite 531</span>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="tpcontact">
                  <h4 class="tp-contact-big-title">Let's Talk...</h4>

                  @if(session('success'))
                     <div class="alert alert-success mb-30" style="padding: 15px; background: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px;">
                        {{ session('success') }}
                     </div>
                  @endif

                  @if($errors->any())
                     <div class="alert alert-danger mb-30" style="padding: 15px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;">
                        <ul style="margin: 0; padding-left: 20px;">
                           @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                  @endif

                  <div class="tpcontact__form tpcontact__form-3">
                     <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <input name="name" type="text" placeholder="Enter your Name" value="{{ old('name') }}">
                        <input name="email" type="email" placeholder="Enter your Mail" value="{{ old('email') }}">
                        <textarea name="message" placeholder="Enter your Message">{{ old('message') }}</textarea>
                        <button type="submit" class="tp-btn back-bg"><span>Send Message</span></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact-area-end -->

   <!-- cta-area-start -->
   <div class="cta-2__area cta-2__bg pt-120 pb-120" data-background="{{ asset('assets/img/cta/cta-bg-2.jpg') }}">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="cta-2__item z-index text-center">
                  <div class="cta-2__title">
                     <h4 class="section-title text-white mb-20">Ready to Protect What Matters Most?</h4>
                     <p class="text-white mb-40" style="font-size: 20px;">Schedule a Free Consultation Today &bull; Speak with a Licensed Independent Agent &bull; Flexible Appointments Available</p>
                     <a class="tp-btn back-bg" href="{{ route('contact') }}"><span>Schedule Your Strategy Call</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cta-area-end -->

@endsection
