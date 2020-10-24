@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
<header class="text-center">
    <h1>
      Explore the beautiful world
      <br>
      as an easy click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br>
      moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Member</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Populer</h2>
            <p>
              Something that you never try
              <br>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/travel-1@2x.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ url('detail') }}" class="btn btn-travel-details px-4">View Details</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/travel-2@2x.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ url('detail') }}" class="btn btn-travel-details px-4">View Details</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/travel-3@2x.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ url('detail') }}" class="btn btn-travel-details px-4">View Details</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('./frontend/images/travel-4@2x.jpg');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="{{ url('detail') }}" class="btn btn-travel-details px-4">View Details</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8">
            <img src="./frontend/images/partner@2x.png" alt="logo partner" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They are Loving us</h2>
            <p>
              Moments were giving them
              <br>
              best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/images/avatar-2@2x.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Karen</h3>
                <p class="testimonial">
                  "It was glorious and I could not stop to say whoo for every single moment dankeeee"
                </p>
              </div>
              <hr>
              <p class="mt-2 trip-to">
                Trip to Ubud
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/images/avatar-3@2x.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Karen</h3>
                <p class="testimonial">
                  "It was glorious and I could not stop to say whoo for every single moment dankeeee"
                </p>
              </div>
              <hr>
              <p class="mt-2 trip-to">
                Trip to Ubud
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/images/avatar-2@2x.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Karen</h3>
                <p class="testimonial">
                  "I loved it when the waves was shaking harder - I was scared too"
                </p>
              </div>
              <hr>
              <p class="mt-2 trip-to">
                Trip to Ubud
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I need help</a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
