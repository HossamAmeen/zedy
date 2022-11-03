<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}">
  <!---->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
  <title>Al Masria | {{$pageTitle }}</title>
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')

  <div class="unit unit-project-details">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="unit-name">
            <a href="{{url('en/projects')}}"><i class="fas fa-arrow-left"></i>{{$project->name}}</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-7">
          <div class="unit-img">
            <img src="{{asset($project->image)}}" alt="{{$project->name}}">
          </div>
        </div>
        <div class="col-xl-5">
          <div class="unit-details">
            <button class="btn">{{$project->availability}}</button>
            <h5>{{$project->name}}</h5>
            @if($project->delivery_date)
                <div><i class="far fa-clock"></i>Deilivery date : {{$project->delivery_date}}</div>
            @endif
            <div><i class="fas fa-home"></i>Project type : {{$project->project_type}}</div>
            <div><i class="fas fa-dollar-sign"></i>Paymenttype : {{$project->payment_type}}</div>
            <h5>Project Description</h5>
            <p>{!!$project->description!!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @if(count($images) > 0 )
  <!---->
  <div class="blueprint">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="blueprint-header">

            <img src="img/Rectangle 83.svg" alt="">
            <h6>BluePrint Album</h6>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="single-item single-item-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            @foreach ($images as $item)
            <div><img src="{{asset($item->path)}}" alt=""></div>
             @endforeach
          
          </div>
        </div>

      </div>
    </div>
  </div>
  @endif
  <!---->
  @if(count($units) > 0 )
          
       
  <div class="unit-projects project-details">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="available-unites">

            <img src="img/Rectangle 83.svg" alt="">
            <h6>Available Units</h6>

          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($units as $item)
        <div class="col-xl-6 col-sm-12">
          <div class="project">
            <div class="unit-img">
              <img src="{{asset($item->image)}}" alt="">
            </div>
            <div class="unit-details" style="font-size:14px">
              <button class="btn">{{$item->availability}} </button>
              <h5>{{$item->number}}</h5>
              <div><img style="width:30px" class="mr-2" src="{{asset('img/box.png')}}" >Space: <span> {{$item->space}}</span></div>
              <div><img style="width:30px" class="mr-2" src="{{asset('img/leddar.png')}}" >Floor number : {{$item->floor_number}}</div>
             
              <div class="button-div">
                <button class="btn"><a href="{{url('en/units/'.$item->id)}}" style="color: aliceblue"> More
                </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endif
  @if(count($news) > 0 )
   <!--special project-->
   <div class="secial-projects">
    <div class="container">
      {{-- <div class="row">
        <div class="col-xl-12">
          <h3>Special Project</h3>
        </div>
      </div> --}}
     
      
      <div class="row">
        <div class="col-xl-12">
          <div class="latest-projects lastest-news">
            <div>
              <img src="img/Rectangle 83.svg" alt="">
              <h6>Latest project News</h6>
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
              <img src="{{asset($item->image)}}" alt="{{$item->title}}">
              </a>
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
  @endif
 @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.single-item').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: '',
      nextArrow: '<div class="next-arrow"><i class="fas fa-angle-right"></i></div>',
      appendDots:'<div class="dots"><i class="fas fa-circle"></i></div>',
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
  </script>
</body>

</html>