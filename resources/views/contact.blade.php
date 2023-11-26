@extends('layout')
@section('content')
  <!-- Inner intro START -->
  <section class="section-padding pattern-overlay-7">
    <div class="container">
      <div class="row d-flex justify-content-lg-between">
        <div class="col-12">
          <h1 class="display-4 pt-5 text-dark-stroke text-center text-primary-shadow">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact form START -->
  <section class="section-padding pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h3>Contact us</h3>
          <p>Get in touch with us to see how we can help you with your project</p>
        </div>
        <!-- Form -->
        <div class="col-lg-9">
          <form class="contact-form form-line" id="contact-form" name="contactform" method="POST"
            action="assets/include/contact-action.php">
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3 position-relative">
                  <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-6">
                <!-- email -->
                <div class="mb-3 position-relative">
                  <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <!-- Subject -->
                <div class="mb-3 position-relative">
                  <input required id="con-subject" name="subject" type="text" class="form-control"
                    placeholder="Subject">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <!-- Message -->
                <div class="mb-3 position-relative">
                  <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control"
                    placeholder="Message"></textarea>
                  <span class="focus-border"></span>
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-start"><button class="btn btn-primary btn-line" type="submit">Send
                  Message</button></div>
            </div>
          </form>
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
                  <button type="button" class="btn btn-dark">Get Started</button>
                </div>
              </div>
            </div>
            <!-- Pricing plan START -->
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
                  <button type="button" class="btn btn-primary">Get Started</button>
                </div>
              </div>
            </div>
            <!-- Pricing plan START -->
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
                  <button type="button" class="btn btn-dark">Get Started</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection