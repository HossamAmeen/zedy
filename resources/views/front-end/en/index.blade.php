<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')

  <!--carousel-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/slider-1.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slider-2.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slider-1.png')}}" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!--Message-->
  <div class="message">
    <div class="message-text">
      <h6>Chairman's Message</h6>
      <p>{!!$configration->en_description!!}</p>
    </div>
    <div class="message-img">
      <img src="{{asset('img/joel-filipe-RFDP7_80v5A-unsplash.png')}}" alt="">
    </div>

  </div>

  <!-- Chairman Message-->
  <div class="message chairman-message">
    <div class="message-img">
      <img src="{{asset('img/chuttersnap-awL_YCtPGv4-unsplash.png')}}" alt="">
    </div>
    <div class="message-text">
      <h6>Mission and vision of the company</h6>
      <p>{!!$configration->en_vision!!}</p>
    </div>

  </div>
  <!-- egyption-company-->
  <div class="egyption-company">
    <h3>Egyption Company Statistics</h3>
    <div class="egyption-company-boxes">
      <div class="egyption-company-content">
        <img src="img/icon1.png" alt="">
        <div class="bg-div dark">
          <h6>experience</h6>
          <p>Years of experience</p>
          <span>{{$configration->experience_year_counter}}</span>
        </div>
      </div>
      <div class="egyption-company-content ">
        <img src="img/icon3.png" alt="">
        <div class="bg-div light">
          <h6>Project</h6>
          <p>Number of projects</p>
          <span>{{$configration->projects_counter}}</span>
        </div>
      </div>
      {{-- <div class="egyption-company-content">
        <img src="img/icon1.png" alt="">
        <div class="bg-div dark">
          <h6>Project</h6>
          <p>Years of experience</p>
          <span>50</span>
        </div>
      </div> --}}
      <div class="egyption-company-content">
        <img src="img/icon4.png" alt="">
        <div class="bg-div light">
          <h6>Clients</h6>
          <p>Number OF clients</p>
          <span>{{$configration->clients_counter}}</span>
        </div>
      </div>
    </div>

  </div>
  <!-- Project -->
  {{-- <div class="projects">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <h3>Projects</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('en/search?type='.'administrative')}}">Administrative</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('en/search?type='.'commercial')}}">Commercial</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('en/search?type='.'medical')}}">Medical</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('en/search?type='.'residential')}}">Residential</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--special project-->
  <div class="secial-projects">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <h3>Special Project</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 ">
          <div class="latest-projects">
            <div>
              <img src="{{asset('img/Rectangle 83.svg')}}" alt="">
              <h6>Latest Projects</h6>
            </div>
            <button class="btn"><a href="{{url('en/projects/')}}" style="color: aliceblue"> SHOW ALL
            </a></button>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($projects as $item)
        <div class="col-xl-3 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('en/projects/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->name}}"></a>
            </div>
            <div class="project-details">
              <h6>{{$item->name}}</h6>
              <!--<p>{{ substr(strip_tags($item->description),0,100)}}</p>-->
              <p>{!! substr(strip_tags($item->description),0,100)!!}</p>
              <div class="button-div">
                <button class="btn"><a href="{{url('en/projects/'.$item->id)}}" style="color: aliceblue"> More
                </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="latest-projects lastest-news">
            <div>
              <img src="img/Rectangle 83.svg" alt="">
              <h6>Latest News</h6>
            </div>
            <button class="btn"><a href="{{url('en/news')}}" style="color: aliceblue"> SHOW ALL
            </a></button>
          </div>
        </div>
      </div>
      {{-- news --}}
      <div class="row">
        @foreach ($news as $item)
        <div class="col-xl-3 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('en/news/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
            </div>
            <div class="project-details">
              <h6>{{$item->title}}</h6>
              <p>{{ substr(strip_tags($item->description),0,100)}}</p>
              <div class="button-div button-second-div">
                <p>Published:{{$item->date}}</p>
                <button class="btn"><a href="{{url('en/news/'.$item->id)}}" style="color: aliceblue"> More
                  </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>

  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>