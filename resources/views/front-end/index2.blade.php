<!DOCTYPE html>
<html>

<head>
  <title>{{$configration->title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{asset('front-site/assets/imgs/logo.ico')}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap-rtl.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('front-site/assets/css/rtl.css')}}">
  <link rel="stylesheet" href="{{asset('front-site/assets/css/style.css')}}">
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-dark-custum ">
    <a class="navbar-brand " href="{{url('/')}}">
      <img class="navbar-brand-img" src="{{asset('front-site/assets/imgs/logo.png')}}" alt=" لمكافحة الحشرات">
      <p class="navbar-bran-div">
        <span>
          {{$configration->title}}<br>{{$configration->en_title}}
        </span>
      </p>
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
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('front-site/assets/imgs/carousel1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('front-site/assets/imgs/carousel2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('front-site/assets/imgs/carousel3.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('front-site/assets/imgs/carousel4.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('front-site/assets/imgs/carousel5.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('front-site/assets/imgs/carousel6.jpg')}}" class="d-block w-100" alt="...">
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
            <h1 style="font-size: 1.5rem;color:#A1170E;
            font-weight: bold;"> لمكافحة الحشرات</h1>
            <span>
              اتصل بنا نصلك في أسرع وقت اينما كنت ... كفالة سنة على جميع أعمالنا
            </span>
             
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:{{$configration->phone}}"><button type="button" class="btn intro-btn-order">اطلب الآن</button></a>
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
        @foreach($services as $service)
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
          <div class="item">
            <div class="item-hdr">
              <img class="item-img" src="{{asset($service->image)}}">
            </div>
            <div class="item-footer">
              <div class="item-footer-div">
                <span class="item-footer-div-txt">
                  {{$service->name}}
                </span>
              </div>
              <p class="item-footer-details">
              {{$service->description}}
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
            <h4>اتصل ب  لمكافحة الحشرات</h4>
            <span>
              نصلك في اسرع وقت اينما كنت
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="">
            <a href="tel:{{$configration->phone}}"><button type="button" class="btn intro-btn-order">اطلب الآن</button></a>
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
        @foreach($articles as $article)
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
          <div class="card click-div">
            <a href="{{url('article/'.$article->id)}}">
              <img src="{{asset($article->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-right"><b>{{ $article->title }}</b></h5>
                <p class="card-text">
                 {!! mb_substr($article->description,0,200,'UTF-8') !!}.....
                 {{-- {{ mb_substr($article->description,0,200,'UTF-8') }} --}}
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
            <img class="footer-img" src="{{asset('front-site/assets/imgs/logo.png')}}">
            <p class="paragraph-footer">
              <span style="font-weight: bold;">
                {{$configration->title}}
               <br>
               {{$configration->en_title}}
              </span>
              <br><br>
             {{$configration->home_description }}
              <br><br>
              مقرات الشركة:{{ $configration->address }}
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
            @if (isset($configration->facebook))
            <a href="{{ $configration->facebook }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/imgs/facebookIcon.png')}}">
            </a>
            @endif
            @if (isset($configration->whatsapp))
            <a href="https://wa.me/{{ $configration->whatsapp }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/imgs/whatsappIcon.png')}}">
            </a>
            @endif
           
            @if (isset($configration->instagram))
            <a href="{{ $configration->instagram }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/imgs/instagramIcon.png')}}">
            </a>
            @endif
            @if (isset($configration->twitter))
            <a href="{{ $configration->twitter }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/imgs/twitterIcon.png')}}">
            </a>
            @endif
            @if (isset($configration->youtube))
            <a href="{{ $configration->youtube }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/imgs/youtubeIcon.png')}}">
            </a>
            @endif
            
            
          </div>
        </div>
        <div class="col-7">
          <span class="footer-sm-l">
            جميع الحقوق محفوظة
          </span>
        </div>
      </div>
    </div>
    <button type="button" id="callPhone" class="btn floatingBtn call">
      <i class="fas fa-phone-alt"></i>
    </button>
    @if (isset($configration->whatsapp))
    <a href="https://api.whatsapp.com/send?phone={{$configration->whatsapp}}" target="_blank">
      <button type="button" class="btn floatingBtn whatspp">
        <i class="fab fa-whatsapp"></i>
      </button>
    </a>
    @endif
  </footer>

  <script src="{{asset('front-site/assets/js/jquery.js')}}"></script>
  <script src="{{asset('front-site/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front-site/assets/js/script.js')}}"></script>
  <script>
    $("#scrollToTop").click(function () {
      window.location.href = "tel:{{$configration->phone}}";
    });
  </script>
</body>

</html>