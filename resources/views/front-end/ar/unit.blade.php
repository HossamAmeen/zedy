<!DOCTYPE html>
<html lang="ar">

<head>
    @include('front-end/ar/layout/head')
</head>

<body>
    <!--Navbar-->
    @include('front-end/ar/layout/nav')
    <div class="unit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="unit-name">
                        <a href="{{url('ar/projects/'.$unit->project_id)}}"><i class="fas fa-arrow-right"></i>{{$unit->project->ar_name??""}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="unit-img">
                        <img src="{{asset($unit->image)}}" alt="{{$unit->ar_name}}">
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="unit-details">
                        <button class="btn">{{$unit->ar_availability}} </button>
                        <h5>{{$unit->number}}</h5>
                        <div><img style="width:30px" class="ml-2" src="{{asset('img/box.png')}}" >المساحة : <span> {{$unit->space}}</span></div>
                        <div><img style="width:30px" class="ml-2" src="{{asset('img/leddar.png')}}" > الطابق : <span>{{$unit->floor_number}}</span></div> 
                       
    
                    
                        <h5>نوع الوحدة:  {{$unit->ar_project_type}} ,  {{$unit->ar_type}} </h5>
                        {{-- <p></p>
                        <h5>نوع الوحده الفرعي</h5>
                        <p></p> --}}
                       
                        <h5>وصف الوحدة:</h5>
                        <p> {!!$unit->ar_description!!} </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front-end/ar/layout/footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>