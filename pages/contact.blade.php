<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
   @include('landing.header')
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right sign-in-menu-1 site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
            <div class="brand-logo">
            <a href="/">
              <!-- light version logo (logo must be black)-->
              Talebee
              <!--<img src="/assets-dashboard/icons/apple-icon-180x180.png" alt="" class="light-version-logo">-->
              <img src="assets/image/logo/goodpush.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">

                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Products <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-9">
                    <li class="sub-menu--item">
                      <a href="#">Contact manager</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Email marketing</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Newsletter</a>
                    </li>
                  </ul>
                </li>
           
                <li class="nav-item">
                  <a href="/support" class="nav-link-item">Support</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn sign-in-header-btn-1 ms-auto d-none d-xs-inline-flex">
              @guest
            <a target="_blank" class="btn download-trail-btn btn focus-reset" href="/register">
              Start for free
            </a>
            @else
            <a target="_blank" class="btn download-trail-btn btn focus-reset" href="/home">
              Dashboard
            </a>
            @endguest
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Contact  Area -->
    <div class="inner-pages-banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-10">
            <div class="section-heading-14 text-center">
              <h2>Help/Support</h2>
              <p>How can we help?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact form Area -->
    <div class="inner-contact-area-2 cta-area-l9 position-relative background-property" style="background: url(assets/image/contact/contact-bg-2.png);">
      <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="cta-form-area-l9">
              <div class="icon-area d-flex justify-content-center text-center">
                <img src="assets/image/chat-round-content.svg" alt="icon">
              </div>
              <div class="content text-center">
                <h4>Get in touch</h4>
                <!--<p>What can we help you with?</p>-->
                
              </div>
              <div class="text-white">@include('errors.error_message')</div>
              <form action="{{ route('post.support') }}" method="POST" class="cta-form-l9">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="Your firstname*">
                          @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <input type="text" name="firstname" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Your lastname*">
                          @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address*">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <textarea type="text" name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Your message"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <button type="submit" onclick="this.form.submit();this.disabled=true;this.innerHTML=`<span class='spinner-grow spinner-grow-sm text-white me-2'></span> ...`" class="btn focus-reset">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-curve-shape-l9 d-none d-lg-block">
        <img src="assets/image/cta-curve.svg" alt="curve">
      </div>
    </div>
    <div class="inner-contact-2-items-area">
      <div class="container">
        <div class="row justify-content-center inner-contact-2-items-area-items">
            <div class="col-lg-8 col-md-6 col-sm-6">
                  <div class="faq-area-l-12 position-relative">
      <div class="faq-l-12-shape">
        <img src="image/l6/shape-8.svg" alt="" class="w-100">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7">
            <div class="section-heading-6 text-center">
              <h2>Frequently Asked Questions</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-xl-10">
            <div class="row">
              <div class="col-lg-12">
                <div class="faq-l-12-1">
                    <h4 class="text-center text-white">Coming soon...</h4>
                
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
            </div>
      
            <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card-area d-xs-flex">
              <div class="icon-box">
                <img src="assets/image/contact/dashicons_email-alt.png">
              </div>
              <div class="content-box">
                <h4>Email us</h4>
                help@talebee.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="assets/js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="assets/plugins/aos/aos.min.js"></script>
  <script src="assets/plugins/slick/slick.min.js"></script>
  <script src="assets/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/plugins/isotope/packery.pkgd.min.js"></script>
  <script src="assets/plugins/isotope/image.loaded.js"></script>
  <script src="assets/plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="assets/js/custom.js"></script>
  	<script type="text/javascript" src="/js/Temi.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>