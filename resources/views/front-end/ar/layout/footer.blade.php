<!--اترك بياناتك وانتظر منا مكالمة-->
<div class="leave-your-phonenum" id="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="panner-img">
          <h2>اترك بياناتك وانتظر منا مكالمة</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @if (session()->get('action') )
      <div class="alert alert-success">
        <strong>{{session()->get('action')}}</strong>
      </div>
      @endif
      <div class="col-xl-8">
        <div class="contact-info">
          <img src="{{asset('img/footer-phones.png')}}" alt="">
          <form action="{{url('contact-us')}}" method="POST">
            @csrf
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"
                required placeholder="الاسم">
            </div>
            <div class="mb-3 whatsapp">
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="رقم التلفون" required
                name="phone">
              <i class="fab fa-email-square"></i>
            </div>
            <div class="button-div">
              <button type="submit" class="btn btn-primary mr-0">تم</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="social-contacts">
          <h4>اشترك في الفيس بوك</h4>
          <div>
            <a href="{{$configration->youtube}}"><img src="{{asset('img/footer-yt.png')}}" alt=""></a>
            <a href="{{$configration->facebook}}"><img src="{{asset('img/Group80.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="pages">
          <h4>الصفحات</h4>
          <div class="pages-list">
            <ul class="ul" style="margin-right:0px">
              <li><a href="{{url('ar')}}">الرئيسية</a> </li>
              <li><a href="{{url('ar/projects')}}">المشاريع</a> </li>
              <li><a href="{{url('ar/news')}}">الأخبار</a> </li>
            </ul>
            <ul>
              <li><a href="{{url('ar/media')}}">المركز الإعلامي</a> </li>
              <li><a href="{{url('ar/about-us')}}">عن الشركة</a> </li>
              {{-- <li><a href="{{url('ar')}}">سياسة الخصوصية</a> </li> --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="socail-contacts">
          <h4>تابعنا على</h4>
          <div class="social">
            <a href="{{$configration->facebook}}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{$configration->youtube}}"><i class="fab fa-youtube"></i></a>
            {{-- <a href="{{$configration->facebook}}"><i class="fab fa-facebook-messenger"></i></a> --}}
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="logo">
          <img src="{{asset('img/footerlogo.jpg')}}" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="footer-line">
          <img src="{{asset('img/footer-line.jpg')}}" alt="">
        </div>
        <div class="copyright">
          <p>جميع الحقوق محفوظه للشركة المصريه للأستثمار العقارى © برمجه و تصميم زيدي 2022</p>
          <div>
            <a href="http://www.z-edy.com/" target="_blank">
              <img  src="{{asset('img/Image1.png')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>