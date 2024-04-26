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
    <title>Setting | Hplus Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">

    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ route('frontOffice/index') }}" class="navbar-brand p-0">
            <h1 class="m-0 text-primary">
                <img src="{{asset('images/logo.png')}}" width="150px" alt="">
                
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('frontOffice/index') }}" class="nav-item nav-link active">Home</a>
                {{-- <a href="{{ route('frontOffice/about') }}" class="nav-item nav-link">About</a> --}}
                {{-- <a href="{{ route('frontOffice/service') }}" class="nav-item nav-link">Service</a> --}}
                <div class="nav-item dropdown">
                    {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> --}}
                    <div class="dropdown-menu m-0">
                        {{-- <a href="{{ route('frontOffice/price') }}" class="dropdown-item">Pricing Plan</a> --}}
                        {{-- <a href="{{ route('frontOffice/team') }}" class="dropdown-item">Our Doctors</a> --}}
                        {{-- <a href="{{ route('frontOffice/testimonial') }}" class="dropdown-item">Testimonial</a> --}}
                        <a href="{{ route('frontOffice/appointment') }}" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                {{-- <a href="{{ route('frontOffice/contact') }}" class="nav-item nav-link">Contact</a> --}}
                <a href="{{ route('auth/login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('auth/register') }}" class="nav-item nav-link">Register</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Chats</h3>
                            </div>
                            {{-- <div class="nk-block-head-content">
                                <ul class="nk-block-tools g-3">
                                    <li><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>New Chat</span></a></li>
                                    <li class="nk-block-tools-opt">
                                        <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><span>Notification Setting</span></a></li>
                                                    <li><a href="#"><span>Chats Setting</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="nk-chat">

                        <div class="nk-chat-body">

                            <div class="nk-chat-panel" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -20px -36px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px 36px;">
                                                    @foreach ($prompts as $text)
                                                        <div class="chat is-me">
                                                            <div class="chat-content">
                                                                <div class="chat-bubbles">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-msg">
                                                                            {{ $text->prompt }}
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="chat is-you">
                                                            <div class="chat-avatar">
                                                                <div class="user-avatar bg-purple"><span>H+</span></div>
                                                            </div>
                                                            <div class="chat-content">
                                                                <div class="chat-bubbles">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-msg">
                                                                            {{ $text->response }}
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 938px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 164px; transform: translate3d(0px, 86px, 0px); display: block;"></div>
                                </div>
                            </div>
                            <form action="/hospital/chat" method="POST" class="nk-chat-editor">
                                @csrf
                                {{-- <div class="nk-chat-editor-upload  ms-n1"><a href="#" class="btn btn-sm btn-icon btn-trigger text-primary toggle-opt" data-target="chat-upload"><em class="icon ni ni-plus-circle-fill"></em></a>
                                    <div class="chat-upload-option" data-content="chat-upload">
                                        <ul class="">
                                            <li><a href="#"><em class="icon ni ni-img-fill"></em></a></li>
                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em></a></li>
                                            <li><a href="#"><em class="icon ni ni-mic"></em></a></li>
                                            <li><a href="#"><em class="icon ni ni-grid-sq"></em></a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class="nk-chat-editor-form">
                                    <div class="form-control-wrap">
                                        <textarea name="prompt" class="form-control form-control-simple no-resize" rows="1" id="default-textarea" placeholder="Type your message..."></textarea>
                                    </div>
                                </div>
                                <ul class="nk-chat-editor-tools g-2">
                                    {{-- <li><a href="#" class="btn btn-sm btn-icon btn-trigger text-primary"><em class="icon ni ni-happyf-fill"></em></a></li> --}}
                                    <li><button type="submit" class="btn btn-round btn-primary btn-icon"><em class="icon ni ni-send-alt"></em></button></li>
                                </ul>
                            </form>
                            <div class="nk-chat-profile" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="user-card user-card-s2 my-4">
                                                        <div class="user-avatar md bg-purple"><span>IH</span></div>
                                                        <div class="user-info">
                                                            <h5>Iliash Hossain</h5><span class="sub-text">Active 35m ago</span>
                                                        </div>
                                                        <div class="user-card-menu dropdown"><a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Profile</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Block Messages</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-profile">
                                                        <div class="chat-profile-group"><a href="#" class="chat-profile-head" data-bs-toggle="collapse" data-bs-target="#chat-options">
                                                                <h6 class="title overline-title">Options</h6><span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                            </a>
                                                            <div class="chat-profile-body collapse show" id="chat-options">
                                                                <div class="chat-profile-body-inner">
                                                                    <ul class="chat-profile-options">
                                                                        <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-edit-alt"></em><span class="lead-text">Nickname</span></a></li>
                                                                        <li><a class="chat-option-link chat-search-toggle" href="#"><em class="icon icon-circle bg-light ni ni-search"></em><span class="lead-text">Search In Conversation</span></a></li>
                                                                        <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-circle-fill"></em><span class="lead-text">Change Theme</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-profile-group"><a href="#" class="chat-profile-head" data-bs-toggle="collapse" data-bs-target="#chat-settings">
                                                                <h6 class="title overline-title">Settings</h6><span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                            </a>
                                                            <div class="chat-profile-body collapse show" id="chat-settings">
                                                                <div class="chat-profile-body-inner">
                                                                    <ul class="chat-profile-settings">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch2"><label class="custom-control-label" for="customSwitch2">Notifications</label></div>
                                                                        </li>
                                                                        <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-bell-off-fill"></em>
                                                                                <div><span class="lead-text">Ignore Messages</span><span class="sub-text">You won’t be notified when message you.</span></div>
                                                                            </a></li>
                                                                        <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-alert-fill"></em>
                                                                                <div><span class="lead-text">Something Wrong</span><span class="sub-text">Give feedback and report conversion.</span></div>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-profile-group"><a href="#" class="chat-profile-head" data-bs-toggle="collapse" data-bs-target="#chat-photos">
                                                                <h6 class="title overline-title">Shared Photos</h6><span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                            </a>
                                                            <div class="chat-profile-body collapse show" id="chat-photos">
                                                                <div class="chat-profile-body-inner">
                                                                    <ul class="chat-profile-media">
                                                                        <li><a href="#"><img src="/demo7/images/slides/slide-a.jpg" alt=""></a></li>
                                                                        <li><a href="#"><img src="/demo7/images/slides/slide-b.jpg" alt=""></a></li>
                                                                        <li><a href="#"><img src="/demo7/images/slides/slide-c.jpg" alt=""></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 759px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 379px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
