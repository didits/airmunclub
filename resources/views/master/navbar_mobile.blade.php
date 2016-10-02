                <div id="offcanvas" class="uk-offcanvas">
                    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-text-center">

                        <div class="uk-panel uk-text-center">
                            <a href="/demo/theme-brick/"> 
                                <img src="{{URL::to('assets/img/logo/bw.png')}}" alt="">
                            </a>
                        </div>

                        <ul class="uk-nav uk-nav-offcanvas">
                            <li class=" uk-active" >
                                <a href="{{url('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">About</a>
                            </li>
                            <li class="uk-parent" data-uk-dropdown>

                               <a href="">Activities<i class="uk-icon-caret-down"> </i></a>
                               <div class="uk-dropdown uk-dropdown-navbar">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#">International MUN</a></li>
                                    <li><a href="#">National MUN</a></li>
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
                                    <li><a href="{{url('gallery')}}">Gallery</a></li>
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
            </div>