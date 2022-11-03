<div class="d-flex contact me-xl-auto">
    @if($configration->is_two_language)
    <div class="languages">
        <a href="{{url('change-language/ar')}}"><img src="{{asset('img/egypt.png')}}" alt=""
            @if(  request()->segment(1) == "ar" )  class="active-img" @endif></a>
        <a href="{{url('change-language/en')}}"><img src="{{asset('img/united-states.png')}}" alt=""
            @if(  request()->segment(1) == "en" )  class="active-img" @endif></a>
    </div>
    @endif
    <div class="contacts">
        <div class="nav-social-contact">
            <a href="{{$configration->youtube}}"><img src="{{asset('img/youtube.png')}}" alt=""></a>
            <a href="{{$configration->facebook}}"><img src="{{asset('img/facebook.png')}}" alt=""></a>
        </div>
        <div class="phone"><a href="tel:{{$configration->phone}}"><img src="{{asset('img/phone.png')}}"
                    alt="">{{$configration->phone}}</a></div>
    </div>
</div>