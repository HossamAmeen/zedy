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
          <a class="nav-link" href="{{url('/')}}#services"
           >الخدمات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}#"
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
  <section class="contactUs" style="margin-top: 100px;">
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
            <a href="tel:0"><button type="button" class="btn intro-btn-order" style="background-color: #2961d0;color: black">اطلب الآن</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="article" class="articles">
    <div class="articles-hdr">
      <span class="articles-hdr-text">
        {{$article->title}}
      </span>
    </div>
    <div class="container">
      <div class="row articles-row card-deck">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item-col">
          <div class="card" style="padding: 30px;">
            <img src="{{asset($article->image)}}" class="card-img-top" alt="ابادة البعوض"
              style="width: 70%;height: 400px;">
            <div class="card-body" style="padding: 1rem 0px;">
              <h5 class="card-title text-right"><b></b></h5>
              <p class="card-text">
                {!! $article->description !!}
              </p>
            </div>
          </div>
        </div>
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