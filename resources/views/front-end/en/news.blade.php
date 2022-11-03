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
  <!--special project-->
  <div class="secial-projects news-secial-projects">
    <div class="container">
      <div class="row">
        @foreach ($news as $item)
        <div class="col-xl-4 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('en/news/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
            </div>
            <div class="project-details">
              <div class="project-name">
                <h6>{{$item->title}}</h6>
                <span>{{$item->date}}</span>
              </div>
              <span>{{$item->project->name ?? " "}}</span>
              <p>{{ substr(strip_tags($item->description),0,100)}}</p>
              <div class="button-div">
                <button class="btn"><a href="{{url('en/news/'.$item->id)}}" style="color: aliceblue">More </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      <div class="row">
        <div class="col-xl-12">
          <nav aria-label="..." class="pagination-nav">
            {{$news->links()}}
          </nav>
        </div>
      </div>
    </div>
  </div>
  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>