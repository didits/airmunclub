@include('master.header_admin')
@include('master.navbar_admin')

  <!-- Page -->
  
    <div class="page-content">
      <!-- Judul -->
      <div class="page-header">
        <h1 class="page-title">National MUN</h1>
        <div class="page-header-actions">
         </div>
      </div>
<!-- end judul -->
      <div class="panel">
        <div class="panel-heading"> 
                        
                      
<!-- Example Quick Menu Small -->
        
          <ul class="nav-quick nav-quick-sm row">
          </ul>
        <!-- End Example Quick Menu Small -->
        </div>
        <div class="panel-body">
         <!-- Example Bordered Table -->
              <div class="example-wrap"> <!--ganti kolom searching-->
                <div class="example table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th width="5%" class="text-center">No</th>
                          <th>Gambar</th>
                          <th>Last Updated</th>
                          <th class="text-nowrap">Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=1;?>
                        @foreach($gallery as $list)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td><img src="{{$list->path}}" style="width:25%"></td>
                            <td><?php $date = date_create($list->updated_at); echo date_format($date, 'jS F Y H:i:s');?></td>
                            <td class="text-nowrap">
                                <button id="delete" data-id="{{$list->id}}" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="modal"
                                        data-original-title="Delete" data-target="#myModal">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <div >
              <br>
            <form method="POST" action="{{URL::to('admin/gallery/create')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <h4 class="example-title">Add Picture</h4>
            <input type='file' id="path" style="" name="path" />
            <br>
            <div>
              <img id="blah" src="{{URL::to('assets/img/blank.png')}}" alt="your image" style="width:30%" />
            </div>
            <br>
          <div>
          <button style="width:200px" type="button submit" class="btn-primary btn">Submit</button>
              </div>
            </form>
        </div>
      </div>
    </div>
   </div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>

            <form id="formID" method="POST" action="{{URL::to('admin/gallery/destroy')}}">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <div class="modal-body">
                    <p>Do you want to delete this article?</p>
                    <p class="text-warning"><small>If you delete, your changes will be lost.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Page -->

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


<script>
    (function(document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click", "#delete", function() {
            id = $(this).data('id');
            $('#formID').attr('action', 'gallery/destroy/'+id);
        });
    });
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
