<div class="nk-sidebar" data-content="sidebarMenu">
             
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content" data-content="navPharmacy">
                <h5 class="title">Pharmacy</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('index')}}" class="nk-menu-link">
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
                                <a href="{{route('customer-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('customer')}}" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('customer-ledger')}}" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
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
                                <a href="{{route('medicine-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('medicine-list')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('medicine-details')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
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
                                <a href="{{route('manufacturer')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('manufacturer-ledger')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
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
                                <a href="{{route('wastage-return-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('wastage-return')}}" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('manufacturer-return-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('manufacturer-return')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a>
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
                                <a href="{{route('member')}}" class="nk-menu-link"><span class="nk-menu-text">Member</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('members-profile-regular')}}" class="nk-menu-link"><span class="nk-menu-text">Members Profile</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('attendence')}}" class="nk-menu-link"><span class="nk-menu-text">Attendence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('salary')}}" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a>
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
                                <a href="{{route('income-list')}}" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('expense-list')}}" class="nk-menu-link"><span class="nk-menu-text">Expence</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('invoice-list')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('invoice-details')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
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
                                <a href="{{route('sales-report')}}" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('purchase-report')}}" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('stock-report')}}" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('support')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
                            <span class="nk-menu-text">Support</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('general-settings')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Setting</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content menu-active" data-content="navHospital">
                <h5 class="title">Hospital Manegment</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('hospital/index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('hospital/appointment')}}" class="nk-menu-link">
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
                                <a href="{{route('hospital/patient-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Patient</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/patient-list')}}" class="nk-menu-link"><span class="nk-menu-text">IPD / OPD Patients</span></a>
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
                                <a href="{{route('hospital/doctor-nurse-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Doctor / Nurses</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/doctor-nurse-list')}}" class="nk-menu-link"><span class="nk-menu-text">Doctors / Nurses</span></a>
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
                                <a href="{{route('hospital/income-list')}}" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/expense-list')}}" class="nk-menu-link"><span class="nk-menu-text">Expense</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/invoice-list')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/invoice-details')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
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
                                <a href="{{route('hospital/birth-report')}}" class="nk-menu-link"><span class="nk-menu-text">Birth Report</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/blood-bank')}}" class="nk-menu-link"><span class="nk-menu-text">Blood Bank</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/inventory-items')}}" class="nk-menu-link"><span class="nk-menu-text">Inventory Items Reports</span></a>
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
                                <a href="{{route('hospital/bed-group')}}" class="nk-menu-link"><span class="nk-menu-text">Bed Group</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/bed-allotment')}}" class="nk-menu-link"><span class="nk-menu-text">Bed Allotment</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/department')}}" class="nk-menu-link"><span class="nk-menu-text">Department</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('hospital/death-report')}}" class="nk-menu-link"><span class="nk-menu-text">Death Report</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('hospital/user-profile')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                            <span class="nk-menu-text">User Profile</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('hospital/settings')}}" class="nk-menu-link">
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
                        <a href="{{route('index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Default Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('index-ecommerce')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Ecommerce Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('index-sales')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Sales Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('index-analytics')}}" class="nk-menu-link">
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
                        <a href="{{route('apps-inbox')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-inbox-fill"></em></span>
                            <span class="nk-menu-text">Mailbox</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('apps-messages')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                            <span class="nk-menu-text">Messages</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('apps-file-manager')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                            <span class="nk-menu-text">File Manager</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('apps-chats')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                            <span class="nk-menu-text">Chats</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('apps-calendar')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                            <span class="nk-menu-text">Calendar</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('apps-kanban')}}" class="nk-menu-link">
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
                                <a href="{{route('project-card')}}" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('project-list')}}" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a>
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
                                <a href="{{route('user-list-regular')}}" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('user-list-compact')}}" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('user-details-regular')}}" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('user-profile-regular')}}" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('user-card')}}" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a>
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
                                <a href="{{route('products')}}" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('orders-regular')}}" class="nk-menu-link"><span class="nk-menu-text">Order List - Regular</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('orders-sales')}}" class="nk-menu-link"><span class="nk-menu-text">Order List - Sales</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('invoice-list')}}" class="nk-menu-link"><span class="nk-menu-text">Invoices List</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('invoice-details')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('_blank')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                            <span class="nk-menu-text">Blank / Startup</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/faqs')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                            <span class="nk-menu-text">Faqs / Help</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/terms-policy')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                            <span class="nk-menu-text">Terms / Policy</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/regular-v1')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-fill"></em></span>
                            <span class="nk-menu-text">Regular Page - v1</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/regular-v2')}}" class="nk-menu-link">
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
                        <a href="{{route('pages/auths/auth-login')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/auths/auth-register')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/auths/auth-reset')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/auths/auth-success')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                    </li>
                    <li class="nk-menu-item no-icon">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-login-v2')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-register-v2')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-reset-v2')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-success-v2')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item no-icon">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-login-v3')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-register-v3')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-reset-v3')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('pages/auths/auth-success-v3')}}" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- .nk-menu -->
            </div>
            <div class="nk-menu-content" data-content="navError">
                <h5 class="title">Error Pages</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('pages/errors/404-classic')}}" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/errors/504-classic')}}" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/errors/404-s1')}}" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('pages/errors/504-s1')}}" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a>
                    </li>
                </ul><!-- .nk-menu -->
            </div>
          
        </div>
    </div>
</div>