<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <!--Navbar-->
  @include('front-end/ar/layout/nav')


  <div class="projects-page-title">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="projects-page-title-bg">
            <h2>نقدم خيارات متعددة للمشرعات و بتقسيط يصل الى<span> {{$configration->ar_installment_years}} </span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Units-->
  <div class="unit-projects">
    <div class="container">
      <div class="row">
        @foreach($projects as $item)
        <div class="col-xl-6">
          <div class="project">
            <div class="unit-img">
              <a  href="{{url('ar/projects/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->ar_name}}"></a>
            </div>
            <div class="unit-details">
              <button class="btn">{{$item->ar_availability}}</button>
              <h5>{{$item->ar_name}}</h5>
              @if($item->map != null)
              <a href="{{$item->map}}"><i class="material-icons">add_location</i></a>
              @endif
              @if($item->delivery_date)
              <div><i class="far fa-clock"></i> موعدالتسليم : <span>{{$item->delivery_date}}</span></div>
              @endif
              <div><i class="fas fa-home"></i>نوع المشروع : <span>{{$item->ar_project_type}}</span></div>
              <div><i class="fas fa-dollar-sign"></i>نظام السداد : <span>{{$item->ar_payment_type}}</span></div>
              <div class="button-div">
                <button class="btn"><a href="{{url('ar/projects/'.$item->id)}}" style="color: aliceblue"> المزيد
                  </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-xl-12">
          <nav aria-label="..." class="pagination-nav">
            {{$projects->links()}}
          
          </nav>
        </div>
      </div>
    </div>
  </div>

  @include('front-end/ar/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>