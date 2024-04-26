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
    <title>Death List | Hplus Admin Template</title>
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
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Death Report</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addDeath" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addDeath" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Death Report</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div>
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
                                                                                            <span class="sub-title dropdown-title">Filter Report</span>
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
                                                                                                        <label class="overline-title overline-title-alt">Gender</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Select</option>
                                                                                                            <option value="male">Male</option>
                                                                                                            <option value="female">Female</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Date</label>
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
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or id">
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
                                                        <div class="nk-tb-col"><span>Patient</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Gender</span></div>
                                                        <div class="nk-tb-col"><span>Date</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Report</span></div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-primary-dim">
                                                                    <span>J</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">John Marshall</span>
                                                                    <span>UD01544</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">18/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death Due To Fever.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm">
                                                                    <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Ashley Lawson</span>
                                                                    <span>UD01489</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">19/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death due to Blood Clute.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm">
                                                                    <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Kristen Hawkins</span>
                                                                    <span>UD01434</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">21/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Due to serious case.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-purple-dim">
                                                                    <span>T</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Tommy Vasquez</span>
                                                                    <span>UD01286</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">22/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death due to viral fever.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-teal-dim">
                                                                    <span>A</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alejandro Haynes</span>
                                                                    <span>UD01235</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">22/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Due to corona infected.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm">
                                                                    <img src="{{asset('images/avatar/d-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Brooke Harmon</span>
                                                                    <span>UD01223</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">23/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death due to Blood Clute.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-gray-dim">
                                                                    <span>T</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Trevor Miller</span>
                                                                    <span>UD01124</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">23/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Due to unsafe water accounted.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm">
                                                                    <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Lonnie Ferguson</span>
                                                                    <span>UD01120</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Female</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">24/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Due to serious case.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-danger-dim">
                                                                    <span>M</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Mack Kennedy</span>
                                                                    <span>UD00954</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">25/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death Due To Fever.</span>
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
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-warning-dim">
                                                                    <span>I</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Inez Wilkerson</span>
                                                                    <span>UD00472</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>Male</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-date">26/12/2020</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Death due to viral fever.</span>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div>
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
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
    <!-- Add Death Report-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addDeath">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Birth Report</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Patient Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" placeholder="Patient Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="patientId">Patient ID</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="patientId" placeholder="#P6985">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Death Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="guardianName">Guardian Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="guardianName" placeholder="Guardian Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="number">Guardian Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="number" placeholder="Guardian Phone">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="receiverName">Receiver Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="receiverName" placeholder="Receiver Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="receiverNumber">Receiver Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="receiverNumber" placeholder="Receiver Phone">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="receiverAddress">Receiver Address</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="receiverAddress" placeholder="Receiver Address">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Report</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Death Report</button>
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
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>