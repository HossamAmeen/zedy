<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')
  <!---->
  <div class="projects-page-title">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="projects-page-title-bg">
            <h2> Keep up to date with <span>Al-Masria</span> news</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--New-->
  <div class="secial-projects news-secial-projects new-secial-projects">
    <div class="container">

      <div class="row">
        <div class="col-xl-8">
          <div class="unit-name">
            <a href=""><i class="fas fa-arrow-left"></i>{{ $news_item->title}}</a>
            <span>{{ $news_item->date}}</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-sm-12">
          <div class="project-component new-project-component">
            <div class="project-img">
              <img src="{{ asset($news_item->image)}}" alt="{{ $news_item->title}}">
            </div>
            <div class="project-details">
              <div class="project-name">
                <h6>{{ $news_item->title}}</h6>
              </div>
              <span>{{ $news_item->project->name}}</span>
              <p>{!!$news_item->description!!}</p>

            </div>
          </div>
        </div>
        
        <div class="col-xl-4 col-sm-12">
          <div class="row">
            <div class="col-xl-12">
              <div class="related-news">
                <h5>Related News</h5>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($related_news as $item)
            <div class="col-xl-12">
              <div class="project-component">
                <div class="project-img">
                  <img src="{{asset( $item->image)}}" alt="{{ $item->title}}">
                </div>
                <div class="project-details">
                  <div class="project-name">
                    <h6>{{ $item->title}}</h6>
                    <span>{{ $item->date}}</span>
                  </div>
                  <span>{{ $item->project->name ?? " "}}</span>
                  <p>{{ substr(strip_tags($item->description),0,100)}}</p>
                  <div class="button-div">
                    <button class="btn"><a href="{{url('en/news/'.$item->id)}}" style="color: aliceblue">More </a></button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
           

            
          </div>
        </div>
      </div>
    </div>
  </div>

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
              <img src="img/Rectangle 83.svg" alt="">
              <h6>Latest Projects</h6>
            </div>
            <button class="btn">SHOW ALL</button>
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
              <p>{{ substr(strip_tags($item->description),0,100)}}</p>
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
            <button class="btn">SHOW ALL</button>
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>