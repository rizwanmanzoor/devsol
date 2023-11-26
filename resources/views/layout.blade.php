<!DOCTYPE html>
<html lang="en">

<head>
  <title>Web Design & Development | Digital Marketing | DeveloperSouls</title>

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Seo Tags-->
  <meta name="description" content="DEVELOPERSOULS is a Web Development company with a vision to provide quality services in the web as well as applications development and CMS to E-commerce. We target both small to medium businesses." />
  <meta name="keywords" content="Website Development, Single Page Application, React Development, Wordpress Development, Ecommerce, Real Estate, Gym, Website Design, UX Design, UI-UX, Facebook Marketing, Business Growth, Digital Marketing" />
  <meta name="robots" content="index, follow">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&amp;family=Rubik:wght@400;500;700&amp;family=Spartan:wght@400;700;900&amp;display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700;900&family=Reenie+Beanie&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <!-- Pre loader -->
  <div class="preloader">
    <div class="preloader-item">
      <h2 class="blink-animation text-primary-stroke">Loading...</h2>
    </div>
  </div>

  <!-- Offcanvas START -->
  <div class="offcanvas offcanvas-top bg-dark" tabindex="-1" id="offcanvasFullLight" data-bs-backdrop="false"
    aria-labelledby="offcanvasFullLight">
    <div class="offcanvas-header position-absolute top-0 end-0 z-index-9">
      <a class="ms-auto btn btn-secondary btn-round zoom-hover" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="bi bi-x-lg p-0"></i>
      </a>
    </div>
    <div class="offcanvas-body position-relative px-5 px-md-8 pt-3 pt-md-6">
      <div class="w-100 h-100 d-flex align-items-start flex-column">
        <ul class="nav dropdown-toggle-start-icon flex-column">
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke text-primary-shadow"
                href="/">Home</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— Where all started!</p>
          </li>
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke" href="portfolio">Work</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— So far so good</p>
          </li>
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke" href="services">Services</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— With <i class="bi bi-heart-fill text-primary"></i> and passion</p>
          </li>
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke" href="about">About</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— What we're up to</p>
          </li>
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke" href="blog">Blog</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— News with everyone</p>
          </li>
          <li class="nav-item d-block d-md-flex mb-2" data-fx="1">
            <h5 class="display-5 mb-0"><a class="nav-link text-light-stroke" href="contact">Contact</a></h5>
            <p class="align-self-center mt-0 mt-md-5">— Where to spot us</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Header START -->
  <header class="navbar-transparent navbar-sticky">
    <nav class="navbar navbar-expand">
      <div class="container-fluid px-0 px-md-5">
        <div class="row d-flex w-100 mx-auto">

          <div class="col-3 col-md-4 d-flex justify-content-start my-auto">
            <a class="text-dark flex-row text-primary-hover me-4 mt-n1" data-bs-toggle="offcanvas"
              href="#offcanvasFullLight" role="button" aria-controls="offcanvasFullLight">
              <i class="bi bi-text-left rtl-flip display-8 align-middle" data-bs-target="#offcanvasFullLight"></i>
              <span class="font-heading fw-bold d-none d-md-inline" data-bs-target="#offcanvasFullLight">Menu</span>
            </a>
          </div>

          <div class="col-6 col-md-4 text-center">
            <a class="navbar-brand d-block" href="/">
              <!-- Logo SVG Code -->
              <svg class="navbar-brand-item mx-auto" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                viewBox="0 0 809.22 120.62">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #00235a;
                    }

                    .cls-2 {
                      fill: #38db77;
                    }
                  </style>
                </defs>
                <path class="cls-1"
                  d="M188.21,38H208.9c14.5,0,24.43,8.44,24.43,21.87S223.4,81.75,208.9,81.75H188.21ZM208.4,71.87c7.43,0,12.43-4.43,12.43-12s-5-12-12.43-12h-7.82v24Z" />
                <path class="cls-1" d="M275,72.19v9.56H239.84V38h34.31v9.56H252.09v7.38h19.43v9.25H252.09v8Z" />
                <path class="cls-1" d="M325.59,38,306.84,81.75H294.65L276,38h13.38l11.87,28.5L313.34,38Z" />
                <path class="cls-1" d="M363.28,72.19v9.56H328.16V38h34.31v9.56H340.41v7.38h19.43v9.25H340.41v8Z" />
                <path class="cls-1" d="M370.16,38h12.37V71.94h20.88v9.81H370.16Z" />
                <path class="cls-1"
                  d="M405.35,59.87c0-13.12,10.31-22.75,24.31-22.75S454,46.75,454,59.87s-10.31,22.75-24.31,22.75S405.35,73,405.35,59.87Zm36.12,0c0-7.56-5.18-12.5-11.81-12.5s-11.81,4.94-11.81,12.5,5.19,12.5,11.81,12.5S441.47,67.44,441.47,59.87Z" />
                <path class="cls-1"
                  d="M499.91,54.19c0,9.93-7.5,16.12-19.43,16.12h-7.63V81.75H460.48V38h20C492.41,38,499.91,44.19,499.91,54.19Zm-12.5,0c0-4.07-2.56-6.44-7.68-6.44h-6.88V60.56h6.88C484.85,60.56,487.41,58.19,487.41,54.19Z" />
                <path class="cls-1" d="M541,72.19v9.56H505.92V38h34.31v9.56H518.17v7.38h19.44v9.25H518.17v8Z" />
                <path class="cls-1"
                  d="M567.05,70.12H560.3V81.75H547.92V38h20c11.94,0,19.44,6.19,19.44,16.19A14.54,14.54,0,0,1,578.8,68l9.43,13.75H575Zm.12-22.37H560.3V60.56h6.87c5.13,0,7.69-2.37,7.69-6.37S572.3,47.75,567.17,47.75Z" />
                <path class="cls-2"
                  d="M591.59,77.32l2.84-6.39A24.49,24.49,0,0,0,609,75.8c6.89,0,9.8-2.47,9.8-5.75,0-9.54-26.29-3.29-26.29-19.72,0-7.14,5.69-13.21,17.82-13.21,5.31,0,10.87,1.39,14.72,3.92l-2.59,6.38A24.65,24.65,0,0,0,610.3,44c-6.83,0-9.61,2.65-9.61,6,0,9.42,26.23,3.29,26.23,19.53,0,7.08-5.75,13.14-17.89,13.14C602.14,82.62,595.26,80.48,591.59,77.32Z" />
                <path class="cls-2"
                  d="M631.91,59.87c0-13.08,10.11-22.75,23.83-22.75s23.82,9.61,23.82,22.75-10.11,22.75-23.82,22.75S631.91,73,631.91,59.87Zm39.37,0a15.55,15.55,0,0,0-31.09,0,15.55,15.55,0,1,0,31.09,0Z" />
                <path class="cls-2"
                  d="M687.91,62.72v-25h8.21V62.4c0,9.1,4.11,13,11.25,13s11.19-3.92,11.19-13V37.76h8.09v25c0,12.89-7.27,19.9-19.34,19.9S687.91,75.61,687.91,62.72Z" />
                <path class="cls-2" d="M738.15,37.76h8.21V75h23.13V82H738.15Z" />
                <path class="cls-2"
                  d="M772,77.32l2.85-6.39A24.44,24.44,0,0,0,789.4,75.8c6.89,0,9.8-2.47,9.8-5.75,0-9.54-26.29-3.29-26.29-19.72,0-7.14,5.69-13.21,17.82-13.21,5.31,0,10.87,1.39,14.72,3.92l-2.59,6.38A24.65,24.65,0,0,0,790.67,44c-6.83,0-9.61,2.65-9.61,6,0,9.42,26.23,3.29,26.23,19.53,0,7.08-5.75,13.14-17.89,13.14C782.51,82.62,775.63,80.48,772,77.32Z" />
                <path class="cls-1"
                  d="M39.73,19.1,16.33,60.32,40,101.91H51.89l6.84,12.46H33l-31-54.12,31-53.74a.53.53,0,0,1,.45-.27H75.05L67.63,19.1Z" />
                <path class="cls-1"
                  d="M159.57,60.32l-30.86,54.05H86.39L93,102.94h29l23.15-42.62L120.73,18.84H109l-7.07-12.6h26.78a.53.53,0,0,1,.47.27Z" />
                <polygon class="cls-1" points="95.85 22.62 74.11 113.15 65.46 98 86.83 6.96 95.85 22.62" />
                <polygon class="cls-2"
                  points="62.36 28.36 47.19 28.36 29.19 60.31 46.93 92.65 62.36 92.65 43.84 60.5 62.36 28.36" />
                <polygon class="cls-2"
                  points="99.14 28.36 114.31 28.36 132.32 60.31 114.57 92.65 99.14 92.65 117.66 60.5 99.14 28.36" />
              </svg>
            </a>
          </div>

          <div class="col-3 col-md-4 d-flex justify-content-end">
            <div class="navbar-nav flex-row align-items-center">
              <div class="nav-item pe-0 ps-4 d-none d-xl-block">
                <a href="contact" class=" btn btn-sm btn-dark mb-0">Get a quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- **************** MAIN CONTENT START **************** -->
  <main>

    @yield('content')

    <!-- Action box START -->
    <section class="section-padding pt-0 position-relative">
      <!-- Shape Decoration START -->
      <figure class="position-absolute start-0 bottom-0 ms-n6 mb-n4 z-index-9 d-none d-lg-block">
        <svg width="285" height="82" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 82">
          <rect class="fill-primary" x="22.67" y="16.58" width="262.22" height="65.42"></rect>
          <path
            d="m9.63 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0.01-4.82-2.15-4.82-4.81s2.16-4.81 4.81-4.81c2.66 0 4.82 2.15 4.82 4.81z">
          </path>
          <path
            d="m35.25 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m60.88 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m86.5 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m112.12 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m137.75 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m163.37 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m188.99 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m214.62 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m240.24 4.83c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m9.63 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0.01-4.82-2.15-4.82-4.81s2.16-4.81 4.81-4.81c2.66 0 4.82 2.16 4.82 4.81z">
          </path>
          <path
            d="m35.25 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.16 4.81 4.81z">
          </path>
          <path
            d="m60.88 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z">
          </path>
          <path
            d="m86.5 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z">
          </path>
          <path
            d="m112.12 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66 0 4.81 2.16 4.81 4.81z">
          </path>
          <path
            d="m137.75 30.38c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81s4.81 2.16 4.81 4.81z">
          </path>
          <circle cx="158.56" cy="30.38" r="4.81"></circle>
          <circle cx="184.18" cy="30.38" r="4.81"></circle>
          <circle cx="209.8" cy="30.38" r="4.81"></circle>
          <circle cx="235.43" cy="30.38" r="4.81"></circle>
          <path
            d="m9.63 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.82-2.16-4.82-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.82 2.15 4.82 4.81z">
          </path>
          <path
            d="m35.25 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m60.88 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m86.5 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m112.12 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.66-0.01 4.81 2.15 4.81 4.81z">
          </path>
          <path
            d="m137.75 55.94c0 2.66-2.16 4.81-4.81 4.81-2.66 0-4.81-2.16-4.81-4.81 0-2.66 2.16-4.81 4.81-4.81 2.65-0.01 4.81 2.15 4.81 4.81z">
          </path>
          <circle cx="158.56" cy="55.94" r="4.81"></circle>
          <circle cx="184.18" cy="55.94" r="4.81"></circle>
          <circle cx="209.8" cy="55.94" r="4.81"></circle>
          <circle cx="235.43" cy="55.94" r="4.81"></circle>
        </svg>
      </figure>
      <div class="container">
        <div class="row g-0 d-flex align-items-center">
          <div class="col-sm-6">
            <div class="text-center bg-primary-multiply position-relative overflow-hidden px-3 py-6 h-100">
              <h2 class="mb-3 display-6 text-white-stroke"><a class="text-white-stroke">Our Work</a></h2>
              <a class="btn btn-line text-white mb-0" href="portfolio">View projects</a>
              <img class="bg-primary-multiply position-absolute top-50 start-50 translate-middle z-index-n9"
                src="assets/images/about/05.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-center bg-dark px-3 py-6 h-100">
              <h2 class="mb-3 display-6 text-white">Have a Project?</h2>
              <a class="btn btn-line text-white mb-0" href="contact">Get a Quote</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- Footer START -->
  <footer class="bg-dark pt-6 bg-dark-overlay-5 pattern-overlay-3">
    <div class="container">
      <div class="row pb-2">
        <div class="col-md-7">
          <h2 class="display-7 text-white-stroke">Don't be shy, say hi!</h2>
          <h6 class="text-white">Have a question, a project? We'd love to discuss... </h6>
          <form class="contact-form form-dark form-line mt-5" id="contact-form" name="contactform" method="POST"
            action="assets/include/contact-action.php">
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3 position-relative">
                  <input required="" id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3 position-relative">
                  <input required="" id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3 position-relative">
                  <input required="" id="con-subject" name="subject" type="text" class="form-control"
                    placeholder="Subject">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3 position-relative">
                  <textarea required="" id="con-message" name="message" cols="40" rows="4" class="form-control"
                    placeholder="Message"></textarea>
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12 text-start"><button class="btn btn-primary btn-line" type="submit">Send
                  Message</button></div>
            </div>
          </form>
        </div>

        <div class="col-md-5 mt-5 mt-md-0">
          <h3 class="text-white">About Us</h3>
          <p class="mb-5">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum veritatis voluptatibus accusamus est aut
            facilis ex quibusdam impedit beatae laudantium necessitatibus quasi reiciendis autem culpa inventore,
            numquam voluptas velit ratione recusandae dicta id, aspernatur dignissimos maiores! Et eius ea vitae!
          </p>

          <h6 class="text-light">Get more info@ </h6>

          <ul class="list-unstyled list-group-inline display-9 mb-3">
            <li> <a class="text-facebook me-2" href="https://web.facebook.com/DeveloperSouls" target="_blank"><i
                  class="bi bi-facebook"></i></a> </li>
            <li> <a class="text-instagram mx-2" href="#"><i class="bi bi-instagram"></i></a> </li>
            <li> <a class="text-twitter mx-2" href="#"><i class="bi bi-twitter"></i></a> </li>
            <li> <a class="text-linkedin mx-2" href="https://www.linkedin.com/company/developersouls" target="_blank"><i
                  class="bi bi-linkedin"></i></a> </li>
            <li> <a class="text-whatsapp mx-2"
                href="https://wa.me/923364455148?text=Hello,%20I%20recently%20visited%20your%20website"
                target="_blank"><i class="bi bi-whatsapp"></i></a> </li>
          </ul>

          <a class="d-block mb-3 display-9 fw-normal text-white" href="tel:923364455148">+(92) 336-4455-148</a>
          <a class="d-block mb-3 display-9 fw-normal text-primary"
            href="mailto:hello@developersouls.com">hello@developersouls.com</a>

          <!-- Copyrights -->
          <div class="position-absolute bottom-10">©2023 <a class="text-primary">Developersouls</a>. All rights reserved
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Custom cursor -->
  <div class="cursor-dot-outline"></div>
  <div class="cursor-dot"></div>

  <!-- Back to top -->
  <div class="back-top">
    <div class="scroll-line"></div>
    <span class="scoll-text">Go Up</span>
  </div>

  <!-- JS libraries, plugins and custom scripts -->

  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Vendors -->
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/jarallax/jarallax.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagetraileffects/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagetraileffects/js/TweenMax.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagetraileffects/js/demo.js') }}"></script>

  <!-- Template Functions -->
  <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>