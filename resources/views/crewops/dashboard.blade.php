@extends('layouts.oneui')
@section('content')
    <!-- Page Header -->
    <div class="bg-image overflow-hidden" style="background-image: url('assets/img/photos/bg.png');">
        <div class="bg-black-op">
            <div class="content content-narrow">
                <div class="block block-transparent">
                    <div class="block-content block-content-full">
                        <h1 class="h1 font-w300 text-white animated fadeInDown push-50-t push-5">Dashboard</h1>
                        <h2 class="h4 font-w300 text-white-op animated fadeInUp">Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-narrow">
        <!-- Stats -->
        <div class="row text-uppercase">
            <div class="col-xs-6 col-sm-3 ">

                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="text-muted">
                            <small><i class="si si-clock"></i> all time</small>
                        </div>
                        <div class="font-s12 font-w700">Hours Flown</div>
                        <a class="h1 font-w600 text-primary" href="{{ url('/flightops/logbook') }}" data-toggle="countTo" data-to="{{ Auth::user()->totalhours }}"></a>
                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="text-muted">
                            <small><i class="si si-plane"></i> all time</small>
                        </div>
                        <div class="font-s12 font-w700">Flights</div>
                        <a class="h1 font-w600 text-primary" href="{{ url('/flightops/logbook') }}" data-toggle="countTo" data-to="{{ \App\PIREP::where('user_id', Auth::user()->id)->count() }}"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="text-muted">
                            <small><i class="si si-calendar"></i> all pireps</small>
                        </div>
                        <div class="font-s12 font-w700">AVG LDG RTE</div>
                        <a class="h1 font-w600 text-primary" href="{{ url('/flightops/logbook') }}" data-toggle="countTo" data-to="{{ \App\PIREP::where('user_id', Auth::user()->id)->avg('landingrate') }}" data-before="-" data-after="FPM"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="text-muted">
                            <small><i class="si si-calendar"></i> Today</small>
                        </div>
                        <div class="font-s12 font-w700">Average Sale</div>
                        <a class="h1 font-w600 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="0" data-before="$"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Stats -->

        <!-- Dashboard Charts -->
        <div class="row">
            <div class="col-md-6">
                <div class="block block-rounded block-opt-refresh-icon8">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Earnings in $</h3>
                    </div>
                    <div class="block-content block-content-full bg-gray-lighter text-center">
                        <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v2.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                        <div style="height: 340px;"><canvas class="js-dash-chartjs-earnings"></canvas></div>
                    </div>
                    <div class="block-content text-center">
                        <div class="row items-push-2x text-center push-20-t">
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-bank fa-2x"></i></div>
                                <div class="h5 text-muted">$148,000</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-angle-double-up fa-2x"></i></div>
                                <div class="h5 text-muted">+9% Earnings</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-headphones fa-2x"></i></div>
                                <div class="h5 text-muted">+20% Tickets</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-users fa-2x"></i></div>
                                <div class="h5 text-muted">+46% Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Notifications Widget -->
                <div class="block block-bordered">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Notifications</h3>
                    </div>
                    <div class="block-content">
                        <div class="pull-r-l pull-t push">
                            <table class="block-table text-center bg-gray-lighter border-b">
                                <tbody>
                                    <tr>
                                        <td class="border-r" style="width: 50%;">
                                            <div class="h1 font-w700">2</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">New Notifications</div>
                                        </td>
                                        <td>
                                            <div class="push-30 push-30-t">
                                                <i class="si si-plane fa-3x text-black-op"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><i class="fa fa-check"></i> The <a class="alert-link" href="javascript:void(0)">FSWire</a> was updated successfully!</p>
                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><i class="fa fa-info-circle"></i> Feel free to post any bugs or questions in <a class="alert-link" href="{{ url('/forum') }}">our forum!</a>!</p>
                        </div>

                    </div>
                </div>
                <!-- END Notifications Widget -->
            </div>

            <!-- Dashboard Cards -->
            <div class="row">
              <div class="col-sm-2 col-lg-2">
                                          <a class="block block-link-hover3" href="{{ url('/flightops/profile/'.Auth::user()->id) }}">
                                              <div class="block-content block-content-full text-center">
                                                  <div>
                                                      <img class="img-avatar img-avatar96" src="{{ Auth::user()->avatar_url }}" onerror="this.src='http://identicon.org?t={{ Auth::user()->username }}&s=400'">
                                                  </div>
                                                  <div class="h5 push-15-t push-5">{{ Auth::user()->username }}</div>
                                              </div>
                                              <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                                                  <div class="text-center text-muted">Pilot Rank</div>
                                              </div>
                                              <div class="block-content">
                                                  <div class="row items-push text-center">
                                                      <div class="col-xs-6">
                                                          <div class="push-5"><i class="si si-badge fa-2x"></i></div>
                                                          <div class="h5 font-w300 text-muted">9 Badges</div>
                                                      </div>
                                                      <div class="col-xs-6">
                                                          <div class="push-5"><i class="si si-wallet fa-2x"></i></div>
                                                          <div class="h5 font-w300 text-muted">$ 3.100</div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </a>

                                      </div>
                                      <div class="col-xs-6 col-sm-4 col-lg-2">
                                      <a class="block block-link-hover2 text-center" href="{{ url('/flightops/schedule') }}">
                                      <div class="block-content block-content-full bg-modern">
                                        <i class="si si-settings fa-4x text-white"></i>
                                        <div class="font-w600 text-white-op push-15-t">Bid Flight</div>
                                      </div>
                                      </a>
                                      </div>

                <div class="col-sm-2 col-lg-2">

                    <!-- Weather -->
                    <div class="block">
                        <div class="bg-image" style="background-image: url('assets/img/photos/photo33.jpg');">
                            <div class="bg-black-op">
                                <div class="block-content text-center">
                                    <h3 class="h2 font-w300 text-uppercase text-white push-50-t">Your HUB</h3>
                                    <h4 class="h5 text-white-op push-50">EDDF</h4>
                                </div>
                                <div class="block-content block-content-full text-center bg-black-op">
                                    <div class="row push-5-t push-5">
                                        <div class="col-xs-4">
                                            <div class="h2 font-w300 text-white">24&deg;C</div>
                                            <div class="h5 text-muted push-5-t">MON</div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="h2 font-w300 text-white">26&deg;C</div>
                                            <div class="h5 text-muted push-5-t">TUE</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Weather -->
                </div>
            </div>
            <!-- END Dashboard Cards -->

            <div class="col-md-6">
                <div class="block block-rounded block-opt-refresh-icon8">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Sales</h3>
                    </div>
                    <div class="block-content block-content-full bg-gray-lighter text-center">
                        <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard_v2.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                        <div style="height: 340px;"><canvas class="js-dash-chartjs-sales"></canvas></div>
                    </div>
                    <div class="block-content text-center">
                        <div class="row items-push-2x text-center push-20-t">
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-wordpress fa-2x"></i></div>
                                <div class="h5 text-muted">+20% Themes</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-font fa-2x"></i></div>
                                <div class="h5 text-muted">+25% Fonts</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-archive fa-2x"></i></div>
                                <div class="h5 text-muted">-10% Icons</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-15"><i class="fa fa-paint-brush fa-2x"></i></div>
                                <div class="h5 text-muted">+8% Graphics</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Dashboard Charts -->


    </div>
    <!-- END Page Content -->
    @endsection
    @section('javascript')
        <!-- Page Plugins -->
        <script src="{{ URL::asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ URL::asset('assets/js/pages/base_pages_dashboard_v2.js') }}"></script>
        <script>
            jQuery(function () {
                // Init page helpers (CountTo plugin)
                App.initHelpers('appear-countTo');
            });
        </script>
    @endsection
