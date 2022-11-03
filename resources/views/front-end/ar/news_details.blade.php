<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/ar/layout/nav')
  <!-- New-->
  <div class="secial-projects news-secial-projects new-secial-projects">
    <div class="container">

      <div class="row">
        <div class="col-xl-8">
          <div class="unit-name">
            <a href="{{url('ar/news')}}"><i class="fas fa-arrow-right"></i>{{$news_item->ar_title}}</a>
            <span>{{$news_item->date}}</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-sm-12">
          <div class="project-component new-project-component">
            <div class="project-img">
              <img src="{{asset($news_item->image)}}" alt="{{$news_item->ar_title}}">
            </div>
            <div class="project-details">
              <div class="project-name">
                <h6>{{$news_item->ar_title}}</h6>
              </div>
              <span>{{$news_item->project->ar_name}}</span>
              <p>{!! $news_item->ar_description!!}</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-12">
          <div class="row">
            <div class="col-xl-12">
              <div class="related-news">
                <h5>اخبار ذات صلة</h5>
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
                  <p>{{ substr(strip_tags($item->ar_description),0,100)}}</p>
                  <div class="button-div">
                    <button class="btn"><a href="{{url('ar/news/'.$item->id)}}" style="color: aliceblue">المزيد
                      </a></button>
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
          <h3>مشروع مميز</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 ">
          <div class="latest-projects">
            <div>
              <img src="img/Rectangle 83.svg" alt="">
              <h6>أخر المشروعات</h6>
            </div>
            <button class="btn"> <a href="{{url('ar/news')}}" style="color: aliceblue"> عرض الكل </a></button>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($projects as $item)
        <div class="col-xl-3 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('ar/projects/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->ar_name}}"></a>
            </div>
            <div class="project-details">
              <h6>{{$item->ar_name}}</h6>
              <p>{{ substr(strip_tags($item->ar_description),0,100)}}</p>
              <div class="button-div">
                <button class="btn"><a href="{{url('ar/projects/'.$item->id)}}" style="color: aliceblue"> المزيد
                  </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{-- news --}}
      <div class="row">
        <div class="col-xl-12">
          <div class="latest-projects lastest-news">
            <div>
              <img src="img/Rectangle 83.svg" alt="">
              <h6>أخر الأخبار</h6>
            </div>
            <button class="btn"> <a href="{{url('ar/news')}}" style="color: aliceblue">عرض الكل</a></button>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($news as $item)
        <div class="col-xl-3 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('ar/news/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->ar_title}}"></a>
            </div>
            <div class="project-details">
              <h6>{{$item->ar_title}}</h6>
              <p>{{ substr(strip_tags($item->ar_description),0,100)}}</p>

              <div class="button-div button-second-div">
                <p>تاريخ النشر: {{$item->date}}</p>
                <button class="btn"><a href="{{url('ar/news/'.$item->id)}}" style="color: aliceblue">المزيد
                  </a></button>
              </div>
            </div>
          </div>
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