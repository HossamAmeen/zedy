<!DOCTYPE html>
<html lang="en">

<head>
  @include('front-end/en/layout/head')
</head>

<body>
  <!--Navbar-->
  @include('front-end/en/layout/nav')
  <div class="unit">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="unit-name">
            <a href="{{url('ar/projects/'.$unit->project_id)}}"><i class="fas fa-arrow-left"></i>{{$unit->project->ar_name??""}}</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-7">
          <div class="unit-img">
            <img src="{{asset($unit->image)}}" alt="{{$unit->name}}">
          </div>
        </div>
        <div class="col-xl-5">
          <div class="unit-details">
            <button class="btn">{{$unit->availability}} </button>
            <h5>{{$unit->number}}</h5>
            <div><img style="width:30px" class="ml-2" src="{{asset('img/box.png')}}" >space : <span> {{$unit->space}}m</span></div>
            <div><img style="width:30px" class="ml-2" src="{{asset('img/leddar.png')}}" > floor : <span>{{$unit->floor_number}}</span></div> 
            <h5>unit type</h5>
            <p> {{$unit->project_type}} </p>
            <h5>unit type secondary</h5>
            <p> {{$unit->type}} </p>
            <h5>unit Description</h5>
            <p> {!!$unit->description!!} </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!---->
  @include('front-end/en/layout/footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>