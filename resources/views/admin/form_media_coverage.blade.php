@include('master.header_admin')
@include('master.navbar_admin')


  <!-- Page -->
  
    <div class="page-content">
      <!-- Judul -->
      <div class="page-header">
        <h1 class="page-title">Add Media Coverage</h1>
        <div class="page-header-actions">
         </div>
      </div>
<!-- end judul -->
      <div class="panel">
        <div class="panel-heading"> 
 <link rel="stylesheet" href="{{URL::to('aset/vendor/summernote/summernote.css')}}">
<link rel="stylesheet" href="{{URL::to('aset/css/../fonts/font-awesome/font-awesome.css')}}">


<body >
                
<!-- <div class="panel" style="padding:15px;">            -->
<div class="panel-body container-fluid">

    <form autocomplete="off" method="post" action="{{URL::to('admin/article/media')}}" enctype="multipart/form-data" >
        @include('master.form_add_post')
        <input type="hidden" name="type" value="media" required="required">
    </form>

</div>
        </div>
      </div>
    </div>