<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')

  <div class="projects-page-title">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="projects-page-title-bg">
            <h2> We offer options for projects with installments up to <span>{{$configration->installment_years}} </span></h2>
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
            <h2>Customize the search to your liking</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <form action="{{url('en/search')}}">
            <input hidden value="{{request()->get('type')}}" id="type" name="type">
            <input hidden value="{{request()->get('payment_type')}}" id="payment_type" name="payment_type">
            <div class="search-controls">
              <div class="type">
                <span>Type</span>
                <button type="button" class="btn typefilter" id="type1" value='residential'> Residential </button>
                <button type="button" class="btn typefilter" id="type2" value='commercial'> Commercial </button>
                <button type="button" class="btn typefilter" id="type3" value='administrative'> Administrative </button>
              </div>
              <div class="buying-type">
                <span>Buying Type</span>
                <button type="button" class="btn buyingFilter" value="cash" id="buying1">Cash</button>
                <button type="button" class="btn buyingFilter" value="installment" id="buying2">Installment</button>
              </div>
              <div class="size">
                <span>Size</span>
                <input type="text" name="space_from" @if(request()->get('space_from') != null)
                value={{request()->get('space_from')}} @else placeholder="from" @endif>
                <input type="text" name="space_to" @if(request()->get('space_to') != null)
                value={{request()->get('space_to')}} @else placeholder="to" @endif>
              </div>
              <div class="controllers">
                <button class="btn" type="reset">Reset</button>
                <button class="btn">Search</button>
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
      @foreach($units as $item)
      <div class="row">
        <div class="col-xl-12">
          <div class="project">
            <div class="unit-img">
              <a href="{{url('en/units/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->name}}">
              <img src="{{asset($item->image)}}" alt="{{$item->name}}">
              </a>
            </div>
            <div class="unit-details">
              <button class="btn">{{$unit->availability}} </button>
              <h5>{{$item->name}}</h5>
              {{-- <div><i class="far fa-clock"></i>Deilivery date : {{$item->delivery_date}}</div>
              <div><i class="fas fa-home"></i>Project type : {{$item->project_type}}</div>
              <div><i class="fas fa-dollar-sign"></i>Paymenttype : {{$item->payment_type}}</div> --}}
              <div class="button-div">
                <button class="btn"><a href="{{url('en/units/'.$item->id)}}" style="color: aliceblue"> More
                  </a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
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

    
    @if(request()->get('type') == 'residential')
      $('#type1').addClass('active');
    @endif
    @if(request()->get('type') == 'commercial')
    $('#type2').addClass('active');
    @endif 
    @if(request()->get('type') == 'administrative') 
    $('#type3').addClass('active');
    @endif

    @if(request()->get('payment_type') == 'cash') 
    $('#buying1').addClass('active');
    @endif
    @if(request()->get('payment_type') == 'installment') 
    $('#buying2').addClass('active');
    @endif
   });
  </script>

</body>

</html>