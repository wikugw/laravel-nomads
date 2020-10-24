<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{URL('frontend/libraries/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL('frontend/styles/main.css')}}">

  <title>@yield('title')</title>
</head>

<body>
  <div class="container">
    <navbar class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="#" class="navbar-brand">
        <img src="./frontend/images/logo.png" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Testimonial</a>
          </li>
        </ul>
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0">Masuk</button>
        </form>
        <form class="form-inline d-none d-md-block my-2 my-lg-0">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Masuk</button>
        </form>
      </div>
    </navbar>
  </div>

  @yield('content')

  <footer class="section-footer mt-5 mb-4 border-top">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Review</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media Kita</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Review</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media Kita</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Review</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media Kita</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Review</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media Kita</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fuild">
      <div class="row border-top justify-content-center align-items-center pt-4" style="margin-right: 0;">
        <div class="col-auto text-gray-500 font-weight-light">
          made with ❤ 2020
        </div>
      </div>
    </div>
  </footer>

  <script src="{{URL('frontend/libraries/jquery/jquery-3.5.1.min.js')}}"></script>
  <script src="{{URL('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{URL('frontend/libraries/retina/retina.min.js')}}"></script>
</body>

</html>
