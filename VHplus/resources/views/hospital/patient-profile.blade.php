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
    <title>Patient Details | DashLite Admin Template</title>
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
                                        <h3 class="nk-block-title page-title">Patinent/ <strong class="text-primary small">{{$patient->name}}</strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em class="icon ni ni-property"></em><span>Diagnosis</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><em class="icon ni ni-capsule-fill"></em><span>Prescription</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem4"><em class="icon ni ni-money"></em><span>Charges</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-wallet-in"></em><span>Payment</span> </a>
                                                    </li>
                                                </ul>
                                                <div class="card-inner">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem1">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Personal Information</h6>
                                                                    <p>Patients personal information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-white btn-icon btn-outline-light" data-bs-toggle="modal" href="#editPersonal">
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Name</span>
                                                                            <span class="profile-ud-value">{{$patient->name}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Gender</span>
                                                                            <span class="profile-ud-value">
                                                                                @if ($patient->Gender = 1)
                                                                                Male 
                                                                                @else
                                                                                Female 
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Height</span>
                                                                            <span class="profile-ud-value">{{$patient->height}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">weight</span>
                                                                            <span class="profile-ud-value">{{$patient->weight}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Patient ID</span>
                                                                            <span class="profile-ud-value">#{{$patient->id}}</span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Bed</span>
                                                                            <span class="profile-ud-value">104 - VIP Ward - 1st Floor</span>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Email Address</span>
                                                                            <span class="profile-ud-value">{{$patient->email}}</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block -->
                                                            {{-- <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-line">
                                                                    <h6 class="title overline-title text-base">Additional Information</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Consulant By</span>
                                                                            <span class="profile-ud-value">Ernesto Vargas</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Patient Type</span>
                                                                            <span class="profile-ud-value">In Patient</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Country</span>
                                                                            <span class="profile-ud-value">United State</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Nationality</span>
                                                                            <span class="profile-ud-value">United State</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block --> --}}
                                                            {{-- <div class="nk-divider divider md"></div> --}}
                                                            {{-- <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                    <h5 class="title">Doctors Note</h5>
                                                                    <a href="#" class="link link-sm">+ Add Note</a>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="bq-note">
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                            <span class="bq-note-sep sep">|</span>
                                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                            <span class="bq-note-sep sep">|</span>
                                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                </div><!-- .bq-note -->
                                                            </div><!-- .nk-block --> --}}
                                                        </div><!-- tab pane -->
                                                        <div class="tab-pane" id="tabItem2">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Diagnosis Information</h6>
                                                                    <p>Patients diagnosis information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addDiagnosis">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Report Type</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>CT Scan</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Done</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Test</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Pending</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Analysis</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Tempore aut incidunt accusamus accusantium deleniti? Labore odio aperiam mollitia quaerat quos!</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Pending</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Vascular Sonography</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Lquia soluta illo sed veniam repudiandae esse sequi qui impedit facilis laboriosam sapiente suscipit!</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Done</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem3">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Prescription Information</h6>
                                                                    <p>Patients prescription information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPrescription">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Medicine</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Medicine Category</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Dosage</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Instruction</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Prescribed By</span></div>
                                                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Status</span></div>
                                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Erovit plus</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Capsule</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take after full meal for 7 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Napa Extra</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Tablet</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 1 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take after full meal for 3 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Sergel</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Capsule</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take before meal for 15 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem4">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Charges Information</h6>
                                                                    <p>Patients charges for service.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addCharges">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Category</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Charges Type</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Standrad Charges ($)</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">TPA Charges ($)</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Applied ($)</span></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>Eye Check</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Procedures</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>35</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>00</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>35</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Analysis</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Procedures</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>65</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>00</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>65</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem5">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Payment Information</h6>
                                                                    <p>Patients payment information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPayment">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Payment Method</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Amount ($)</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Cash</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>200</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Paid</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Cash</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>1923</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Due</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                    </div><!--tab content-->
                                                </div><!--card inner-->
                                            </div><!-- .card-content -->
                                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <div class="badge bg-outline-light rounded-pill ucap">Patinet</div>
                                                                <h5>{{$patient->name}}</h5>
                                                                <span class="sub-text">{{$patient->email}}</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    {{-- <div class="card-inner card-inner-sm">
                                                        <ul class="btn-toolbar justify-center gx-1">
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner --> --}}
                                                    <div class="card-inner">
                                                        <div class="row text-center">
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$2123</span>
                                                                    <span class="sub-text">Total Bill</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$200</span>
                                                                    <span class="sub-text">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$1923</span>
                                                                    <span class="sub-text">Due</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                                        <div class="row g-3">
                                                            <div class="col-6">
                                                                <span class="sub-text">Patient ID:</span>
                                                                <span>#{{$patient->id}}</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Admit Date</span>
                                                                <span>{{$patient->created_at}}</span>
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <span class="sub-text">Condition</span>
                                                                <span class="lead-text text-success">Normal</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Discharged Date</span>
                                                                <span>16 Feb, 2019</span>
                                                            </div> --}}
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    {{-- <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-3">Groups</h6>
                                                        <ul class="g-1">
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">cardiology</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .card-inner --> --}}
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-aside -->
                                        </div><!-- .card-aside-wrap -->
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
    <!-- Edit Patient Personal Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editPersonal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Personal Info</h5>
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
                                    <label class="form-label">Date of Birth</label>
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
                                        <select class="form-select js-select2" data-placeholder="Select Bed Number">
                                            <option value="">Select</option>
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
                                        <select class="form-select js-select2" data-placeholder="Select Doctor">
                                            <option value="">Select</option>
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
                                    <label class="form-label">Admit Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10-02-2020">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Discharged Date</label>
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
    <!-- Add Diagnosis  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addDiagnosis">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Diagnosis Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="reportType">Report Type</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="reportType" placeholder="Report Type">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
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
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Done</option>
                                            <option value="option_select_status">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Test Report</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="testReport">
                                            <label class="form-file-label" for="testReport">Choose files</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
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
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Diagnosis</button>
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
    <!-- Add Prescription  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addPrescription">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Prescription Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="medicineCategory">Medicine Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="medicineCategory" placeholder="Medicine Category">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="medicine">Medicine</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="medicine" placeholder="Medicine">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="dosage">Dosage</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="dosage" placeholder="0 - 0 - 0">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Prescribed By</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Doctor">
                                            <option value="">Select</option>
                                            <option value="option_select_consulant">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Janet Snyder</option>
                                            <option value="option_select_consulant">Amelia Grant</option>
                                            <option value="option_select_consulant">Debra Grant</option>
                                            <option value="option_select_consulant">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Instruction</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select Status</option>
                                            <option value="option_select_status">Active</option>
                                            <option value="option_select_status">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Prescription</button>
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
    <!-- Add Charges  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addCharges">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Charges Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
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
                                    <label class="form-label" for="category">Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="category" placeholder="Category">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="chargesType">Charges Type</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="chargesType" placeholder="Charges Type">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="standradChargesType">Standrad Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="standradChargesType" placeholder="Standrad Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="tpaChargesType">TPA Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="tpaChargesType" placeholder="TPA Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="applied ChargesType">Applied Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="applied ChargesType" placeholder="Applied Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Charges</button>
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
    <!-- Add Payment  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addPayment">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Payment Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
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
                                    <label class="form-label">Payment Method</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Method">
                                            <option value="">Select</option>
                                            <option value="option_select_method">Cash</option>
                                            <option value="option_select_method">Card</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="amount">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="amount" placeholder="Amount">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Paid</option>
                                            <option value="option_select_status">Due</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Payment</button>
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