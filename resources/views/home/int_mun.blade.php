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
                                <h1 class="uk-heading-large uk-margin-large-top" style="color:#000">Airlangga MUN Club</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>     

        <div id="tm-top" class="tm-top uk-block uk-block-muted">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">

                    <div class="uk-panel  uk-text-center uk-width-large-3-4 uk-container-center">

                        
                        <p class="uk-text-large">We promise locally sourced, responsibly cultivated and harvested products,<br class="uk-hidden-small"> bringing only the best to the table.</p> 

                    </div>

                </div>

                <div class="uk-width-medium-1-2">

                    <div class="uk-panel  uk-text-center uk-width-large-3-4 uk-container-center">

                        
                        <p class="uk-text-large">Apply now!</p>
                        <p><button class="uk-button" type="button submit">Apply</button></p> 

                    </div>

                </div>
            </section>

        </div>

         <div id="tm-main" class="tm-main uk-block uk-block-default">

                    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                        <main class="uk-width-1-1">
                            <div class="pk-system-messages"></div>                            <article class="uk-article">

    
    <div class="uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-margin-large" data-uk-grid-margin>

    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 01">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>

    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 02">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>

    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 03">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>

    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 03">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 03">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-panel">
            <div class="uk-overlay uk-overlay-hover">
                <img src="{{URL::to('assets/img/home/city.jpg')}}" alt="Home 03">
                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                <a class="uk-position-cover" href="{{URL::to('assets/img/home/city.jpg')}}" data-uk-lightbox=""></a>
            </div>
        </div>
    </div>
</div>

</article>
</main>
</div>
</div>


        
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection