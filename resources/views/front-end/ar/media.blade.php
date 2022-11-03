<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/ar/layout/nav')
  <!--Media Center-->
  <div class="media-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="media-center-header">
            <h2> زياده أسعار الأبنيه في مناطق العاصمه</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/building.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/building.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/building.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="media-center-second-header">
            <h3>المركز الاعلامى للشركه الاستثمار العقارى</h3>
          </div>
        </div>
      </div>
      <div class="row">
         @foreach ($media as $item)
        <div class="col-xl-4 col-sm-12">
          @if ($item->type == "videos")
          <div class="video">
            <iframe src="https://www.youtube.com/embed/{{$item->path}}">
            </iframe>
          </div>
          @else
          <div class="video">
            <iframe src="{{asset($item->path)}}">
            </iframe>
          </div>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </div>


  @include('front-end/ar/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>