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
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Doctor/Nurse</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('hospital/doctor-nurse-add') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                    <a href="{{ route('hospital/doctor-nurse-add') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Doctor / Nurse</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="row g-gs">
                                    {{-- card --}}
                                    @foreach ($doctorNurse as $item)
                                        <div class="col-sm-6 col-lg-4 col-xxl-4">
                                            <div class="modal fade" tabindex="-1" role="dialog" id="editDoctor{{ @$item->id }}">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <a href="" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                        <div class="modal-body modal-body-md">
                                                            <h5 class="modal-title">Update Department</h5>
                                                            <div class="card-inner">
                                                                <form class="row gy-4" method="POST" action="{{url('/hospital/doctor-nurse-add/update')}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input name="id" type="hidden" value="{{$item->id}}">
                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Gender</label>
                                                                            <div class="form-control-wrap">
                                                                                <select name="gender" class="form-select js-select2" data-placeholder="Select Gender">
                                                                                    <option value="">Select Gender</option>
                                                                                    <option value="1">Male</option>
                                                                                    <option value="0">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->

                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Address</label>
                                                                            <div class="form-control-wrap">
                                                                                <input value="{{ $item->Address }}" name="Address" type="text" class="form-control" id="address" placeholder="Address">
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->
                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Rank</label>
                                                                            <div class="form-control-wrap">
                                                                                <input value="{{ $item->rank }}" name="rank" type="text" class="form-control" id="Rank" placeholder="Rank">
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->
                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Salary</label>
                                                                            <div class="form-control-wrap">
                                                                                <input value="{{ $item->salary }}" name="salary" type="text" class="form-control" id="Salary" placeholder="Salary">
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->

                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Department</label>
                                                                            <div class="form-control-wrap">
                                                                                <select name="department_id" class="form-select js-select2" data-placeholder="Select Department">
                                                                                    <option value="">Select</option>
                                                                                    @foreach ($departments as $department)
                                                                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->
                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Specialty</label>
                                                                            <div class="form-control-wrap">
                                                                                <select name="speciality_id" class="form-select js-select2" data-placeholder="Select Department">
                                                                                    <option value="">Select</option>
                                                                                    @foreach ($speciality as $specialities)
                                                                                        <option value="{{ $specialities->id }}">{{ $specialities->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->
                                                                    <div class="col-xxl-3 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Status</label>
                                                                            <div class="form-control-wrap">
                                                                                <select name="status" class="form-select js-select2">
                                                                                    <option value="">Status</option>
                                                                                    <option value="Inactive">Inactive</option>
                                                                                    <option value="Active">Active</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="col-xxl-5 col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">National ID</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input name="national_id" type="file" multiple class="form-file-input" id="nid">
                                                                                        <label class="form-file-label" for="nid">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-5 col-md-4">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Upload Photo</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input type="file" name="Doctor_image" multiple class="form-file-input" id="customFile">
                                                                                        <label class="form-file-label" for="customFile">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        

                                                                    </div>
                                                                    <div class="col-xxl-12 col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Certificates</label>
                                                                            <div class="form-control-wrap">
                                                                                <div class="form-file">
                                                                                    <input name="certificate" type="file" multiple class="form-file-input" id="certificates">
                                                                                    <label class="form-file-label" for="certificates">Choose files</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--col-->

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary">Edit Doctor/Nurse</button>
                                                                        </div>
                                                                    </div><!--col-->
                                                                </form><!--row-->
                                                            </div><!-- .card-inner-group -->
                                                        </div><!-- .modal-body -->
                                                    </div><!-- .modal-content -->
                                                </div><!-- .modal-dialog -->
                                            </div><!-- .modal -->

                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="team-options">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        {{--  --}}
                                                                        <li><a data-bs-toggle="modal" href="#editDoctor{{ @$item->id }}"> <em class="icon ni ni-edit"></em><span>Edit</span></a></li>

                                                                        <li><a href="{{ url('/hospital/doctor-nurse-add', ['id' => @$item->id]) }}"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        {{--  --}}

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <img src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>{{@$item->user->name}}</h6>
                                                                <span class="badge rounded-pill bg-primary">Doctor</span>
                                                                {{-- <span class="sub-text">FCPS</span> --}}
                                                            </div>
                                                        </div>
                                                        <ul class="team-info">
                                                            <li><span>Department</span><span>{{$item->department->name}}</span></li>
                                                            <li><span>Join Date</span><span>{{$item->created_at}}</span></li>
                                                            <li><span>Speciality</span><span>{{$item->speciality->name}}</span></li>
                                                            <li><span>Email</span><span>{{@$item->user->email}}</span></li>
                                                        </ul>
                                                        <div class="team-view">
                                                            <a href="#" class="btn btn-block btn-dim btn-primary"><span>Send Email</span></a>
                                                        </div>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    @endforeach
                                    {{-- card end --}}
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
    <!-- JavaScript -->
    <script src="{{ asset('js/bundle.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
