<aside class="app-sidebar sticky !topacity-0 sticky-pin" >
    <div class="container-xl xl:!p-0">
        <!-- Start::main-sidebar -->
        <div class="main-sidebar mx-0">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="landing-logo-container my-auto hidden lg:block">
                    <div class="responsive-logo">
                        <a class="responsive-logo-light" href="" aria-label="Brand"><img
                                src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="mx-auto"></a>
                        <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="mx-auto"></a>
                    </div>
                </div>
                <div class="slide-left hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide -->
                    <li class="slide">
                        <a class="side-menu__item" href="{{route('user.index')}}">
                            <span class="side-menu__label">Home</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <span class="side-menu__label me-2">Product</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{route('user.vpnshield')}}" class="side-menu__item">TTB VPN Shield</a>
                            </li>
                            <li class="slide">
                                <a href="{{route('user.ttbantivirus')}}" class="side-menu__item">TTB Antivirus</a>
                            </li>
                            <li class="slide">
                                <a href="{{route('user.totalinternet')}}" class="side-menu__item">TTB Total Security</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <span class="side-menu__label me-2">Solutions</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{route('user.commercial')}}" class="side-menu__item">Commercial</a>
                            </li>
                           
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Enterprise
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Endpoint Protection</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Network Protection</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">Threat Intelligence
                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                <ul class="slide-menu child2">
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Threat Protection</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Behavioral Protection</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Enhanced Firewall</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Malware Detection</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Real Time Anti-phishing</a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <span class="side-menu__label me-2">Resources</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="" class="side-menu__item">News</a>
                            </li>
                            <li class="slide">
                                <a href="" class="side-menu__item">Blog</a>
                            </li>
                          
                            
                        </ul>
                    </li>
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <span class="side-menu__label me-2">Company</span>
                            <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide">
                                <a href="{{route('user.about_as')}}" class="side-menu__item">About Us</a>
                            </li>
                            <li class="slide">
                                <a href="{{route('user.contact_as')}}" class="side-menu__item">Contact Us</a>
                            </li>
                          
                            
                        </ul>
                    </li>
             

                </ul>
                <div class="slide-right hidden" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                        </path>
                    </svg>
                </div>
           
              
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->
    </div>
</aside>
