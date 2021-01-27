<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-white-5">
        <a class="font-w600 text-dual" href="{{url('/')}}">
            <span class="smini-visible"><i class="fa fa-circle-notch text-primary"></i></span>
            <span class="smini-hide font-size-h5 tracking-wider">Siap<span class="font-w400">fulin</span></span>
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
                <li class="nav-main-item {{request::segment(1)=='marketplace'?"open":""}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-cubes"></i><span class="nav-main-link-name">Marketplace</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='marketplace/tokopedia'?"active":""}}" href="#">
                                {{-- <i class="nav-main-link-icon fa fa-store"></i><span class="nav-main-link-name">Tokopedia</span> --}}
                                <img class="nav-main-link-icon" src="{{asset('public/media/photos/icon-tokopedia.png')}}" width="16px"><span class="nav-main-link-name">Tokopedia</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='marketplace/bukalapak'?"active":""}}" href="#">
                                <img class="nav-main-link-icon" src="{{asset('public/media/photos/icon-bukalapak.png')}}" width="16px"><span class="nav-main-link-name">Bukalapak</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='marketplace/shopee'?"active":""}}" href="#">
                                 <img class="nav-main-link-icon" src="{{asset('public/media/photos/icon-shopee.png')}}" width="16px"><span class="nav-main-link-name">Shopee</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='marketplace/lazada'?"active":""}}" href="{{url("marketplace/lazada")}}">
                                <img class="nav-main-link-icon" src="{{asset('public/media/photos/icon-lazada.png')}}" width="16px"><span class="nav-main-link-name">Lazada</span>
                            </a>
                        </li> 
                    </ul>
                </li>

                <li class="nav-main-item {{request::segment(1)=='product'?"open":""}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-cubes"></i><span class="nav-main-link-name">Product</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1)=='product'?"active":""}}" href="{{url("product")}}">
                                <i class="nav-main-link-icon fa fa-cube"></i> <span class="nav-main-link-name">Product</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link {{request::segment(1).'/'.request::segment(2)=='product/system'?"active":""}}" href="{{url('product/online')}}">
                                <i class="nav-main-link-icon fa fa-cloud"></i> <span class="nav-main-link-name">Online Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
           
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-shopping-basket"></i><span class="nav-main-link-name">Order</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Grid</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-truck"></i><span class="nav-main-link-name">Shipment</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_responsive.html">
                                <span class="nav-main-link-name">Responsive</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-balance-scale"></i>
                        <span class="nav-main-link-name">Accounting</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_styles.html">
                                <span class="nav-main-link-name">SKU</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-chart-line"></i><span class="nav-main-link-name">Report</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_elements.html">
                                <span class="nav-main-link-name">Elements</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='integration'?"active":""}}"href="{{url('integration')}}">
                        <i class="nav-main-link-icon fa fa-puzzle-piece"></i><span class="nav-main-link-name">Integration</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='settings'?"active":""}}" href="{{url('settings')}}">
                        <i class="nav-main-link-icon fa fa-cogs"></i><span class="nav-main-link-name">Settings</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{request::segment(1)=='company'?"active":""}}" href="{{url('company')}}">
                        <i class="nav-main-link-icon fa fa-building"></i><span class="nav-main-link-name">Company</span>
                    </a>
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