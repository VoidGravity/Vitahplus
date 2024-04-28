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
    <title>Birth List | Hplus Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Birth Report</h3>
                                            <div>

                                                @if (isset($success))
                                                    <div class="example-alert">
                                                        <div class="alert alert-success alert-icon"><em class="icon ni ni-check-circle"></em>
                                                            {{ $success }}
                                                        </div>
                                                    </div>
                                                @elseif (isset($error))
                                                    <div class="example-alert">
                                                        <div class="alert alert-danger alert-icon"><em class="icon ni ni-cross-circle"></em>
                                                            {{ $error }}
                                                        </div>
                                                    </div>
                                                @elseif (isset($warning))
                                                    <div class="example-alert">
                                                        <div class="alert alert-warning alert-icon"><em class="icon ni ni-alert-circle"></em>
                                                            {{ $warning }}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="nk-block-head-content">
                                            <a data-bs-toggle="modal" href="#addBirth" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a data-bs-toggle="modal" href="#addBirth" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Birth Report</span></a>
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
                                                                    <option value="delete">Delete Selected</option>
                                                                    <option value="edit">Edit Selected</option>
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
                                                                                                        <label class="overline-title overline-title-alt">Type</label>
                                                                                                        <select class="form-select js-select2">
                                                                                                            <option value="any">Select</option>
                                                                                                            <option value="normal">Normal</option>
                                                                                                            <option value="cesarean">Cesarean Section</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Date</label>
                                                                                                        <div class="form-control-wrap">
                                                                                                            <input type="date" class="form-control">
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
                                                        <div class="nk-tb-col"><span>Mother Name</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Gender</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Father Name</span></div>
                                                        <div class="nk-tb-col"><span>Date</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Report</span></div>
                                                    </div><!-- .nk-tb-item -->
                                                    @foreach ($birthReports as $item)
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
                                                                        <span>
                                                                            {{-- <div class="nk-tb-col tb-col-md"> --}}
                                                                                <span>{{ substr($item->mother_name, 0, 1) }}</span>
                                                                            {{-- </div> --}}
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-tb-col tb-col-md">
                                                                        <span>{{ $item->mother_name }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-mb">
                                                                <span>{{ $item->Gender == 1 ? 'Male' : 'Female' }}</span>
                                                            </div>

                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>{{ $item->father_name }}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-date">{{ $item->date }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span>{{ $item->report }}</span>
                                                            </div>

                                                        </div>
                                                    @endforeach
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
        <!-- Add Birth Report-->
        <div class="modal fade" tabindex="-1" role="dialog" id="addBirth">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                        <h5 class="modal-title">Add Birth Report</h5>
                        <form action="{{ route('hospital/birth-report') }}" method="POST" class="mt-4">
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="childName">Child Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="childName" placeholder="Child Name">
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <div class="form-control-wrap">
                                            <select name="Gender" class="form-select js-select2" data-placeholder="Select Gender">
                                                <option value="">Select</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="weight">Weight</label>
                                        <div class="form-control-wrap">
                                            <input name="weight" type="text" class="form-control" id="weight" placeholder="Weight">
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="weight">Heigth</label>
                                        <div class="form-control-wrap">
                                            <input name="height" type="text" class="form-control" id="weight" placeholder="Weight">
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Birth Date</label>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input name="date" type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">FRP Email</label>
                                        {{-- Financially responsible party --}}
                                        <div class="form-control-wrap">

                                            <input name="email" type="text" class="form-control" placeholder="email@exemple.com">
                                        </div>
                                    </div>
                                </div><!-- .col -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="motherName">Mother Name</label>
                                        <div class="form-control-wrap">
                                            <input name="mother_name" type="text" class="form-control" id="motherName" placeholder="Mother Name">
                                        </div>
                                    </div>
                                </div><!-- .col -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fatherName">Father Name</label>
                                        <div class="form-control-wrap">
                                            <input name="father_name" type="text" class="form-control" id="fatherName" placeholder="Father Name">
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fatherName">Report</label>
                                        <div class="form-control-wrap">
                                            <select name="report" class="form-select" id="report" placeholder="Report">
                                                <option value="">Select Report</option>
                                                <option value="Cesarean Section">Cesarean Section</option>
                                                <option value="Normal Delivery">Normal Delivery</option>
                                                <option value="Complications">Complications</option>
                                            </select>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-primary">Add Birth Report</button>
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
        <script src="{{ asset('js/bundle.js') }}"></script>

        <script src="{{ asset('js/scripts.js') }}"></script>
        <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
        <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
        <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>
