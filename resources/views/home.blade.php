@extends('layout')
@section('content')
  <!-- Main Banner START -->
  <section class="section-padding position-relative overflow-hidden p-0 pattern-overlay-7">
    <div class="content vh-lg-100 h-md-600 h-500">
      <img class="content__img" src="assets/images/portfolio/trail/1.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/2.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/3.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/4.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/5.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/6.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/7.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/8.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/9.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/10.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/11.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/12.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/13.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/14.jpg" alt="Some image" />
      <img class="content__img" src="assets/images/portfolio/trail/15.jpg" alt="Some image" />
      <h3 class="display-1 text-dark-stroke text-primary-shadow position-absolute top-50 start-50 translate-middle text-center z-index-99 w-100">Creative Agency</h3>

      <!-- Scoll Down -->
      <div class="scroll-down overflow-visible d-none d-md-block mx-auto start-0 bottom-0">
        <div class="scroll-line"></div>
        <span class="scoll-text">Scroll Down</span>
      </div>
    </div>
  </section>

  <!-- About START -->
  <section class="section-padding bg-dark position-relative z-index-9">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="text-center text-lg-end">
            <span class="font-alt fw-normal display-8 text-white">We're a creative agency</span>
            <h2 class="text-white display-6">Expect nothing less than perfect</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mt-4 ps-0 ps-lg-7 text-center text-lg-start">
            <p class="lead">Our friendly team members are always willing to help you understand your present
              technology requirements and provide suggestions on your future needs.</p>
            <a href="contact.html" class="btn btn-line fw-bold text-primary">Let's discuss your project</a>
          </div>
        </div>
      </div>
      <div class="row mt-5 mb-n9">
        <!-- Card 1 -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <img class="card-img-top" src="assets/images/about/10.jpg" alt="">
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <img class="card-img-top" src="assets/images/about/11.jpg" alt="">
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <img class="card-img-top" src="assets/images/about/12.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote START -->
  <section class="section-padding bg-light pb-0 position-relative overflow-hidden">
    <div class="position-absolute start-0 bottom-0 w-100 zoom-2 opacity-3 d-none d-lg-block">
      <div class="bg-dark-overlay-dotted py-3"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto mb-5 mt-6 text-center position-relative">
          <blockquote>
            <p class="mb-0 lead font-alt fw-normal display-7 fw-normal">"Sometimes when you innovate, you make
              mistakes. It is best to admit them quickly, and get on with improving your other innovations"</p>
            <footer class="mt-4">- Steve Jobs @ <cite title="Source Title">Apple Inc</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Start -->
  <section class="section-padding overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex flex-column">
          <div class="order-2 order-md-1 mt-4 mt-md-0">
            <h2 class="mb-3">Crafting visually <span class="text-primary">memorable experiences</span></h2>
            <p>Partnering with 500+ Fortune companies and mid-sized firms across enterprises, uniquely customized and
              scalable workforce solutions</p>
            <a href="about.html" class="btn btn-line text-dark mb-4">More about us</a>
          </div>
          <div class="position-relative bg-primary-multiply rounded overflow-hidden order-1 order-md-2">
            <img src="assets/images/about/01.jpg" alt="">
            <!-- Play Video button -->
            <div class="position-absolute start-0 bottom-0 mb-4 ms-4">
              <a class="btn btn-white btn-round zoom-hover mx-2 align-middle d-inline-block" data-glightbox=""
                data-gallery="video" href="https://youtu.be/n_Cn8eFo7u8"> <i class="bi-play-circle fs-3"></i></a>
              <div class="align-middle d-inline-block">
                <h5 class="mb-0 text-white">Our Story</h5>
                <p class="mb-0 text-secondary">In 02:11 min</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="position-relative mb-4 rounded overflow-hidden">
            <img src="assets/images/about/02.jpg" alt="">
            <div class="position-absolute end-0 top-0 bg-primary-overlay-dotted p-6 me-n5 mt-n5"> </div>
          </div>
          <span class="font-alt fw-normal display-8">We are creating smart websites.</span>
          <h2 class="">A complete technology solution provider</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing START -->
  <section class="section-padding bg-light position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2 class="display-7">Affordable Pricing Packages</h2>
          <p>Everything you need to be everywhere your customers are, wrapped up in one pretty package—at a special
            price.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center mb-5 mb-md-0">
                <div class="card-header">
                  <h4 class="mb-3">Personal Plan</h4>
                  <h4 class="display-5 mb-2 text-dark-stroke text-light-shadow">$20</h4>
                  <span class="d-block">/ Per Month</span>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li class="mb-3">Up to 05 users monthly</li>
                    <li class="mb-3"><del class="text-secondary">Unlimited updates</del></li>
                    <li class="mb-3">Free 5 host &amp; domain</li>
                    <li class="mb-3"><del class="text-secondary">24/7 dedicated Support</del> </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="contact.html">
                    <button type="button" class="btn btn-dark">Get Started</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 position-relative">
              <div class="card text-center mb-5 mb-md-0">
                <div class="card-header">
                  <h4 class="mb-3">Business Plan</h4>
                  <h4 class="display-5 mb-2 text-dark-stroke text-primary-shadow">$50</h4>
                  <span class="d-block">/ Per Month</span>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li class="mb-3">Up to 10 users monthly</li>
                    <li class="mb-3"><del class="text-secondary">Unlimited updates</del></li>
                    <li class="mb-3">Free 15 host &amp; domain</li>
                    <li class="mb-3">24/7 dedicated Support </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="contact.html">
                    <button type="button" class="btn btn-dark">Get Started</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center mb-5 mb-md-0">
                <div class="card-header">
                  <h4 class="mb-3">Ultimate Plan</h4>
                  <h4 class="display-5 mb-2 text-dark-stroke text-light-shadow">$99</h4>
                  <span class="d-block">/ Per Month</span>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li class="mb-3">Up to 50 users monthly</li>
                    <li class="mb-3">Unlimited updates</li>
                    <li class="mb-3">Free host &amp; domain included</li>
                    <li class="mb-3">24/7 dedicated Support </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="contact.html">
                    <button type="button" class="btn btn-dark">Get Started</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection