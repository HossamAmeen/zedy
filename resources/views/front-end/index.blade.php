<!DOCTYPE html>
<html>

<head>
  <title>الاهلية لمكافحة الحشرات والقوارض بالكويت</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{asset('assets/imgs/logo.png')}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark-custum ">
    <a class="navbar-brand " href="{{url('/')}}">
      <img class="navbar-brand-img" src="{{asset('assets/imgs/logo.png')}}" alt=" لمكافحة الحشرات">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">الصفحة الرئيسية </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services"
            onclick="$('html, body').animate({scrollTop: $('#services').offset().top}, 'slow');">الخدمات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"
            onclick="$('html, body').animate({scrollTop: $('#article').offset().top}, 'slow');">المقالات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"
            onclick="$('html, body').animate({scrollTop: $('#aboutUs').offset().top}, 'slow');">من نحن</a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="backNav"></section>
  <div class="hidden-nav" style="display: none;">
    اااااااااااااااااااا
  </div>
  <section class="intro">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="6" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('./assets/imgs/1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/3.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/4.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/5.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/6.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('./assets/imgs/7.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section id="contactUs" class="contactUs">
    <div class="container">
      <div class="row contactUs-row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <div class="contactUs-txt">
            <h4 style="color: #2961d0">اتصل بنا</h4>
            <span>
              نصلك في اسرع وقت اينما كنت
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:0"><button type="button" class="btn intro-btn-order"
                style="background-color: #2961d0;color: black">اطلب الآن</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="services-hdr">
      <span class="services-hdr-text">
        الخدمات
      </span>
    </div>
    <div class="container-fluid">
      <div class="row services-row">
        @foreach ($services as $item)
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
          <div class="item">
            <div class="item-hdr">
              <img class="item-img" src="{{asset($item->image)}}">
              <br>
            </div>
            <div class="item-footer">
              <div class="item-footer-div">
                <span class="item-footer-div-txt">
                  {{$item->name}}
                </span>
              </div>
              <p class="item-footer-details">
                {{$item->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div id="Big-carousel">
      <span class="hidden-span"> </span>
    </div>
  </section>

  <section id="contactUs" class="contactUs">
    <div class="container">
      <div class="row contactUs-row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
          <div class="contactUs-txt">
            <h4 style="color: #2961d0">اتصل بنا</h4>
            <span>
              نصلك في اسرع وقت اينما كنت
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:0"><button type="button" class="btn intro-btn-order"
                style="background-color: #2961d0;color: black">اطلب الآن</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="article" class="articles">
    <div class="articles-hdr">
      <span class="articles-hdr-text">
        المقالات
      </span>
    </div>
    <div class="container-fluid">
      <div class="row articles-row card-deck">
        @foreach ($articles as $item)
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
          <div class="card click-div">
            <a href="{{url('article/'.$item->id)}}">
              <img src="{{asset($item->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-right" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;"><b>{{$item->title}}</b></h5>

                <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;">
                  {{ strip_tags($item->description) }}

                </p>




              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <footer class="footer" id="aboutUs">
    <div class="container">
      <div class="row footer-row">
        <div class="col-sm-12">
          <div class="footer-r">
            <img class="footer-img" src="{{asset('assets/imgs/logo.png')}}">
            <h4 style="text-align: center;color: #2768ca;font-weight: bold;margin-top: 15px;">
              لمكــــــــافحـــــــة
              <br>
              الحشرات والقوارض
              <br>
              بالكــــــــويـــــــــت
            </h4>
            <p class="paragraph-footer">
              <span style="font-weight: bold;">
              </span>
              <br><br>
              {{$configration->description}}
              @if($configration->address!=null)
              <br><br>
              مقرات الشركة:{{$configration->address}}
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-sm">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="footer-sm-r">
            @if($configration->facebook!=null)
            <a href="{{$configration->facebook}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/facebookIcon.png')}}">
            </a>
            @endif
            @if($configration->instagram!=null)
            <a href="{{$configration->instagram}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/instagram.png')}}">
            </a>
            @endif
            @if($configration->whatsapp!=null)
            <a href="https://api.whatsapp.com/send?phone=+{{$configration->whatsapp}}" target="_blank">
              <img class="footer-icon" src="{{asset('assets/imgs/whatsappIcon.png')}}">
            </a>
            @endif
          </div>
        </div>
        <div class="col-7">
          <span class="footer-sm-l">
            جميع الحقوق محفوظة
            <a href="https://www.facebook.com/AxesDigitalAgency" target="_blank">
              <img style="margin-right: 10px;" width="40px" src="{{asset('assets/imgs/logo1.png')}}" alt="">
            </a>
          </span>
        </div>
      </div>
    </div>
    <button type="button" id="callPhone" class="btn floatingBtn call">
      <i class="fas fa-phone-alt"></i>
    </button>
    <a href="https://api.whatsapp.com/send?phone=+{{$configration->phone}}" target="_blank">
      <button type="button" class="btn floatingBtn whatspp">
        <i class="fab fa-whatsapp"></i>
      </button>
    </a>
  </footer>
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script>
    $("#callPhone").click(function () {
      window.location.href = "tel:+{{$configration->phone}}";
    });
  </script>
</body>

</html>