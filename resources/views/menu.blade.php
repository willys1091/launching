<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="{{url('/')}}">
            <span class="smini-visible"><i class="fa fa-circle-notch text-primary"></i></span>
            <span class="smini-hide font-size-h5 tracking-wider">Laun<span class="font-w400">ching</span></span>
        </a>
        <div>
            <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='dashboard'?"active":""}}" href="{{url('dashboard')}}">
                        <i class="nav-main-link-icon fa fa-chart-area"></i><span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fal fa-chart-scatter"></i><span class="nav-main-link-name">Diagramatric</span>
                    </a>
                </li>
                
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fal fa-calendar-star"></i><span class="nav-main-link-name">event</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fa fa-user-secret"></i><span class="nav-main-link-name">Agent</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fa fa-user"></i><span class="nav-main-link-name">Customer</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fa fa-landmark"></i><span class="nav-main-link-name">NUP</span>
                    </a>
                </li>
           
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-star"></i><span class="nav-main-link-name">Launching</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Register</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Call</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Selection</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Receipt</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-chart-bar"></i><span class="nav-main-link-name">Report</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">VIP Pass</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Summary VIP</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Unit</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Sales</span>
                            </a>
                        </li>
                       
                    </ul>
                </li>

                <li class="nav-main-item {{request::segment(1)=='marketplace'?"open":""}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-cubes"></i><span class="nav-main-link-name">Attribute</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('bank')}}">
                                <span class="nav-main-link-name">Bank</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('province')}}">
                                <span class="nav-main-link-name">Province</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('city')}}">
                                <span class="nav-main-link-name">City</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('district')}}">
                                <span class="nav-main-link-name">District</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('vipcategory')}}">
                                <span class="nav-main-link-name">VIP Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('vipname')}}">
                                <span class="nav-main-link-name">VIP Name</span>
                            </a>
                        </li>
                    </ul>
                </li>
            
                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='people'?"active":""}}" href="{{url('people')}}">
                        <i class="nav-main-link-icon fa fa-users"></i><span class="nav-main-link-name">People</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='role'?"active":""}}" href="{{url('role')}}">
                        <i class="nav-main-link-icon fa fa-wheelchair"></i><span class="nav-main-link-name">Role</span>
                    </a>
                </li>

                <li class="nav-main-item {{request::segment(1)=='logs'?"open":""}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-history"></i><span class="nav-main-link-name">logs</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='logs/system'?"active":""}}"href="{{url('logs/system')}}">
                                <i class="nav-main-link-icon fa fa-desktop"></i><span class="nav-main-link-name">System</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='logs/email'?"active":""}}"href="{{url('logs/email')}}">
                                <i class="nav-main-link-icon fa fa-envelope"></i><span class="nav-main-link-name">Email</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('helps')}}">
                        <i class="nav-main-link-icon  fa fa-question-circle"></i><span class="nav-main-link-name">Helps</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('logout')}}">
                        <i class="nav-main-link-icon  fa fa-sign-out-alt"></i><span class="nav-main-link-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>