                <div id="offcanvas" class="uk-offcanvas">
                    <div class="uk-offcanvas-bar uk-offcanvas-bar-flip uk-text-center">

                        <div class="uk-panel uk-text-center">
                            <a href="{{url('/')}}"> 
                                <img src="{{URL::to('assets/img/logo/bw.png')}}" alt="">
                            </a>
                        </div>

                        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                            <li class=" uk-active" >
                                <a href="{{url('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">About</a>
                            </li>
                            <li class="uk-parent" data-uk-dropdown>
                               <a href="#">Activities</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">INTERNATIONAL MUN</a></li>
                                    <li><a href="#">NATIONAL MUN</a></li>
                                    <li><a href="{{url('member')}}">MEMBER</a></li>
                                </ul>
                            </li>

                        <li class="uk-parent" data-uk-dropdown>

                            <a href="#">Archive</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="{{url('material')}}">MATERIALS</a></li>
                                    <li><a href="{{url('media_coverage')}}">MEDIA COVERAGE</a></li>
                                    <li><a href="{{url('galery')}}">GALLERY</a></li>
                                </ul>

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