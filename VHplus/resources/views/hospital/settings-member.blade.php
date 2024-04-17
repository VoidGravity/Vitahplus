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
    <title>User Setting | DashLite Admin Template</title>
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
                                                            <h5 class="title fw-medium">User Settings</h5>
                                                            <span>These settings are helps youto add or manage user.</span>
                                                            <span class="text-success"><em class="icon ni ni-shield-check"></em></span>
                                                        </div><!-- .nk-block-head-content -->
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div><!-- .nk-block-between -->
                                                </div><!-- .nk-block-head -->
                                                <div class="form-group">
                                                    <div class="row g-gs">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Select User</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-placeholder="Select User">
                                                                    <option value="">Select User</option>
                                                                    <option value="option_select_name">Abu Bin Ishtiyak</option>
                                                                    <option value="option_select_name">Ashley Lawson</option>
                                                                    <option value="option_select_name">Joe Larson</option>
                                                                    <option value="option_select_name">Joe Larson</option>
                                                                    <option value="option_select_name">Frances Burns</option>
                                                                    <option value="option_select_name">Victoria Lynch</option>
                                                                    <option value="option_select_name">Jane Harris</option>
                                                                    <option value="option_select_name">Emma Walker</option>
                                                                    <option value="option_select_name">Patrick Newman</option>
                                                                    <option value="option_select_name">Victoria Lynch</option>
                                                                </select>
                                                            </div>
                                                            <span class="form-note text-success mt-1">Add one or more user at a time who is not a current user of this space</span>
                                                        </div><!-- .col -->
                                                        <div class="col-md-6">
                                                            <label class="form-label">Select Role</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-placeholder="Select Role">
                                                                    <option value="">Select Role</option>
                                                                    <option value="option_select_role">Administrator</option>
                                                                    <option value="option_select_role">Doctor</option>
                                                                    <option value="option_select_role">Receptionist</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                    <a href="#" class="btn btn-primary mt-2">Add Selected</a>
                                                </div>
                                                <div class="nk-block card card-bordered mt-5">
                                                    <table class="table table-ulogs">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th class="tb-col-os"><span class="overline-title">Name</span></th>
                                                                <th class="tb-col-ip"><span class="overline-title">Email address</span></th>
                                                                <th class="tb-col-time"><span class="overline-title">Role</span></th>
                                                                <th class="tb-col-time"><span class="overline-title">Joined on</span></th>
                                                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="tb-col-os">Abu Bin Ishtiyak</td>
                                                                <td class="tb-col-ip"><span class="sub-text">info@softnio.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Doctor</span></td>
                                                                <td class="tb-col-time"><span>10 Feb 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Ashley Lawson</td>
                                                                <td class="tb-col-ip"><span class="sub-text">AshleyLawson@.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Receptionist</span></td>
                                                                <td class="tb-col-time"><span>17 Feb 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Joe Larson</td>
                                                                <td class="tb-col-ip"><span class="sub-text">joelarson123@gmail.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Doctor</span></td>
                                                                <td class="tb-col-time"><span>31 Jan 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Jane Harris</td>
                                                                <td class="tb-col-ip"><span class="sub-text">Jane@Harris.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Administrator</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11 Jan 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Frances Burns</td>
                                                                <td class="tb-col-ip"><span class="sub-text">Frances@Burns.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Doctor</span></td>
                                                                <td class="tb-col-time"><span>17 Feb 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Victoria Lynch</td>
                                                                <td class="tb-col-ip"><span class="sub-text">Victoria@Lynch.com</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">Administrator</span></td>
                                                                <td class="tb-col-time"><span>11 jan 2020</span>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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
                                                            <li><a href="{{route('hospital/settings')}}"><em class="icon ni ni-user-fill-c"></em><span>General</span></a></li>
                                                            <li><a class="active" href="{{route('hospital/settings-member')}}"><em class="icon ni ni-bell-fill"></em><span>Users</span></a></li>
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