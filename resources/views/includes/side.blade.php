<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="side-header side-content">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default pull-right" type="button" data-toggle="layout"
                    data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
            <span>
<a href="{{ url('/flightops/profile/'.Auth::user()->id) }}">
                      <img class="img-avatar img-avatar32" src="{{ Auth::user()->avatar_url }}"
                           onerror="this.src='{{ URL::asset('assets/img/avatars/avatar1.jpg') }}'" alt="Avatar"></a>
                    <span class="font-w600 push-10-l">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                </span>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="side-content remove-padding-t">
            <!-- Side Overlay Tabs -->
            <div class="block pull-r-l border-t">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                    <li class="active">
                        <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
                    </li>

                </ul>
                <div class="block-content tab-content">
                    <!-- Overview Tab -->
                    <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">

                        <a class="block block-link-hover2" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-primary clearfix">
                                <i class="si si-clock fa-2x text-white pull-right"></i>
                                <span class="h4 font-w700 text-white">0</span>
                                <span class="h4 text-white-op">Miles flown</span>
                            </div>
                        </a>

                        <a class="block block-link-hover2" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-danger clearfix">
                                <i class="si si-plane fa-2x text-white pull-right"></i>
                                <span class="h4 font-w700 text-white">{{ (int) \App\PIREP::where('user_id', Auth::user()->id)->count() }}</span>
                                <span class="h4 text-white-op">Total flights</span>
                            </div>
                        </a>

                        <a class="block block-link-hover2" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-success clearfix">
                                <i class="si si-plane fa-2x text-white pull-right"></i>
                                <span class="h4 font-w700 text-white">{{ (int)\App\PIREP::where('user_id', Auth::user()->id)->avg('landingrate') }} FPM</span>
                                <span class="h4 text-white-op">AVG LDG RTE</span>
                            </div>
                        </a>


                        <!-- Quick Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option"
                                                data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Quick Actions</h3>
                            </div>

                            <div class="block-content">
                                <!-- Quick Settings Form -->


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Online Status</div>
                                            <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Auto Updates</div>
                                            <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <div class="font-s13 font-w600">Notifications</div>
                                            <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                <input type="checkbox" checked><span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <a href="https://discord.gg/0q7Qozx3iSeChKxY">
                                            <div class=" form-group col-xs-8 btn btn-primary">Join Discord</div>
                                        </a>
                                    </div>
                                    <div class="col-xs-8">
                                        <a href="{{ url('/flightops/profile/'.Auth::user()->id) }}">
                                            <div class=" form-group col-xs-8 btn btn-primary">User Profile</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class=" form-group col-xs-8  btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log Out
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <form class="form-bordered" action="{{ url('flightops') }}"
                                              method="post" onsubmit="return false;">
                                        </form>
                                    </div>
                                </div>
                                <!-- END Quick Settings Form -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Overview Tab -->

                    <!-- Sales Tab -->
                    <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                        <div class="block pull-r-l">
                            <!-- Stats -->
                            <div class="block-content pull-t">
                                <div class="row items-push">
                                    <div class="col-xs-6">
                                        <div class="font-w700 text-gray-darker text-uppercase">Sales</div>
                                        <a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-w700 text-gray-darker text-uppercase">Balance</div>
                                        <a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Stats -->

                            <!-- Today -->
                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <span class="font-s13 text-muted">$996</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="list list-activity pull-r-l">
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $249</div>
                                        <div>
                                            <small class="text-muted">3 min ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $129</div>
                                        <div>
                                            <small class="text-muted">50 min ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $119</div>
                                        <div>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $499</div>
                                        <div>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Today -->

                            <!-- Yesterday -->
                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <span class="font-s13 text-muted">$765</span>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="list list-activity pull-r-l">
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $249</div>
                                        <div>
                                            <small class="text-muted">26 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-danger"></i>
                                        <div class="font-w600">Product Purchase - $50</div>
                                        <div>
                                            <small class="text-muted">28 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $119</div>
                                        <div>
                                            <small class="text-muted">29 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-danger"></i>
                                        <div class="font-w600">Paypal Withdrawal - $300</div>
                                        <div>
                                            <small class="text-muted">37 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $129</div>
                                        <div>
                                            <small class="text-muted">39 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $119</div>
                                        <div>
                                            <small class="text-muted">45 hours ago</small>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle text-success"></i>
                                        <div class="font-w600">New sale! + $499</div>
                                        <div>
                                            <small class="text-muted">46 hours ago</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Yesterday -->

                            <!-- More -->
                            <div class="text-center">
                                <small><a href="javascript:void(0)">Load More..</a></small>
                            </div>
                            <!-- END More -->
                        </div>
                    </div>
                    <!-- END Sales Tab -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout"
                        data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <div class="btn-group pull-right">
                    <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                        <i class="fa fa-spin fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                        <li>
                            <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-default pull-right"></i> <span
                                        class="font-w600">Default</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1"
                               href="javascript:void(0)">
                                <i class="fa fa-circle text-amethyst pull-right"></i> <span
                                        class="font-w600">Amethyst</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1"
                               href="javascript:void(0)">
                                <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1"
                               href="javascript:void(0)">
                                <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1"
                               href="javascript:void(0)">
                                <i class="fa fa-circle text-modern pull-right"></i> <span
                                        class="font-w600">Modern</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1"
                               href="javascript:void(0)">
                                <i class="fa fa-circle text-smooth pull-right"></i> <span
                                        class="font-w600">Smooth</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <a class="h5 text-white" href="{{ url('flightops') }}">
                    <img src="{{URL::asset('assets/img/favicons/favicon.png')}}" alt=""> <span
                            class="h4 font-w600 sidebar-mini-hide"> FSWire</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content side-content-full">
                <ul class="nav-main">
                    <li>
                        <a href="{{ url('flightops') }}"><i class="si si-speedometer"></i><span
                                    class="sidebar-mini-hide">Dashboard</span></a>
                    </li>

                    <li>
                        <a href=" {{ url('map') }}"><i class="si si-map"></i><span
                                    class="sidebar-mini-hide">RADAR</span></a>
                    </li>
                    <li>
                        <a href="  {{ url('wxr') }}"><i class="si si-umbrella"></i><span
                                    class="sidebar-mini-hide">WXR</span></a>
                    </li>
                    <li>
                        <a href="  {{ url('flightops/stats/') }}"><i class="fa fa-certificate"></i><span
                                    class="sidebar-mini-hide">Server Stats</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">{{ Auth::user()->username }}</span>
                    </li>
                    <li>
                        <a href="{{ url('flightops/profile/'.Auth::user()->id) }}"><i
                                    class="si si-user"></i><span
                                    class="sidebar-mini-hide">Profile</span></a>
                    </li>
                    <li>
                        <a href="  {{ url('flightops/logbook') }}"><i class="si si-book-open"></i><span
                                    class="sidebar-mini-hide">Logbook</span></a>
                    </li>



                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Dispatch</span></li>
                    <li>
                        <a href="  {{ url('flp') }}"><i class="si si-calculator"></i><span
                                    class="sidebar-mini-hide">Plan Flight</span></a>
                    </li>
                    <li>
                        <a href="  {{ url('flightops/schedule') }}"><i class="fa fa-barcode"></i><span
                                    class="sidebar-mini-hide">Schedule</span></a>
                    </li>

                    <li>
                        <a href="  {{ url('flightops/bids') }}"><i
                                    class="fa fa-check-square-o"></i><span
                                    class="sidebar-mini-hide">Bids</span></a>
                    </li>
                    <!-- Admin Center -->
                @if(Auth::user()->admin)
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span
                                    class="sidebar-mini-hide">Admin Center</span></a>
                        <ul>


                            <li class="nav-main-heading"><span class="sidebar-mini-hide">VA Management</span></li>


                            <li>
                                <a href="{{url('admin/schedule')}}"><i
                                            class="fa fa-ravelry"></i><span
                                            class="sidebar-mini-hide">Route Creator</span></a>
                            </li>
                            <li>
                                <a href="  {{ url('admin/fleet') }}"><i class="si si-plane"></i><span
                                            class="sidebar-mini-hide">Fleet Manager</span></a>
                            </li>
                            <li>
                                <a href="{{url('admin/airlines')}}"><i
                                            class="fa fa-ravelry"></i><span
                                            class="sidebar-mini-hide">Airlines</span></a>
                            </li>

                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Admin Center</span></li>
                            <li>
                                <a href="{{ url('admin') }}"><i class="fa fa-ravelry"></i><span
                                            class="sidebar-mini-hide">Dashboard</span></a>
                            </li>



                            <li>
                                <a href="{{ url('admin/pireps') }}"><i
                                            class="fa fa-ravelry"></i><span
                                            class="sidebar-mini-hide">PIREPS</span></a>
                            </li>
                            <li>
                                <a href="{{ url('admin/pireps?view=pending') }}"><i
                                            class="fa fa-ravelry"></i><span
                                            class="sidebar-mini-hide">Awaiting Approval</span></a>
                            </li>
                        </ul>

                    @endif

                    <!-- Admin Center -->
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Community</span></li>
                    <li>
                        <a href="  {{ url('forum') }}"><i class="si si-users"></i><span
                                    class="sidebar-mini-hide">Forum</span></a>
                    </li>
                    <li>
                        <a href="https://support.fswire.net/"><i class="fa fa-life-ring"></i><span
                                    class="sidebar-mini-hide">Support</span></a>
                    </li>
                    <li>
                        <a href="{{ url('faq') }}"><i class="si si-question"></i><span
                                    class="sidebar-mini-hide">FAQ</span></a>
                    </li>
                    <li>
                        <a href="https://discord.gg/ZFp9Rgc"><i class="fa fa-headphones"></i><span
                                    class="sidebar-mini-hide">Join Discord</span></a>
                    </li>





                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <!-- Header Navigation Right -->
    <ul class="nav-header pull-right">

        <li>
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                <i class="fa fa-tasks"></i>
            </button>
        </li>
    </ul>
    <!-- END Header Navigation Right -->

    <!-- Header Navigation Left -->
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
        <li class="hidden-xs hidden-sm">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                <i class="fa fa-ellipsis-v"></i>
            </button>
        </li>
        <li>
            <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
            <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                <i class="si si-grid"></i>
            </button>
        </li>


    </ul>
    <!-- END Header Navigation Left -->
</header>
<!-- END Header -->
