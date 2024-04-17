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
    <title>IPD Patient List | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">IPD/OPD - Patient Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 163 ipd patients in hospital.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <a href="{{route('hospital/patient-add')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="{{route('hospital/patient-add')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Patient</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">
                                                                <select class="form-select js-select2" data-search="off" data-placeholder="Bulk Action">
                                                                    <option value="">Bulk Action</option>
                                                                    <option value="email">Send Email</option>
                                                                    <option value="discharged">Discharged</option>
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
                                                                                            <span class="sub-title dropdown-title">Filter Patient</span>
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
                                                                                                        <label class="overline-title overline-title-alt">Bed</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Any Bed</option>
                                                                                                            <option value="cabin">Cabin</option>
                                                                                                            <option value="mward">Male Ward</option>
                                                                                                            <option value="fward">Male Ward</option>
                                                                                                            <option value="vip">VIP Cabin</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Consulant</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Any Consulant</option>
                                                                                                            <option value="ev">Ernesto Vargas</option>
                                                                                                            <option value="ve">Vargas Ernesto</option>
                                                                                                            <option value="ti">Tasmin Ifrat</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Admit Date</label>
                                                                                                        <div class="form-control-wrap">
                                                                                                            <div class="form-icon form-icon-right">
                                                                                                                <em class="icon ni ni-calendar"></em>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                                                        </div>
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
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or patient id">
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
                                                        <div class="nk-tb-col"><span class="sub-text">Patient</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">ID</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Gender</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Report</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Consulant</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Admit Date</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Bed</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Charges</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                        <span>info@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6985</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+811 847-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Ernesto Vargas</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>10/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>201-Cabin-3rd Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">350.99 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Ashley Lawson</span>
                                                                        <span>ashley@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6986</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+124 394-1787</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Janet Snyder</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>07/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>102-Mward-2nd Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">80.99 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-info">
                                                                        <span>JL</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Joe Larson</span>
                                                                        <span>larson@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6987</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+168 603-2320</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Amelia Grant</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>04/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>103-Fward-2nd Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">85.00 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-danger">
                                                                        <span>JM</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Jane Montgomery</span>
                                                                        <span>jane84@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6988</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+439 271-5360</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Amelia Grant</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>04/03/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>403-Cabin-4th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">685.50 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Frances Burns</span>
                                                                        <span>frances@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6989</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+639 130-3150</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Ernesto Vargas</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>02/03/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>402-Cabin-4th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">585.50 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Alan Butler</span>
                                                                        <span>butler@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6990</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+963 309-1706</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Janet Snyder</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>01/03/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>102-Fward-4th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">185.05 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-warning">
                                                                        <span>VL</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Victoria Lynch</span>
                                                                        <span>victoria@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6991</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+811 985-4846</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Amelia Grant</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>01/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>101-Fward-3rd Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">385.59 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-success">
                                                                        <span>PN</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Patrick Newman</span>
                                                                        <span>patrick@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6992</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+942 238-4474</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Debra Grant</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>01/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>501-Mward-5th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">201.99 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="{{asset('images/avatar/d-sm.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Jane Harris</span>
                                                                        <span>harris@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6993</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+123 447-2384</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Snyder Debra</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>01/02/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>502-Fward-5th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">185.95 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
                                                            <a href="{{route('hospital/patient-profile')}}">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-purple">
                                                                        <span>EW</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Emma Walker</span>
                                                                        <span>walker@example.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <a href="#">
                                                                <span class="fw-medium">#P6994</span>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>+463 471-7173</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <ul class="list-inline list-download">
                                                                <li>Reports<a href="#" class="popup"><em class="icon ni ni-download"></em></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-lead">Ernesto Vargas</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>10/03/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <span>505-Fward-5th Floor</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-amount">352.55 <span class="currency">USD</span></span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Move To Discharged">
                                                                        <em class="icon ni ni-curve-up-right"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{route('hospital/patient-profile')}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editInPatient"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
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
    <!-- Edit In Patient-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editInPatient">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update In Patient</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editName">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editName" value="Abu Bin Isthiyak" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editEmail">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="editEmail" value="info@softnio.com" placeholder="example@email.com">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editMobile">Mobile Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editMobile" placeholder="Mobile No." value="+811 847-4958">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Gender">
                                            <option value="">Select</option>
                                            <option value="option_select_sex">Male</option>
                                            <option value="option_select_sex">Female</option>
                                            <option value="option_select_sex">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bed Group</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                            <option value="">Select</option>
                                            <option value="option_select_bed">Cabin - 4th Floor</option>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bed Number</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select multiple options">
                                            <option value="default_option">201</option>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Consulant By</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select multiple options">
                                            <option value="default_option">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Janet Snyder</option>
                                            <option value="option_select_consulant">Amelia Grant</option>
                                            <option value="option_select_consulant">Debra Grant</option>
                                            <option value="option_select_consulant">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="testLabel">Test Reports</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="testReport">
                                            <label class="form-file-label" for="testReport">Choose files</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Admit Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10-02-2020">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
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