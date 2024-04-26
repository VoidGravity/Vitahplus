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
    <title>Setting | DashLite Admin Template</title>
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
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title fw-medium">General settings</h5>
                                                            <span>These settings helps you modify site settings.</span>
                                                        </div><!-- .nk-block-head-content -->
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div><!-- .nk-block-between -->
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <form action="#" class="form-settings">
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-name">Hospital Name</label>
                                                                    <span class="form-note">Specify the name of your hospital.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-name" value="Dashlite">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-email">Hospital Address</label>
                                                                    <span class="form-note">Specify the key of your hospital address</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-email" value="Softnio Street 3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-copyright">Copyright</label>
                                                                    <span class="form-note">Copyright information of your hospital.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="site-copyright" value="&copy; 2023, DashLite. All Rights Reserved.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label">Allow Registration</label>
                                                                    <span class="form-note">Enable or disable registration from site.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                                            <label class="custom-control-label" for="reg-enable">Enable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                                            <label class="custom-control-label" for="reg-disable">Disable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                                            <label class="custom-control-label" for="reg-request">On Request</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label">Main Site</label>
                                                                    <span class="form-note">Specify the URL if your main website is external.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" name="site-url" value="https://www.softnio.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-name"> Description</label>
                                                                    <span class="form-note">Describe your hospital information.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-control-wrap">
                                                                            <textarea class="form-control form-control no-resize" id="fv-message" name="fv-message" placeholder="Hello World!">
                                                 </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-off">Maintanance Mode</label>
                                                                    <span class="form-note">Enable to make Project make offline.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" name="reg-public" id="site-off">
                                                                        <label class="custom-control-label" for="site-off">Offline</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-lg-7">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- .nk-block-head -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <h3 class="nk-block-title page-title">Settings</h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>Here you can change and edit your needs</p>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            {{-- <li><a class="active" href="{{route('hospital/settings')}}"><em class="icon ni ni-user-fill-c"></em><span>General</span></a></li> --}}
                                                            <li><a href="{{route('hospital/settings-member')}}"><em class="icon ni ni-bell-fill"></em><span>Users</span></a></li>
                                                            <li><a href="{{route('hospital/settings-email')}}"><em class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a></li>
                                                            <li><a href="{{route('hospital/settings-security')}}"><em class="icon ni ni-shield-star-fill"></em><span>Security</span></a></li>
                                                            <li><a href="{{route('hospital/settings-account-log')}}"><em class="icon ni ni-activity-round-fill"></em><span>Account activity</span></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- card-aside-wrap -->
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
</body>

</html>