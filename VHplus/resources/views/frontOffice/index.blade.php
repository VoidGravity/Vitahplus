<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hplus - Hospital Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
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

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                @if(Auth::check())
                <a href="{{ route('auth/logout') }}" class="nav-item nav-link">Logout</a>
                @else
                <a href="{{ route('auth/login') }}" class="nav-item nav-link">Login</a>
                <a href="{{ route('auth/register') }}" class="nav-item nav-link">Register</a>
                @endif
            </div>
            <a href="{{ route('frontOffice/appointment') }}" class="btn btn-primary py-2 px-4 ms-3">Chat with H+</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                          
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"> Elevating Healthcare Excellence</h1>
                            <a href="{{ route('frontOffice/appointment') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Chat With H+</a>
                            {{-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                           
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Empowering Health, Enriching Lives: HPlus Hospital</h1>
                            <a href="{{ route('frontOffice/appointment') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">AI Assistance</a>
                            {{-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The World's Best Hospital That You Can Trust</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Experience the pinnacle of medical care and trust at HPlus Hospital – where expertise meets compassion, ensuring your well-being every step of the way.</h4>
                    <p class="mb-4">HPlus Hospital is renowned as the world's best healthcare institution where trust meets excellence. Our expert medical professionals, cutting-edge technology, and compassionate care converge to ensure your well-being and recovery are paramount priorities. With us, experience a journey of healing and confidence, knowing you're in the safest hands</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="{{ route('frontOffice/appointment') }}"
                        class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Chat with our AI assistance</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Hospital You
                            Can Trust</h1>
                        <p class="text-white mb-0">Your Trusted Choice in Healthcare. Book Your Appointment Today with our Certified and Award-Winning HPlus Hospital</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <h4 class="text-warning mb-4">
                            @if(!Auth::check())
                            <i class="bi bi-exclamation-triangle"></i>
                            Please Log In to Make an Appointment
                            @endif
                        </h4>
                        <form action="{{url('/frontOffice/index/appointment')}}" method="POST" >
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="date" name="date" class="form-control bg-light border-0"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input name="note" type="text"
                                            class="form-control bg-light border-0"
                                            placeholder="Your Note" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->



    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Doctors & AI Assistance</h1>
                        <a href="{{ route('frontOffice/appointment') }}"
                            class="btn btn-primary py-3 px-5">Chat with H+</a>
                    </div>
                </div>
                @foreach($doctors as $item)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            {{-- {{$item->Doctor_image}} --}}
                            <img class="img-fluid rounded-top w-100" src="{{ asset('images/'.$item->Doctor_image) }}"
                                alt="">
                            {{--  --}}
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">{{$item->user->name}}</h4>
                            <p class="text-primary mb-0">{{$item->speciality->name}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- Team End -->


        <br><br><br><br>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s"
        style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Hplus ai assitance</a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Hplus Ai assitance</a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://twitter.com/VEZEETA_Egypt"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/Vezeeta/"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.linkedin.com/company/vezeeta/"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/vezeeta/?hl=en"><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">hplus</a>.
                        All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
