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
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="row gy-4">
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="first-name">First Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="first-name" placeholder="First Name" required>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="last-name">Last Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" data-placeholder="Select Gender">
                                                                <option value="">Select Gender</option>
                                                                <option value="option_select_gender">Male</option>
                                                                <option value="option_select_gender">Female</option>
                                                                <option value="option_select_gender">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Date of Birth</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker-alt" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no">Phone</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <div class="form-control-wrap">
                                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="password">Password</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Adddress</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="address" placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Designation</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="designation" placeholder="Designation">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Department</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" data-placeholder="Select Department">
                                                                <option value="">Select</option>
                                                                <option value="default_option">Allergy and immunology</option>
                                                                <option value="option_select_department">Anesthesiology</option>
                                                                <option value="option_select_department">Cardiology</option>
                                                                <option value="option_select_department">Dermatology</option>
                                                                <option value="option_select_department">Diagnostic radiology</option>
                                                                <option value="option_select_department">Emergency medicine</option>
                                                                <option value="option_select_department">Neurology</option>
                                                                <option value="option_select_department">Obstetrics and gynecology</option>
                                                                <option value="option_select_department">Ophthalmology</option>
                                                                <option value="option_select_department">Pathology</option>
                                                                <option value="option_select_department">Pediatrics</option>
                                                                <option value="option_select_department">Psychiatry</option>
                                                                <option value="option_select_department">Surgery</option>
                                                                <option value="option_select_department">Urology</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Specialist</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="specialist" placeholder="Specialist">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
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
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">National ID</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-file">
                                                                <input type="file" multiple class="form-file-input" id="nid">
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
                                                                <input type="file" multiple class="form-file-input" id="certificates">
                                                                <label class="form-file-label" for="certificates">Choose files</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Joining Date</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-xxl-3 col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2">
                                                                <option value="default_option">Active</option>
                                                                <option value="option_select_status">Inactive</option>
                                                                <option value="option_select_status">Pending</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Short Biography</label>
                                                        <div class="form-control-wrap">
                                                            <div class="quill-basic">
                                                                <p>Hello World!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--col-->
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Add Doctor/Nurse</button>
                                                    </div>
                                                </div><!--col-->
                                            </div><!--row-->
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