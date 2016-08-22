@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
@include('master.navbar_owline')
<div class="uk-container uk-container-center" style="margin-top:30px">
    <div class="uk-grid pad-berita-1" data-uk-grid-margin>
        <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-7-10">    
            <div class="uk-width-small-1-1 beritas" style=" background-color:#fff">
            <h3 style="display:inline-block; background-color:#fe0000; padding:5px; color:#fff">MOST POPULAR </h3>
            <div style="border-bottom:2px #fe0000 solid; margin-bottom:20px; margin-top:-25px"></div>
            <div id="example5" class="uk-width-small-1-1 slider-pro uk-margin-small-bottom">
                <div class="sp-slides">
                    @foreach($news as $berita)
                    <div class="sp-slide" onclick="window.location='{{URL::to('shownews/'.$berita->id)}}';">                    
                        <img class="sp-image" src="owline/src/css/images/blank.gif"
                            data-src="{{URL::to(substr($berita->gambar,6))}}"
                            data-retina="{{URL::to(substr($berita->gambar,6))}}"/>
                            <p style="width:100%" class="sp-layer sp-black sp-padding" 
                                data-position="bottomLeft"
                                data-show-transition="up" data-hide-transition="down">
                                {{$berita->judul}}&nbsp; </p>

                    </div>
                    @endforeach 
                </div>

                <div class="sp-thumbnails">
                    @foreach($news as $berita)
                    <div class="sp-thumbnail" >
                        <div class="sp-thumbnail-image-container">
                            <img class="sp-thumbnail-image" src="{{URL::to(substr($berita->gambar,6))}}"/>
                        </div>
                        <div class="sp-thumbnail-text" style="background-color:#fff">
                            <div style="color:#000; text-transform: capitalize; margin-top:-5px" class="sp-thumbnail-description">{{$berita->judul}}</div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>

        <div class="uk-width-small-1-1 beritas" style=" background-color:#fff">
            <h3 style="display:inline-block; background-color:#fe0000; padding:5px; color:#fff">NEWS</h3>
            <div style="border-bottom:2px #fe0000 solid; margin-bottom:20px; margin-top:-25px"></div>
                 <div class="uk-grid uk-grid-small" data-uk-grid-margin>
                @foreach($news as $berita)
                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-3 uk-animation-hover">
                        <div class="brt" onclick="window.location='{{URL::to('shownews/'.$berita->id)}}';">
                                <div class="gambar-berita-1" style="padding:10px; background-color:#fff; display:block;witdh:100%; background-image:url('{{URL::to(substr($berita->gambar,6))}}'); 
                                background-size:cover; background-position:center;"></div>

                                <div style="padding:10px">
                                <div style="font-size:12px"><?php $date = date_create($berita->tanggal); $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo $hari[date_format($date,"w")].", ".date_format($date,"j")." ".$bulan[date_format($date,"n")]." ".date_format($date,"Y");?> <i class="uk-icon-eye" style="margin-left:10px"></i> {{$berita->klik}}</div>
                                <h4 class="judul uk-margin-small-bottom uk-margin-small-top" style="color:#000; text-transform: capitalize;">{{substr($berita->judul,0,100)}}</h4>
                                </div>    
                        </div>

                </div>
                 @endforeach
             </div>
            </div>

        </div>
        @include('master.iklan') 
    </div>   
</div>
@include('master.footer_owline') 
@include('master.navbar_mobile')
@endsection
