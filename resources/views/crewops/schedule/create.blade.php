


@extends('layouts.oneui')

@section('content')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Plan a Free Flight
                    <small>no matter if you do a Airliner Flight or just flying in the bush!</small>
                </h1>
            </div>
        </div>
    </div>





    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/crewops/schedule') }}">
            {{csrf_field()}}


                <div class="col-lg-4">
                    <!-- Email Center Widget -->
                    <div class="block block-bordered">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option"
                                            data-action="fullscreen_toggle"></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                            data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class=" h3 font-w700">Route Creator</h3>
                        </div>
                        <div class="block-content">
                            <div class="pull-r-l pull-t push">
                                <table class="block-table text-center bg-gray-lighter border-b">
                                    <tbody>
                                    <tr>
                                        <td class="border-r" style="width: 40%;">
                                            <div class="h4 font-w700">Departure</div>&nbsp;

                                            <input value="{{ old('depicao') }}" type="text" id="depicao" name="depicao"
                                                   class="form-control text-center" placeholder="eg. KLAX" required>
                                        </td>

                                        <td class="border-r" style="width: 40%;">
                                            <div class="h4 font-w700">Arrival</div>&nbsp;

                                            <input value="{{ old('arricao') }}" type="text" id="arricao" name="arricao"
                                                   class="form-control  text-center" placeholder="eg. KSEA" required>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="list-group">

                                <a class="list-group-item active">
                                    <span class="badge bg-warning">STD | 1013HP</span>&nbsp;
                                    <i class="fa fa-fw  push-5-r"></i>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label" for="text-input">Cruise Alt</label>
                                        <div class="col-md-9">
                                            <input value="{{ old('cruise') }}" type="text" id="route" name="cruise"
                                                   class="form-control" placeholder="35000" required>
                                        </div>
                                    </div>
                                </a>

                                <a class="list-group-item bg-gray-light">
                                    <span class="badge bg-warning">4 DIGITS</span>&nbsp;&nbsp;
                                    <i class="fa fa-fw fa-number push-5-r"></i>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label" for="text-input">Flight
                                            Number</label>
                                        <div class="col-md-9">
                                            <input type="text" id="flightnum" name="flightnum" value="{{ old('flightnum') }}" class="form-control"
                                                   placeholder="eg. 1126" required>
                                        </div>
                                    </div>
                                </a>





                                <a class="list-group-item bg-gray-light">
                                    <i class="fa fa-fw fa-plane push-5-r"></i> Choose Airframe<select
                                            id="aircraft_group" name="aircraft_group" class="form-control" size="1">
                                        @foreach($acfgroups as $acf)
                                            <option value="{{ $acf->icao }}">{{ $acf->name }}</option>
                                        @endforeach
                                    </select>
                                </a>
                                <a class="list-group-item bg-gray-light">
                                    <i class="fa fa-fw fa-plane push-5-r"></i> Type of flight
                                    <select id="type" name="type" class="form-control" size="1">
                                        <option value="0">Please select</option>
                                        <option value="1">Airline Flight</option>
                                        <option value="2">Cargo Flight</option>
                                        <option value="2">Bush Flying</option>
                                    </select>

                                        <a class="list-group-item bg-gray-light">
                                            <i class="fa fa-fw fa-edit push-5-r"></i> Flying on
                                            <div class="checkbox">
                                                <label for="checkbox1">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> FSWire
                                                </label>
                                                <label for="checkbox1">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> FSCloud
                                                </label>
                                                <label for="checkbox2">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> VATSIM
                                                </label>
                                                <label for="checkbox3">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> IVAO
                                                </label>
                                                <label for="checkbox4">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> offline
                                                </label>
                                                <label for="checkbox5">
                                                    <input type="checkbox" id="enabled" name="enabled" value="1"> other Networks
                                                </label>

                                            </div>
                                            <select id="airline"
                                                    name="airline"
                                                    class="form-control disabled"
                                                    size="1"
                                                    style="display:none;">

                                                @foreach($airlines as $a)
                                                    <option value="{{ $a->icao }}">{{ $a->icao }} - {{ $a->name }}</option>
                                                @endforeach
                                            </select>
                                        </a>



                                </a>
                                <a class="list-group-item bg-gray-light">
                                    <div class="card-block">

                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>&nbsp;
                                            Reset
                                        </button>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Email Center Widget -->
                </div>

        </form>


            <div class="col-lg-6">
                <div class="block block-bordered">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option"
                                        data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option"
                                        data-action="content_toggle"></button>
                            </li>
                        </ul>
                        <h3 class=" h3 font-w700">Live WXR</h3>
                    </div>

                <iframe height="550px" width="100%" src="https://embed.windy.com/embed2.html?lat=52.122&lon=8.960&zoom=5&level=surface&overlay=wind&menu=&message=&marker=&forecast=12&calendar=now&location=ip&type=map&actualGrid=&metricWind=kt&metricTemp=%C2%B0C" frameborder="0"></iframe>
            </div>
            </div>

    <!-- Dashboard Cards -->

    <div class="col-xs-4 col-lg-2 col-md-2">
        <a class="block block-link-hover2 text-center   animated pulse" href="{{ url('/flightops/schedule') }}">
            <div class="block-content block-content-full bg-modern">
                <i class="si si-settings fa-4x text-white"></i>
                <div class="font-w600 text-white-op push-15-t">Bid Flight</div>
            </div>
        </a>


        <a class="block block-link-hover2 text-center animated pulse" href="{{ url('/map') }}">
            <div class="block-content block-content-full bg-city">
                <i class="si si-map fa-4x text-white"></i>
                <div class="font-w600 text-white-op push-15-t">RADAR</div>
            </div>
        </a>

        <a class="block block-link-hover2 text-center  animated pulse" href="{{ url('/flightops/logbook') }}">
            <div class="block-content block-content-full bg-flat">
                <i class="si si-book-open fa-4x text-white"></i>
                <div class="font-w600 text-white-op push-15-t">Logbook</div>
            </div>
        </a>
    </div>

    </div>
    </div>
@endsection
