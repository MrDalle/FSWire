@extends('layouts.oneui')

@section('content')
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
    <div class="content content-boxed">
        <div class="block">
        <!-- Stats -->
        <div class="block-content text-center bg-gray-lighter">
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
                    <i class="fa fa-arrow-up text-success"></i>

        </div>





                        @if($p->acars_client === "smartCARS")
                            <ul id="scLogs" class="collection with-header">

                            </ul>
                        @endif
        </div></div>
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