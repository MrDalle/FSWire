@extends('layouts.oneui')


@section('stylesheet')
    <style type="text/css">
    .ofp {
    max-height: 100px;
    padding-left: 0px;
    padding-right: 0px;
    }
</style>
    @endsection



@section('plugin')
    <!--THE FOLLOWING LINE MUST BE INCLUDED FOR THE API TO FUNCTION-->
    <link rel="stylesheet" href="/assets/js/plugins/magnific-popup/magnific-popup.min.css">
@endsection

@section('content')


        <div class="bg-primary-dark">
            <section class="content content-full content-boxed">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Pilot Briefing  </h1>
                    <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">{{ $ofp_obj->general->icao_airline. $ofp_obj->general->flight_number }}</h2>
                </div>
                <!-- END Section Content -->
            </section>
        </div>

        <div class="bg-white">
            <section class="content content-mini content-mini-full content-boxed overflow-hidden">
                <ol class="breadcrumb">
                    <li><a class="text-primary-dark" href="{{ url('flightops/bids') }}">Bid Page</a></li>
                    <li><a class="text-primary-dark">{{ $ofp_obj->general->icao_airline. $ofp_obj->general->flight_number }}</a></li>
                    <li><a class="text-primary-dark">Briefing</a></li>
                </ol>
            </section>
        </div>



        <div class="content content-boxed">

            <div class="row">

                <div class="col-sm-4 col-sm-offset-2">
                    <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="h1 font-w700"><span class="h2 text-muted"></span>
                                {{ $ofp_obj->origin->icao_code }} - {{ $ofp_obj->destination->icao_code }} </div>

                            <div class="h5 text-muted text-uppercase push-5-t">alternate {{ $ofp_obj->alternate->icao_code }}</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-flat text-white">
                            <i class=" text-black-op"></i> Distance: {{ $ofp_obj->general->route_distance }} NM
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <input type="hidden" name="type" value="">
                            <div class="h1 font-w700"><span class="h2 text-muted"></span>{{ $ofp_obj->aircraft->name }} </div>
                            <div class="h5 text-muted text-uppercase push-5-t">{{ $ofp_obj->aircraft->reg }}</div>
                        </div>
                        <div class="block-content block-content-full block-content-mini bg-flat text-white">
                            <i class=" text-black-op"></i> PAX: {{ $ofp_obj->weights->pax_count }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-lg-4 animated fadeInUp" data-toggle="appear" data-offset="50" data-class="animated fadeInUp">
                    <!-- Developer Plan -->
                    <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block-header">
                            <h3 class="block-title text-primary">Fuel Info</h3>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <div class="h1 font-w700 text-primary push-10">{{ $ofp_obj->fuel->plan_ramp }}</div>
                            <div class="h5 font-w300 text-muted">est. fuel load in {{ $ofp_obj->params->units }}</div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-condensed">
                                <tbody>
                                <tr>
                                    <td><strong>EST. Burn</strong> {{ $ofp_obj->fuel->enroute_burn }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Taxi Fuel</strong> {{ $ofp_obj->fuel->taxi }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Reserve Fuel</strong> {{ $ofp_obj->fuel->reserve }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Plan. Takeoff Fuel</strong> {{ $ofp_obj->fuel->plan_takeoff }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </a>
                    <!-- END Developer Plan -->
                </div>

                <div class="col-sm-6 col-lg-4  animated fadeInUp" data-toggle="appear" data-offset="50" data-class="animated fadeInUp">
                    <!-- Developer Plan -->
                    <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block-header">
                            <h3 class="block-title text-primary">Weight Info</h3>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <div class="h1 font-w700 text-primary push-10">{{ $ofp_obj->weights->payload }}</div>
                            <div class="h5 font-w300 text-muted">payload in {{ $ofp_obj->params->units }}</div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-condensed">
                                <tbody>
                                <tr>
                                    <td><strong>EST. TOW</strong> {{ $ofp_obj->weights->est_tow }}</td>
                                </tr>
                                <tr>
                                    <td><strong>EST. LDG</strong> {{ $ofp_obj->weights->est_ldw }}</td>
                                </tr>
                                <tr>
                                    <td><strong>EST. ZFW</strong> {{ $ofp_obj->weights->est_zfw }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Weight</strong> {{ $ofp_obj->weights->oew }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                    </a>
                    <!-- END Developer Plan -->
                </div>

                <div class="col-sm-6 col-lg-4  animated fadeInUp" data-toggle="appear" data-offset="50" data-class="animated fadeInUp">
                    <!-- Developer Plan -->
                    <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block-header">
                            <h3 class="block-title text-primary">Time Info</h3>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter">
                            <div class="h1 font-w700 text-primary push-10">{{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->times->sched_time_enroute)->format('H:i') }}</div>
                            <div class="h5 font-w300 text-muted">time enroute</div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-condensed">
                                <tbody>
                                <tr>
                                    <td><strong>OUT time (start pushback)</strong> {{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->times->sched_out)->format('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>OFF time (takeoff)</strong> {{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->times->sched_off)->format('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>ON time (landing)</strong> {{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->times->sched_on)->format('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>IN time (Gate arrival)</strong> {{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->times->sched_in)->format('H:i') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                    </a>
                    <!-- END Developer Plan -->
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <a class="block block-bordered block-link-hover3 text-center" href="javascript:void(0)">
                        <div class="block">
                            <div id="js-map-search" style=" position: relative; overflow: hidden;">
                                <iframe height="600px" width="100%" scrolling="no" src="{{ $ofp_obj->links->skyvector }}"></iframe>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block block-themed">
                        <div class="block-header bg-flat-darker">
                            <ul class="block-options">
                                <li>
                                    <button data-toggle="tooltip" ata-placement="top" title="" type="button" data-original-title="Copy to Clipboard" onclick="copyToClipboard('#p1')"><i class="fa fa-copy"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Routing with AIRAC {{ $ofp_obj->params->airac }}</h3>
                        </div>
                        <div class="block-content">
                            <p id="p1">{{ $ofp_obj->atc->route }}</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6">
                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                    <div class="block block-themed">
                        <div class="block-header bg-flat-darker">
                            <h3 class="block-title">Weather Information</h3>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-borderless table-header-bg">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">ICAO</th>
                                    <th>METAR</th>
                                    <th class="hidden-xs" style="width: 15%;">TIME</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">{{ $ofp_obj->origin->icao_code }}</td>
                                    <td class="text-left">{{ $ofp_obj->weather->orig_metar }}</td>
                                    <td class="hidden-xs">
                                        <span class="label label-warning">{{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->params->time_generated)->toDateTimeString() }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">{{ $ofp_obj->destination->icao_code }}</td>
                                    <td class="text-left">{{ $ofp_obj->weather->dest_metar }}</td>
                                    <td class="hidden-xs">
                                        <span class="label label-warning">{{ Carbon\Carbon::createFromTimestamp((int)$ofp_obj->params->time_generated)->toDateTimeString() }}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </a>
            </div>


            <div class="row items-push js-gallery-advanced">
            @foreach($ofp_obj->images->map as $image)
                <div class="col-sm-4 animated fadeIn push-20-t">
                    <div class="img-container fx-img-rotate-r">
                        <img class="img-responsive" src="{{ $ofp_obj->images->directory . $image->link }}" alt="">
                        <div class="img-options">
                            <div class="img-options-content">
                                <h3 class="font-w400 text-white push-5">{{ $image->name }}</h3>
                                <a class="btn btn-sm btn-default img-lightbox" href="{{ $ofp_obj->images->directory . $image->link }}" alt="{{ $image->name }}">
                                    <i class="fa fa-search-plus"></i> View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <div class="row">

                <div class="col-sm-7 ">
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title text-primary">Full OFP LIDO format</h3>
                        </div>

                        <div class="block-content">
                            <!-- SlimScroll Container -->
                            <div data-toggle="slimscroll" data-height="600px" data-color="#46c37b" data-always-visible="true" data-size="12px">
                                {!! $ofp_obj->text->plan_html !!}
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-sm-5 ">

                        <div class="block block-themed">
                            <div class="block-header bg-flat-darker">
                                <h3 class="block-title">Popular FMS Download</h3>
                            </div>
                            <div class="block-content">
                                <table class="table table-striped table-borderless table-header-bg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="hidden-xs text-right" style="width: 15%;">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">{{ $ofp_obj->fms_downloads->pdf->name }}</td>
                                            <td class="hidden-xs text-right">
                                                <div class="btn-group">
                                                    <a href="{{ $ofp_obj->fms_downloads->directory }}{{ $ofp_obj->fms_downloads->pdf->link }}" class="btn btn-primary">
                                                        <i class="fa fa-cloud" aria-hidden="true"></i> DWN
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">{{ $ofp_obj->fms_downloads->fsx->name }}</td>
                                            <td class="hidden-xs text-right">
                                                <div class="btn-group">
                                                    <a href="{{ $ofp_obj->fms_downloads->directory }}{{ $ofp_obj->fms_downloads->fsx->link }}" class="btn btn-primary">
                                                        <i class="fa fa-cloud" aria-hidden="true"></i> DWN
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">{{ $ofp_obj->fms_downloads->xp9->name }}</td>
                                            <td class="hidden-xs text-right">
                                                <div class="btn-group">
                                                    <a href="{{ $ofp_obj->fms_downloads->directory }}{{ $ofp_obj->fms_downloads->xp9->link }}" class="btn btn-primary">
                                                        <i class="fa fa-cloud" aria-hidden="true"></i> DWN
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">{{ $ofp_obj->fms_downloads->pmr->name }}</td>
                                            <td class="hidden-xs text-right">
                                                <div class="btn-group">
                                                    <a href="{{ $ofp_obj->fms_downloads->directory }}{{ $ofp_obj->fms_downloads->pmr->link }}" class="btn btn-primary">
                                                        <i class="fa fa-cloud" aria-hidden="true"></i> DWN
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">{{ $ofp_obj->fms_downloads->jar->name }}</td>
                                            <td class="hidden-xs text-right">
                                                <div class="btn-group">
                                                    <a href="{{ $ofp_obj->fms_downloads->directory }}{{ $ofp_obj->fms_downloads->jar->link }}" class="btn btn-primary">
                                                        <i class="fa fa-cloud" aria-hidden="true"></i> DWN
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">More Files</td>
                                            <td class="hidden-xs text-right">
                                                <select id="fms">
                                                    <option value="#">Select type</option>
                                                    @foreach($ofp_obj->files->file as $file)
                                                        <option value="{{ $ofp_obj->fms_downloads->directory }}{{ $file->link }}">{{ $file->name }}</option>
                                                    @endforeach
                                                </select>
                                                <a id="link" href="#">Download Selected</a>


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                </div>



            </div>


        </div>




















@endsection



@section('javascript')
    <script>
        jQuery(document).ready(function($){
            $('#fms').change(function(){
                $('#link').prop("href", $(this).val());

            });
        });
    </script>

<script>
    function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    }
</script>

    <!-- Page JS Plugins -->
    <script src="/assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>

    <!-- Page JS Code -->
    <script>
        jQuery(function () {
            // Init page helpers (Magnific Popup plugin)
            App.initHelpers('magnific-popup');
            App.initHelpers('slimscroll');
        });
    </script>
@endsection