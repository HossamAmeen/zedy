<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/ar/layout/nav')
  <!--About us-->
  <div class="about-us">
    <div class="about-us-bg-div">
      <img src="{{asset('img/about-us.jpg')}}" alt="">
    </div>
    <div class="about-us-info">
      <span class="position">
        كلمه رئيس مجلس الاداره
      </span>
      {{-- <h3 class="name">
        الاستاذ: س ص
      </h3> --}}
      <p class="description">
        {!!$configration->description!!}
      </p>
    </div>
  </div>

  <!-- Chairman Message-->

  <div class="message chairman-message">
    <div class="message-text">
      <h6>كلمة رئيس مجلس الإدارة </h6>
      <p>{!!$configration->description!!}</p>
    </div>
    <div class="message-img">
      <img src="{{asset('img/joel-filipe-RFDP7_80v5A-unsplash.png')}}" alt="">
    </div>

  </div>
  <!--Message-->
  <div class="message ">
    <div class="message-img">
      <img src="{{asset('img/chuttersnap-awL_YCtPGv4-unsplash.png')}}" alt="">
    </div>
    <div class="message-text">
      <h6>رسالة ورؤية الشركة</h6>
      <p>{!!$configration->vision!!}</p>
    </div>

  </div>

  @include('front-end/ar/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>