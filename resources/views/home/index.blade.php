@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
<div class="uk-container uk-container-center">
    <div class="tm-container">
        @include('master.navbar_owline')                               
        
        <div id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background  uk-contrast" style="background-image: url('{{URL::to('assets/img/home/city.jpg')}}');" >
            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">

                    <div class="uk-panel ">

                        <div class="uk-width-large-4-4 uk-text-center uk-margin-large">
                            <div class="uk-margin-bottom">
                                <h1 class="uk-heading-large uk-margin-small-bottom uk-margin-large-top">Airlangga MUN Club</h1>
                            </div>
                            <a class="uk-button uk-margin-top" href="{{url('about')}}">Learn more</a>
                        </div>
                    </div>

                </div>
            </section>

        </div>
        
<!--         <div id="tm-top" class="tm-top uk-block uk-block-muted">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">

                    <div class="uk-panel  uk-text-center uk-width-large-3-4 uk-container-center">

                        
                        <p class="uk-text-large">We promise locally sourced, responsibly cultivated and harvested products,<br class="uk-hidden-small"> bringing only the best to the table.</p> 

                    </div>

                </div>
            </section>

        </div> -->
        
        

        @include('master.footer')  
        @include('master.navbar_mobile')  
        @endsection