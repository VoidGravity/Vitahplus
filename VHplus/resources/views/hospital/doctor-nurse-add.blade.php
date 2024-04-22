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
    <title>Add Doctor - Hospital Manegment | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Add Doctor/Nurse</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div>
                                            @if(session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{session('success')}}
                                            </div>
                                            @elseif(session('fail'))
                                            <div class="alert alert-danger" role="alert">
                                                {{session('fail')}}
                                            </div>
                                            @elseif(session('fail'))
                                            <div class="alert alert-danger" role="alert">
                                                {{session('error')}}
                                            </div>
                                            @endif
                                            
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <form class="row gy-4" method="POST" action="" enctype="multipart/form-data">
                                                
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
                                                            <input name="Address" type="text" class="form-control" id="address" placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Rank</label>
                                                        <div class="form-control-wrap">
                                                            <input name="rank" type="text" class="form-control" id="Rank" placeholder="Rank">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Salary</label>
                                                        <div class="form-control-wrap">
                                                            <input name="salary" type="text" class="form-control" id="Salary" placeholder="Salary">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">User Email</label>
                                                        <div class="form-control-wrap">
                                                            <input name="UserEmail" type="text" class="form-control" id="UserEmail" placeholder="exemple@gmail.com">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                               
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Department</label>
                                                        <div class="form-control-wrap">
                                                            <select name="department_id" class="form-select js-select2" data-placeholder="Select Department">
                                                                <option value="">Select</option>
                                                                @foreach($departments as $department)
                                                                <option value="{{$department->id}}">{{$department->name}}</option>
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
                                                                @foreach($speciality as $specialities)
                                                                <option value="{{$specialities->id}}">{{$specialities->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                               
                                                <div class="col-xxl-3 col-md-4">
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
                                                <div class="col-xxl-3 col-md-4">
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
                                                <div class="col-xxl-3 col-md-4">
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
                                                
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Add Doctor/Nurse</button>
                                                    </div>
                                                </div><!--col-->
                                            </form><!--row-->
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
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>