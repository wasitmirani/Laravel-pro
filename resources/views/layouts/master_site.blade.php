
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="image\favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="css\bootstrap.css">
  <link rel="stylesheet" href="fonts\icon-font\css\style.css">
  <link rel="stylesheet" href="fonts\typography-font\typo.css">
  <link rel="stylesheet" href="fonts\fontawesome-5\css\all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="plugins\aos\aos.min.css">
  <link rel="stylesheet" href="plugins\fancybox\jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins\nice-select\nice-select.min.css">
  <link rel="stylesheet" href="plugins\slick\slick.min.css">
  <link rel="stylesheet" href="plugins\ui-range-slider\jquery-ui.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="css\main.css">
  <!-- Custom stylesheet -->
   @livewireStyles

</head>

<body>
  <div class="site-wrapper overflow-hidden ">
      <div id="app">


    <!-- Header start  -->
    <!-- Header Area -->
    <header class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="index.html">
              <!-- light version logo (logo must be black)-->
              <img src="image\logo-main-black.png" alt="" class="light-version-logo default-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image\logo-main-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="mobile-menu">
            <div class="navbar-nav-wrapper">
              <ul class="navbar-nav main-menu">
                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="drop-menu-item">
                      <a href="home-1.html">
                        Homepage 01
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-2.html">
                        Homepage 02
                      </a>
                    </li>
                    <li class="drop-menu-item">
                      <a href="home-3.html">
                        Homepage 03
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="icon icon-small-down"></i></a>
                  <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Job Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="search-grid.html">
                            Job Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="search-list-1.html">
                            Job List
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="jobdetails.html">
                            Job Details
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown21" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown21">
                        <li class="drop-menu-item">
                          <a href="dashboard-main.html">
                            Dashboard Main
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="dashboard-settings.html">
                            Settings
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="dashboard-posted-applicants.html">
                            Applicants
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="dashboard-posted-jobs.html">
                            Posted Jobs
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown25g" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Candidate Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown25g">
                        <li class="drop-menu-item">
                          <a href="candidate-profile-main.html">
                            Candidate Profile
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="candidate-profile.html">
                            Candidate Profile 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search Pages
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="search-grid.html">
                            Search Grid
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="search-list-1.html">
                            Search List 01
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="search-list-2.html">
                            Search List 02
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item">
                      <a href="company-profile.html">
                        Company Profile
                      </a>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#login">
                            Sign In
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="javacript:" data-toggle="modal" data-target="#signup">
                            Sign Up
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="drop-menu-item dropdown">
                      <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown26" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Essential
                        <i class="icon icon-small-down"></i>
                      </a>
                      <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown26">
                        <li class="drop-menu-item">
                          <a href="faq.html">
                            Faq
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="error-404.html">
                            404
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="pricing-page.html">
                            Pricing page
                          </a>
                        </li>
                        <li class="drop-menu-item">
                          <a href="contact.html">Contact</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Support</a>
                </li>
              </ul>
            </div>
            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
          </div>
          <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset" href="javacript:" data-toggle="modal" data-target="#login">
              Log in
            </a>
            <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal" data-target="#signup">
              Sign up
            </a>
          </div>
          <!-- Mobile Menu Hamburger-->
          <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
            <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Login Modal -->
    <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Welcome Back
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Log in to continue your account
                    and explore new jobs.</p>
                </div>
                <div class="border-top border-default-color-2 mt-auto">
                  <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        295
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                        posted today</p>
                    </div>
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        14
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                        registered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                <div class="row">
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with LinkedIn</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Google</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Log in with Facebook</span></a>
                  </div>
                </div>
                <div class="or-devider">
                  <span class="font-size-3 line-height-reset ">Or</span>
                </div>
                <form action="/">
                  <div class="form-group">
                    <label for="email" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password"></a>
                    </div>
                  </div>
                  <div class="form-group d-flex flex-wrap justify-content-between">
                    <label for="terms-check" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check">
                      <span class="checkbox mr-5"></span>
                      <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember password</span>
                    </label>
                    <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                  </div>
                  <div class="form-group mb-8">
                    <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in </button>
                  </div>
                  <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up Modal -->
    <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
          <div class="row no-gutters">
            <div class="col-lg-5 col-md-6">
              <div class="pt-10 pb-6 pl-11 pr-12 bg-black-2 h-100 d-flex flex-column dark-mode-texts">
                <div class="pb-9">
                  <h3 class="font-size-8 text-white line-height-reset pb-4 line-height-1p4">
                    Create a free account today
                  </h3>
                  <p class="mb-0 font-size-4 text-white">Create your account to continue
                    and explore new jobs.</p>
                </div>
                <div class="border-top border-default-color-2 mt-auto">
                  <div class="d-flex mx-n9 pt-6 flex-xs-row flex-column">
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        295
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New jobs
                        posted today</p>
                    </div>
                    <div class="pt-5 px-9">
                      <h3 class="font-size-7 text-white">
                        14
                      </h3>
                      <p class="font-size-3 text-white gr-opacity-5 line-height-1p4">New companies
                        registered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                <div class="row">
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-allports h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-linkedin pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from LinkedIn</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                  </div>
                  <div class="col-4 col-xs-12">
                    <a href="" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                  </div>
                </div>
                <div class="or-devider">
                  <span class="font-size-3 line-height-reset">Or</span>
                </div>
                <form action="/">
                  <div class="form-group">
                    <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password2" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password23" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                    <div class="position-relative">
                      <input type="password" class="form-control" id="password23" placeholder="Enter password">
                      <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password23"></a>
                    </div>
                  </div>
                  <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                    <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                      <input class="d-none" type="checkbox" id="terms-check2">
                      <span class="checkbox mr-5"></span>
                      <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="" class="text-primary">Terms & Conditions</a></span>
                    </label>
                    <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                  </div>
                  <div class="form-group mb-8">
                    <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                  </div>
                  <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header start end -->
    <!-- Hero Area -->
    <div class="bg-gradient-1 pt-26 pt-md-32 pt-lg-33 pt-xl-35 position-relative z-index-1 overflow-hidden">
      <!-- .Hero pattern -->
      <div class="pos-abs-tr w-50 z-index-n2">
        <img src="image\patterns\hero-pattern.png" alt="" class="gr-opacity-1">
      </div>
      <!-- ./Hero pattern -->
      <div class="container">
        <div class="row position-relative align-items-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12 pt-lg-13 pb-lg-33 pb-xl-34 pb-md-33 pb-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <h1 class="font-size-11 mb-12 pr-md-30 pr-lg-0">Find the perfect job
              that you deserve.</h1>
            <div class="">
              <!-- .search-form -->
              <form action="/" class="search-form shadow-6">
                <div class="filter-search-form-1 bg-white rounded-sm shadow-4">
                  <div class="filter-inputs">
                    <div class="form-group position-relative">
                      <input class="form-control focus-reset pl-13" type="text" id="keyword" placeholder="Job title">
                      <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><i class="icon icon-zoom-2 text-primary font-weight-bold"></i></span>
                    </div>
                    <!-- .select-city starts -->
                    <div class="form-group position-relative">
                      <select name="country" id="country" class="nice-select pl-13 h-100 arrow-3 font-size-4">
                        <option value="" data-display="Location" class="text-uppercase">Location</option>
                        <option value="">United States of America</option>
                        <option value="">United Arab Emirates</option>
                        <option value="">Bangladesh</option>
                        <option value="">Pakistan</option>
                      </select>
                      <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"><i class="icon icon-pin-3 text-primary font-weight-bold"></i></span>
                    </div>
                    <!-- ./select-city ends -->
                  </div>
                  <!-- .Hero Button -->
                  <div class="button-block">
                    <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
                  </div>
                  <!-- ./Hero Button -->
                </div>
              </form>
              <!-- ./search-form -->
              <p class="heading-default-color font-size-3 pt-7"><span class="text-smoke">Search keywords e.g.</span> Product Designer</p>
            </div>
          </div>
          <!-- Hero Right Image -->
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-6 col-8 pos-abs-br z-index-n1 position-static position-md-absolute mx-auto ml-md-auto" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class=" ml-xxl-23 ml-xl-12 ml-md-7">
              <img src="image\l1\png\hero-image-man.png" alt="" class="w-100">
            </div>
          </div>
          <!-- ./Hero Right Image -->
        </div>
      </div>
    </div>
    <!-- Hero Area -->
    <!-- Brand1Section Area -->
    <!-- Company Section -->
    <div class="bg-black-2 dark-mode-texts pt-13 pt-lg-24 pb-12 pb-lg-23">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title mb-9 text-center text-lg-left">
              <h5 class="font-size-5 font-weight-normal">Get hired in top companies</h5>
            </div>
          </div>
        </div>
        <!-- Brand Logos -->
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-once="true">
            <img src="image\l1\png\brand-logo-1.png" alt="">
          </div>
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
            <img src="image\l1\png\brand-logo-2.png" alt="">
          </div>
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <img src="image\l1\png\brand-logo-3.png" alt="">
          </div>
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
            <img src="image\l1\png\brand-logo-4.png" alt="">
          </div>
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="900" data-aos-once="true">
            <img src="image\l1\png\brand-logo-5.png" alt="">
          </div>
          <!-- Single Brand -->
          <div class="single-brand-logo mx-5 my-6" data-aos="fade-in" data-aos-duration="800" data-aos-delay="1200" data-aos-once="true">
            <img src="image\l1\png\brand-logo-6.png" alt="">
          </div>
        </div>
        <!-- End Brand Logos -->
      </div>
    </div>
    <!-- End Company Section -->
    <!-- Brand1Section Area -->
    <!-- category Area -->
    <!-- Category Area -->
    <div class="pt-11 pt-lg-26 pb-lg-16" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
      <div class="container">
        <!-- Section Top -->
        <div class="row align-items-center pb-14">
          <!-- Section Title -->
          <div class="col-12 col-lg-6">
            <div class="text-center text-lg-left mb-13 mb-lg-0">
              <h2 class="font-size-9 font-weight-bold">Explore by category</h2>
            </div>
          </div>
          <!-- Section Button -->
          <div class="col-12 col-lg-6">
            <div class="text-center text-lg-right">
              <a class="btn btn-outline-green text-uppercase" href="#">Explore All</a>
            </div>
          </div>
          <!-- Section Button End -->
        </div>
        <!-- End Section Top -->
        <div class="row justify-content-center">
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-blue bg-blue-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-briefcase"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Business Development</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-spray bg-spray-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-headset"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Customer Service</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>235</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-coral bg-coral-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-layer-group"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Development</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>624</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-red bg-red-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-pen-nib"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Design</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>174</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-orange bg-orange-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-rocket"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Marketing &amp; Management</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>268</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-yellow bg-yellow-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-location-arrow"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Sales &amp; Communication</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>156</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-turquoise bg-turquoise-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="icon icon-sidebar-2"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Project Management</h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>162</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
          <!-- Single Category -->
          <div class="col-12 col-xl-3 col-lg-4 col-sm-6 col-xs-8">
            <a href="#" class="bg-white border border-color-2 rounded-4 pl-9 pt-10 pb-3 pr-7 hover-shadow-1 mb-9 d-block w-100">
              <div class="text-green bg-green-opacity-1 square-70 rounded-4 mb-7 font-size-7">
                <i class="fa fa-user"></i>
              </div>
              <!-- Category Content -->
              <div class="">
                <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Human Resource </h5>
                <p class="font-size-4 font-weight-normal text-gray"><span>84</span> Vacancy</p>
              </div>
            </a>
          </div>
          <!-- End Single Category -->
        </div>
      </div>
    </div>
    <!-- End Category Area -->
    <!-- category Area -->
    <!-- ContentOne Area -->
    <!-- content-1 section -->
    <section class="pt-7 pt-lg-16 pb-2 pb-lg-32">
      <div class="container">
        <div class="row pb-lg-6 justify-content-center">
          <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <!-- content-1 left-content start -->
            <div class="position-relative pr-xl-20 pr-md-15 pr-15">
              <!-- content img start -->
              <img src="image\l1\jpg\content-1-img1.jpg" alt="" class="w-100 rounded overflow-hidden">
              <!-- content img end -->
              <!-- abs-content start -->
              <div class="pos-abs-br pt-17 pb-9 pl-8 pr-12  bg-white shadow-2 rounded scale-p7 scale-xs-1 mb-n20 mr-n10 mr-xs-5 mr-sm-0 mb-xs-n10">
                <!-- check-mark start -->
                <span class="pos-abs-tl circle-79 bg-green font-size-9 mt-n9 ml-n9 ">
              <i class="fas fa-check text-white"></i>
            </span>
                <!-- check-mark end -->
                <p class="text-black-2 text-4 font-weight-bold mb-7">
                  <span class="font-weight-normal">Found</span> 290+ Jobs
                </p>
                <div class="d-flex">
                  <ul class="list-unstyled list-overlapped-icon max-width-130px">
                    <li class="ml-0">
                      <a href="" class="circle-34">
                        <img src="image\l1\png\smal-logo1.png" alt="" class="img">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="image\l1\png\smal-logo2.png" alt="" class="img img2">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="image\l1\png\smal-logo3.png" alt="" class="img img3">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="image\l1\png\smal-logo4.png" alt="" class="img img4">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="image\l1\png\smal-logo5.png" alt="" class="img img5">
                      </a>
                    </li>
                  </ul>
                  <p class="text-space-black font-size-4 mt-1">+14 Giants</p>
                </div>
              </div>
              <!-- abs-content end -->
            </div>
            <!-- content-1 left-content end -->
          </div>
          <div class="col-xl-6 col-lg-7 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <!-- content-1 start -->
            <div class="pl-lg-10 pl-0 d-flex flex-column justify-content-center h-100 pt-lg-0 pt-15 pr-md-13 pr-xl-15 pr-xxl-25 pr-0 ">
              <!-- content-1 section-title start -->
              <h2 class="font-size-9 mb-8 pr-xxl-15">
                Help you to get the best job that fits you
              </h2>
              <p class="text-gray font-size-5 mb-10 mb-lg-16">
                Leverage agile frameworks to provide a robust synopsis for high
                level overviews. Iterative approach
              </p>
              <!-- content-1 section-title end -->
              <!-- content-1 list-group start -->
              <ul class="list-unstyled pl-0">
                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                  <i class="fas fa-check font-size-4 text-green mr-6"></i>Bring to
                  the table win-win survival
                </li>
                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                  <i class="fas fa-check font-size-4 text-green mr-6"></i>Capitalize
                  on low hanging fruit to identify
                </li>
                <li class="font-weight-semibold border-0 d-flex mb-7 heading-default-color">
                  <i class="fas fa-check font-size-4 text-green mr-6"></i>But I must
                  explain to you how all this
                </li>
              </ul>
              <!-- content-1 list-group end -->
            </div>
            <!-- content-1 end -->
          </div>
        </div>
      </div>
    </section>
    <!-- ContentOne Area -->
    <!-- featuredJobOne Area -->
    <div class="pt-11 pt-lg-27 pb-7 pb-lg-26 bg-black-2 dark-mode-texts">
      <div class="container">
        <!-- Section Top -->
        <div class="row align-items-center pb-14">
          <!-- Section Title -->
          <div class="col-12 col-xl-6 col-lg-6">
            <div class="text-center text-lg-left mb-13 mb-lg-0">
              <h2 class="font-size-9 font-weight-bold">Featured Jobs</h2>
            </div>
          </div>
          <!-- Section Button -->
          <div class="col-12 col-xl-6 col-lg-6">
            <div class="text-center text-lg-right">
              <a class="btn btn-outline-white text-uppercase" href="#">Explore All</a>
            </div>
          </div>
          <!-- Section Button End -->
        </div>
        <!-- End Section Top -->
        <div class="row justify-content-center">
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-1.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">Google INC</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Product Designer</a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-2.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">AirBnb</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">UI/UX Designer</a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-3.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">Shopify</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">iOS Developer</a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-4.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">Uber</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Creative Director </a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-5.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">Facebook</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Marketing Manager </a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
          <div class="col-12 col-lg-4 col-md-6 px-xxl-7" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            <!-- Start Feature One -->
            <div class="bg-white px-8 pt-9 pb-7 rounded-4 mb-9 feature-cardOne-adjustments">
              <div class="d-block mb-7">
                <a href="#"><img src="image\l1\png\feature-brand-6.png" alt=""></a>
              </div>
              <a href="#" class="font-size-3 d-block mb-0 text-gray">Oculus</a>
              <h2 class="mt-n4"><a class="font-size-7 text-black-2 font-weight-bold mb-4" href="">Software Engineer</a></h2>
              <ul class="list-unstyled mb-1 card-tag-list">
                <li><a href="" class="bg-regent-opacity-15 text-denim font-size-3 rounded-3">
                    <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Berlyn
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-orange font-size-3 rounded-3">
                    <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                  </a></li>
                <li><a href="" class="bg-regent-opacity-15 text-eastern font-size-3 rounded-3">
                    <i class="fa fa-dollar-sign mr-2 font-weight-bold"></i> 80K-90K
                  </a></li>
              </ul>
              <p class="mb-7 font-size-4 text-gray">We are looking for Enrollment Advisors who are looking to take 30-35 appointments per week. All leads are pre-scheduled.</p>
              <div class="card-btn-group">
                <a class="btn btn-green text-uppercase btn-medium rounded-3" href="#">Apply Now</a>
                <a class="btn btn-outline-mercury text-black-2 text-uppercase btn-medium rounded-3" href="#"><i class="icon icon-bookmark-2 font-weight-bold mr-4 font-size-4"></i> Save it</a>
              </div>
            </div>
            <!-- End Feature One -->
          </div>
        </div>
      </div>
    </div>
    <!-- featuredJobOne Area -->
    <!-- ContentTwo Area -->
    <!-- content-2 section -->
    <section class="py-13 py-lg-30">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-5 col-md-10 col-sm-11" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="position-relative pr-lg-20 pr-md-15 pr-9">
              <!-- content img start -->
              <img src="image\l1\jpg\content-1-img2.jpg" alt="" class="w-100 rounded-4">
              <!-- content img end -->
              <!-- abs-content start -->
              <div class="pos-abs-br mb-10 ">
                <div class="card bg-white shadow-2 border-0">
                  <div class="card-header bg-dodger-2 text-white text-center border-0">
                    Applicants List
                  </div>
                  <div class="card-body mb-n5">
                    <!-- media start -->
                    <div class="media mb-5 pr-9">
                      <!-- media img start -->
                      <div class="mr-3 mt-2">
                        <img src="image\l1\png\media-img-1.png" class="circle-40" alt="">
                      </div>
                      <!-- media img start -->
                      <!-- media body start -->
                      <div class="media-body pl-4">
                        <h6 class="mb-0 font-size-4 text-black-2">Davir Mark</h6>
                        <p class="mb-0 font-size-3 text-gray">Product Designer</p>
                      </div>
                      <!-- media body start -->
                    </div>
                    <!-- media end -->
                    <!-- media start -->
                    <div class="media mb-5 pr-9">
                      <!-- media img start -->
                      <div class="mr-3 mt-2">
                        <img src="image\l1\png\media-img-2.png" class="circle-40" alt="">
                      </div>
                      <!-- media img start -->
                      <!-- media body start -->
                      <div class="media-body pl-4">
                        <h6 class="mb-0 font-size-4 text-black-2">Asley Jonshon</h6>
                        <p class="mb-0 font-size-3 text-gray">Web Developer</p>
                      </div>
                      <!-- media body start -->
                    </div>
                    <!-- media end -->
                    <!-- media start -->
                    <div class="media mb-5 pr-9">
                      <!-- media img start -->
                      <div class="mr-3 mt-2">
                        <img src="image\l1\png\media-img-3.png" class="circle-40" alt="">
                      </div>
                      <!-- media img start -->
                      <!-- media body start -->
                      <div class="media-body pl-4">
                        <h6 class="mb-0 font-size-4 text-black-2">Richar Henricks</h6>
                        <p class="mb-0 font-size-3 text-gray">UI Designer</p>
                      </div>
                      <!-- media body start -->
                    </div>
                    <!-- media end -->
                  </div>
                </div>
              </div>
              <!-- abs-content end -->
            </div>
          </div>
          <div class="col-lg-6 col-md-9 col-xs-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <!-- content-2 start -->
            <div class="content-2 pl-lg-10 pl-0 d-flex flex-column justify-content-center h-100 pt-lg-0 pt-11 pr-md-13 pr-xl-15 pr-xxl-25 pr-0">
              <!-- content-2 section title start -->
              <p class="text-dodger font-size-4 font-weight-semibold mb-8">
                Looking for an expert for your company?
              </p>
              <h2 class="font-size-9 mb-8">
                Get applications from the world best talents.
              </h2>
              <p class="text-default-color font-size-5 mb-12">
                Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.
              </p>
              <!-- content-2 section title end -->
              <a class="btn btn-green btn-h-60 text-white w-180 rounded-5 text-uppercase" href="#">Post a Job</a>
            </div>
            <!-- content-2 end -->
          </div>
        </div>
      </div>
    </section>
    <!-- ContentTwo Area -->
    <!-- footer area function start -->
    <!-- cta section -->
    <footer class="footer bg-ebony-clay dark-mode-texts">
      <div class="container">
        <!-- Cta section -->
        <div class="pt-11 pt-lg-20 pb-13 pb-lg-20 border-bottom border-width-1 border-default-color-2">
          <div class="row justify-content-center ">
            <div class="col-xl-7 col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
              <!-- cta-content start -->
              <div class="pb-xl-0 pb-9 text-xl-left text-center">
                <h2 class="text-white font-size-8 mb-4">Most comprehensive job portal</h2>
                <p class="text-hit-gray font-size-5 mb-0">We must explain to you how all this mistaken idea of denouncing</p>
              </div>
              <!-- cta-content end -->
            </div>
            <div class="col-xl-5 col-lg-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
              <!-- cta-btns start -->
              <div class="btns d-flex justify-content-xl-end justify-content-center align-items-xl-center flex-wrap h-100  mx-n4">
                <a class="btn btn-outline-gallery btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#login">Log in</a>
                <a class="btn btn-green btn-h-60 btn-xl mx-4 mt-6 text-uppercase" href="#" data-toggle="modal" data-target="#signup">Register</a>
              </div>
              <!-- cta-btns end -->
            </div>
          </div>
        </div>
      </div>
      <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">
            <!-- footer logo start -->
            <img src="image\logo-main-white.png" alt="" class="footer-logo mb-14">
            <!-- footer logo End -->
            <!-- media start -->
            <div class="media mb-11">
              <img src="image\l1\png\message.png" class="align-self-center mr-3" alt="">
              <div class="media-body pl-5">
                <p class="mb-0 font-size-4 text-white">Contact us at</p>
                <a class="mb-0 font-size-4 font-weight-bold" href="mailto:support@uxtheme.net">support@uxtheme.net</a>
              </div>
            </div>
            <!-- media start -->
            <!-- widget social icon start -->
            <div class="social-icons">
              <ul class="pl-0 list-unstyled d-flex align-items-end ">
                <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-facebook-f font-size-3 pt-2"></i></a></li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-twitter font-size-3 pt-2"></i></a></li>
                <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-linkedin-in font-size-3 pt-2"></i></a></li>
              </ul>
            </div>
            <!-- widget social icon end -->
          </div>
          <div class="col-lg-8 col-md-6">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget2 mb-md-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Company</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">About us</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Contact us</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Careers</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Press</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget3 mb-sm-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Product</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Features </a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Pricing</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">News</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Help desk</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Support</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget4 mb-sm-0 mb-13">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Services</p>
                  <!-- footer widget title end -->
                  <!-- widget social menu start -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Digital Marketing</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">SEO for Business</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Avasta Dash</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">UI Design</a></li>
                  </ul>
                  <!-- widget social menu end -->
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                <div class="footer-widget widget4">
                  <!-- footer widget title start -->
                  <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Legal</p>
                  <!-- footer widget title end -->
                  <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Privacy Policy</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Terms & Conditions</a></li>
                    <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Return Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
       </div>
    <!-- footer area function end -->
  </div>
  <!-- Vendor Scripts -->
  <script src="js\vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="plugins\fancybox\jquery.fancybox.min.js"></script>
  <script src="plugins\nice-select\jquery.nice-select.min.js"></script>
  <script src="plugins\aos\aos.min.js"></script>
  <script src="plugins\slick\slick.min.js"></script>
  <script src="plugins\counter-up\jquery.counterup.min.js"></script>
  <script src="plugins\counter-up\jquery.waypoints.min.js"></script>
  <script src="plugins\ui-range-slider\jquery-ui.js"></script>
  <!-- Activation Script -->
  <!-- <script src="js/drag-n-drop.js"></script> -->
  <script src="js\custom.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
</body>

</html>
