@extends('layouts.oneui')

@section('plugin')
    <!--THE FOLLOWING LINE MUST BE INCLUDED FOR THE API TO FUNCTION-->
    <script src="/assets/js/simbrief.apiv1.js"></script>

@endsection
@section('content')



    <form class="form-horizontal" role="form" id="sbapiform" onsubmit="return false;">

    <div class="bg-primary-dark">
        <section class="content content-full content-boxed">
            <!-- Section Content -->
            <div class="push-100-t push-50 text-center">
                <h1 class="h2 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Pilot Briefing for {{ $bid->airline->icao }}{{ $bid->flightnum }} </h1>
                <input type="hidden" name="airline" value="{{ $bid->airline->icao }}">
                <input type="hidden" name="fltnum" value="{{ $bid->flightnum }}">
                <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{ $bid->depapt->name }} - {{ $bid->arrapt->name }}</h2>
            </div>
            <!-- END Section Content -->
        </section>
    </div>

        <div class="bg-white">
            <section class="content content-mini content-mini-full content-boxed overflow-hidden">
                <ol class="breadcrumb">
                    <li><a class="text-primary-dark" href="{{ url('flightops/logbook') }}">Bid Page</a></li>

                    <li><a href="">{{ $bid->airline->icao }}{{ $bid->flightnum }}</a></li>
                </ol>
            </section>
        </div>


    <section class="content content-boxed">

        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="h1 font-w700"><span class="h2 text-muted"></span> {{ $bid->depapt->icao }} - {{ $bid->arrapt->icao }}</div>
                        <input type="hidden" name="orig" value="{{ $bid->depapt->icao }}">
                        <input type="hidden" name="dest" value="{{ $bid->arrapt->icao }}">
                        @if(!is_null($bid->cruise))<input type="hidden" name="fl" value="{{$bid->cruise}}">@endif
                        <div class="h5 text-muted text-uppercase push-5-t">LIDO</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini bg-flat text-white">
                        <i class="text-black-op"></i>{{ $bid->getdistance() }}NM @if(!is_null($bid->cruise))FL{{$bid->cruise / 100}}@endif
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <input type="hidden" name="type" value="{{ $bid->aircraft->icao }}">
                        <input type="hidden" name="reg" value="{{ $bid->aircraft->registration }}">
                        <div class="h1 font-w700"><span class="h2 text-muted"></span> {{ $bid->aircraft->name }}</div>
                        <div class="h5 text-muted text-uppercase push-5-t">{{ $bid->aircraft->registration }}</div>
                    </div>
                    <div class="block-content block-content-full block-content-mini bg-flat text-white">
                        <i class="text-black-op"></i> {{ $bid->airline->name }}
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Route</h3>
                    </div>
                    <div class="block-content block-content-full">
                        @if(!is_null($bid->route))<input type="hidden" name="route" value="{{$bid->route}}">@endif
                        {{ $bid->route }}
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- Card plugin (.js-card-form and .js-card-container are initialized at the bottom of the page) -->
                <!-- For more info and examples you can check out https://github.com/jessepollak/card -->
                <form class="js-card-form form-horizontal">
                    <!-- Products -->

                    <!-- END Products -->

                    <!-- Create Account -->
                    <div class="block block-link-hover3">
                        <div class="block-header">
                            <h3 class="block-title">Additonal Setup</h3>
                        </div>
                        <div class="block-content">
                            <div class="row push-10-t">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="col-xs-12">Planning</label>
                                        <div class="col-xs-12">
                                            <label class="css-input css-radio css-radio-success push-10-r">
                                                <input name="navlog" checked="checked" type="checkbox" value="1"><span></span> Detailed Navlog
                                            </label>

                                            <label class="css-input css-radio css-radio-success">
                                                <input name="etops" type="checkbox" value="1"><span></span> ETOPS
                                            </label>

                                            <label class="css-input css-radio css-radio-success">
                                                <input name="stepclimbs" type="checkbox" value="1"><span></span> Plan Stepclimbs
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="col-xs-12">Notams</label>
                                        <div class="col-xs-12">
                                            <label class="css-input css-radio css-radio-success push-10-r">
                                                <input name="notams" checked="checked" type="checkbox" value="1"><span></span> Include
                                            </label>
                                            <label class="css-input css-radio css-radio-success">
                                                <input name="firnot" type="checkbox" value="1"><span></span> FIR
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="col-lg-12">Unit</label>
                                        <div class="col-xs-12">
                                            <label class="css-input css-radio css-radio-success push-10-r">
                                                <input name="units" checked="checked" type="radio" value="KGS"><span></span> KGS
                                            </label>
                                            <label class="css-input css-radio css-radio-success">
                                                <input name="units" type="radio"  value="LBS"><span></span> LBS
                                            </label>
                                    </div>
                                </div>
                            </div>

                            </div>


                        </div>
                    </div>
                    <!-- END Create Account -->

                    <!-- Credit Card -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Generate Flight Plan</h3>
                        </div>
                        <div class="block-content">
                            <!-- Card Container -->
                            <div class="js-card-container hidden-xs push-50"></div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="form-group">
                                        <div class="col-xs-12 text-center">
                                            <button class="btn btn-primary" onclick="simbriefsubmit('/simbrief/output/{{$bid->id}}');"><i class="fa fa-check push-5-r"></i> Generate OFP</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 text-center">
                                            <button class="btn btn-warning" data-toggle="modal" data-target="#modal-popout" ><i class="fa fa-check push-5-r"></i> EDIT FLP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Credit Card -->
                </form>
            </div>
        </div>


        <!-- Pop Out Modal -->
        <div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout modal-m">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">EDIT Flight  </h3>
                        </div>

                            <!-- Material (floating) Contact -->
                            <div class="block block-themed">
                                <div class="block-content">
                                    <form class="form-horizontal push-10-t push-10" action="{{ url('flightops/bids/'.$bid->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <div class="form-material floating">
                                                    <input class="form-control" id="briefing_FlightLevel" name="briefing_FlightLevel" type="text" value="{{ $bid->cruise }}">
                                                    <label for="contact3-firstname">FLT LVL {{$bid->cruise}}</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-8">
                                                <div class="form-material floating open">
                                                    <select class="form-control" id="briefing_Aircraft_Id" name="briefing_Aircraft_Id" size="1">
                                                        @foreach($aircrafts as $aircraft))
                                                            <option value="{{ $aircraft->id }}"
                                                                @if ($aircraft->id === $bid->aircraft_id) selected @endif
                                                            >
                                                                {{ $aircraft->name }} ({{ $aircraft->registration }})
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="contact3-subject">Edit Aircraft</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material floating">
                                                    <textarea class="form-control" id="briefing_Route" name="briefing_Route" rows="7">{{ $bid->route }}</textarea>
                                                    <label for="contact3-msg">Route</label>
                                                </div>
                                                <div class="help-block text-right">Empty fields will get calculated automatically!</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-success text" type="submit" >
                                                <i class="fa fa-check"></i> save changes
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- END Material (floating) Contact -->
                        </div>


                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->



    </section>
    <!-- END Checkout Content -->

    </form>







@endsection



