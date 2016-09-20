{!! csrf_field() !!}
                <div >
                  <br>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Judul" name="title" required="required">
                  <br>
                </div>
 <!-- Panel Standard Editor -->
            <div class="panel">
            <div class="panel-heading">
              <h4 class="example-title">Artikel</h4>
            </div>
            <div >
              <textarea id="summernote" data-plugin="summernote" name="description">
              </textarea>
            </div>
          </div>
          <!-- End Panel Standard Editor -->

                <div >
                    <br>
                    <h4 class="example-title">Image</h4>
                    <input type='file' id="path" style="" name="path" />
                    <br>
                    <div>
                        <img id="blah" src="{{URL::to('assets/img/blank.png')}}" alt="your image" style="margin-left:2%;width:30%" />
                    </div>
                    <br>
                </div>

           
                {{--<div>--}}
                  {{--<h4 class="example-title">Author</h4>--}}
                  {{--<input type="text" class="form-control" id="inputPlaceholder" placeholder="Author" name="Author" required="required">--}}
                  {{--<br>--}}
                {{--</div>--}}
                
            
              <div style="text-align: center">
                   <br>
                   <button type="button submit" class="btn-primary btn">Submit</button>
              </div>



     <!-- Core  -->
  <script src="{{URL::to('aset/vendor/jquery/jquery.js')}}"></script>
  <script src="{{URL::to('aset/vendor/bootstrap/bootstrap.js')}}"></script>
  <script src="{{URL::to('aset/vendor/animsition/jquery.animsition.js')}}"></script>
  <script src="{{URL::to('aset/vendor/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{URL::to('aset/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{URL::to('aset/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
  <script src="{{URL::to('aset/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

  <!-- Plugins -->
  <script src="{{URL::to('aset/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{URL::to('aset/vendor/intro-js/intro.js')}}"></script>
  <script src="{{URL::to('aset/vendor/screenfull/screenfull.js')}}"></script>
  <script src="{{URL::to('aset/vendor/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{URL::to('aset/vendor/summernote/summernote.min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{URL::to('aset/js/core.js')}}"></script>
  <script src="{{URL::to('aset/js/site.js')}}"></script>

  <script src="{{URL::to('aset/js/sections/menu.js')}}"></script>
  <script src="{{URL::to('aset/js/sections/menubar.js')}}"></script>
  <script src="{{URL::to('aset/js/sections/sidebar.js')}}"></script>

  <script src="{{URL::to('aset/js/configs/config-colors.js')}}"></script>
  <script src="{{URL::to('aset/js/configs/config-tour.js')}}"></script>

  <script src="{{URL::to('aset/js/components/asscrollable.js')}}"></script>
  <script src="{{URL::to('aset/js/components/animsition.js')}}"></script>
  <script src="{{URL::to('aset/js/components/slidepanel.js')}}"></script>
  <script src="{{URL::to('aset/js/components/switchery.js')}}"></script>
  <script src="{{URL::to('aset/js/components/summernote.js')}}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      window.edit = function() {
        $('.click2edit').summernote({
          focus: true
        });
      };
      window.save = function() {
        $('.click2edit').destroy();
      };
    })(document, window, jQuery);
  </script>
<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                $('#blah').attr('width', "50%");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#path").change(function(){
        readURL(this);
    });
</script>

</body>

</html>