<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')
  <!--About us-->
  <div class="about-us">
    <div class="about-us-bg-div">
      <img src="{{asset('img/about-us.jpg')}}" alt="">
    </div>
    <div class="about-us-info">
      <span class="position">
        Chairman's Message
      </span>
      {{-- <h3 class="name">
        Mr:XXXXXXXXX XXXXXXXX
      </h3> --}}
      <p class="description">
        
      </p>
    </div>
  </div>

  <!--Message-->
  <div class="message about-us-message">
    <div class="message-text">
      <h6>Chairman's Message</h6>
      <p>{!!$configration->en_description!!}</p>
    </div>
    <div class="message-img">
      <img src="{{asset('img/joel-filipe-RFDP7_80v5A-unsplash.png')}}" alt="">
    </div>

  </div>

  <!-- Chairman Message-->
  <div class="message chairman-message about-us-chairman-message about-us-message">
    <div class="message-img">
      <img src="{{asset('img/chuttersnap-awL_YCtPGv4-unsplash.png')}}" alt="">
    </div>
    <div class="message-text">
      <h6>Chairman's Message</h6>
      <p>{!!$configration->en_vision!!}</p>
    </div>

  </div>

  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>