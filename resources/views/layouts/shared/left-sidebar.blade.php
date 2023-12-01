<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="" class="logo logo-light">
        <span class="logo-lg">
            <img src="/images/login/whiteLoginLogo.png" alt="logo" style="height: 50px">
        </span>
        <span class="logo-sm">
            <img src="/images/login/smallLogo.png" alt="small logo" style="height: 30px">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/images/login/darkLoginLogo.png" alt="dark logo"style="height: 50px">
        </span>
        <span class="logo-sm">
            <img src="/images/login/smallLogo.png" alt="small logo" style="height: 30px">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{route('home')}}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                    class="side-nav-link">
                    <i class="ri-pages-line"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="">Starter Page</a>
                        </li>
                        <li>
                            <a href="">Contact List</a>
                        </li>
                        <li>
                            <a href="">Profile</a>
                        </li>
                        <li>
                            <a href="">Timeline</a>
                        </li>
                        <li>
                            <a href="">Invoice</a>
                        </li>
                        <li>
                            <a href="">FAQ</a>
                        </li>
                        <li>
                            <a href="">Pricing</a>
                        </li>
                        <li>
                            <a href="">Maintenance</a>
                        </li>
                        <li>
                            <a href="">Error 404</a>
                        </li>
                        <li>
                            <a href="">Error 404-alt</a>
                        </li>
                        <li>
                            <a href="">Error 500</a>
                        </li>
                    </ul>
                </div>
            </li>

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"--}}
{{--                    aria-controls="sidebarPagesAuth" class="side-nav-link">--}}
{{--                    <i class="ri-group-2-line"></i>--}}
{{--                    <span> Authentication </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarPagesAuth">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Login</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">Register</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">Logout</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">Forgot Password</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">Lock Screen</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"--}}
{{--                    class="side-nav-link">--}}
{{--                    <i class="ri-layout-line"></i>--}}
{{--                    <span class="badge bg-warning float-end">New</span>--}}
{{--                    <span> Layouts </span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarLayouts">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="" target="_blank">Horizontal</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
            @if(auth()->user()->is_admin)
                <li class="side-nav-title">Admin</li>

{{--                <li class="side-nav-item">--}}
{{--                    <a href="{{route('admin.dashboard')}}" class="side-nav-link">--}}
{{--                        <i class="ri-dashboard-3-line"></i>--}}
{{--                        <span> Admin Dashboard </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                        class="side-nav-link">
                        <i class="ri-briefcase-line"></i>
                        <span> Admin Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBaseUI">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{route('users.index')}}">Users</a>
                            </li>
                            <li>
                                <a href="{{route('orders.index')}}">Orders</a>
                            </li>
                            <li>
                                <a href="">Accordions</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"--}}
{{--                    aria-controls="sidebarExtendedUI" class="side-nav-link">--}}
{{--                    <i class="ri-compasses-2-line"></i>--}}
{{--                    <span> Extended UI </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarExtendedUI">--}}
{{--                    <ul class="side-nav-second-level">--}}

{{--                        <li>--}}
{{--                            <a href="">Scrollspy</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"--}}
{{--                    class="side-nav-link">--}}
{{--                    <i class="ri-pencil-ruler-2-line"></i>--}}
{{--                    <span> Icons </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarIcons">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Remix Icons</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false"--}}
{{--                    aria-controls="sidebarCharts" class="side-nav-link">--}}
{{--                    <i class="ri-donut-chart-fill"></i>--}}
{{--                    <span> Charts </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarCharts">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Apex Charts</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"--}}
{{--                    class="side-nav-link">--}}
{{--                    <i class="ri-survey-line"></i>--}}
{{--                    <span> Forms </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarForms">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Basic Elements</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false"--}}
{{--                    aria-controls="sidebarTables" class="side-nav-link">--}}
{{--                    <i class="ri-table-line"></i>--}}
{{--                    <span> Tables </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarTables">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Basic Tables</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"--}}
{{--                    class="side-nav-link">--}}
{{--                    <i class="ri-map-pin-line"></i>--}}
{{--                    <span> Maps </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarMaps">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="">Google Maps</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="">Vector Maps</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="side-nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"--}}
{{--                    aria-controls="sidebarMultiLevel" class="side-nav-link">--}}
{{--                    <i class="ri-share-line"></i>--}}
{{--                    <span> Multi Level </span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="sidebarMultiLevel">--}}
{{--                    <ul class="side-nav-second-level">--}}
{{--                        <li>--}}
{{--                            <a href="javascript: void(0);">Level 1.1</a>--}}
{{--                        </li>--}}
{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"--}}
{{--                                aria-controls="sidebarSecondLevel">--}}
{{--                                <span> Level 1.2 </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarSecondLevel">--}}
{{--                                <ul class="side-nav-third-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);">Item 1</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);">Item 2</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"--}}
{{--                                aria-controls="sidebarThirdLevel">--}}
{{--                                <span> Level 1.3 </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarThirdLevel">--}}
{{--                                <ul class="side-nav-third-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="javascript: void(0);">Item 1</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="side-nav-item">--}}
{{--                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"--}}
{{--                                            aria-controls="sidebarFourthLevel">--}}
{{--                                            <span> Item 2 </span>--}}
{{--                                            <span class="menu-arrow"></span>--}}
{{--                                        </a>--}}
{{--                                        <div class="collapse" id="sidebarFourthLevel">--}}
{{--                                            <ul class="side-nav-forth-level">--}}
{{--                                                <li>--}}
{{--                                                    <a href="javascript: void(0);">Item 2.1</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="javascript: void(0);">Item 2.2</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->