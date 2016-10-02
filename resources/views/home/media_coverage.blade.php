@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               
        
        <div id="tm-hero" class="uk-contrast" >
            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel ">
                        <div class="uk-width-large-4-4 uk-text-center uk-margin-large">
                            <div class="uk-margin-bottom uk-margin-top">
                                <h1 class="uk-heading-large uk-margin-large-top" style="color:#000">MEDIA COVERAGE</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>     

         <div id="tm-main" class="tm-main uk-block uk-block-default">

                    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                        <main class="uk-width-1-1">
                            <div class="pk-system-messages"></div>                       
                             <article class="uk-article">

                            <?php $i=0 ?>
                            @foreach($article as $list)
                            @if($i%3==0)
                            <div class="tm-grid-truncate uk-grid  " data-uk-grid-margin>
                            @endif

                                <div class="uk-width-medium-1-3">
                                    <div class="uk-panel uk-panel-box">
                                        <div class="uk-panel-teaser">
                                            <img src="{{$list->path}}" width="800" height="280" alt="">
                                        </div>
                                        <div style="font-size:12px">
                                            <?php $hari=['Sunday','Monday','Tuesday','Wednesday','Friday','Saturday']; $date = date_create($list->updated_at); echo $hari[date_format($date, 'w')].date_format($date, ', jS F Y');?>
                                                <i class="uk-icon-eye" style="margin-left:10px"></i> 0
                                        </div>
                                        <h4 class="judul uk-margin-small-bottom uk-margin-small-top" style="color:#000; text-transform: capitalize;">
                                            <a href="{{url('posting/'.$list->id)}}">{{$list->title}}</a></h4>
                                    </div>
                                </div>

                            @if($i%3==2)
                            </div>
                            <hr class="uk-grid-divider">
                            @endif
                            <?php $i++; ?>
                            @endforeach

                            <ul class="uk-pagination">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>

  

           
</article>
</main>
</div>
</div>

        
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection