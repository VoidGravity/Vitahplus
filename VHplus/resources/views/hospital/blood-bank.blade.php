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
    <title>Blood Bank | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Blood Bank</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary d-md-none" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                        <a href="#" class="dropdown-toggle btn btn-primary d-none d-md-inline-flex" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em><span>Add Donor/Group</span></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a data-bs-toggle="modal" href="#addDonor"><span>Add Donor</span></a></li>
                                                                <li><a data-bs-toggle="modal" href="#addBlood"><span>Add Group</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-5">
                                            <div class="card card-bordered card-stretch">
                                                <div class="card-inner-group">
                                                    <div class="card-inner position-relative card-tools-toggle">
                                                        <div class="card-title-group">
                                                            <div class="card-tools">
                                                                <div class="form-inline flex-nowrap gx-3">
                                                                    <div class="form-wrap w-150px">
                                                                        <h6 class="text-soft">Blood Group</h6>
                                                                    </div>
                                                                </div><!-- .form-inline -->
                                                            </div><!-- .card-tools -->
                                                            <div class="card-tools me-n1">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li>
                                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="groupSearch"><em class="icon ni ni-search"></em></a>
                                                                    </li><!-- li -->
                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .card-tools -->
                                                        </div><!-- .card-title-group -->
                                                        <div class="card-search search-wrap" data-search="groupSearch">
                                                            <div class="card-body">
                                                                <div class="search-content">
                                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="groupSearch"><em class="icon ni ni-arrow-left"></em></a>
                                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by blood group">
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
                                                                <div class="nk-tb-col"><span class="sub-text">Group</span></div>
                                                                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Amount (In Bags)</span></div>
                                                                <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                <div class="nk-tb-col nk-tb-col-tools"></div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                                        <label class="custom-control-label" for="uid1"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="fw-bold">A+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>30</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">A-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>10</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-warning">Low</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">B+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>40</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">B-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>30</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-success">Available</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">AB+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>18</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-warning">Low</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">AB-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>00</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-danger">Unavailable</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">O+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>10</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-warning">Low</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                                                    <span class="fw-bold">O-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>00</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-status text-danger">Unavailable</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                <em class="icon ni ni-trash"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editBlood" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                        </div><!-- .nk-tb-list -->
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-7">
                                            <div class="card card-bordered card-stretch h-100">
                                                <div class="card-inner-group">
                                                    <div class="card-inner position-relative card-tools-toggle">
                                                        <div class="card-title-group">
                                                            <div class="card-tools">
                                                                <div class="form-inline flex-nowrap gx-3">
                                                                    <div class="form-wrap w-150px">
                                                                        <h6 class="text-soft">Donor List</h6>
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
                                                                                                    <span class="sub-title dropdown-title">Filter Donor</span>
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
                                                                                                                <label class="overline-title overline-title-alt">Group</label>
                                                                                                                <select class="form-select js-select2">
                                                                                                                    <option value="any">Select</option>
                                                                                                                    <option value="a-positive">A+</option>
                                                                                                                    <option value="a-negetive">A-</option>
                                                                                                                    <option value="ab-positive">AB+</option>
                                                                                                                    <option value="ab-negetive">AB-</option>
                                                                                                                    <option value="b-positive">B+</option>
                                                                                                                    <option value="b-negetive">B-</option>
                                                                                                                    <option value="o-positive">O+</option>
                                                                                                                    <option value="o-negetive">O-</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="form-group">
                                                                                                                <label class="overline-title overline-title-alt">Last Donate</label>
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
                                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or blood group">
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
                                                                        <input type="checkbox" class="custom-control-input" id="uid9">
                                                                        <label class="custom-control-label" for="uid9"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col"><span class="sub-text">Donor</span></div>
                                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Gender</span></div>
                                                                <div class="nk-tb-col tb-col-mb"><span class="sub-text">Type</span></div>
                                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Phone</span></div>
                                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Last Donate Date</span></div>
                                                                <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
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
                                                                        <div class="user-avatar sm bg-primary-dim">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                                            <span>info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Male</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>B+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+811 847-4958</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>10/02/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid11">
                                                                        <label class="custom-control-label" for="uid11"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar sm">
                                                                            <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Ashley Lawson</span>
                                                                            <span>ashley@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Male</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>AB+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+124 394-1787</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>25/03/2020</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid12">
                                                                        <label class="custom-control-label" for="uid12"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar sm bg-info-dim">
                                                                            <span>JL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Joe Larson</span>
                                                                            <span>larson@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Female</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>AB-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+168 603-2320</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>10/04/2021</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid13">
                                                                        <label class="custom-control-label" for="uid13"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar sm bg-danger-dim">
                                                                            <span>JM</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Jane Montgomery</span>
                                                                            <span>jane84@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Female</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>B-</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+439 271-5360</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>11/02/2021</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid14">
                                                                        <label class="custom-control-label" for="uid14"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar sm">
                                                                            <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Frances Burns</span>
                                                                            <span>frances@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Male</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>B+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+639 130-3150</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>11/01/2021</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div><!-- .nk-tb-item -->
                                                            <div class="nk-tb-item">
                                                                <div class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid15">
                                                                        <label class="custom-control-label" for="uid15"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar sm">
                                                                            <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Alan Butler</span>
                                                                            <span>butler@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-md">
                                                                    <span>Female</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-mb">
                                                                    <span>AB+</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-lg">
                                                                    <span>+963 309-1706</span>
                                                                </div>
                                                                <div class="nk-tb-col tb-col-sm">
                                                                    <span>10/02/2021</span>
                                                                </div>
                                                                <div class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a class="btn btn-trigger btn-icon" data-bs-toggle="modal" href="#editDonor" data-bs-placement="top" title="Edit">
                                                                                <em class="icon ni ni-edit-fill"></em>
                                                                            </a>
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
                                        </div><!-- .col -->
                                    </div><!-- .row -->
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
    <!-- Add Blood Group-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addBlood">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Blood Group</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="addBloodGroup">Blood Group</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="addBloodGroup" placeholder="Blood Group">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="addCapacity">Amount (In Bags)</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="addCapacity" placeholder="Amount">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Available</option>
                                            <option value="option_select_status">Low</option>
                                            <option value="option_select_status">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Blood Group</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Edit Blood Group-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editBlood">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Blood Group</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editBloodGroup">Blood Group</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editBloodGroup" placeholder="Blood Group" value="A+">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editCapacity">Amount (In Bags)</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editCapacity" placeholder="Capacity" value="30">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Available</option>
                                            <option value="option_select_status">Low</option>
                                            <option value="option_select_status">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Add Donor-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addDonor">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Donor</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="email" placeholder="example@email.com">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="mobile">Mobile Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="mobile" placeholder="Mobile No.">
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Donate Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Medical Conditon Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Upload Photo</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="customFile">
                                            <label class="form-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Donor</button>
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
    <!-- Edit Donor-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editDonor">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Donor</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editName">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editName" placeholder="Name" value="Abu Bin Ishtiyak">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editEmail">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="editEmail" placeholder="example@email.com" value="info@softnio.com">
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
                                    <label class="form-label">Blood Group</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Group">
                                            <option value="">Select</option>
                                            <option value="option_select_blood">B+</option>
                                            <option value="option_select_blood">A+</option>
                                            <option value="option_select_blood">A-</option>
                                            <option value="option_select_blood">AB+</option>
                                            <option value="option_select_blood">AB-</option>
                                            <option value="option_select_blood">B-</option>
                                            <option value="option_select_blood">O+</option>
                                            <option value="option_select_blood">O-</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Donate Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10/02/2020">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Medical Condition Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>No Medical Condition!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Upload Photo</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="editCustomFile">
                                            <label class="form-file-label" for="editCustomFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
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
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>