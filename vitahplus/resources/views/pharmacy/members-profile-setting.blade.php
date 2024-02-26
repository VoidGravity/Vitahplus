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
    <title>Members Profile Settings - Layout | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
            <div class="nk-sidebar-bar">
                <div class="nk-apps-brand">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="{{asset('images/logo-small.png')}}" srcset="./images/logo-small2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="{{asset('images/logo-dark-small.png')}}" srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body">
                        <div class="nk-sidebar-content" data-simplebar>
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu apps-menu">
                                    <li class="nk-menu-item active">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                                            <span class="nk-menu-icon"><em class="icon ni ni-capsule"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                                            <span class="nk-menu-icon"><em class="icon ni ni-plus-medi"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                            <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navPages">
                                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                                            <span class="nk-menu-icon"><em class="icon ni ni-server"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navError">
                                            <span class="nk-menu-icon"><em class="icon ni ni-alert-c"></em></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-hr"></li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-switch" data-target="navComponents">
                                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-md apps-menu">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link" title="Settings">
                                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                            <a href="#" data-bs-toggle="dropdown" data-offset="50,-50">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md ml-4">
                                <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>AB</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">Abu Bin Ishtiyak</span>
                                            <span class="sub-text text-soft">info@softnio.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                        <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navPharmacy">
                        <h5 class="title">Pharmacy</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Customer</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/add-customer.html" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/customer.html" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/customer-ledger.html" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                                    <span class="nk-menu-text">Medicine</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/add-medicine.html" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/medicine-list.html" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/medicine-details.html" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                    <span class="nk-menu-text">Manufacturer</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/manufacturer.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/manufacturer-ledger.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                    <span class="nk-menu-text">Return</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/add-wastage-return.html" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/wastage-return.html" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/add-manufacturer-return.html" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/manufacturer-return.html" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                                    <span class="nk-menu-text">Human resource</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/member.html" class="nk-menu-link"><span class="nk-menu-text">Member</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/members-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">Members Profile</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/attendence.html" class="nk-menu-link"><span class="nk-menu-text">Attendence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/salary.html" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Finance</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/income-list.html" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/expense-list.html" class="nk-menu-link"><span class="nk-menu-text">Expence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                    <span class="nk-menu-text">Report</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/sales-report.html" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/purchase-report.html" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pharmacy/stock-report.html" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/support.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
                                    <span class="nk-menu-text">Support</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/pharmacy/general-settings.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navHospital">
                        <h5 class="title">Hospital Manegment</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/hospital/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/hospital/appointment.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                                    <span class="nk-menu-text">Appointment List</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Patient</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/patient-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Patient</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/patient-list.html" class="nk-menu-link"><span class="nk-menu-text">IPD / OPD Patients</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/patient-profile.html" class="nk-menu-link"><span class="nk-menu-text">Patient Profile</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                                    <span class="nk-menu-text">Doctors / Nurses</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/doctor-nurse-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Doctor / Nurses</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/doctor-nurse-list.html" class="nk-menu-link"><span class="nk-menu-text">Doctors / Nurses</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Finance</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/income-list.html" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/expense-list.html" class="nk-menu-link"><span class="nk-menu-text">Expense</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                    <span class="nk-menu-text">Monitor Hospital</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/birth-report.html" class="nk-menu-link"><span class="nk-menu-text">Birth Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/blood-bank.html" class="nk-menu-link"><span class="nk-menu-text">Blood Bank</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/inventory-items.html" class="nk-menu-link"><span class="nk-menu-text">Inventory Items Reports</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-panel-fill"></em></span>
                                    <span class="nk-menu-text">Misc Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/bed-group.html" class="nk-menu-link"><span class="nk-menu-text">Bed Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/bed-allotment.html" class="nk-menu-link"><span class="nk-menu-text">Bed Allotment</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/department.html" class="nk-menu-link"><span class="nk-menu-text">Department</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/hospital/death-report.html" class="nk-menu-link"><span class="nk-menu-text">Death Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/hospital/user-profile.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                    <span class="nk-menu-text">User Profile</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/hospital/settings.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navDashboards">
                        <h5 class="title">Dashboards</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Default Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-ecommerce.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                    <span class="nk-menu-text">Ecommerce Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-sales.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                    <span class="nk-menu-text">Sales Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-analytics.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                    <span class="nk-menu-text">Analytics Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navApps">
                        <h5 class="title">Apps</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/apps-inbox.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span>
                                    <span class="nk-menu-text">Mailbox</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-messages.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                    <span class="nk-menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-file-manager.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                                    <span class="nk-menu-text">File Manager</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-chats.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                                    <span class="nk-menu-text">Chats</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-calendar.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                                    <span class="nk-menu-text">Calendar</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/apps-kanban.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                                    <span class="nk-menu-text">Kanban Board</span><span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navPages">
                        <h5 class="title">Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                    <span class="nk-menu-text">Projects</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">User Manage</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
                                    <span class="nk-menu-text">Ecommerce Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/products.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/orders-regular.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/orders-sales.html" class="nk-menu-link"><span class="nk-menu-text">Order List - Sales</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoices List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/_blank.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                                    <span class="nk-menu-text">Blank / Startup</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/faqs.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                                    <span class="nk-menu-text">Faqs / Help</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/terms-policy.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                                    <span class="nk-menu-text">Terms / Policy</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/regular-v1.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                                    <span class="nk-menu-text">Regular Page - v1</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/regular-v2.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                                    <span class="nk-menu-text">Regular Page - v2</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navMisc">
                        <h5 class="title">Misc Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                            </li>
                            <li class="nk-menu-item no-icon">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item no-icon">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navError">
                        <h5 class="title">Error Pages</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content" data-content="navComponents">
                        <h5 class="title">Components</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                                    <span class="nk-menu-text">Ui Elements</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components.html" class="nk-menu-link"><span class="nk-menu-text">Component List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/avatar.html" class="nk-menu-link"><span class="nk-menu-text">Avatar</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/list-dropdown.html" class="nk-menu-link"><span class="nk-menu-text">List Dropdown</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span> <span class="nk-menu-badge badge-warning">Updated</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="html/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dot-box-fill"></em></span>
                                    <span class="nk-menu-text">Crafted Icons</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/svg-icons.html" class="nk-menu-link">
                                            <span class="nk-menu-text">SVG Icon - Exclusive</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/nioicon.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Nioicon - HandCrafted</span>
                                        </a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components/misc/icons.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                    <span class="nk-menu-text">Icon Libraries</span>
                                    <span class="nk-menu-badge badge-warning">New</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-table-view-fill"></em></span>
                                    <span class="nk-menu-text">Tables</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                                    <span class="nk-menu-text">Forms</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-upload.html" class="nk-menu-link"><span class="nk-menu-text">Form Upload</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/datetime-picker.html" class="nk-menu-link"><span class="nk-menu-text">Date &amp; Time Picker</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/number-spinner.html" class="nk-menu-link"><span class="nk-menu-text">Number Spinner</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Wizard Basic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item"><a href="html/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                                            <li class="nk-menu-item"><a href="html/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-pie-fill"></em></span>
                                    <span class="nk-menu-text">Charts</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                                    <span class="nk-menu-text">Miscellaneous</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/toastr.html" class="nk-menu-link"><span class="nk-menu-text">Toastr</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/sweet-alert.html" class="nk-menu-link"><span class="nk-menu-text">Sweet Alert</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/js-tree.html" class="nk-menu-link"><span class="nk-menu-text">jsTree</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="html/components/misc/dual-listbox.html" class="nk-menu-link"><span class="nk-menu-text">Dual Listbox</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li><!-- .nk-menu-item -->
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/email-templates.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template-fill"></em></span>
                                    <span class="nk-menu-text">Email Template</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed nk-header-fluid is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="{{asset('images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{asset('images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ml-3 ml-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar">
                                                                <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/pharmacy/support.html">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="html/pharmacy/support.html">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/pharmacy/general-settings.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/pharmacy/account-log.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title">Security Settings</h4>
                                                            <div class="nk-block-des">
                                                                <p>These settings are helps you keep your account secure.</p>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="card card-bordered">
                                                        <div class="card-inner-group">
                                                            <div class="card-inner">
                                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                    <div class="nk-block-text">
                                                                        <h6>Save my Activity Logs</h6>
                                                                        <p>You can save your all activity logs including unusual activity detected.</p>
                                                                    </div>
                                                                    <div class="nk-block-actions">
                                                                        <ul class="align-center gx-3">
                                                                            <li class="order-md-last">
                                                                                <div class="custom-control custom-switch me-n2">
                                                                                    <input type="checkbox" class="custom-control-input" checked="" id="activity-log">
                                                                                    <label class="custom-control-label" for="activity-log"></label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner">
                                                                <div class="between-center flex-wrap g-3">
                                                                    <div class="nk-block-text">
                                                                        <h6>Change Password</h6>
                                                                        <p>Set a unique password to protect your account.</p>
                                                                    </div>
                                                                    <div class="nk-block-actions flex-shrink-sm-0">
                                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                            <li class="order-md-last">
                                                                                <a href="#" class="btn btn-primary">Change Password</a>
                                                                            </li>
                                                                            <li>
                                                                                <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner">
                                                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                    <div class="nk-block-text">
                                                                        <h6>2 Factor Auth &nbsp; <span class="badge bg-success ms-0">Enabled</span></h6>
                                                                        <p>Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app. </p>
                                                                    </div>
                                                                    <div class="nk-block-actions">
                                                                        <a href="#" class="btn btn-primary">Disable</a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card-inner-group -->
                                                    </div><!-- .card -->
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group">
                                                    <div class="card-inner">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li><a href="html/pharmacy/members-profile-regular.html"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                                            <li><a href="html/pharmacy/members-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                            <li><a href="html/pharmacy/members-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                            <li><a class="active" href="html/pharmacy/members-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card-aside -->
                                        </div><!-- .card-aside-wrap -->
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
    <!-- JavaScript -->
    <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>