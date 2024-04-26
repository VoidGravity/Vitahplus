<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{route('frontOffice/index')}}" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('frontOffice/index')}}" class="nav-item nav-link">Home</a>
                <a href="{{route('frontOffice/about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('frontOffice/service')}}" class="nav-item nav-link active">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('frontOffice/price')}}" class="dropdown-item">Pricing Plan</a>
                        <a href="{{route('frontOffice/team')}}" class="dropdown-item">Our Dentist</a>
                        <a href="{{route('frontOffice/testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{route('frontOffice/appointment')}}" class="dropdown-item">Appointment</a>
                    </div>
                </div>
<a href="{{route('frontOffice/contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{route('auth/login')}}" class="nav-item nav-link">Login</a>
                <a href="{{route('auth/register')}}" class="nav-item nav-link">Register</a>            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="{{route('frontOffice/appointment')}}" class="btn btn-primary py-2 px-4 ms-3">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
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
                                    {{-- @foreach (@$prompts as $text) --}}
                                        <div class="chat is-me">
                                            <div class="chat-content">
                                                <div class="chat-bubbles">
                                                    <div class="chat-bubble">
                                                        <div class="chat-msg">
                                                            {{ @$text->prompt }}
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
                                                            {{ @$text->response }}
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    {{-- @endforeach --}}

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
    <!-- Service End -->
    

    <!-- Newsletter Start -->
     
    <!-- Newsletter End -->
    

                    @include('inc.front-footer')



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>