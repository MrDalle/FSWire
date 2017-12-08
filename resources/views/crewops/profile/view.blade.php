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
                                    <h3 class="h5 text-gray">{{ $user->pilotid }}
                                    </h3>
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
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total flights</div>
                                    <div class="h2 text-primary" data-toggle="countTo" data-to="{{ \App\PIREP::where('user_id', Auth::user()->id)->count() }}"></div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">AVG LDG RTE</div>
                                    <div class="h2 text-primary" data-toggle="countTo" data-to="{{ (int) \App\PIREP::where('user_id', Auth::user()->id)->avg('landingrate') }}" data-after=" FPM"></div>
                                </div>

                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total Fuel Burn</div>
                                    <div class="text-warning push-10-t animated flipInX">
                                        <div class="h2 text-primary" data-toggle="countTo" data-to="{{  \App\PIREP::where('user_id', Auth::id())->sum('fuel_used') }}"></div></div>
                                </div>
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






                        <div class="col-xs-4 col-md-5 col-lg-6">
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
                        </div>

                        <div class="col-sm-3 col-lg-3 ">

                            <!-- Follow -->
                            <div class="block animated fadeInRight">
                                <div class="block-content block-content-full text-right">
                                    <button class="btn btn-sm btn-success"  onclick="window.location.href='/flightops/logbook'"><i class="fa fa-fw fa-book"></i> Logbook</button>
                                    <button class="btn btn-sm btn-primary"  onclick="window.location.href='/flightops/settings'"><i class="fa fa-fw fa-cog"></i> Edit Profile</button>

                                </div>
                            </div>
                            </a>
                        </div>
                            <!-- END Follow -->





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

