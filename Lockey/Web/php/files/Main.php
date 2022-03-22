<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--css-->
        <link href="./css/styles.css" rel="stylesheet" type="text/css">
        <!--aos-->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!--shortcut icon logo-->
        <link rel="shortcut icon" href="./stuff/img/smalllockeysindegra.png">

            <title>Lockey</title>
    </head>
    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-logo" href="./Main.php"><img src="./stuff/img/smalllockeysindegra.png" alt="Logo" class="me-3"style="width: 45px!important; height:auto!important"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li>
              <a href="#" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
</svg><use xlink:href="#home"></use></svg>
                Home
              </a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Who we are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="">change theme</a>
                </li>
            </ul>
            <form class="d-flex">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
        </div>
</nav>

    <figure class="background background-overlay" style="background-image: url('../stuff/img/workk.jpg'); width:fit-content; width:auto">
    </figure>

<script>
    var actual_theme = 0;
    var white_theme = 0;
    var black_theme = 1;

    function change_theme();

    

    function verify_theme();
        if (white_theme = 0) {
            change_theme
        }
</script>


<script>
AOS.init({
  duration: 1200,
})
</script>
      <!-- mobile user menu -->




    <!--</div>
  </nav>-->

    <!--main-->
    <!--<body>
    <class="headroom headroom--not-bottom headroom--pinned headroom--top" data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">


<nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-dark">
  <div class="container">
    <a href="./index.html" class="navbar-brand" ><img src="./stuff/img/smalllockeysindegra.png" alt="Logo" style="
    width: 25px;
"></a>

    <!-- secondary -->
    <!--<ul class="navbar-nav navbar-nav-secondary order-lg-3">
      <li class="nav-item d-lg-none">
        <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi bi-list"></span>
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a href="https://themes.getbootstrap.com/product/cube-multipurpose-template-ui-kit/" class="btn btn-outline-white rounded-pill ms-2">
          Login
        </a>
      </li>
    </ul>-->

    <!-- primary -->
    <!--<div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Landings
          </a>

          <ul class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown-1">
            <li><a class="dropdown-item " href="./startup.html">Startup</a></li>
            <li><a class="dropdown-item " href="./saas.html">Saas</a>
            </li>
            <li><a class="dropdown-item " href="./coworking.html">Coworking</a></li>
            <li><a class="dropdown-item " href="./job-board.html">Job Board</a></li>
            <li><a class="dropdown-item " href="./agency.html">Agency</a>
            </li>
            <li><a class="dropdown-item " href="./blog.html">Blog</a>
            </li>
            <li><a class="dropdown-item " href="./product.html">Product</a></li>
            <li><a class="dropdown-item " href="./app.html">App</a>
            </li>
            <li><a class="dropdown-item " href="./shop.html">Shop</a>
            </li>
            <li><a class="dropdown-item " href="./event.html">Event</a></li>
            <li><a class="dropdown-item " href="./course.html">Course</a>
            </li>
            <li><a class="dropdown-item " href="./service.html">Service</a></li>
            <li><a class="dropdown-item " href="./software.html">Software</a></li>
            <li><a class="dropdown-item " href="./documentation.html">Documentation</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown-2">
            <div class="row g-0">
              <div class="col-6">
                <div class="p-4">
                  <span class="dropdown-label">Company</span>
                  <a class="dropdown-item " href="./about.html">About</a>
                  <a class="dropdown-item " href="./pricing.html">Pricing</a>
                  <a class="dropdown-item " href="./faq.html">FAQ</a>
                  <a class="dropdown-item " href="./terms.html">Terms</a>
                  <a class="dropdown-item " href="./services.html">Services</a>
                  <a class="dropdown-item " href="./job-listing.html">Job Listing</a>
                  <a class="dropdown-item " href="./job-post.html">Job Post</a>
                  <span class="dropdown-label">Portfolio</span>
                  <a class="dropdown-item " href="./portfolio-grid.html">Grid</a>
                  <a class="dropdown-item " href="./portfolio-list.html">List</a>
                  <a class="dropdown-item " href="./case-study.html">Case Study</a>
                </div>
              </div>
              <div class="col-6">
                <div class="p-4">
                  <span class="dropdown-label">Blog</span>
                  <a class="dropdown-item " href="./blog-listing.html">Listing</a>
                  <a class="dropdown-item " href="./blog-post.html">Post</a>
                  <span class="dropdown-label">Contact</span>
                  <a class="dropdown-item " href="./contact.html">Classic</a>
                  <a class="dropdown-item " href="./contact-location.html">Location</a>
                  <span class="dropdown-label">Utilities</span>
                  <a class="dropdown-item " href="./404.html">404</a>
                  <a class="dropdown-item " href="./coming-soon.html">Coming Soon</a>
                </div>
              </div>
              <div class="col-12">
                <a href="https://themes.getbootstrap.com/product/cube-multipurpose-template-ui-kit/" class="card card-arrow inverted bg-green">
                  <div class="card-footer mt-auto">
                    <h4 class="lead lh-3 fw-light">Buy Cube</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-3" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown-3">
            <li><a class="dropdown-item " href="./account.html">Dashboard</a></li>
            <li><a class="dropdown-item " href="./account-settings.html">Settings</a></li>
            <li><a class="dropdown-item " href="./account-orders.html">Orders</a></li>
            <li><a class="dropdown-item " href="./account-billing.html">Billing</a></li>
            <li><a class="dropdown-item " href="./sign-in.html">Sign
                in</a></li>
            <li><a class="dropdown-item " href="./register.html">Register</a></li>
            <li><a class="dropdown-item " href="./forgot-password.html">Forgot Password</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
            Shop
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown-4">
            <li><a class="dropdown-item " href="./shop-product.html">Product</a></li>
            <li class="dropend dropend-hover">
              <a class="dropdown-item dropdown-toggle  " href="#" id="navbarDropend-1" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Listing</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropend-1">
                <li><a class="dropdown-item " href="./shop-listing.html">Full width</a></li>
                <li><a class="dropdown-item " href="./shop-listing-sidebar.html">Sidebar</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item " href="./shop-cart.html">Cart</a></li>
            <li><a class="dropdown-item " href="./shop-checkout.html">Checkout</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Docs
          </a>
          <ul class="dropdown-menu dropdown-menu-detailed" aria-labelledby="navbarDropdown-5">
            <li><a class="dropdown-item " href="./docs/index.html">
                <span>
                  <i class="bi bi-book"></i>
                  Get Started
                  <small>Customising and building</small>
                </span>
              </a>
            </li>
            <li><a class="dropdown-item " href="./docs/accordion.html">
                <span>
                  <i class="bi bi-grid"></i>
                  Components
                  <small>Full list of components</small>
                </span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item d-lg-none">
          <a href="https://themes.getbootstrap.com/product/cube-multipurpose-template-ui-kit/" class="nav-link text-primary">Buy Cube</a>
        </li>
      </ul>
    </div>-->



    <!-- mobile user menu -->




  <!--</div>
</nav>




<div class="offcanvas-wrap">


  <section class="bg-black inverted overflow-hidden">
    <div class="container py-20 d-flex flex-column min-vh-100 foreground">
      <div class="row my-auto justify-content-center">
        <div class="col-lg-6 text-center skrollable skrollable-before" data-center-center="transform: translateY(0%);" data-top-bottom="transform: translateY(10%);" style="transform: translateY(0%);">
          <span class="badge bg-opaque-red rounded-pill text-red mb-4">Cube 2.0.0</span>
          <h1 class="display-1 text-shadow" >Building Websites Just Got Easier</h1>
        </div>
      </div>
    </div>
    <figure class="background background-gradient-vertical aos-init aos-animate" data-aos="zoom-out" data-aos-delay="400">
      <img class="w-40 shadow position-absolute top-10 end-70 skrollable skrollable-between" src="./assets/images/blocks/block-1.jpg" alt="" data-center-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-80%);" style="transform: translateY(-47.2404%);">

      <img class="w-40 shadow position-absolute top-80 start-20 skrollable skrollable-between" src="./assets/images/blocks/block-2.jpg" alt="" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-50%);" style="transform: translateY(-7.30051%);">

      <img class="w-40 shadow position-absolute top-0 start-60 skrollable skrollable-between" src="./assets/images/blocks/block-3.jpg" alt="" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-50%);" style="transform: translateY(-42.1141%);">

      <img class="w-40 shadow position-absolute top-60 start-80 skrollable skrollable-between" src="./assets/images/blocks/block-4.jpg" alt="" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-120%);" style="transform: translateY(-37.8109%);">

      <img class="w-40 shadow position-absolute top-100 start-50 skrollable skrollable-before" src="./assets/images/blocks/block-5.jpg" alt="" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-60%);" style="transform: translateY(0%);">

      <img class="w-40 shadow position-absolute top-60 end-90 skrollable skrollable-between" src="./assets/images/blocks/block-6.jpg" alt="" data-bottom-top="transform: translateY(0%);" data-top-bottom="transform: translateY(-80%);" style="transform: translateY(-25.8065%);">
    </figure>
    <span class="scroll-down"></span>
  </section>-->



  <!-- demo -->
  <!--<section id="demo" class="py-15 py-xl-20 bg-light">
    <div class="container">
      <div class="row justify-content-center mb-10">
        <div class="col-lg-10 col-xl-8 text-center">
          <h2 class="display-2 fw-light"><span class="fw-bold">50+ prebuilt pages</span> &amp; unlimited variations</h2>
          <button class="btn btn-filter rounded-pill current" data-filter="*" data-target="#grid1">all</button>
          <button class="btn btn-filter rounded-pill" data-filter=".landing" data-target="#grid1">landings</button>
          <button class="btn btn-filter rounded-pill" data-filter=".page" data-target="#grid1">pages</button>
          <button class="btn btn-filter rounded-pill" data-filter=".account" data-target="#grid1">account</button>
          <button class="btn btn-filter rounded-pill" data-filter=".shop" data-target="#grid1">shop</button>
        </div>
      </div>

      <div class="row g-3 g-xl-5 aos-init" id="grid1" data-aos="fade-up" data-isotope="" style="position: relative; height: 3342.61px;">

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 0px;">
          <article class="card card-hover-image-rise">
            <a href=" ./startup.html" title="Startup"><img src="././assets/images/pages/startup.jpg" class="card-img-top shadow-sm" alt="Startup"></a>
            <a href="./startup.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Startup</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 0px;">
          <article class="card card-hover-image-rise">
            <a href=" ./saas.html" title="Saas"><img src="././assets/images/pages/saas.jpg" class="card-img-top shadow-sm" alt="Saas"></a>
            <a href="./saas.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Saas</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 159.172px;">
          <article class="card card-hover-image-rise">
            <a href=" ./coworking.html" title="Coworking"><img src="././assets/images/pages/coworking.jpg" class="card-img-top shadow-sm" alt="Coworking"></a>
            <a href="./coworking.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Coworking</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 159.172px;">
          <article class="card card-hover-image-rise">
            <a href=" ./job-board.html" title="Job Board"><img src="././assets/images/pages/job-board.jpg" class="card-img-top shadow-sm" alt="Job Board"></a>
            <a href="./job-board.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Job Board</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 318.344px;">
          <article class="card card-hover-image-rise">
            <a href=" ./agency.html" title="Agency"><img src="././assets/images/pages/agency.jpg" class="card-img-top shadow-sm" alt="Agency"></a>
            <a href="./agency.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Agency</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 318.344px;">
          <article class="card card-hover-image-rise">
            <a href=" ./blog.html" title="Blog"><img src="././assets/images/pages/blog.jpg" class="card-img-top shadow-sm" alt="Blog"></a>
            <a href="./blog.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Blog</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 477.516px;">
          <article class="card card-hover-image-rise">
            <a href=" ./product.html" title="Product"><img src="././assets/images/pages/product.jpg" class="card-img-top shadow-sm" alt="Product"></a>
            <a href="./product.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Product</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 477.516px;">
          <article class="card card-hover-image-rise">
            <a href=" ./app.html" title="App"><img src="././assets/images/pages/app.jpg" class="card-img-top shadow-sm" alt="App"></a>
            <a href="./app.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">App</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 636.688px;">
          <article class="card card-hover-image-rise">
            <a href=" ./shop.html" title="Shop"><img src="././assets/images/pages/shop.jpg" class="card-img-top shadow-sm" alt="Shop"></a>
            <a href="./shop.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Shop</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 636.688px;">
          <article class="card card-hover-image-rise">
            <a href=" ./event.html" title="Event"><img src="././assets/images/pages/event.jpg" class="card-img-top shadow-sm" alt="Event"></a>
            <a href="./event.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Event</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 795.86px;">
          <article class="card card-hover-image-rise">
            <a href=" ./course.html" title="Course"><img src="././assets/images/pages/course.jpg" class="card-img-top shadow-sm" alt="Course"></a>
            <a href="./course.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Course</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 795.86px;">
          <article class="card card-hover-image-rise">
            <a href=" ./service.html" title="Service"><img src="././assets/images/pages/service.jpg" class="card-img-top shadow-sm" alt="Service"></a>
            <a href="./service.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Service</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 0px; top: 955.032px;">
          <article class="card card-hover-image-rise">
            <a href=" ./software.html" title="Software"><img src="././assets/images/pages/software.jpg" class="card-img-top shadow-sm" alt="Software"></a>
            <a href="./software.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Software</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 landing" style="position: absolute; left: 185px; top: 955.032px;">
          <article class="card card-hover-image-rise">
            <a href=" ./documentation.html" title="Documentation"><img src="././assets/images/pages/documentation.jpg" class="card-img-top shadow-sm" alt="Documentation"></a>
            <a href="./documentation.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Documentation</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1114.2px;">
          <article class="card card-hover-image-rise">
            <a href=" ./about.html" title="About"><img src="././assets/images/pages/about.jpg" class="card-img-top shadow-sm" alt="About"></a>
            <a href="./about.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">About</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1114.2px;">
          <article class="card card-hover-image-rise">
            <a href=" ./pricing.html" title="Pricing"><img src="././assets/images/pages/pricing.jpg" class="card-img-top shadow-sm" alt="Pricing"></a>
            <a href="./pricing.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Pricing</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1273.38px;">
          <article class="card card-hover-image-rise">
            <a href=" ./faq.html" title="FAQ"><img src="././assets/images/pages/faq.jpg" class="card-img-top shadow-sm" alt="FAQ"></a>
            <a href="./faq.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">FAQ</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1273.38px;">
          <article class="card card-hover-image-rise">
            <a href=" ./terms.html" title="Terms"><img src="././assets/images/pages/terms.jpg" class="card-img-top shadow-sm" alt="Terms"></a>
            <a href="./terms.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Terms</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1432.55px;">
          <article class="card card-hover-image-rise">
            <a href=" ./services.html" title="Services"><img src="././assets/images/pages/services.jpg" class="card-img-top shadow-sm" alt="Services"></a>
            <a href="./services.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Services</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1432.55px;">
          <article class="card card-hover-image-rise">
            <a href=" ./job-listing.html" title="Job Listing"><img src="././assets/images/pages/job-listing.jpg" class="card-img-top shadow-sm" alt="Job Listing"></a>
            <a href="./job-listing.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Job Listing</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1591.72px;">
          <article class="card card-hover-image-rise">
            <a href=" ./job-post.html" title="Job Post"><img src="././assets/images/pages/job-post.jpg" class="card-img-top shadow-sm" alt="Job Post"></a>
            <a href="./job-post.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Job Post</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1591.72px;">
          <article class="card card-hover-image-rise">
            <a href=" ./portfolio-grid.html" title="Portfolio Grid"><img src="././assets/images/pages/portfolio-grid.jpg" class="card-img-top shadow-sm" alt="Portfolio Grid"></a>
            <a href="./portfolio-grid.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Portfolio Grid</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1750.89px;">
          <article class="card card-hover-image-rise">
            <a href=" ./portfolio-list.html" title="Portfolio List"><img src="././assets/images/pages/portfolio-list.jpg" class="card-img-top shadow-sm" alt="Portfolio List"></a>
            <a href="./portfolio-list.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Portfolio List</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1750.89px;">
          <article class="card card-hover-image-rise">
            <a href=" ./case-study.html" title="Case Study"><img src="././assets/images/pages/case-study.jpg" class="card-img-top shadow-sm" alt="Case Study"></a>
            <a href="./case-study.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Case Study</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 1910.06px;">
          <article class="card card-hover-image-rise">
            <a href=" ./blog-listing.html" title="Blog Listing"><img src="././assets/images/pages/blog-listing.jpg" class="card-img-top shadow-sm" alt="Blog Listing"></a>
            <a href="./blog-listing.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Blog Listing</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 1910.06px;">
          <article class="card card-hover-image-rise">
            <a href=" ./blog-post.html" title="Blog Post"><img src="././assets/images/pages/blog-post.jpg" class="card-img-top shadow-sm" alt="Blog Post"></a>
            <a href="./blog-post.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Blog Post</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 2069.24px;">
          <article class="card card-hover-image-rise">
            <a href=" ./contact.html" title="Contact Classic"><img src="././assets/images/pages/contact.jpg" class="card-img-top shadow-sm" alt="Contact Classic"></a>
            <a href="./contact.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Contact Classic</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 2069.24px;">
          <article class="card card-hover-image-rise">
            <a href=" ./contact-location.html" title="Contact Location"><img src="././assets/images/pages/contact-location.jpg" class="card-img-top shadow-sm" alt="Contact Location"></a>
            <a href="./contact-location.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Contact Location</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 0px; top: 2228.41px;">
          <article class="card card-hover-image-rise">
            <a href=" ./404.html" title="404"><img src="././assets/images/pages/404.jpg" class="card-img-top shadow-sm" alt="404"></a>
            <a href="./404.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">404</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 page" style="position: absolute; left: 185px; top: 2228.41px;">
          <article class="card card-hover-image-rise">
            <a href=" ./coming-soon.html" title="Coming Soon"><img src="././assets/images/pages/coming-soon.jpg" class="card-img-top shadow-sm" alt="Coming Soon"></a>
            <a href="./coming-soon.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Coming Soon</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 0px; top: 2387.58px;">
          <article class="card card-hover-image-rise">
            <a href=" ./account.html" title="Dashboard"><img src="././assets/images/pages/account.jpg" class="card-img-top shadow-sm" alt="Dashboard"></a>
            <a href="./account.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Dashboard</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 185px; top: 2387.58px;">
          <article class="card card-hover-image-rise">
            <a href=" ./account-settings.html" title="Settings"><img src="././assets/images/pages/account-settings.jpg" class="card-img-top shadow-sm" alt="Settings"></a>
            <a href="./account-settings.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Settings</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 0px; top: 2546.75px;">
          <article class="card card-hover-image-rise">
            <a href=" ./account-orders.html" title="Orders"><img src="././assets/images/pages/account-orders.jpg" class="card-img-top shadow-sm" alt="Orders"></a>
            <a href="./account-orders.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Orders</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 185px; top: 2546.75px;">
          <article class="card card-hover-image-rise">
            <a href=" ./account-billing.html" title="Billing"><img src="././assets/images/pages/account-billing.jpg" class="card-img-top shadow-sm" alt="Billing"></a>
            <a href="./account-billing.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Billing</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 0px; top: 2705.92px;">
          <article class="card card-hover-image-rise">
            <a href=" ./sign-in.html" title="Sign In"><img src="././assets/images/pages/sign-in.jpg" class="card-img-top shadow-sm" alt="Sign In"></a>
            <a href="./sign-in.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Sign In</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 185px; top: 2705.92px;">
          <article class="card card-hover-image-rise">
            <a href=" ./register.html" title="Register"><img src="././assets/images/pages/register.jpg" class="card-img-top shadow-sm" alt="Register"></a>
            <a href="./register.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Register</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 account" style="position: absolute; left: 0px; top: 2865.1px;">
          <article class="card card-hover-image-rise">
            <a href=" ./forgot-password.html" title="Forgot Password"><img src="././assets/images/pages/forgot-password.jpg" class="card-img-top shadow-sm" alt="Forgot Password"></a>
            <a href="./forgot-password.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Forgot Password</h4>
            </a>
          </article>
        </div>


        <div class="col-6 col-lg-4 shop" style="position: absolute; left: 185px; top: 2865.1px;">
          <article class="card card-hover-image-rise">
            <a href=" ./shop-product.html" title="Product Page"><img src="././assets/images/pages/shop-product.jpg" class="card-img-top shadow-sm" alt="Product Page"></a>
            <a href="./shop-product.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Product Page</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 shop" style="position: absolute; left: 0px; top: 3024.27px;">
          <article class="card card-hover-image-rise">
            <a href=" ./shop-listing.html" title="Listing"><img src="././assets/images/pages/shop-listing.jpg" class="card-img-top shadow-sm" alt="Listing"></a>
            <a href="./shop-listing.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Listing</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 shop" style="position: absolute; left: 185px; top: 3024.27px;">
          <article class="card card-hover-image-rise">
            <a href=" ./shop-listing-sidebar.html" title="Listing Sidebar"><img src="././assets/images/pages/shop-listing-sidebar.jpg" class="card-img-top shadow-sm" alt="Listing Sidebar"></a>
            <a href="./shop-listing-sidebar.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Listing Sidebar</h4>
            </a>
          </article>
        </div>

        <div class="col-6 col-lg-4 shop" style="position: absolute; left: 0px; top: 3183.44px;">
          <article class="card card-hover-image-rise">
            <a href=" ./shop-cart.html" title="Cart"><img src="././assets/images/pages/shop-cart.jpg" class="card-img-top shadow-sm" alt="Cart"></a>
            <a href="./shop-cart.html" class="card-title text-center mt-1">
              <h4 class="fw-normal fs-6">Cart</h4>
            </a>
          </article>
        </div>


      </div>

    </div>
  </section>

-->

  <!-- features -->
  <!--<section class="py-15 py-xl-20">
    <div class="container">
      <div class="row mb-8">
        <div class="col-lg-10">
          <h2>Cube is packed with <span class="d-lg-block">features you' ll love.</span>
          </h2>
        </div>
      </div>
      <div class="row g-1 g-lg-3">
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/bootstrap.svg" class="me-3" alt="Bootstrap">
            Built on Bootstrap 5
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/js.svg" class="me-3" alt="Javascript">
            Vanilla Javascript
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/webpack.svg" class="me-3" alt="Webpack">
            Webpack Setup
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/w3c.svg" class="me-3" alt="W3C">
            W3C Valid HTML Code
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/sass.svg" class="me-3" alt="Saas">
            Easy Customisable with SASS
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/seo.svg" class="me-3" alt="Seo"> SEO Friendly Code
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/documentation.svg" class="me-3" alt="Documentation"> Detailed Documentation
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center border rounded-pill pe-4">
            <img src="./assets/images/logo/responsive.svg" class="me-3" alt="Documentation"> Fully Responsive
          </div>
        </div>
      </div>
    </div>
  </section>

-->

  <!-- offer -->
  <!--<section class="py-15 py-xl-20 overflow-hidden border-top">
    <div class="container">
      <div class="row justify-content-between align-items-center gutter-3 gutter-lg-5">
        <div class="col-lg-5">
          <div class="row mb-6">
            <div class="col">
              <h2><a href="https://themes.getbootstrap.com/product/cube-multipurpose-template-ui-kit/" class="text-primary underline">Buy now</a> and get one new
                landing page every month.</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="position-relative">
            <img class="img-fluid shadow-lg level-1 aos-init" src="./assets/images/pages/shop.jpg" alt="Image" data-aos="fade-up" data-aos-delay="800">
            <img class="img-fluid shadow-lg position-absolute level-2 start-10 top-20 aos-init" src="./assets/images/pages/about.jpg" alt="Image" data-aos="fade-up" data-aos-delay="400">
            <img class="img-fluid shadow-lg position-absolute level-3 start-20 bottom-20 aos-init" src="./assets/images/pages/services.jpg" alt="Image" data-aos="fade-up">
          </div>
        </div>
      </div>
    </div>

  </section>




  <section class="py-15 py-xl-20 bg-black inverted">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="accordion accordion-minimal accordion-highlight" id="accordion-1">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1-1">
                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                  Can I use only static HTML files ?
                </button>
              </h2>
              <div id="collapse-1-1" class="accordion-collapse collapse" aria-labelledby="heading-1-1" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                  <p class="text-secondary">
                    <span class="fw-bold text-white">Yes.</span> The webpack workflow can be bypassed all together if
                    you
                    prefer to simply edit the static HTML and CSS files.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1-2">
                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                  Are images and videos included in the package?
                </button>
              </h2>
              <div id="collapse-1-2" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                  <p class="text-secondary">
                    <span class="fw-bold text-white">Yes.</span> All images you see in the demo are included in the
                    download package.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1-3">
                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                  How can I request suport?
                </button>
              </h2>
              <div id="collapse-1-3" class="accordion-collapse collapse" aria-labelledby="heading-1-3" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                  <p class="text-secondary">Our support team is standing by to offer quick and professional one-on-one
                    support to all of our customers. </p>
                  <a href="mailto:support@webuildthemes.com" class="btn btn-sm btn-with-icon btn-primary rounded-pill">Get in touch <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1-4">
                <button class="accordion-button fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                  Do I get free updates?
                </button>
              </h2>
              <div id="collapse-1-4" class="accordion-collapse collapse" aria-labelledby="heading-1-4" data-bs-parent="#accordion-1">
                <div class="accordion-body">
                  <p class="text-secondary">
                    <span class="fw-bold text-white">Yes.</span> All of our customers take advantage of lifetime
                    updates.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid" src="./assets/images/svg/faq.svg" alt="Figure">
        </div>
      </div>
    </div>
  </section>
-->

  <!-- footer -->
  <!--<footer id="footer" class="py-10 py-xl-15 bg-black inverted border-top">
    <div class="container">
      <div class="row align-items-center text-muted">
        <div class="col-6 col-lg-4 text-lg-center order-lg-2"><a href="index.html" class="navbar-brand"><img src="./assets/images/logo/logo-light.svg" alt="Logo"></a></div>
        <div class="col-6 col-lg-4 order-lg-1">
          <p class="eyebrow">2021 © WeBuildThemes</p>
        </div>
        <div class="col-lg-4 text-center text-lg-end order-lg-3">
          <a href="" class="action eyebrow underline text-white">Buy Cube <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </footer>
</div>
-->
<!-- javascript -->
<script>
  AOS.init();
</script>
<script src="./assets/js/vendor.bundle.js"></script>
<script src="./assets/js/index.bundle.js"></script>




    </body>


    <!--footer-->

    <!--integrations-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</html>