<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="{{asset( isset(Auth::user()->image) ? Auth::user()->image : 'panel/assets/images/demo/avatar-80.png')}}" 
            alt=""  width="100" height="100"/>
        <div class="user-online-status"><span class="user-status is-online"></span> </div>
    </div>
    <ul class="social-icon">
        {{-- <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li> --}}
    </ul>
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="{{url('/')}}" title="">
            <h1>{{$configration->ar_title}}</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>

    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
 <!--Left navigation start-->
    <ul class="mainNav">
        <li >
            <a href="{{route('configrations.edit' , ['id' => '1'])}}" class="{{is_active('configrations')}}">
                    <i class="fas fa-edit"></i><span>تعديل بيانات الموقع</span>
            </a>
        </li>

        @if( Auth::user()->role == 1 )
        <li>
            <a id="users" href="{{route('users.index')}}" class="{{is_active('users')}}">
                <i class="fa fa-group"></i><span>المستخدمين</span>
            </a>
        </li>
        @endif
        <li>
            <a href="{{route('users.edit' , ['id' => Auth::user()->id])}}" class="{{edit_profle_is_active('users')}}">
                <i class="fas fa-edit"></i><span>تعديل بيانات الحساب</span>
            </a>
        </li>
        <li class="{{is_active('services')}}">
            <a href="{{route('services.index')}}"  class="{{is_active('services')}}">
                    <i class="fa fa-server"></i><span>الخدمات</span>
            </a>
        </li>
        <li class="{{is_active('clients')}}">
            <a href="{{route('clients.index')}}"  class="{{is_active('clients')}}">
                    <i class="fas fa-user-tie"></i><span>العملاء</span>
            </a>

        </li>
        <li class="{{is_active('fields')}}">
            <a href="{{route('fields.index')}}"  class="{{is_active('fields')}}">
                    <i class="fa fa-columns"></i><span>مجالات العمل</span>
            </a>
        </li>
        <li class="{{is_active('employees')}}">
            <a href="{{route('employees.index')}}"  class="{{is_active('employees')}}">
                    <i class="fa fa-user"></i><span> الموظفين</span><span class="badge badge-red contact_count" ></span>
            </a>
        </li>
        <li class="{{is_active('clientreviews')}}">
            <a href="{{route('clientreviews.index')}}"  class="{{is_active('clientreviews')}}">
                    <i class="fa fa-
                    paper"></i><span> اراء العملاء</span><span class="badge badge-red contact_count" ></span>
            </a>
        </li>
        <li class="{{is_active('jobs')}}">
            <a href="{{route('jobs.index')}}"  class="{{is_active('jobs')}}">
                    <i class="fa fa-gear"></i><span>الوظائف</span>
            </a>

        </li>
        <li class="{{is_active('videos')}}">
            <a href="{{route('videos.index')}}"  class="{{is_active('videos')}}">
                    <i class="fa fa-image"></i><span>فديوهات</span>
            </a>

        </li>
        <li class="{{is_active('images')}}">
            <a href="{{route('images.index')}}"  class="{{is_active('images')}}">
                    <i class="fa fa-image"></i><span>الصور</span>
            </a>

        </li>
        

        

        <li >
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">


             <i class="fa fa-power-off"></i><span>تسجيل الخروج</span>
            </a>

        </li>

    
    </ul>
    <!--Left navigation end-->
</section>
