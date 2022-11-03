<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
</head>

<body>
  <!--Navbar-->
   @include('front-end/ar/layout/nav')
  <!--carousel-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/slider-1.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slider-2.png')}}" class="d-block w-100" alt="...">
      </div>
     
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
  <!-- egyption-company----------------------statistics-->
  <div class="egyption-company">
    <h3>احصائيات الشركة المصرية</h3>
    <div class="egyption-company-boxes">
      <div class="egyption-company-content">
        <img src="{{asset('img/icon1.png')}}" alt="">
        <div class="bg-div dark">
          <h6>الخبرة</h6>
          <p> عدد سنوات الخبرة</p>
          {{-- <p>نص بسيط عن الخبرة التي تتمع بها الشركة المصرية</p> --}}
          <span>{{$configration->experience_year_counter}}</span>
        </div>
      </div>
      <div class="egyption-company-content ">
        <img src="{{asset('img/icon3.png')}}" alt="">
        <div class="bg-div light">
          <h6> المشاريع</h6>
          <p>عدد المشاريع</p>
          {{-- <p>نص بسيط عن الخبرة التي تتمع بها الشركة المصرية</p> --}}
          <span>{{$configration->projects_counter}}</span>
        </div>
      </div>
      {{-- <div class="egyption-company-content">
        <img src="{{asset('img/icon1.png')}}" alt="">
        <div class="bg-div dark">
          <h6>عدد الوحدات</h6>
          <p>نص بسيط عن الخبرة التي تتمع بها الشركة المصرية</p>
          <span>50</span>
        </div>
      </div> --}}
      <div class="egyption-company-content">
        <img src="{{asset('img/icon4.png')}}" alt="">
        <div class="bg-div light">
          <h6>العملاء</h6>
          <p>عدد العملاء</p>
          {{-- <p>نص بسيط عن الخبرة التي تتمع بها الشركة المصرية</p> --}}
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
          <h3>مشروعات</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('ar/search?type='.'سكني')}}">سكني</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('ar/search?type='.'تجاري')}}">تجاري</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('ar/search?type='.'إداري')}}">إداري</a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-12">
          <div class="projects-content">
            <a href="{{url('ar/search?type='.'طبي')}}">طبي</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--special project-->
  <div class="secial-projects" id="projects">
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
            <button class="btn"> <a href="{{url('ar/projects')}}" style="color: aliceblue"> عرض الكل </a></button>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($projects as $item)
        <div class="col-xl-3 mb-4 col-sm-12">
          <div class="project-component">
            <div class="project-img">
              <a href="{{url('ar/projects/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->ar_name}}"></a>
            </div>
            <div class="project-details">
              <h6>{{$item->ar_name}}</h6>
             
              <p style="overflow: hidden;
              text-overflow: ellipsis;
              display: -webkit-box;
              -webkit-line-clamp: 3;
              -webkit-box-orient: vertical;">{!! strip_tags($item->ar_description) !!}</p>
              <div class="button-div">
                <button class="btn"><a href="{{url('ar/projects/'.$item->id)}}" style="color: aliceblue"> المزيد </a></button>
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
                <button class="btn"><a href="{{url('ar/news/'.$item->id)}}" style="color: aliceblue">المزيد </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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