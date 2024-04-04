<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Doctors / Nurse List | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('css/dashlite.css')}}">


    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        @include('inc.dash-sidebar')

        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
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
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em class="icon ni ni-globe"></em></a>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
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
                                                    <li class="chat-item is-unread">
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
                                                    </li><!-- .chat-item -->
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
                                    <li class="dropdown notification-dropdown">
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
                                    </li>
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
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
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('hospital/user-profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{route('hospital/settings')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="{{route('hospital/settings-account-log')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
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
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Doctor/Nurse</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{route('hospital/doctor-nurse-add')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                    <a href="{{route('hospital/doctor-nurse-add')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Doctor / Nurse</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="row g-gs">
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary">
                                                            <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Victoria Lynch </h6>
                                                            <span class="badge rounded-pill bg-primary">Doctor</span>
                                                            <span class="sub-text">FCPS</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Department</span><span>Gastroenterology</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Abu Bin Ishtiyak</h6>
                                                            <span class="badge rounded-pill bg-primary">Doctor</span>
                                                            <span class="sub-text">MBBS, FCPS</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Department</span><span>Medicine</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary">
                                                            <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Ashley Lawson</h6>
                                                            <span class="badge rounded-pill bg-primary">Doctor</span>
                                                            <span class="sub-text">MBBS, FCPS, Surgon</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Department</span><span>Orthopaedics</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-info-dim">
                                                            <span>JL</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Joe Larson</h6>
                                                            <span class="badge rounded-pill badge-dim bg-info">Nurse</span>
                                                            <span class="sub-text">Head Nurse</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Shift</span><span>Morning</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-danger-dim">
                                                            <span>JM</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Jane Montgomery</h6>
                                                            <span class="badge rounded-pill badge-dim bg-info">Nurse</span>
                                                            <span class="sub-text">Clinical Nurse</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Shift</span><span>Night</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary">
                                                            <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Patrick Newman</h6>
                                                            <span class="badge rounded-pill bg-primary">Doctor</span>
                                                            <span class="sub-text">MBBS</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Department</span><span>Medicine</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary">
                                                            <img src="{{asset('images/avatar/d-sm.jpg')}}" alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Jane Harris</h6>
                                                            <span class="badge rounded-pill badge-dim bg-info">Nurse</span>
                                                            <span class="sub-text">Assistant Nurse</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Shift</span><span>Evening</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="team">
                                                    <div class="team-options">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-card user-card-s2">
                                                        <div class="user-avatar lg bg-primary-dim">
                                                            <span>FB</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <h6>Frances Burns</h6>
                                                            <span class="badge rounded-pill badge-dim bg-info">Nurse</span>
                                                            <span class="sub-text">Assistant Nurse</span>
                                                        </div>
                                                    </div>
                                                    <ul class="team-info">
                                                        <li><span>Shift</span><span>Evening</span></li>
                                                        <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                        <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                        <li><span>Email</span><span>info@softnio.com</span></li>
                                                    </ul>
                                                    <div class="team-view">
                                                        <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                    </div>
                                                </div><!-- .team -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/arg.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/aus.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/bangladesh.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/canada.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/china.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/china.png')}}" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/french.png')}}" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/germany.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/iran.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/italy.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/mexico.png')}}" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/philipine.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/portugal.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/s-africa.png')}}" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/spanish.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/switzerland.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/uk.png')}}" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/english.png')}}" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>