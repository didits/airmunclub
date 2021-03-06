@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<style type="text/css">
    @-moz-document domain(calendar.google.com) {

div#onegoogbar {
    box-shadow: 0 1px 14px rgba(0, 0, 0, 0.3);
}
.gb_je {
    background: #4383F1;
}
.gbqfqw {
    background: rgba(255, 255, 255, 0.3);
    background-clip: none;
    border: 0;
    border-color: none;
    top: -5px;
    border-right-width: 0;
    height: 40px;
    border-radius: 3px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.gbqfqw:hover {
    background: rgba(255, 255, 255, 0.4);
    background-clip: none;
    border: 0;
    border-color: none;
    top: -5px;
    border-right-width: 0;
    height: 40px;
    border-radius: 3px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.gbqfqw:active {
    background: rgba(255, 255, 255, 0.4);
    background-clip: none;
    border: 0;
    border-color: none;
    top: -5px;
    border-right-width: 0;
    height: 40px;
    border-radius: 3px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.gb_Ob .gb_Qb {
    background-position: 0 -2440px;
}
input#gbqfq {
    top: 6px;
}
input#gbqfq::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.7);
}
input#gbqfq:-moz-placeholder {
    color: rgba(255, 255, 255, 0.7);
}
input#gbqfq::-moz-placeholder {
    color: rgba(255, 255, 255, 0.7);
}
input#gbqfq:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.7);
}
input#gs_taif50 {
    color: #fff;
}
#gbqfb {
    display: none;
}
.gb_pc.gb_qc {
    background-position: -2px -282px;
}
.gb_pc {
    background-color: rgba(0, 0, 0, 0);
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    line-height: 20px;
    margin: 5px;
    padding: 0 2px;
    text-align: center;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    height: 30px;
    width: 30px;
}
.gb_ea .gb_b {
    background-position: -60px -1676px;
    opacity: 1;
}
#gb#gb a.gb_P,
#gb#gb span.gb_P {
    color: #FFF;
    opacity: 1;
}
.gb_b:hover .gb_pc,
.gb_b:focus .gb_pc {
    background-color: rgba(0, 0, 0, 0);
}
.goog-imageless-button,
.navbuttonouter {
    background: #fff;
    text-transform: uppercase;
    color: #525252;
    border: none;
}
.goog-imageless-button-checked {
    color: #4A97E8;
    box-shadow: none;
}
#vr-nav {
    background: #fff;
    border-bottom: 1px solid #fff;
    padding: 0px 0px 15px;
    margin: 18px 0 0;
    position: relative;
}
#lo-c {
    display: none;
}
#calcontent.eui-s .applogo {
    background-image: url('http://ssl.gstatic.com/gb/images/v1_76783e20.png');
    background-position: 0 -1546px;
    background-size: cover;
    height: 45px;
    top: -9px;
    left: 9px;
}
#mainlogo {
    color: rgba(0, 0, 0, 0);
}
.qnb-container .goog-inline-block.goog-imageless-button {
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
    border: none;
    background: #4383F1;
    transition: all 300ms;
}
.qnb-container .goog-inline-block.goog-imageless-button:hover {
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5);
    border: none;
    background: #4383F1;
}
.goog-imageless-button-hover {
    box-shadow: none;
}
.calListSquare.goog-inline-block {
    border-radius: 50%;
    height: 15px;
    width: 15px;
}
.calHeader.goog-zippy-expanded .zippy-arrow {
    background-position: -141px -81px;
    transform: rotate(180deg);
    transition: all 300ms;
}
.calHeader.goog-zippy-collapsed .zippy-arrow {
    background-position: -153px -81px;
    transform: rotate(90deg);
    transition: all 300ms;
}
.eui-s #gridcontainer {
    margin-right: 30px;
    margin-left: 30px;
}
.mask-right,
.mask-left {
    border: none;
}
.dl.cbrd {
    border-color: rgba(0, 0, 0, 0) !important;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
    border-radius: 3px;
}
.tg-dualmarker,
.tg-time-pri,
.tg-time-sec,
.wk-border {
    border-bottom: none;
}
.tg-times-pri,
.tg-times-sec,
.tg-col {
    border-left: none;
}
.tg-time-pri,
.tg-time-sec {
    padding-right: 10px;
    top: -6px;
    position: relative;
    color: #777777;
}
.chip-color {
    border-color: rgba(0, 0, 0, 0);
}
.st-bg-all,
.st-bg {
    border: none;
}
div#topcontainerwk {
    box-shadow: 0 9px 18px -13px rgba(0, 0, 0, .3);
    z-index: 985;
    position: relative;
}
.rb-n {
    box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
    border: none !important;
    border-radius: 3px;
}
.wk-today,
.tg-today,
.tg-col-today {
    background: none !important;
    border: none !important;
}
.wbkt .tg-timedevents {
    border: none;
}
.st-dtitle-today {
    border: none;
    background: #4383F1;
    color: #fff;
}
.st-bg-today,
.st-bg-td-first,
.st-bg-td-last,
.dp-weekday-selected,
.dp-weekend-selected {
    border: none;
    background: none;
}
.st-dtitle-down {
    border-top-color: none;
}
.dp-today {
    background: #4383F1;
    border-color: #4383F1;
    color: #fff;
}
#rhstogglecell.rhstogglecell-open {
    border-right: none;
}
#calcontent.eui-s .st-c .te,
#calcontent.eui-s .st-c .rb-n {
    padding: inherit;
}
.st-c .te,
.st-c .rb-n {
    height: inherit;
}
.asb-w {
    cursor: pointer;
    height: 27px;
    position: absolute;
    right: 10px;
    top: 6px;
    width: 14px;
}
.navbuttonouter:hover {
    background: #fff;
    border: none;
}
.qnb-container {
    position: relative;
    top: -16px;
    left: 44px;
}
#nav {
    top: -41px;
}
.st-dtitle,
.mv-event-container {
    border: none;
}
.mv-dayname {
    text-align: center;
}

.top-prong .prong-dk, .top-prong .prong-lt {
    display: none;
}

.bubble.has-top-prong{
z-index: 1001;
    width: 400px;
    left: 50%;
    margin-left: -200px;
    top: 172px;
    visibility: visible;
}

.jfk-button-action,.jfk-button-action.jfk-button-hover {
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
    text-transform: uppercase;
    background-color: #4383F1;
    background-image: none;
    border: none;
}

.jfk-button-standard,.jfk-button-standard.jfk-button-hover, .jfk-button-standard.jfk-button-clear-outline.jfk-button-hover {
border: none;
background:none;
text-transform: uppercase;
}

}
</style>
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               


        <section class="uk-grid uk-grid-match" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
             <div id="tm-hero" class="uk-contrast" >
                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <div class="uk-panel ">
                            <div class="uk-width-large-4-4 uk-text-center uk-margin-large">
                                <div class="uk-margin-bottom uk-margin-top">
                                    <h1 class="uk-heading-large uk-margin-large-top" style="color:#000">Event Calendar</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>     

            <div id="tm-top" class="tm-top uk-block uk-block-default">
<iframe src="https://calendar.google.com/calendar/embed?src=airlanggamunclub%40gmail.com&ctz=Asia/Bangkok" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

                            </div>
                            @include('master.footer')  
                            @include('master.navbar_mobile')  
                            @endsection