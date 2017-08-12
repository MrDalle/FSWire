@extends('layouts.oneui')

@section('content')
    <!-- Page Content -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Schedules
                    <small>look & bid flights</small>
                </h1>
            </div>
        </div>


        <button class="btn btn-primary btn-round btn-warning" data-toggle="modal" data-target="#modal-search" type="button">Search for Flights
        </button>


    </div>
    <div class="content">
      <h1 class="page-heading">
        Newest Routes

      </h1>

        <!-- User Simple Widgets -->
        <div class="row">
            @foreach($schedules as $s)
                <div class="col-sm-6 col-lg-3">
                    <!-- Add Friend -->
                    <div class="bg-image "
                         style="background-image: url('{{ $s->airline->widget }}'); background-size: 100% 100%;">
                        <div class="bg-black-op">
                            <div class="block block-themed block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-center">{{ $s->airline->name }}</h3>
                                </div>
                                <div class="block-content block-content-full text-center">

                                    <h3 class="h1 font-w700 text-white">{{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                                </div>

                                <div class="block-content block-content-full text-center">

                                    <form action="{{ url('/flightops/bids') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input hidden name="schedule_id" value="{{ $s->id }}"/>
                                        <div class="card-action">
                                            <button type="submit" class="btn btn-success">Bid</button>
                                        </div>
                                    </form>
                                    <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#modal-popout{{$s->id}}" type="button">Details
                                    </button>
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
        {{ $schedules->links('vendor.pagination.oneui-default') }}
    </div>

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
                                <input class="form-control" placeholder="Departure Airport" list="apt" name="depapt" type="text">
                                <datalist id="apt">
                                    @foreach(App\Models\Airport::all() as $a)
                                        <option value="{{ $a->icao }}">{{ $a->name }}</option>
                                    @endforeach
                                </datalist>

                            </div>
                            <div class="form-material">
                                <input class="form-control" placeholder="Arrival Airport" list="apt" name="arrapt" type="text">

                            </div>
                        <div class="form-material">
                                <input class="form-control" placeholder="Aircraft" list="acf" name="aircraft_group" type="text">

                                <datalist id="acf">
                                    @foreach(App\AircraftGroup::all() as $a)
                                        <option value="{{ $a->icao }}">{{ $a->name }}</option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-material">
                                    <input class="form-control"placeholder="Airline" list="airline" name="airline" type="text">

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
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal" onclick="document.getElementById('form-id').submit();" ><i class="fa fa-search"></i> Search</button>
            </div>
            </div>
        </div>
    </div>
    <!-- END Pop Out Modal -->

@foreach($schedules as $s)
    <!-- Pop Out Modal -->
    <div class="modal fade" id="modal-popout{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout modal-sm">
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
                                    <div class="h4 font-w700">{{ $s->airline->name }}</div>
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
