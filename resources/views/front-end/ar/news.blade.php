<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/ar/layout/nav')


  <div class="projects-page-title">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="projects-page-title-bg">
            <h2> تابع أخبار <span> المصرية</span> أول بأول </h2>
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
              <a href="{{url('ar/news/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->ar_title}}"></a>
            </div>
            <div class="project-details">
              <div class="project-name">
                <h6>{{$item->ar_title}}</h6>
                <span>{{$item->date}}</span>
              </div>
              <span>{{$item->project->name ?? " "}}</span>
              <p> {{ strip_tags($item->ar_description) }}</p>
              <div class="button-div">
                <button class="btn"><a href="{{url('ar/news/'.$item->id)}}" style="color: aliceblue">المزيد </a></button>
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
            {{-- <ul class="pagination pagination-sm">
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
            </ul> --}}
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  @include('front-end/ar/layout/footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>