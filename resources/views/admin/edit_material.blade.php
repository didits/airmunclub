@include('master.header_admin')
@include('master.navbar_admin')


  <!-- Page -->
  
    <div class="page-content">
      <!-- Judul -->
      <div class="page-header">
        <h1 class="page-title">Edit Materials</h1>
        <div class="page-header-actions">
         </div>
      </div>
<!-- end judul -->
      <div class="panel">
        <div class="panel-heading"> 
 <link rel="stylesheet" href="{{URL::to('aset/vendor/summernote/summernote.css')}}">
<link rel="stylesheet" href="{{URL::to('aset/css/../fonts/font-awesome/font-awesome.css')}}">


            <!-- <div class="panel" style="padding:15px;">            -->
            <div class="panel-body container-fluid">

                <form autocomplete="off" method="POST" action="{{URL::to('admin/material/'.$material->id)}}" >
                    <input type="hidden" name="_method" value="PATCH">
                    {!! csrf_field() !!}
                    <div >
                        <br>
                        <h4 class="example-title">Judul</h4>
                        <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $material->title }}">
                        <br>
                    </div>
                    <div >
                        <br>
                        <h4 class="example-title">Deskripsi</h4>
                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="Deskripsi" value="{{ $material->description}}" name="description" required="required">
                        <br>
                    </div>

                    <div >
                        <br>
                        <h4 class="example-title">Link</h4>
                        <input type="link" class="form-control" id="inputPlaceholder" placeholder="Link" value="{{ $material->link}}" name="link" required="required">
                        <br>
                    </div>

                    <div style="text-align: center">
                        <br>
                        <button type="button submit" class="btn-primary btn">Submit</button>
                    </div>




                </form>
            </div>
        </div>
      </div>
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