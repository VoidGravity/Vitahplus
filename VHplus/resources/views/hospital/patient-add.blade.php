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
    <title>Add Patient - Hospital Manegment | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Add Patient</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Input new Patient information carefully.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <form method="POST" action="" class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Personal Info</h5>
                                                        <p>Add common infomation like Name, Email etc </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input  name="name" type="text" class="form-control" id="full-name" placeholder="Full Name">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                       
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Gender</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="Gender" class="form-select js-select2" data-placeholder="Select Gender">
                                                                        <option value="">Select Gender</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="0">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email">Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                      
                                                      
                                                    </div><!--row-->
                                                </div>
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">General Info</h5>
                                                        <p>Some common medical information about patient. </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Height</label>
                                                                <input name="height" type="text" class="form-control" id="height" placeholder="Height">
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Weight</label>
                                                                <input name="weight" type="text" class="form-control" id="weight" placeholder="Weight">
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                                <br>
                                                <div class="d-flex justify-content-end">

                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Add Doctor/Nurse</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </form>

                                            <!-- .card-inner -->
                                            {{-- <div class="card-inner">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h5 class="title nk-block-title">Madical Condition</h5>
                                                        <p>Details information about patient current medical condition. </p>
                                                    </div>
                                                </div>
                                                <div class="nk-block">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-6 col-md-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="symptoms" placeholder="Symptoms">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Symptoms Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Symptoms">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_symptoms">General Symptoms</option>
                                                                        <option value="option_select_symptoms">Uncommon Symptoms</option>
                                                                        <option value="option_select_symptoms">Inherited Symptoms</option>
                                                                        <option value="option_select_symptoms">Viral Symptoms</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Casualty</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Casualty">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_casualty">Yes</option>
                                                                        <option value="option_select_casualty">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Department</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Department">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_department">Allergy and immunology</option>
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
                                                                <label class="form-label">Consultant Doctor</label>
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
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Patient Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Type">
                                                                        <option value="">Select</option>
                                                                        <option value="option_select_patient">OPD Patient</option>
                                                                        <option value="option_select_patient">IPD Patient</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Admit Date</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-icon form-icon-right">
                                                                        <em class="icon ni ni-calendar"></em>
                                                                    </div>
                                                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                                </div>
                                                            </div>
                                                        </div><!--col-->
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Group</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                                                        <option value="default_option">Select</option>
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
                                                        <div class="col-xxl-3 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Bed Number</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2" data-placeholder="Select Bed">
                                                                        <option value="">Select</option>
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
                                                        <div class="col-xxl-3 col-md-4">
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
                                                                <button type="submit" class="btn btn-primary">Add Patient</button>
                                                            </div>
                                                        </div><!--col-->
                                                    </div><!--row-->
                                                </div>
                                            </div><!-- .card-inner --> --}}
                                            
                                        </div>
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