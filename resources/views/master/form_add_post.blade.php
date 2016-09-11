                <div >
                  <br>
                  <h4 class="example-title">Judul</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Judul" name="Judul" required="required">
                  <br>
                </div>
 <!-- Panel Standard Editor -->
   <div class="panel">
            <div class="panel-heading">
              <h4 class="example-title">Artikel</h4>
            </div>
            <div >
              <div id="summernote" data-plugin="summernote">
                <h2>WYSIWYG Editor</h2> Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in
                quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean
                neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non
                dui et tortor vulputate luctus. Praesent consequat rhoncus velit,
                ut molestie arcu venenatis sodales.
                <h4>Lacinia</h4>
                <ul>
                  <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                  <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                  <li>Praesent non lacinia mi.</li>
                  <li>Mauris a ante neque.</li>
                  <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                </ul>
                <h4>Pellentesque Adipiscing</h4> Maecenas quis ante ante. Nunc adipiscing
                rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus
                ultrices ac. Pellentesque sodales, libero et mollis interdum, dui
                odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed
                porttitor leo adipiscing venenatis vehicula. Aenean quis viverra
                enim. Praesent porttitor ut ipsum id ornare.
              </div>
            </div>
          </div>
          <!-- End Panel Standard Editor -->


           
                <div>
                  <h4 class="example-title">Author</h4>
                  <input type="text" class="form-control" id="inputPlaceholder" placeholder="Author" name="Author" required="required">
                  <br>
                </div>
                
            
              <div style="text-align: center">
                   <br>
                   <button type="button submit" class="btn-primary btn">Submit</button>
              </div>

        </div> 
      </div>
     </div>
     
     </body>


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

</body>

</html>