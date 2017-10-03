@extends('layouts.oneui')

@section('content')

    <main id="main-container">
    <!-- Hero Content -->
    <div class="bg-image overflow-hidden" style="background-image: url('assets/img/photos/bg.png'); ">
        <!-- Search Content -->
        <section class="content content-full content-boxed overflow-hidden">
            <!-- Bootstrap Datepicker (.input-daterange class is initialized in App() -> uiHelperDatepicker()) -->
            <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
            <div class="push-100-t push-100">
                <h1 class="font-s48 font-w700 text-uppercase text-white push-10 visibility-hidden text-center" data-toggle="appear" data-class="animated fadeInDown">Travel The World</h1>
                <h2 class="h3 font-w400 text-white-op push-50 visibility-hidden text-center" data-toggle="appear" data-timeout="750">Let us help you explore the world, one step at a time.</h2>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                        <div class="block">
                            <ul class="nav nav-tabs nav-justified" data-toggle="tabs">
                                <li class="active">
                                    <a href="#travel-flights"><i class="fa fa-plane text-primary push-5-r"></i> <span class="text-primary-dark">Flights</span></a>
                                </li>

                            </ul>
                            <div class="block-content tab-content mheight-200">
                                <div class="tab-pane active" id="travel-flights">
                                    <form class="form-horizontal" action="{{ url('/flightops/schedule') }}" method="get" onsubmit="return false;">
                                        <div class="form-group items-push push-10">
                                            <div class="col-sm-6">
                                                <label for="travel-flights-from">FROM</label>
                                                <input class="form-control" type="text" id="travel-flights-from" name="travel-flights-from" placeholder="Eg. Paris, FR">
                                                <datalist id="apt">
                                                    @foreach(App\Models\Airport::all() as $a)
                                                        <option value="{{ $a->icao }}">{{ $a->name }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="travel-flights-to">TO</label>
                                                <input class="form-control" type="text" id="travel-flights-to" name="travel-flights-to" placeholder="Eg. New York, US">
                                            </div>
                                            <div class="col-sm-10">
                                                <label>WHEN?</label>
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                                    <input class="form-control" type="text" id="travel-flights-departure" name="travel-flights-departure" placeholder="Departure">
                                                    <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                                                    <input class="form-control" type="text" id="travel-flights-return" name="travel-flights-return" placeholder="Return">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="travel-flights-adults">ADULTS</label>
                                                <input class="form-control" type="number" min="1" max="10" id="travel-flights-adults" name="travel-flights-adults" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-noborder btn-rounded btn-primary text-uppercase" type="submit"><i class="fa fa-search push-5-r"></i> Search Flights</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="travel-hotels">
                                    <form class="form-horizontal" action="frontend_travel_home.html" method="post" onsubmit="return false;">
                                        <div class="form-group items-push push-10">
                                            <div class="col-xs-12">
                                                <label for="travel-hotels-where">WHERE</label>
                                                <input class="form-control" type="text" id="travel-hotels-where" name="travel-hotels-where" placeholder="Eg. Paris, FR">
                                            </div>
                                            <div class="col-sm-10">
                                                <label>WHEN?</label>
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                                    <input class="form-control" type="text" id="travel-hotels-arrival" name="travel-hotels-arrival" placeholder="Arrival">
                                                    <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                                                    <input class="form-control" type="text" id="travel-hotels-departure" name="travel-hotels-departure" placeholder="Departure">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="travel-hotels-adults">ADULTS</label>
                                                <input class="form-control" type="number" min="1" max="10" id="travel-hotels-adults" name="travel-hotels-adults" value="2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-noborder btn-rounded btn-success text-uppercase" type="submit"><i class="fa fa-search push-5-r"></i> Search Hotels</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="travel-packages">
                                    <form class="form-horizontal" action="frontend_travel_home.html" method="post" onsubmit="return false;">
                                        <div class="form-group items-push push-10">
                                            <div class="col-xs-12">
                                                <label for="travel-packages-destination">DESTINATION</label>
                                                <input class="form-control" type="text" id="travel-packages-destination" name="travel-packages-destination" placeholder="Eg. London, GB">
                                            </div>
                                            <div class="col-sm-5">
                                                <label for="travel-packages-month">MONTH</label>
                                                <select class="form-control" id="travel-packages-month" name="travel-packages-month">
                                                    <option value="0">When?</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-5">
                                                <label for="travel-packages-budget">BUDGET</label>
                                                <select class="form-control" id="travel-packages-budget" name="travel-packages-budget">
                                                    <option value="0">How much?</option>
                                                    <option value="1">$99 to $499</option>
                                                    <option value="2">$500 to $999</option>
                                                    <option value="3">$1000 to $1999</option>
                                                    <option value="4">$2000 to $2999</option>
                                                    <option value="5">$3000 to $4999</option>
                                                    <option value="6">$5000 to $9999</option>
                                                    <option value="6">&gt; $9999</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label for="travel-packages-adults">ADULTS</label>
                                                <input class="form-control" type="number" min="1" max="10" id="travel-packages-adults" name="travel-packages-adults" value="2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-noborder btn-rounded btn-danger text-uppercase" type="submit"><i class="fa fa-search push-5-r"></i> Search Packages</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Search Content -->

        <!-- Features -->
        <div class="bg-black-op">
            <section class="content content-boxed">
                <div class="push-20-t push-50">
                    <div class="row items-push text-center">
                        <div class="col-xs-6 col-md-3 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated flipInY" data-timeout="200">
                            <div class="item item-2x item-circle push-10">
                                <i class="si si-plane text-white"></i>
                            </div>
                            <div class="font-w600 text-white-op text-uppercase">Cheap Flights</div>
                        </div>
                        <div class="col-xs-6 col-md-3 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated flipInY" data-timeout="400">
                            <div class="item item-2x item-circle push-10">
                                <i class="si si-heart text-white"></i>
                            </div>
                            <div class="font-w600 text-white-op text-uppercase">Best Deals</div>
                        </div>
                        <div class="col-xs-6 col-md-3 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated flipInY" data-timeout="600">
                            <div class="item item-2x item-circle push-10">
                                <i class="si si-clock text-white"></i>
                            </div>
                            <div class="font-w600 text-white-op text-uppercase">Save Time</div>
                        </div>
                        <div class="col-xs-6 col-md-3 visibility-hidden" data-toggle="appear" data-offset="-100" data-class="animated flipInY" data-timeout="800">
                            <div class="item item-2x item-circle push-10">
                                <i class="si si-support text-white"></i>
                            </div>
                            <div class="font-w600 text-white-op text-uppercase">24/7 Support</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END Features -->
    </div>
    <!-- END Hero Content -->
    

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
