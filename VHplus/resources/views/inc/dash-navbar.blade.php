<div class="nk-header nk-header-fixed nk-header-fluid is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{route('index')}}" class="logo-link">
                    <img class="logo-light logo-img" src="{{asset('images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{asset('images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-search ms-3 ms-xl-0">
                <em class="icon ni ni-search"></em>
                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    {{-- <li class="nav-item">
                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em class="icon ni ni-globe"></em></a>
                    </li> --}}
                    <li class="dropdown chats-dropdown hide-mb-xs">
                        <a href="{{Route('hospital/chat')}}" class="dropdown-toggle nk-quick-nav-icon" >
                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                <a href="#">Setting</a>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar">
                                                <span>IH</span>
                                                <span class="status dot dot-lg dot-gray"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Iliash Hossain</div>
                                                    <span class="time">Now</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    {{-- <li class="chat-item is-unread">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar bg-pink">
                                                <span>AB</span>
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                    <span class="time">4:49 AM</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                    <div class="status unread">
                                                        <em class="icon ni ni-bullet-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item --> --}}
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar">
                                                <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">George Philips</div>
                                                    <span class="time">6 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                <div class="user-avatar">
                                                    <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                </div>
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Softnio Group</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar">
                                                <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                <span class="status dot dot-lg dot-success"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Larry Hughes</div>
                                                    <span class="time">3 Apr</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar bg-purple">
                                                <span>TW</span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Tammy Wilson</div>
                                                    <span class="time">27 Mar</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                    <div class="status sent">
                                                        <em class="icon ni ni-check-circle"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                </ul><!-- .chat-list -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    {{-- <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li> --}}
                    {{-- <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="quick-icon border border-light">
                                <img class="icon" src="{{asset('images/flags/english-sq.png')}}" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset('images/flags/english.png')}}" alt="" class="language-flag">
                                        <span class="language-name">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset('images/flags/spanish.png')}}" alt="" class="language-flag">
                                        <span class="language-name">Español</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset('images/flags/french.png')}}" alt="" class="language-flag">
                                        <span class="language-name">Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset('images/flags/turkey.png')}}" alt="" class="language-flag">
                                        <span class="language-name">Türkçe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li><!-- .dropdown --> --}}
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            {{-- <div class="dropdown-inner user-card-wrap bg-lighter">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                        <span class="sub-text">info@softnio.com</span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    {{-- <li><a href="{{route('hospital/user-profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li> --}}
                                    <li><a href="{{route('hospital/settings-member')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    {{-- <li><a href="{{route('hospital/settings-account-log')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li> --}}
                                    {{-- <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li> --}}
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('auth/logout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>