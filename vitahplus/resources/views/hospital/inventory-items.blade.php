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
    <title>Inventory Items | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Inventory Items Report</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addItems" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addItems" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Items</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="fs-14px fw-bold">Total Items</div>
                                                                <div class="count">2,470</div>
                                                            </div>
                                                            <em class="icon bg-primary-dim ni ni-box"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="fs-14px fw-bold">Total Equipments</div>
                                                                <div class="count">607</div>
                                                            </div>
                                                            <em class="icon bg-info-dim ni ni-property-alt"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="fs-14px fw-bold">Total Tools</div>
                                                                <div class="count">653</div>
                                                            </div>
                                                            <em class="icon bg-pink-dim ni ni-scissor"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-3">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <ul class="nk-store-statistics">
                                                        <li class="item">
                                                            <div class="info">
                                                                <div class="fs-14px fw-bold">Medicine Categories</div>
                                                                <div class="count">24</div>
                                                            </div>
                                                            <em class="icon bg-purple-dim ni ni-capsule"></em>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-12">
                                            <div class="card card-bordered card-stretch">
                                                <div class="card-inner-group">
                                                    <div class="card-inner position-relative card-tools-toggle">
                                                        <div class="card-title-group">
                                                            <div class="card-tools">
                                                                <div class="form-inline flex-nowrap gx-3">
                                                                    <div class="form-wrap w-150px">
                                                                        <select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                                                            <option value="">Bulk Action</option>
                                                                            <option value="cstatus">Change Status</option>
                                                                            <option value="delete">Delete</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="btn-wrap">
                                                                        <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                                        <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                                    </div>
                                                                </div><!-- .form-inline -->
                                                            </div><!-- .card-tools -->
                                                            <div class="card-tools me-n1">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li>
                                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                                    </li><!-- li -->
                                                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                                                    <li>
                                                                        <div class="toggle-wrap">
                                                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                            <div class="toggle-content" data-content="cardTools">
                                                                                <ul class="btn-toolbar gx-1">
                                                                                    <li class="toggle-close">
                                                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                                    </li><!-- li -->
                                                                                    <li>
                                                                                        <div class="dropdown">
                                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                                <div class="dot dot-primary"></div>
                                                                                                <em class="icon ni ni-filter-alt"></em>
                                                                                            </a>
                                                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                                <div class="dropdown-head">
                                                                                                    <span class="sub-title dropdown-title">Filter Items Type</span>
                                                                                                    <div class="dropdown">
                                                                                                        <a href="#" class="btn btn-sm btn-icon">
                                                                                                            <em class="icon ni ni-more-h"></em>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="dropdown-body dropdown-body-rg">
                                                                                                    <div class="row gx-6 gy-3">
                                                                                                        <div class="col-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="overline-title overline-title-alt">Catrgory</label>
                                                                                                                <select class="form-select js-select2">
                                                                                                                    <option value="any">Select</option>
                                                                                                                    <option value="equipements">Equipements</option>
                                                                                                                    <option value="tools">Tools</option>
                                                                                                                    <option value="medicine">Medicine</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="overline-title overline-title-alt">Status</label>
                                                                                                                <select class="form-select js-select2">
                                                                                                                    <option value="any">Any Status</option>
                                                                                                                    <option value="available">Available</option>
                                                                                                                    <option value="low">Low</option>
                                                                                                                    <option value="out">Unavailable</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-12">
                                                                                                            <div class="form-group">
                                                                                                                <button type="button" class="btn btn-secondary">Filter</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="dropdown-foot between">
                                                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                                                    <a href="#">Save Filter</a>
                                                                                                </div>
                                                                                            </div><!-- .filter-wg -->
                                                                                        </div><!-- .dropdown -->
                                                                                    </li><!-- li -->
                                                                                    <li>
                                                                                        <div class="dropdown">
                                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                                <em class="icon ni ni-setting"></em>
                                                                                            </a>
                                                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                                <ul class="link-check">
                                                                                                    <li><span>Show</span></li>
                                                                                                    <li class="active"><a href="#">10</a></li>
                                                                                                    <li><a href="#">20</a></li>
                                                                                                    <li><a href="#">50</a></li>
                                                                                                </ul>
                                                                                                <ul class="link-check">
                                                                                                    <li><span>Order</span></li>
                                                                                                    <li class="active"><a href="#">DESC</a></li>
                                                                                                    <li><a href="#">ASC</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div><!-- .dropdown -->
                                                                                    </li><!-- li -->
                                                                                </ul><!-- .btn-toolbar -->
                                                                            </div><!-- .toggle-content -->
                                                                        </div><!-- .toggle-wrap -->
                                                                    </li><!-- li -->
                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .card-tools -->
                                                        </div><!-- .card-title-group -->
                                                        <div class="card-search search-wrap" data-search="search">
                                                            <div class="card-body">
                                                                <div class="search-content">
                                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name">
                                                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                                </div>
                                                            </div>
                                                        </div><!-- .card-search -->
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <div class="nk-tb-list nk-tb-ulist">
                                                            <div class="nk-tb-item nk-tb-head">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                                        <label class="custom-control-label" for="uid"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Catrgory</span></div>
                                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Supplier</span></div>
                                                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Store</span></div>
                                                                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Available Quantity</span></div>
                                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Total Quantity</span></div>
                                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Total Issued</span></div>
                                                                <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                                        <label class="custom-control-label" for="uid1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Syringe</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Equipements</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>XYZ Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>130</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>135</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>05</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid2">
                                                                        <label class="custom-control-label" for="uid2"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Pharmacist Equipement</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Equipements</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>90</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>110</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>20</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid3">
                                                                        <label class="custom-control-label" for="uid3"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Dressing Cotton</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Equipements</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>159</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>162</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>03</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid4">
                                                                        <label class="custom-control-label" for="uid4"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Dissecting knife</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Tools</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>50</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>56</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>06</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid5">
                                                                        <label class="custom-control-label" for="uid5"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Forceps</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Equipements</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>XYZ Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Parma</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>30</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>86</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>56</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-warning">Low</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid6">
                                                                        <label class="custom-control-label" for="uid6"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Paracetamol</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Medicine</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Parma</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>350</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>420</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>70</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid7">
                                                                        <label class="custom-control-label" for="uid7"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Pollen</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Medicine</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Parma</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>550</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>650</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>100</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid8">
                                                                        <label class="custom-control-label" for="uid8"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>XPA XR</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Medicine</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>Medi Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Parma</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>550</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>750</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>200</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid9">
                                                                        <label class="custom-control-label" for="uid9"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Articulator</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Tools</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>XYZ Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>00</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>00</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>00</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-danger">Unavailable</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid10">
                                                                        <label class="custom-control-label" for="uid10"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span>Bone Chisel</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Tools</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>XYZ Supplier</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-xxl">
                                                                    <span>Nio Store</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>10</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>15</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>5</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-warning">Low</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a data-bs-toggle="modal" href="#editItems"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                        </div><!-- .nk-tb-list -->
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-block-between-md g-3">
                                                            <div class="g">
                                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                                </ul><!-- .pagination -->
                                                            </div>
                                                            <div class="g">
                                                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                    <div>Page</div>
                                                                    <div>
                                                                        <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                                            <option value="page-1">1</option>
                                                                            <option value="page-2">2</option>
                                                                            <option value="page-4">4</option>
                                                                            <option value="page-5">5</option>
                                                                            <option value="page-6">6</option>
                                                                            <option value="page-7">7</option>
                                                                            <option value="page-8">8</option>
                                                                            <option value="page-9">9</option>
                                                                            <option value="page-10">10</option>
                                                                            <option value="page-11">11</option>
                                                                            <option value="page-12">12</option>
                                                                            <option value="page-13">13</option>
                                                                            <option value="page-14">14</option>
                                                                            <option value="page-15">15</option>
                                                                            <option value="page-16">16</option>
                                                                            <option value="page-17">17</option>
                                                                            <option value="page-18">18</option>
                                                                            <option value="page-19">19</option>
                                                                            <option value="page-20">20</option>
                                                                        </select>
                                                                    </div>
                                                                    <div>OF 102</div>
                                                                </div>
                                                            </div><!-- .pagination-goto -->
                                                        </div><!-- .nk-block-between -->
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
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
    <!-- Add Items-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addItems">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Items</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Category">
                                            <option value="">Select</option>
                                            <option value="option_select_department">Equipements</option>
                                            <option value="option_select_department">Tools</option>
                                            <option value="option_select_department">Medicine</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="supplierName">Supplier</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="supplierName" placeholder="Supplier">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="storeName">Store</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="storeName" placeholder="Store Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="totalQuantity">Total Quantity</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="totalQuantity" placeholder="Total Quantity">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="totalIssued">Total Issued</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="totalIssued" placeholder="Total Issued">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="availableQuantity">Available Quantity</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="availableQuantity" placeholder="Available Quantity">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Available</option>
                                            <option value="option_select_status">Low</option>
                                            <option value="option_select_status">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Items</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Edit Items-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editItems">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Items</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editName">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editName" placeholder="Name" value="Syringe">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Category">
                                            <option value="">Select</option>
                                            <option value="option_select_department">Equipements</option>
                                            <option value="option_select_department">Tools</option>
                                            <option value="option_select_department">Medicine</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editSupplierName">Supplier</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editSupplierName" placeholder="Supplier" value="XYZ Supplier">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editStoreName">Store</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editStoreName" placeholder="Store Name" value="Nio Store">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editTotalQuantity">Total Quantity</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editTotalQuantity" placeholder="Total Quantity" value="135">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editTotalIssued">Total Issued</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editTotalIssued" placeholder="Total Issued" value="05">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editAvailableQuantity">Available Quantity</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editAvailableQuantity" placeholder="Available Quantity" value="130">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Available</option>
                                            <option value="option_select_status">Low</option>
                                            <option value="option_select_status">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update Items</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>