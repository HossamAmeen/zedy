


<section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">تواصل معنا</h2>
          <hr class="divider my-4" />
          <p class="text-muted mb-5">
            نحن جاهزون لتلبيه رغبه عملائنا في اسرع وقت.
          </p>
        </div>
      </div>
      <div class="row">
        @if(isset($article)) 
           
          <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0 contact-link">
            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
            <div><a href="tel:{{$article->phone}}">{{$article->phone}}</a>
              @if($article->type == "نقل عفش")
              <br><span style="font-size: 80%">هاتف  نقل العفش</span>          
              @else
              <br><span style="font-size: 80%">هاتف العزل</span>  
              @endif   
            </div>
          </div>
           
        @elseif(Request::segment(2) !== null)
        
      
          <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0 contact-link">
            <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
            <div>
              @if(Request::segment(2) == "نقل عفش")
              <a href="tel:{{$configration->phone}}">{{ $configration->phone}}</a>
              <br><span style="font-size: 80%">هاتف  نقل العفش 
              </span>
              @else
              <a href="tel:{{$configration->phone2}}">{{ $configration->phone2}}</a>
              <br><span style="font-size: 80%">هاتف العزل  
              </span>
              @endif
            </div>
          </div>
        @else

        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0 contact-link">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div><a href="tel:{{$configration->phone}}">{{$configration->phone}}</a>
            <br><span style="font-size: 80%">هاتف  نقل العفش </span>
          </div>
        </div>

        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0 contact-link">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div><a href="tel:{{$configration->phone2}}">{{$configration->phone2}}</a>
            <br><span style="font-size: 80%">هاتف العزل</span>
          </div>
        </div>
        @endif
       
        <div class="col-lg-4 mr-auto text-center contact-link">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <a class="d-block" href="mailto:{{$configration->email}}">{{$configration->email}}</a>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="footer-sm-r">
            <a href="{{$configration->facebook}}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/img/facebookIcon.png')}}">
            </a>
            <a href="{{$configration->instagram}}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/img/instagram.png')}}">
            </a>
            
            <a href="https://api.whatsapp.com/send?phone=+{{$article->phone != null ?($article->phone ) :( Request::segment(2) !== null $configration->phone) }}" target="_blank">
              <img class="footer-icon" src="{{asset('front-site/assets/img/whatsappIcon.png')}}">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <button type="button" id="callPhone" class="btn floatingBtn call">
    <i class="fas fa-phone-alt"></i>
  </button>
  
  <a href="https://wa.me/{{$article->phone2 ?? $configration->phone }}" target="_blank">
    <button type="button" class="btn floatingBtn whatspp">
      <i class="fab fa-whatsapp"></i>
    </button>
  </a>
  {{-- <a href="https://api.whatsapp.com/send?phone=+{{ $configration->whatsapp }}" target="_blank">
    <button type="button" class="btn floatingBtn whatspp">
    
    </button>
  </a> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front-site/assets/js/scripts.js')}}"></script>
</body>
<script>
  $("#callPhone").click(function () {
    window.location.href = "tel:+{{$article->phone ?? $configration->phone}}";
  });
  
</script>