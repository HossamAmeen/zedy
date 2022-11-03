<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  @include('front-end/en/layout/nav')
  <!---->
  <div class="projects-page-title">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="projects-page-title-bg">
            <h2> We offer options for projects with installments up to <span>{{$configration->installment_years}}</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Units-->
  <div class="unit-projects">
    <div class="container">
      <div class="row">
        @foreach ($projects as $item)
        <div class="col-xl-6">
          <div class="project">
            <div class="unit-img">
              <a  href="{{url('en/projects/'.$item->id)}}">
              <img src="{{asset($item->image)}}" alt="{{$item->name}}"></a>
            </div>
            <div class="unit-details">
              <button class="btn">{{$item->availability}}</button>
              <h5>{{$item->name}}</h5>
              @if($item->map != null)
              <a href="{{$item->map}}"><i class="material-icons">add_location</i></a>
              @endif
              @if($item->delivery_date)
              <div><i class="far fa-clock"></i>Deilivery date : {{$item->delivery_date}}</div>
              @endif
              <div><i class="fas fa-home"></i>Project type : {{$item->project_type}}</div>
              <div><i class="fas fa-dollar-sign"></i>Paymenttype : {{$item->payment_type}}</div>
              <div class="button-div">
                <button class="btn"><a href="{{url('en/projects/'.$item->id)}}" style="color: aliceblue"> More </a></button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
       
      </div>
      <div class="row">
        <div class="col-xl-12">
          <nav aria-label="..." class="pagination-nav" style="display: flex;
          justify-content: center;
          margin-top: 40px;">
            {{$projects->links()}}
          
          </nav>
        </div>
      </div>
    </div>
  </div>

  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>