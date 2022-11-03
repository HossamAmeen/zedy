<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> للحشرات</title>
    <link rel="icon" type="image/x-icon" href="{{asset('panel/assets/front-site/assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-site/assets/css/bootstrap-rtl.min.css')}}">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link href="{{asset('front-site/assets/css/styles.css')}}" rel="stylesheet" />
  </head>
  <body id="page-top">
    @include('front-end.layout.nav')
    <section class="page-section bg-dark" style="padding: 37px 0px !important;">
    </section>
    <section id="article" class="articles">
      <div class="articles-hdr">
        <h1 class="mt-0">
          {{$type}}
        </h1>
        <hr class="divider my-4" />
      </div>
      <div class="container-fluid">
        <div class="row articles-row card-deck">
          @foreach ($articles as $articleItem)
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 item-col">
            <div class="card click-div">
              <a href="{{url('article/'.$articleItem->id)}}">
                <img src="{{asset($articleItem->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-right"><b>{{$articleItem->title}}</b></h5>
                  <p class="card-text">
                    {{-- {!! mb_substr($article->description,0,200,'UTF-8') !!}..... --}}
                    {!! strip_tags($articleItem->description) !!}
                  </p>
                </div>
              </a>
            </div>
          </div>
          @endforeach
         
         
        </div>
      </div>
    </section>
    @include('front-end.layout.footer')
</html>