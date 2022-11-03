<nav class="navbar navbar-expand-xl navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('ar')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0" style="font-size: 13px ">
        <li class="nav-item">
          <a class="nav-link  @if($pageTitle == 'الرئيسيه') active @endif" @if($pageTitle == "الرئيسيه") aria-current="page" @endif href="{{url('ar')}}">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle == 'المشاريع') active @endif " @if($pageTitle == "المشاريع") aria-current="page"  @endif href="{{url('ar/projects')}}">المشاريع</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle == 'الاخبار') active @endif" @if($pageTitle == "الاخبار") aria-current="page"  @endif  href="{{url('ar/news')}}">الأخبار</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('ar/media')}}">المركز الإعلامي</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('ar/about-us')}}">عن الشركة</a>
        </li>
      </ul>
      @include('front-end/layout/language')
    </div>
  </div>
</nav>