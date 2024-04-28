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
    <title>Appointment List | Hplus Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">

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
                                            <h3 class="nk-block-title page-title">Appointment List</h3>
                                            
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addAppointment" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Appointment</span></a>
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
                                                                    <option value="email">Send Email</option>
                                                                    <option value="change">Change Doctor</option>
                                                                    <option value="depart">Change Depart</option>
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
                                                                                            <span class="sub-title dropdown-title">Filter Appointment</span>
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
                                                                                                        <label class="overline-title overline-title-alt">Department</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Any Type</option>
                                                                                                            <option value="medicine">Medicine</option>
                                                                                                            <option value="gastroenterology">Gastroenterology</option>
                                                                                                            <option value="cardiology">Cardiology</option>
                                                                                                            <option value="orthopaedics">Orthopaedics</option>
                                                                                                            <option value="neurology">Neurology</option>
                                                                                                            <option value="urology">Urology</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div><!-- .col -->
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Any Status</option>
                                                                                                            <option value="visited">Visited</option>
                                                                                                            <option value="rejected">rejected</option>
                                                                                                            <option value="waiting">Waiting</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="deleted">Deleted</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div><!-- .col -->
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Doctor</label>
                                                                                                        <div class="form-control-wrap">
                                                                                                            <select class="form-select js-select2" data-placeholder="Select Doctor">
                                                                                                                <option value="">Patient Email</option>
                                                                                                                <option value="option_select_consulant">Joe Larson</option>
                                                                                                                <option value="option_select_consulant">Patrick Newman</option>
                                                                                                                <option value="option_select_consulant">Newman Freeman</option>
                                                                                                                <option value="option_select_consulant">Jane Montgomery</option>
                                                                                                                <option value="option_select_consulant">Emma Walker</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- .col -->
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
                                                                                                </div><!-- .col -->
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
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by patient name or id">
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
                                                        <div class="nk-tb-col tb-col-lg"><span>Date</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                    </div><!-- .nk-tb-item -->
                                                    @foreach ($appointments as $item)
                                                    

                                                        <div class="modal fade" tabindex="-1" role="dialog" id="editAppointment{{$item->id}}">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                                    <div class="modal-body modal-body-md">
                                                                        <h5 class="modal-title">Edit Appointment</h5>
                                                                        <form action="{{url('/hospital/appointment/update')}}" method="POST" class="mt-4">
                                                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                                                            <div class="row g-gs">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label" for="name">Appointment Date</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <input name="date" type="date" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .col -->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Status</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <select name="status" class="form-select js-select2" data-placeholder="Select Status">
                                                                                                <option value="">Select</option>
                                                                                                <option value="Approved">Approved</option>
                                                                                                <option value="Pending">Pending</option>
                                                                                                <option value="rejected">rejected</option>
                                                                                            </select>
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
                                                        <div class="modal fade" tabindex="-1" role="dialog" id="addAppointment">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                                    <div class="modal-body modal-body-md">
                                                                        <h5 class="modal-title">Add Appointment</h5>
                                                                        <form action="{{ Route('hospital/appointment') }}" method="POST" class="mt-4">
                                                                            @csrf
                                                                            <div class="row g-gs">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label" for="name">Appointment Date</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <input name="date" type="date" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .col -->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Status</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <select name="status" class="form-select js-select2" data-placeholder="Select Status">
                                                                                                <option value="">Select</option>
                                                                                                <option value="Approved">Approved</option>
                                                                                                <option value="Pending">Pending</option>
                                                                                                <option value="rejected">rejected</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .col -->
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label" for="name">Patient Email</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <input name="email" type="text" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .col -->

                                                                               
                                                                                <div class="col-12">
                                                                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                                        <li>
                                                                                            <button type="submit" class="btn btn-primary">Add Appointment</button>
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
                                                                        <span>A</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">
                                                                            @php
                                                                                $patient = App\Models\User::find($item->patient_id);
                                                                                if ($patient) {
                                                                                    echo $patient->name;
                                                                                } else {
                                                                                    echo 'User Not Found';
                                                                                }
                                                                            @endphp
                                                                            <span class="dot dot-info d-md-none ms-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span class="tb-lead-sub">{{ date('d/m/Y', strtotime($item->appointment_date)) }}</span>
                                                            </div>

                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-status text-info">{{ $item->status }}</span>
                                                                <span data-bs-toggle="tooltip" title="Waiting at 18 Dec, 2019 01:02 PM" data-bs-placement="top"><em class="icon ni ni-info"></em></span>
                                                            </div>

                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                   
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="{{url('/hospital/appointment/AprouveAppointment/'.$item->id)}}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve">
                                                                            <em class="icon ni ni-check-fill-c"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="{{url('/hospital/appointment/RejectAppointment/'.$item->id)}}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">
                                                                            <em class="icon ni ni-cross-fill-c"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a data-bs-toggle="modal" href="#editAppointment{{$item->id}}"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>

                                                                                    <li><a href="{{url('/hospital/appointment/'.$item->id)}}"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                        <img src="{{ asset('images/flags/arg.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Argentina</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/aus.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Australia</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/bangladesh.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Bangladesh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/canada.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Canada <small>(English)</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/china.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Centrafricaine</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/china.png') }}" alt="" class="country-flag">
                                        <span class="country-name">China</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/french.png') }}" alt="" class="country-flag">
                                        <span class="country-name">France</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/germany.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Germany</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/iran.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Iran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/italy.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Italy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/mexico.png') }}" alt="" class="country-flag">
                                        <span class="country-name">México</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/philipine.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Philippines</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/portugal.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Portugal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/s-africa.png') }}" alt="" class="country-flag">
                                        <span class="country-name">South Africa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/spanish.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Spain</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/switzerland.png') }}" alt="" class="country-flag">
                                        <span class="country-name">Switzerland</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/uk.png') }}" alt="" class="country-flag">
                                        <span class="country-name">United Kingdom</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="country-item">
                                        <img src="{{ asset('images/flags/english.png') }}" alt="" class="country-flag">
                                        <span class="country-name">United State</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modla-dialog -->
        </div><!-- .modal -->
        <!-- Add Appoinment-->

        <!-- Edit Appoinment-->

        <!-- JavaScript -->
        <script src="{{ asset('js/bundle.js') }}"></script>

        <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
