<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('en')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  @if($pageTitle =='Home') active @endif" aria-current="page" href="{{url('en')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle =='projects') active @endif" href="{{url('en/projects')}}">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle =='news') active @endif" href="{{url('en/news')}}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle =='media') active @endif" href="{{url('en/media')}}">Media Center</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($pageTitle =='about-us') active @endif" href="{{url('en/about-us')}}">About</a>
        </li>
      </ul>
      @include('front-end/layout/language')
    </div>
  </div>
</nav>