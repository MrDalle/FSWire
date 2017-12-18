@extends('layouts.oneui')
            <!-- Header -->
            <style>
            .bg-image {
                height: 400px;
                background-color: #f9f9f9;
                background-position: 0 50%;
                -webkit-background-size: cover;
                background-size: cover;
            }

            .bg-primary-dark-op {
                height: 300px;
                background-color: rgba(62, 74, 89, 0.83);
            }



            </style>
@section('content')
<!-- Main Container -->

    <!-- Page Content -->
    <div class="content content-boxed">

        <!-- User Header -->
        <div class="block animated fadeInDown">

                        <!-- Basic Info -->
                        <div class="bg-image" style="background-image: url('{{ $user->cover_url }}')">

                            <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                                <div class="push-30-t push animated fadeInDown">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ $user->avatar_url }}" onerror="this.src='http://identicon.org?t={{ $user->username }}&s=400'" alt="Avatar">
                                </div>
                                <div class="push-30 animated fadeInUp">
                                    <h2 class="h4 font-w600 text-white push-5">{{ $user->username }}</h2>
                                    <h3 class="h5 text-gray">{{ $userRankName }} </h3>
                                </div>
                            </div>
                        </div>
                        <!-- END Basic Info -->
 
                        <!-- Stats -->
                        <div class="block-content text-center">
                            <div class="row items-push text-uppercase">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total Hours</div>
                                    <div class="h2 text-primary" data-toggle="countTo" data-to="{{$totalflightime }}"></div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total Flights</div>
                                    <div class="h2 text-primary" data-toggle="countTo" data-to="{{ \App\PIREP::where('user_id', $user->id)->count() }}"></div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">AVG LDG RTE (-FPM)</div>
                                    <div class="h2 text-primary" data-toggle="countTo" data-to="{{ (int) \App\PIREP::where('user_id', $user->id)->avg('landingrate') }}"></div>
                                </div>

                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total Miles (NM)</div>

                                        <div class="h2 text-primary" data-toggle="countTo" data-to="{{$userTotalMiles}}"></div></div>

                            </div>

                        </div>

    </div>
        <!-- END Stats -->

                    <!-- END User Header -->

                    <!-- Main Content -->
<div class="content content-boxed">
        <div class="row">

            <div class="col-xs-4 col-md-5 col-lg-6">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Latest Landings</h3>
                    </div>

                    <div class="block-content">
                        <canvas id="myChart"></canvas>
                    </div>

                </a>
            </div>

                        <div class="col-sm-4 col-lg-4">
                            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                            <!-- Striped Table -->
                            <div class="block block-rounded">
                                <div class="block-header bg-gray-lighter">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Latest Pireps</h3>
                                </div>


                                <div class="block-content">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">ID</th>
                                            <th class="text-center">DEP - ARR</th>
                                            <th class="hidden-xs" style="width: 15%;">DATE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(\App\PIREP::where('user_id', $user->id)->orderBy('id', 'desc')->limit(5)->get() as $p)
                                        <tr>

                                            <td class="text-center">{{ $p->airline->icao . $p->flightnum }}</td>
                                            <td class="text-center">{{ $p->depapt->icao }} - {{ $p->arrapt->icao }}</td>
                                            <td class="hidden-xs">
                                                <span class="label label-info">{{ date('d/m/Y', strtotime($p->created_at)) }}</span>
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Striped Table -->
                            </a>
                        </div>



            <div class="col-lg-2">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">

                <div class="block-content block-content-full text-right">

                    <button class="btn btn-sm btn-primary"  onclick="window.location.href='/flightops/settings'"><i class="fa fa-fw fa-cog"></i> Edit Profile</button>

                </div>
                </a>
            </div>


            <div class="col-sm-4 col-lg-4">
                <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Pilot Information</h3>
                    </div>
                    <div class="block-content block-content-full bg-warning">
                        <div class="h1 font-w700 text-white push-10">{{ $user->username }}</div>
                        <div class="h5 font-w300 text-white-op">{{ $rank }}</div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-condensed">
                            <tbody>
                            <tr>
                                <td><strong>Name</strong> {{ $user->first_name }} {{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Pilot ID</strong> {{ $user->pilotid }}</td>
                            </tr>

                            <tr>
                                <td><strong>Hub</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Fuel Burned</strong> {{  \App\PIREP::where('user_id', Auth::id())->sum('fuel_used') }}</td>
                            </tr>
                            <tr>
                                <td><strong>AVG LDG</strong> {{ \App\PIREP::where('user_id', $user->id)->avg('landingrate') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Hours</strong> {{ \App\PIREP::where('user_id', $user->id)->sum('flighttime') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Join Date</strong> {{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </a>
            </div>


            <!-- Friends Widget
                      <div class="col-lg-4">

                          <div class="block block-bordered">
                              <div class="block-header">
                                  <ul class="block-options">
                                      <li>
                                          <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                                      </li>
                                      <li>
                                          <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                      </li>
                                      <li>
                                          <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                                      </li>
                                  </ul>
                                  <h3 class="block-title">Friends</h3>
                              </div>
                              <div class="block-content">
                                  <div class="pull-r-l pull-t push">
                                      <table class="block-table text-center bg-gray-lighter border-b">
                                          <tbody>
                                          <tr>
                                              <td class="border-r" style="width: 50%;">
                                                  <div class="h1 font-w700">3</div>
                                                  <div class="h5 text-muted text-uppercase push-5-t">New Friends</div>
                                              </td>
                                              <td>
                                                  <div class="push-30 push-30-t">
                                                      <i class="si si-users fa-3x text-black-op"></i>
                                                  </div>
                                              </td>
                                          </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  <ul class="nav-users push">
                                      <li>
                                          <a href="base_pages_profile.html">
                                              <img class="img-avatar" src="/assets/img/avatars/avatar5.jpg" alt="">
                                              <i class="fa fa-circle text-success"></i> Susan Elliott
                                              <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="base_pages_profile.html">
                                              <img class="img-avatar" src="/assets/img/avatars/avatar15.jpg" alt="">
                                              <i class="fa fa-circle text-success"></i> Scott Ruiz
                                              <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="base_pages_profile.html">
                                              <img class="img-avatar" src="/assets/img/avatars/avatar2.jpg" alt="">
                                              <i class="fa fa-circle text-success"></i> Ashley Welch
                                              <div class="font-w400 text-muted"><small>Photographer</small></div>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <!-- END Friends Widget -->
            </div>
            -->

        </div>

</div>






    @endsection


        @section('javascript')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <script>


            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset

                data: {
                    labels: [
                        @foreach($pireps as $p) "", @endforeach

                    ],
                    datasets: [{
                        label: "Landing Rate ",

                        borderColor: 'rgb(55, 169, 103)',
                        data: [
                            @foreach($pireps as $p) {{ $p->landingrate }}, @endforeach

                            ],
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });


        </script>

@endsection

