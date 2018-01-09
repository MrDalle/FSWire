@section('stylesheet')



                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                General Server Stats
                                <small>including all pilots and virutal airlines</small>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="content">


                    <div class="col-sm-6 col-lg-3">
                        <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-primary">
                                <div class="h1 font-w700 text-white">{{ \App\User::where('status', 1)->count() }}</div>
                                <div class="h5 text-white-op text-uppercase push-5-t">Active Pilots</div>
                            </div>
                            <div class="block-content block-content-full block-content-mini">
                                <i class="fa fa-arrow-up text-success"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-success">
                                <div class="h1 font-w700 text-white">{{ \App\ScheduleTemplate::where('enabled', 1)->count() }}</div>
                                <div class="h5 text-white-op text-uppercase push-5-t">Schedules</div>
                            </div>
                            <div class="block-content block-content-full block-content-mini">
                                <i class="fa fa-arrow-up text-success"></i>
                            </div>
                        </a>
                    </div>


                    <div class="col-sm-6 col-lg-3">
                        <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-warning">
                                <div class="h1 font-w700 text-white">{{ \App\PIREP::all()->count() }}</div>
                                <div class="h5 text-white-op text-uppercase push-5-t">Logged Flights</div>
                            </div>
                            <div class="block-content block-content-full block-content-mini">
                                <i class="fa fa-arrow-up text-success"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                            <div class="block-content block-content-full bg-danger">
                                <div class="h1 font-w700 text-white">{{ \App\PIREP::all()->count() }}</div>
                                <div class="h5 text-white-op text-uppercase push-5-t">Total NM Flown</div>
                            </div>
                            <div class="block-content block-content-full block-content-mini">
                                <i class="fa fa-arrow-up text-success"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                    <div class="block-content">
                        <canvas id="myChart"></canvas>
                    </div>
                    </div>
                </div>
                <div class="content"

                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Virutal Airline Stats
                                <small>including all pilots and virutal airlines</small>
                            </h1>
                        </div>
                    </div>
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


                ],
                datasets: [{
                    label: "Landing Rate ",

                    borderColor: 'rgb(55, 169, 103)',
                    data: [


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

