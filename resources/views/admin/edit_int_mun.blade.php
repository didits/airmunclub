@include('master.header_admin')
@include('master.navbar_admin')


  <!-- Page -->
  
    <div class="page-content">
      <!-- Judul -->
      <div class="page-header">
        <h1 class="page-title">Edit International MUN</h1>
        <div class="page-header-actions">
         </div>
      </div>
<!-- end judul -->
      <div class="panel">
        <div class="panel-heading"> 
 <link rel="stylesheet" href="{{URL::to('aset/vendor/summernote/summernote.css')}}">
<link rel="stylesheet" href="{{URL::to('aset/css/../fonts/font-awesome/font-awesome.css')}}">


            <!-- <div class="panel" style="padding:15px;">            -->
            <div class="panel-body container-fluid" style="width:75%;">

                <form autocomplete="off" method="POST" action="{{URL::to('admin/mun/international/'.$mun->id)}}" enctype="multipart/form-data" >
                    <input type="hidden" name="_method" value="PATCH">
                    @include('master.form_edit_post_mun')
                    <input type="hidden" name="type" value="international" required="required">
                </form>
            </div>
        </div>
      </div>
    </div>
