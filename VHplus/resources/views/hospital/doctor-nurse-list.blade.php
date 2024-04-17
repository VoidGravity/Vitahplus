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
                                @include('inc.dash-navbar')

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