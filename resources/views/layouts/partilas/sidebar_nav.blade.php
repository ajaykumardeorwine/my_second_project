<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15 bg-black-op-10">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.html">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <button type="button" class="btn btn-block btn-alt-success push d-flex align-items-center justify-content-between">
                <span>Add Project</span>
                <i class="fa fa-plus float-right"></i>
            </button>
            <ul class="nav-main">
                <li>
                    <a class="active" href="{{route('home')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">HQ</span><span class="sidebar-mini-hidden">Headquarters</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Products</span></a>
                    <ul>
                        {{-- <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Product layout <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('products.index') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> View all Products </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Create a Product </div>
                            </a>
                        </li>
                        <li>
                            <a href="/datatables{{-- route('datatables')--}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Data List: </div>
                            </a>
                        </li>
                   
                    </li>

                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">categories</span></a>
                    <ul>
                        <li>
                            <a href="{{route('categories')}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title"> All Categories </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('mobile')}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Mobile </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('leptop')}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Laptop </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('computer')}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Computer </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('teblet')}}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="side-menu__title"> Teblet </div>
                            </a>
                        </li>
                 
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
