@extends('layouts.oneui')

@section('content')
    <div class="content content-boxed">
    <div class="bg-primary-dark">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h1 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{ $p->depapt->icao }} - {{ $p->arrapt->icao }}</h1>
                <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{ $p->depapt->name }} - {{ $p->arrapt->name }}</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>

        <div class="block">
        <!-- Stats -->
        <div class="block-content text-center bg-gray-light">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Time</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ $p->flighttime }}</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Distance</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ $p->distance }}</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Fuel</div>
                        <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ $p->fuel_used }}</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">LDG RTE</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ $p->landingrate }}</a>
                </div>
            </div>
        </div>
        <!-- END Stats -->
        </div>

        <div class="col-sm-6 col-lg-4">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-danger">
                    <div class="h1 font-w700 text-white">{{ $p->user->username }}</div>
                    <div class="h5 text-white-op text-uppercase push-5-t">{{ $p->user->pilotid }}</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-user text-danger"></i>

                </div>
            </a>
        </div>

            <div class="col-sm-6 col-lg-4">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-success">
                        <div class="h1 font-w700 text-white">{{ $p->airline->name }}</div>
                        <div class="h5 text-white-op text-uppercase push-5-t">{{ $p->airline->icao }}</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini">
                        <i class="fa fa-plane text-success"></i>
                    </div>
                </a>
            </div>



        <div class="col-sm-6 col-lg-4">
            <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary">
                    <div class="h1 font-w700 text-white">{{ $p->aircraft->name }} </div>
                    <div class="h5 text-white-op text-uppercase push-5-t">{{ $p->aircraft->registration }}</div>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <i class="fa fa-arrow-up text-primary"></i>

        </div>
            </a>
        </div>




        <h2 class="h3 font-w600 push-50-t push">LOG FILES</h2>
        <div id="faq2" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">Detailed smartCARS LOG for {{ $p->airline->icao }}{{ $p->flightnum }}  </a>
                    </h3>
                </div>
                <div id="faq2_q1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>{{ $p->flight_data }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // Pull the data from the API so we can add stuff
            $.getJSON( "{{ config('app.url') }}api/v1/logbook/{{$p->id}}", function( data ) {
                console.log(data);
                if(data.acars_client = "smartCARS") {
                    var logSplit = data.flight_data.split("*");
                    $.each(logSplit, function( index, value) {
                        $("#scLogs").append('<li class="collection-item"><div>'+ value +'</div></li>')
                    });
                }
                // time to apply the flight status.
                switch(data.status) {
                    case 0:
                        $("#status").addClass("yellow darken-2");
                        $("#status-text").append('STATUS: <b>PENDING</b>');
                        break;
                    case 1:
                        $("#status").addClass("green");
                        $("#status-text").append('STATUS: <b>APPROVED</b>');
                        break;
                    case 2:
                        $("#status").addClass("red");
                        $("#status-text").append('STATUS: <b>DENIED</b>');
                        break;
                }
            });
        });
    </script>
@endsection