 <!-- footer top -->
 <div class="row footer_top pt-5">
    <div class="col-12">
        <img src="{{asset("asset/assets/img/footer_top_bg.png")}}" alt="">
    </div>
</div>
<div class="row footer_bottom">
    <div class="col-12 text-center">
        <p>I-Smart Livestock Services (OS-LS) © 2023 All rights reserved
        </p>
    </div>
</div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

    var url = "{{ route('lang.change') }}";

      $('.lang-change').change(function(){
       let lang_code = $(this).val();
        window.location.href = url + "?lang="+ lang_code;
      });

  </script>
<script src="{{asset('/asset/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('asset/assets/js/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('asset/assets/js/popper.min.js')}}"></script>
<script src="{{asset('asset/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/assets/js/ma5-menu.min.js')}}"></script>
<script src="{{asset('asset/https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
<script src="{{asset('asset/assets/js/plugins.js')}}"></script>
<script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/assets/js/main.js')}}"></script>


</body>

</html>
