<div class="tm-navbar" data-uk-sticky='{"media":767,"showup":true,"animation":"uk-animation-slide-top"}' style="border-bottom:1px solid #ccc">

    <nav class="uk-navbar">

        <a class="uk-navbar-brand" href="http://airlanggamunclub.com">
            <img class="tm-logo uk-responsive-height" src="{{URL::to('assets/img/logo/1.jpg')}}" alt="">
            <img class="tm-logo-contrast uk-responsive-height" src="{{URL::to('assets/img/logo/1.jpg')}}" alt="">
        </a>

        <div class="uk-navbar-flip uk-visible-large">
            <ul class="uk-navbar-nav">
                <li class=" uk-active" >
                    <a href="{{url('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('about')}}">About</a>
                </li>
                <li class="uk-parent" data-uk-dropdown>
                 <a href="#">Activities <i class="uk-icon-caret-down"></i></a>
                 <div class="uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <li class="uk-parent">
                            <a href="#">International MUN <i class="uk-icon-caret-down"></i></a>
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#">- HNMUN</a></li>
                                    <li><a href="#">- WMUN</a></li>
                                    <li><a href="#">- AMUMUN</a></li>
                                </ul>  
                        </li>
                        <li class="uk-parent">
                            <a href="#">National MUN <i class="uk-icon-caret-down"></i></a>
                            <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#">- HNMUN</a></li>
                                    <li><a href="#">- WMUN</a></li>
                                    <li><a href="#">- AMUMUN</a></li>
                                </ul>
                        </li>
                        <li><a href="{{url('member')}}">Member</a></li>
                    </ul>
                </div>
            </li>
            <li class="uk-parent" data-uk-dropdown>

                <a href="">Archive <i class="uk-icon-caret-down"></i></a>
                <div class="uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <li><a href="{{url('material')}}">Materials</a></li>
                        <li><a href="{{url('media_coverage')}}">Media Coverage</a></li>
                        <li><a href="{{url('galery')}}">Gallery</a></li>
                    </ul>
                </div>
                
            </li>
            <li>
                <a href="{{url('event_calendar')}}">Events Calendar</a>
            </li>
            <li>
                <a href="{{url('faq')}}">FAQ</a>
            </li>

            <li>
                <a href="{{url('contact')}}">Contact Us</a>
            </li>


        </ul>
    </div>

    <div class="uk-navbar-flip uk-hidden-large">
        <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
    </div>

</nav>

</div>