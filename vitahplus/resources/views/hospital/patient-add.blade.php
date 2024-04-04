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
    <title>Add Patient - Hospital Manegment | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Add Patient</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Input new Patient information carefully.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Personal Info</h5>
                                                        <p>Add common infomation like Name, Email etc </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="full-name" placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Date of Birth</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Gender">
                                                                        <option value="">Select Gender</option>
                                                                        <option value="option_select_gender">Male</option>
                                                                        <option value="option_select_gender">Female</option>
                                                                        <option value="option_select_gender">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no">Phone</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email">Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">National ID</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" multiple class="form-file-input" id="nid">
                                                                        <label class="form-file-label" for="nid">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-5 col-md-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Adddress</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">General Info</h5>
                                                        <p>Some common medical information about patient. </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Blood Group</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Group">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_blood">A+</option>
                                                                        <option value="option_select_blood">A-</option>
                                                                        <option value="option_select_blood">AB+</option>
                                                                        <option value="option_select_blood">AB-</option>
                                                                        <option value="option_select_blood">B+</option>
                                                                        <option value="option_select_blood">B-</option>
                                                                        <option value="option_select_blood">O+</option>
                                                                        <option value="option_select_blood">O-</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Height</label>
                                                                <input type="text" class="form-control" id="height" placeholder="Height">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Weight</label>
                                                                <input type="text" class="form-control" id="weight" placeholder="Weight">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Blood Pressure</label>
                                                                <input type="text" class="form-control" id="bp" placeholder="Blood Pressure">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Pulse</label>
                                                                <input type="text" class="form-control" id="pulse" placeholder="Pulse">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Temperature</label>
                                                                <input type="text" class="form-control" id="temperature" placeholder="Temperature">
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Madical Condition</h5>
                                                        <p>Details information about patient current medical condition. </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-6 col-md-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="symptoms" placeholder="Symptoms">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Symptoms">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_symptoms">General Symptoms</option>
                                                                        <option value="option_select_symptoms">Uncommon Symptoms</option>
                                                                        <option value="option_select_symptoms">Inherited Symptoms</option>
                                                                        <option value="option_select_symptoms">Viral Symptoms</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Casualty</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Casualty">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_casualty">Yes</option>
                                                                        <option value="option_select_casualty">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Department</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Department">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_department">Allergy and immunology</option>
                                                                        <option value="option_select_department">Anesthesiology</option>
                                                                        <option value="option_select_department">Cardiology</option>
                                                                        <option value="option_select_department">Dermatology</option>
                                                                        <option value="option_select_department">Diagnostic radiology</option>
                                                                        <option value="option_select_department">Emergency medicine</option>
                                                                        <option value="option_select_department">Neurology</option>
                                                                        <option value="option_select_department">Obstetrics and gynecology</option>
                                                                        <option value="option_select_department">Ophthalmology</option>
                                                                        <option value="option_select_department">Pathology</option>
                                                                        <option value="option_select_department">Pediatrics</option>
                                                                        <option value="option_select_department">Psychiatry</option>
                                                                        <option value="option_select_department">Surgery</option>
                                                                        <option value="option_select_department">Urology</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Consultant Doctor</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Doctor">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_consulant">Ernesto Vargas</option>
                                                                        <option value="option_select_consulant">Janet Snyder</option>
                                                                        <option value="option_select_consulant">Amelia Grant</option>
                                                                        <option value="option_select_consulant">Debra Grant</option>
                                                                        <option value="option_select_consulant">Snyder Debra</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Patient Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Type">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_patient">OPD Patient</option>
                                                                        <option value="option_select_patient">IPD Patient</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Admit Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Group</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                                                        <option value="default_option">Select</option>
                                                                        <option value="option_select_bed">Male Ward - 1st Floor</option>
                                                                        <option value="option_select_bed">Female Ward - 1st Floor</option>
                                                                        <option value="option_select_bed">Private Ward - 2nd Floor</option>
                                                                        <option value="option_select_bed">Cabin - 4th Floor</option>
                                                                        <option value="option_select_bed">ICU - 3rd Floor</option>
                                                                        <option value="option_select_bed">NICU - 3rd Floor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Number</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Bed">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_bednum">101</option>
                                                                        <option value="option_select_bednum">102</option>
                                                                        <option value="option_select_bednum">103</option>
                                                                        <option value="option_select_bednum">105</option>
                                                                        <option value="option_select_bednum">201</option>
                                                                        <option value="option_select_bednum">202</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!-- .col -->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Test Report</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" multiple class="form-file-input" id="testReport">
                                                                        <label class="form-file-label" for="testReport">Choose files</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Description</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="quill-basic">
                                                                        <p>Please describe little bit!</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Add Patient</button>
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div><!-- .card-inner -->
                                        </div>
                                    </div><!-- .card -->
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
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>