@extends('layouts.oneui')

@section('content')
    <div class="bg-primary-dark">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h1 font-w700 text-white push-10 animated fadeInDown " data-toggle="appear"
                    data-class="animated fadeInDown">SCHEDULES</h1>
                <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">
                    There are currently {{ \App\ScheduleTemplate::where('enabled', 1)->count() }} schedules in the
                    system</h2>
                <button class="btn btn-primary  btn-round btn-success animated fadeInDown" data-toggle="modal"
                        data-target="#modal-search" type="button">Search for Flights
                </button>
            </div>
            <!-- END Section Content -->

        </section>
    </div>
    <!-- Page Content -->

    <div class="content">
        <h1 class="page-heading font-w600">
            LATEST ROUTES
            <p>
        </h1>

        <!-- User Simple Widgets -->
        <div class="row">
            @foreach($schedules as $s)
                <div class="col-sm-6 col-lg-3">
                    <!-- Add Friend -->
                    <div class="bg-image animated fadeInUp" style="background-image: url('{{ $s->airline->widget }}'); background-size: 100% 100%;">
                        <div class="bg-black-op">
                            <div class="block block-themed block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-center">{{ $s->airline->name }}</h3>
                                </div>
                                <div class="block-content block-content-full text-center">

                                    <h3 class="h1 font-w700 text-white">{{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                                </div>
                                <div class="block-content block-content-full text-center">
                                <span class="pull-middle">
                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                       data-target="#modal-popout{{$s->id}}" role="button">Details</a>
                                    <a href="#" class="btn btn-success" role="button" onclick="event.preventDefault();
                                            document.getElementById('add-bid{{ $s->id }}').submit();">Bid</a>
                                             <form id="add-bid{{ $s->id }}" action="{{ url('/flightops/bids') }}"
                                                   method="POST">
                                                 {{ csrf_field() }}
                                                 <input hidden name="schedule_id" value="{{ $s->id }}"/>
                                             </form>
                                </span>
                                </div>

                                <div class="">
                                    <table class="block-table text-center bg-gray-lighter border-b">
                                        <tbody>
                                        <tr>
                                            <td class="border-r" style="width: 50%;">
                                                <div class="h1 font-w700">{{ $s->depapt->icao }}</div>
                                                <div class="h5 text-muted text-uppercase push-5-t">Departure</div>
                                            </td>
                                            <td class="border-r" style="width: 50%;">
                                                <div class="h1 font-w700">{{ $s->arrapt->icao }}</div>
                                                <div class="h5 text-muted text-uppercase push-5-t">Arrival</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Add Friend -->
                </div>
            @endforeach
        </div>
    {{ $schedules->appends(Request::except('page'))->links('vendor.pagination.oneui-default') }}


    <!-- Search Modal -->
        <div class="modal fade" id="modal-search" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Search For Flights</h3>
                        </div>
                        <div class="block-content">
                            <form action="{{ url('/flightops/schedule') }}" id="form-id" method="GET">

                                <div class="form-material">
                                    <input class="form-control" placeholder="Departure Airport" list="apt" name="depapt"
                                           type="text">
                                    <datalist id="apt">
                                        @foreach(App\Models\Airport::all() as $a)
                                            <option value="{{ $a->icao }}">{{ $a->name }}</option>
                                        @endforeach
                                    </datalist>

                                </div>
                                <div class="form-material">
                                    <input class="form-control" placeholder="Arrival Airport" list="apt" name="arrapt"
                                           type="text">

                                </div>
                                <div class="form-material">
                                    <input class="form-control" placeholder="Aircraft" list="acf" name="aircraft_group"
                                           type="text">

                                    <datalist id="acf">
                                        @foreach(App\AircraftGroup::all() as $a)
                                            <option value="{{ $a->icao }}">{{ $a->name }}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                                <div class="form-material">
                                    <input class="form-control" placeholder="Airline" list="airline" name="airline"
                                           type="text">

                                    <datalist id="airline">
                                        @foreach(App\Airline::all() as $a)
                                            <option value="{{ $a->icao }}">{{ $a->airline }}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                                {{--<div class="card-action">
                                    <button class="btn green darken-3" type="submit">Search</button>
                                    </div>--}}
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer pull-middle">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"
                                onclick="document.getElementById('form-id').submit();"><i class="fa fa-search"></i>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->

    @foreach($schedules as $s)
        <!-- Pop Out Modal -->
            <div class="modal fade" id="modal-popout{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout modal-m">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent remove-margin-b">

                            <div class="block-header bg-primary-dark">
                                <ul class="block-options">
                                    <li>
                                        <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Details for {{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                            </div>
                            <div class="">
                                <table class="block-table text-center bg-gray-lighter border-b">
                                    <tbody>
                                    <tr>
                                        <td class="border-r" style="width: 50%;">
                                            <div class="h1 font-w700">{{ $s->depapt->icao }}</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">{{ $s->depapt->name }}</div>
                                        </td>
                                        <td class="border-r" style="width: 50%;">
                                            <div class="h1 font-w700">{{ $s->arrapt->icao }}</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">{{ $s->arrapt->name }}</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="">
                                <table class="block-table text-center bg-gray-lighter border-b">
                                    <tbody>
                                    <tr>
                                        <td class="border-r" style="width: 50%;">
                                            <div class="h2 font-w700">@if($s->aircraft_group == null)
                                                    Not Assigned
                                                @else
                                                    {{$s->aircraft_group->name}}
                                                @endif</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">Airframe</div>
                                        </td>
                                        <td class="border-r" style="width: 50%;">
                                            <div class="h2 font-w700">{{ $s->airline->name }}</div>
                                            <div class="h5 text-muted text-uppercase push-5-t">{{ $s->airline->icao }}</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-sm btn-primary text" type="button" data-dismiss="modal"><i
                                        class="fa fa-check"></i> Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- END Pop Out Modal -->
    @endforeach

@endsection



@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection
