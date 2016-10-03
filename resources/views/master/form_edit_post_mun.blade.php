{!! csrf_field() !!}
 <!-- Panel Standard Editor -->
          <div class="panel">
            <div class="panel-heading">
                        <div >
  <br>
              <h4 class="example-title">Description</h4>
            </div>
            <div >
              <textarea id="summernote" data-plugin="summernote" name="description">{{ $mun->description}}</textarea>
            </div>
          </div>
          <!-- End Panel Standard Editor -->

              <div >
                  <br>
                  <h4 class="example-title">Link</h4>
                  <input type="link" class="form-control" id="inputPlaceholder" placeholder="Link" value="{{ $mun->link}}" name="link" required="required">
                  <br>
              </div>

              <div >
                    <br>
                    <h4 class="example-title">Image 1</h4>
                    <input type='file'  id="path1" style="" name="path1" value="<?php echo URL::to(substr($mun->path1,6)); ?>" />
                    <input type='hidden' style="" name="path_temp1" value="{{$mun->path1 }}" />
                    <br>
                    <div>
                        <img id="blah1" src="<?php echo URL::to(substr($mun->path1,6)); ?>" style="width:30%" />
                    </div>
                    <br>
                </div>
                <div >
                    <br>
                    <h4 class="example-title">Image 2</h4>
                    <input type='file'  id="path2" style="" name="path2" value="<?php echo URL::to(substr($mun->path2,6)); ?>" />
                    <input type='hidden' style="" name="path_temp2" value="{{$mun->path2 }}" />
                    <br>
                    <div>
                        <img id="blah2" src="<?php echo URL::to(substr($mun->path2,6)); ?>" style="width:30%" />
                    </div>
                    <br>
                </div>
                <div >
                    <br>
                    <h4 class="example-title">Image 3</h4>
                    <input type='file'  id="path3" style="" name="path3" value="<?php echo URL::to(substr($mun->path3,6)); ?>" />
                    <input type='hidden' style="" name="path_temp3" value="{{$mun->path3 }}" />
                    <br>
                    <div>
                        <img id="blah3" src="<?php echo URL::to(substr($mun->path3,6)); ?>" style="width:30%" />
                    </div>
                    <br>
                </div>

<button style="width:200px" type="button submit" class="btn-primary btn">Submit</button>



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
    function readURL1(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
                $('#blah1').attr('width', "50%");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result);
                $('#blah2').attr('width', "50%");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah3').attr('src', e.target.result);
                $('#blah3').attr('width', "50%");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#path1").change(function(){
        readURL1(this);
    });
    $("#path2").change(function(){
        readURL2(this);
    });
    $("#path3").change(function(){
        readURL3(this);
    });

</script>
