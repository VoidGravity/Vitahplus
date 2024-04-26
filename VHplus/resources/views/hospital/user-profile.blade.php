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
    <title>Profile | Hplus Admin Template</title>
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
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title page-title">My Profile</h2>
                                        <div class="nk-block-des">
                                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-content">
                                            <ul class="nav nav-tabs nav-tabs-card">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><span>Personal</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><span>Notification</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><span>Security</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem4"><span>Activity</span></a>
                                                </li>
                                            </ul>
                                            <div class="card-inner">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem1">
                                                        <div class="nk-block">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title">Personal Information</h5>
                                                                    <div class="nk-block-des">
                                                                        <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card">
                                                                <div class="nk-data data-list">
                                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Full Name</span>
                                                                            <span class="data-value">Abu Bin Ishtiyak</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Email</span>
                                                                            <span class="data-value">info@softnio.com</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Phone Number</span>
                                                                            <span class="data-value text-soft">Not add yet</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Date of Birth</span>
                                                                            <span class="data-value">29 Feb, 1986</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Address</span>
                                                                            <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- .data-item -->
                                                                </div><!-- .nk-data -->
                                                            </div>
                                                            <!-- Another Section -->
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title">Personal Preferences</h5>
                                                                    <div class="nk-block-des">
                                                                        <p>Your personalized preference allows you best use.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="card">
                                                                <div class="nk-data data-list">
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Language</span>
                                                                            <span class="data-value">English (United State)</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">Change Language</a></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Date Format</span>
                                                                            <span class="data-value">M d, YYYY</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">Change</a></div>
                                                                    </div><!-- .data-item -->
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Timezone</span>
                                                                            <span class="data-value">Bangladesh (GMT +6)</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><a data-bs-toggle="modal" href="#profile-edit" class="link link-primary">Change</a></div>
                                                                    </div><!-- .data-item -->
                                                                </div><!-- .nk-data -->
                                                            </div>
                                                        </div><!-- .nk-block -->
                                                    </div><!-- tab pane -->
                                                    <div class="tab-pane" id="tabItem2">
                                                        <div class="nk-block">
                                                            <div class="nk-block-head nk-block-head-lg">
                                                                <div class="nk-block-head-content">
                                                                    <h5 class="nk-block-title">Notification Settings</h5>
                                                                    <div class="nk-block-des">
                                                                        <p>You will get only notification what have enabled.</p>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="nk-block-head nk-block-head-sm">
                                                                <div class="nk-block-head-content">
                                                                    <h6>Security Alerts</h6>
                                                                    <p>You will get only those email notification what you want.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="nk-block-content">
                                                                <div class="gy-3">
                                                                    <div class="g-item">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" checked id="unusual-activity">
                                                                            <label class="custom-control-label" for="unusual-activity">Email me whenever encounter unusual activity</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="g-item">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="new-browser">
                                                                            <label class="custom-control-label" for="new-browser">Email me if new browser is used to sign in</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-content -->
                                                            <div class="nk-block-head nk-block-head-sm">
                                                                <div class="nk-block-head-content">
                                                                    <h6>News</h6>
                                                                    <p>You will get only those email notification what you want.</p>
                                                                </div>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="nk-block-content">
                                                                <div class="gy-3">
                                                                    <div class="g-item">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" checked id="latest-sale-news">
                                                                            <label class="custom-control-label" for="latest-sale-news">Notify me by email about sales and latest news</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="g-item">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="feature-update">
                                                                            <label class="custom-control-label" for="feature-update">Email me about new features and updates</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="g-item">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" checked id="account-tips">
                                                                            <label class="custom-control-label" for="account-tips">Email me about tips on using account</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-block-content -->
                                                        </div><!-- .nk-block -->
                                                    </div><!--tab pane-->
                                                    <div class="tab-pane" id="tabItem3">
                                                        <div class="nk-block-head nk-block-head-lg">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">Security Settings</h5>
                                                                <div class="nk-block-des">
                                                                    <p>These settings are helps you keep your account secure.</p>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                            <div class="nk-block-text">
                                                                                <h6>Save my Activity Logs</h6>
                                                                                <p>You can save your all activity logs including unusual activity detected.</p>
                                                                            </div>
                                                                            <div class="nk-block-actions">
                                                                                <ul class="align-center gx-3">
                                                                                    <li class="order-md-last">
                                                                                        <div class="custom-control custom-switch me-n2">
                                                                                            <input type="checkbox" class="custom-control-input" checked="" id="activity-log">
                                                                                            <label class="custom-control-label" for="activity-log"></label>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .card-inner -->
                                                                    <div class="card-inner">
                                                                        <div class="between-center flex-wrap g-3">
                                                                            <div class="nk-block-text">
                                                                                <h6>Change Password</h6>
                                                                                <p>Set a unique password to protect your account.</p>
                                                                            </div>
                                                                            <div class="nk-block-actions flex-shrink-sm-0">
                                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                                    <li class="order-md-last">
                                                                                        <a href="#" class="btn btn-primary">Change Password</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .card-inner -->
                                                                    <div class="card-inner">
                                                                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                            <div class="nk-block-text">
                                                                                <h6>2 Factor Auth &nbsp; <span class="badge bg-success ms-0">Enabled</span></h6>
                                                                                <p>Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app. </p>
                                                                            </div>
                                                                            <div class="nk-block-actions">
                                                                                <a href="#" class="btn btn-primary">Disable</a>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- .card-inner -->
                                                                </div><!-- .card-inner-group -->
                                                            </div><!-- .card -->
                                                        </div><!-- .nk-block -->
                                                    </div><!--tab pane-->
                                                    <div class="tab-pane" id="tabItem4">
                                                        <div class="nk-block-head nk-block-head-lg">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">Recent Activity</h5>
                                                                <div class="nk-block-des">
                                                                    <p>Here is your last 20 login activities log. <span class="text-soft"><em class="icon ni ni-info"></em></span></p>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block card card-bordered">
                                                            <table class="table table-ulogs">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                                                                        <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                                                        <th class="tb-col-time"><span class="overline-title">Time</span></th>
                                                                        <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                        <td class="tb-col-action"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Mozilla on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on iMac</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Nov 12, 2019 <span class="d-none d-sm-inline-block">08:56 PM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Nov 03, 2019 <span class="d-none d-sm-inline-block">04:29 PM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Mozilla on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Oct 29, 2019 <span class="d-none d-sm-inline-block">09:38 AM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on iMac</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Oct 23, 2019 <span class="d-none d-sm-inline-block">04:16 PM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Oct 15, 2019 <span class="d-none d-sm-inline-block">11:41 PM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Mozilla on Window</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Oct 13, 2019 <span class="d-none d-sm-inline-block">05:43 AM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tb-col-os">Chrome on iMac</td>
                                                                        <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                        <td class="tb-col-time"><span class="sub-text">Oct 03, 2019 <span class="d-none d-sm-inline-block">04:12 AM</span></span></td>
                                                                        <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!-- .nk-block -->
                                                    </div><!--tab pane-->
                                                </div><!--tab content-->
                                            </div><!--card inner-->
                                        </div><!-- .card-content -->
                                    </div><!--card-->
                                </div><!--nk block lg-->
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
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control date-picker" id="birth-day" placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="address-l2" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="address-st" value="Kentucky">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select js-select2" id="address-county" data-placeholder="Select Country">
                                            <option value="">Country</option>
                                            <option value="option">Canada</option>
                                            <option value="option">United State</option>
                                            <option value="option">United Kindom</option>
                                            <option value="option">Australia</option>
                                            <option value="option">India</option>
                                            <option value="option">Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>