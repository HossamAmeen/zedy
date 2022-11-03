<!DOCTYPE html>
<html lang="ar">

<head>
  @include('front-end/ar/layout/head')
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
  <!--search-controls-->
  <div class="search">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="search-header">
            <h2>خصص البحث على حسب رغبتك</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <form action="{{url('ar/search')}}">
            <input hidden value="{{request()->get('type')}}" id="type" name="type">
            <input hidden value="{{request()->get('payment_type')}}" id="payment_type" name="payment_type">
            <div class="search-controls">
              <div class="type">
                <span>النوع</span>
                <button type="button" class="btn typefilter"
                  id="type1" value='سكني'>
                  سكنى
                </button>
                <button type="button" class="btn typefilter"
                  id="type2" value="تجاري">تجاري</button>
                <button type="button" class="btn typefilter"
                  id="type3" value="إداري">إداري</button>
              </div>
              <div class="buying-type">
                <span>نظام الشراء</span>
                <button type="button" class="btn buyingFilter"  value="كاش"  id="buying1">كاش</button>
                <button type="button" class="btn buyingFilter"  value="تقسيط" id="buying2" >تقسيط</button>
              </div>
              <div class="size">
                <span>المساحه</span>
                <input type="text" name="space_from" @if(request()->get('space_from') != null) value={{request()->get('space_from')}} @else placeholder="من" @endif>
                <input type="text" name="space_to"  @if(request()->get('space_to') != null) value={{request()->get('space_to')}} @else placeholder="الى" @endif>
              </div>
              <div class="controllers">
                <button class="btn" type="reset">اعد التعيين</button>
                <button class="btn">بحث</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--Units-->
  <div class="unit-projects search">
    <div class="container">
      @foreach($units as $unit)
      <div class="row">
        <div class="col-xl-12">
          <div class="project">
            <div class="unit-img">
              <img src="{{asset( $unit->image)}}" alt="{{$unit->ar_name}}">
              {{-- <img src="{{asset($unit->image)}}" alt="{{$unit->ar_name}}"> --}}
            </div>
            <div class="unit-details">
              <button class="btn">{{$unit->ar_availability}} </button>
              {{-- <h5>{{$unit->ar_name}} ({{$unit->type}})</h5> --}}
              <h5>نوع الوحدة:  {{$unit->ar_project_type}} ,  {{$unit->ar_type}} </h5>
              <img style="width:30px" class="ml-2" src="{{asset('img/box.png')}}" >المساحة : <span> {{$unit->space}}</span></div>
              {{-- <div><i class="far fa-clock"></i> موعدالتسليم : <span>{{$project->delivery_date}}</span></div>
              <div><i class="fas fa-home"></i>نوع المشروع : <span>{{$project->ar_project_type}}</span></div>
              <div><i class="fas fa-dollar-sign"></i>نظام السداد : <span>{{$project->ar_payment_type}}</span></div> --}}
              <div class="button-div">
                <button class="btn"><a href="{{url('ar/units/'.$unit->id)}}" style="color: aliceblue"> المزيد
                  </a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


  @include('front-end/ar/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
  integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
  <script>
    $(document).ready(function() {
 
     selectedType = ''
     selectedBuying = ''
 
     // type filter
     $('.typefilter').click(function(){
       // remove active
       $('.typefilter').removeClass('active')
       $(this).addClass('active');
       var value = $(this).attr('value');
       
       selectedType = value
       $('#type').val(selectedType);
     })
 
     // buying filter
     $('.buyingFilter').click(function(){
       // remove active
       $('.buyingFilter').removeClass('active')
       $(this).addClass('active');
       var value = $(this).attr('value');
       console.log(value);
       selectedBuying = value
       $('#payment_type').val(selectedBuying);
     })
     
    @if(request()->get('type') == 'سكني')
      $('#type1').addClass('active');
    @endif
    @if(request()->get('type') == 'تجاري')
    $('#type2').addClass('active');
    @endif 
    @if(request()->get('type') == 'إداري') 
    $('#type3').addClass('active');
    @endif

  
    @if(request()->get('payment_type') == 'كاش') 
    $('#buying1').addClass('active');
    @endif
    @if(request()->get('payment_type') == 'تقسيط') 
    $('#buying2').addClass('active');
    @endif
   });
  </script>
</body>

</html>