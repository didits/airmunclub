@extends('master.master_owline')
@section('title', 'BridgeYes.com')
@section('description')

@stop
@section('content')
    <div class="uk-container uk-container-center">
        <div class="tm-container">
@include('master.navbar_owline')                               
<div id="tm-hero" class="tm-hero uk-block uk-block-large uk-cover-background " style="background-image: url('assets/img/home/city.jpg');" >

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">

    <div class="uk-panel  uk-text-center uk-contrast">

        
        <h1 class="uk-margin-top">Born out a of passion for food, <br class="uk-hidden-small">we provide fresh products.</h1>
<p class="uk-margin-large-bottom">George Thompson, CEO and Founder</p>
    </div>

</div>
                    </section>

                </div>
                
                                <div id="tm-top" class="tm-top uk-block uk-block-default">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <div class="uk-width-medium-1-1">

    <div class="uk-panel  uk-text-center ">

        
        <p class="uk-text-large">Our providers are chosen carefully to make sure that<br class="uk-hidden-small"> only the best ingredients land on your dinner table.</p>

    </div>

</div>
                    </section>

                </div>
                
                <div id="tm-main" class="tm-main uk-block uk-block-default">

                    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                        <main class="uk-width-1-1">
                            <div class="pk-system-messages"></div>                            <article class="uk-article">

    
    <div class="uk-width-medium-3-4 uk-align-center uk-column-medium-1-2">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br /> <br /> In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.<br /> <br /> Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
        <p class="uk-margin-remove"><b>George Thompson</b>, CEO and Founder</p>

</div>
</article>
                        </main>

                        
                    </div>

                </div>
@include('master.footer')  
@include('master.navbar_mobile')  
@endsection