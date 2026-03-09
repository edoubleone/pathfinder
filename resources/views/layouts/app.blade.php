<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title', 'Pathfinder311 – Independent Life Insurance & Financial Protection Specialist')</title>
   <meta name="description" content="@yield('meta_description', '')">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/cookie-consent-new.css') }}">
   @yield('extra_css')
</head>

<body>

   <!-- preloader -->
   <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
   <!-- preloader end  -->

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->

   <header>
      <!--header-area-start -->
      @yield('header-top')

      <div id="header-sticky" class="header-bottom__area @yield('header-bottom-class', 'white-bg')">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                  <div class="header-bottom__logo z-index-5">
                     <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo-pathfinder.png') }}" alt="Pathfinder311"></a>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                  <div class="header-bottom__main-menu">
                     <nav id="mobile-menu">
                        <ul>
                           <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                           <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                           <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                           <li class="{{ request()->routeIs('process') ? 'active' : '' }}"><a href="{{ route('process') }}">Our Process</a></li>
                           <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                  <div class="header-bottom__right d-flex align-items-center justify-content-end">
                     <div class="header-bottom__search-wrapper p-relative d-none d-md-block">
                        <div class="header-bottom__search">
                           <a class="header-bottom__icon-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                           <a class="header-bottom__icon-close" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="header-bottom__search-box">
                           <form action="#">
                              <input type="text" placeholder="Search ...">
                              <button type="submit"><i class="fas fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                     <a class="tp-btn-sm ml-30 d-none d-md-block" href="{{ route('contact') }}"><span>Schedule Call</span></a>
                     <a class="d-lg-none menu-bar tp-menu-bar" href="#"><i class="fa fa-bars"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--header-area-end -->
   </header>

   <!--offcanvus-area-start -->
   <div class="tp-offcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tpoffcanvas__logo">
            <a href="{{ route('home') }}">
               <img src="{{ asset('assets/img/logo/logo-pathfinder.png') }}" alt="Pathfinder311">
            </a>
         </div>
         <div class="tpoffcanvas__text">
            <p>At Pathfinder311, we believe your financial path should be clear, not confusing. We work for you, not the insurance companies.</p>
         </div>
         <div class="mobile-menu"></div>
         <div class="tpoffcanvas__info">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
               <div class="tpoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-envelope"></i></a>
               </div>
               <div class="tpoffcanvas__info-address">
                  <span>Email</span>
                  <a href="mailto:info@pathfinder311.com">info@pathfinder311.com</a>
               </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
               <div class="tpoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-phone-alt"></i></a>
               </div>
               <div class="tpoffcanvas__info-address">
                  <span>Phone</span>
                  <a href="tel:2402647547">240-264-7547</a>
               </div>
            </div>
            <div class="tp-info-wrapper mb-20 d-flex align-items-center">
               <div class="tpoffcanvas__info-icon">
                  <a href="#"><i class="fas fa-map-marker-alt"></i></a>
               </div>
               <div class="tpoffcanvas__info-address">
                  <span>Location</span>
                  <a href="https://maps.app.goo.gl/wJd1Wf39S2D5bH7RA" target="_blank">1401 Mercantile Lane, Largo, MD 20721 Suite 531</a>
               </div>
            </div>
         </div>
         <div class="tpoffcanvas__social">
            <div class="social-icon">
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-facebook-square"></i></a>
               <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!--offcanvus-area-end -->

   <main>
      @yield('content')
   </main>

   <footer>
      <!--footer-area-start -->
      <div class="footer__area pt-110 pb-40" data-background="{{ asset('assets/img/footer/footer-bg.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">
                  <div class="footer__widget footer-col-1">
                     <div class="footer__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo-pathfinder.png') }}" alt="Pathfinder311"></a>
                     </div>
                     <div class="footer__content">
                        <p>Pathfinder311 helps individuals and small business owners protect profits, remain compliant, and build financially sound businesses through proper structure and strategic planning.</p>
                     </div>
                     <div class="footer__social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">
                  <div class="footer__widget footer-col-2">
                     <div class="footer__content">
                        <h4 class="footer__title">Useful Links</h4>
                     </div>
                     <div class="footer__menu">
                        <ul>
                           <li><a href="{{ route('home') }}">Home</a></li>
                           <li><a href="{{ route('about') }}">About Us</a></li>
                           <li><a href="{{ route('services') }}">Services</a></li>
                           <li><a href="{{ route('process') }}">Our Process</a></li>
                           <li><a href="{{ route('contact') }}">Contact Us</a></li>
                           <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                           <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s">
                  <div class="footer__widget footer-col-3">
                     <div class="footer__content">
                        <h4 class="footer__title">Contact Us</h4>
                     </div>
                     <div class="footer__address">
                        <ul>
                           <li><a href="mailto:info@pathfinder311.com"><i class="fas fa-envelope"></i><span>info@pathfinder311.com</span></a></li>
                           <li><a href="https://maps.app.goo.gl/wJd1Wf39S2D5bH7RA" target="_blank"><i class="fas fa-map-marker-alt"></i><span>1401 Mercantile Lane, Largo, MD 20721 Suite 531</span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                  <div class="footer__widget footer-col-4">
                     <div class="footer__contact d-flex align-items-center">
                        <div class="footer__icon">
                           <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="footer__number">
                           <a href="tel:2402647547">240-264-7547</a>
                           <span>Schedule a Call Online</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright__area copyright__bg pt-40 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="copyright__text text-center">
                     <span>Copyright &copy; 2026 <a href="http://edoubleone.net/" target="_blank">Edoublone Inc</a>. All Rights Reserved.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer-area-end -->
   </footer>

   <!-- GDPR Cookie Consent Banner -->
   @include('components.cookie-consent')

   <!-- JS here -->
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <script src="{{ asset('assets/js/jquery.js') }}"></script>
   <script src="{{ asset('assets/js/waypoints.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
   <script src="{{ asset('assets/js/slick.js') }}"></script>
   <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('assets/js/counterup.js') }}"></script>
   <script src="{{ asset('assets/js/wow.js') }}"></script>
   <script src="{{ asset('assets/js/nice-select.js') }}"></script>
   <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
   <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
   <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>
   @yield('extra_js')

</body>
</html>
