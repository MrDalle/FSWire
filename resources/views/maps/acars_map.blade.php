@extends('layouts.oneui')
@section('plugin')
    <script src="/js/leaflet.js"></script>
    <script src="/js/leaflet.rotatedMarker.js"></script>
    <script src="/js/Leaflet.Geodesic.js"></script>

@endsection
@section('stylesheet')
    <link rel="stylesheet" href="/css/leaflet.css">
    <style type="text/css">
        #map-container {
            padding-left: 0px;
            padding-rigt: 0px;
            border: none;
            width: calc(100% - 60px);
            height: calc(100% - 60px);
            position: absolute;
            z-index: 1;
        }
        .info-panel {
            position: absolute;
            top: 90px;
            right: 10px;
            width: 350px;
            z-index: 100;
            opacity: 1;
        }
        .airplane {
            height: 150px;
        }
    </style>
@endsection


@section('content')
    <div id="map-container"></div>


    <!-- Pop Out Modal -->
    <div class="info-panel">


        <div class="block" id="my-block">
            <div class="block-header">
                <ul class="block-options">
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                    </li>
                    <li>
                        <!-- To close a block, just add the following properties to your button: data-toggle="block-option" data-action="close" -->
                        <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                    </li>
                </ul>

                <h2 class="block-title"><span id='airline'></span></h2>
                <span id='pilot'></span>
            </div>
            <div id="aircraft_img" class="airplane block-content block-content-full text-center bg-image" >

            </div>
            <div class="block-content tab-content">


                <div class="pull-r-l pull-t push">
                    <table class="block-table text-center bg-gray-lighter border-b">
                        <tbody>
                        <tr>
                            <td class="border-r" style="width: 40%;">
                                <div class="h2 font-w700"  id="dep"></div>
                                <div class="h5 text-muted text-uppercase push-5-t" id="depname"></div>
                            </td>
                            <td class="border-r" style="width: 20%;">
                                <i class="fa fa-plane fa-2x"></i>
                                <div class="h4 font-w700"  id="time"></div>
                                <div class="h5 text-muted text-uppercase push-5-t" >ETA</div>
                            </td>

                            <td class="border-r" style="width: 40%;">
                                <div class="h2 font-w700" id="arr"></div>
                                <div class="h5 font-w300 text-muted text-uppercase push-5-t" id="arrname"></div>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pull-r-l pull-t push">
                    <table class="block-table text-center bg-gray-light border-b">
                        <tbody>
                        <tr>
                            <td class="border-r" style="width: 50%;">
                                <div class="h4 font-w500"><span id="aircraft"></span></div>
                                <div class="h5 text-muted text-uppercase push-5-t"><span id="aircraftreg"></span></div>
                            </td>
                            <td class="border-r" style="width: 50%;">
                                <div class="h4 font-w500"><span id="gs"></span></div>
                                <div class="h5 text-muted text-uppercase push-5-t">speed</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="block-table text-center bg-gray-light border-b">
                        <tbody>
                        <tr>
                            <td class="border-r" style="width: 50%;">
                                <div class="h4 font-w500"><span id="alt"></span></div>
                                <div class="h5 text-muted text-uppercase push-5-t"><span id="phase"></span></div>
                            </td>
                            <td class="border-r" style="width: 50%;">
                                <div class="h4 font-w500"><span id="heading"></span></div>
                                <div class="h5 text-muted text-uppercase push-5-t">Heading</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="block-table text-center bg-gray-light border-b">
                        <tbody>
                    <tr>
                        <td class="border-r" style="width: 100%;">
                            <div class="h5 text-uppercase push-5-t">Route</div>
                            <div class="h5 text-muted font-w400"><span id="route"></span></div>

                        </td>
                    </tr>
                        </tbody>
                    </table>
                    <table class="block-table text-center bg-gray-light border-b">
                        <tbody>
                        <tr>
                            <td class="border-r" style="width: 100%;">
                                <div class="h5 text-muted font-w400"><span id="client"></span></div>

                            </td>
                        </tr>
                        </tbody>
                    </table>


                </div>

        </div>

     </div>
    </div>

@endsection


@section('javascript')
    <script type="text/javascript">

        var flights = {!! $flights !!};
        //console.log(flights);

        App.blocks('#my-block', 'close');

        var mymap = L.map('map-container');

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);

        var aircrafts = new L.featureGroup();
        var flightPath = new L.featureGroup();
        aircrafts.addTo(mymap);
        flightPath.addTo(mymap);

        var depart = new L.icon({
            iconUrl: '/img/apt/depart.png',
            iconSize: [24, 24],
            iconAnchor: [12, 12]
        });

        var arrive = new L.icon({
            iconUrl: '/img/apt/arrive.png',
            iconSize: [24, 24],
            iconAnchor: [12, 12]
        });

        //Handle marker click
        var onMarkerClick = function(e){
            //console.log(e);

            //alert("You clicked on marker with flightId: " +this.options.flightId);
            axios.get('/acars/' + this.options.flightId)
                .then(function (response){
                    let flight = response.data;
                    console.log(flight);
                    flightPath.clearLayers();
                    //render Line between DEP and ARR
                    var latlngs = [
                        [flight.bid.depapt.lat, flight.bid.depapt.lon],
                        [flight.bid.arrapt.lat, flight.bid.arrapt.lon]
                    ];
                    var polyline = L.polyline(latlngs, {
                        color: 'red',
                        weight: 2
                    }).addTo(flightPath);

                    L.marker([flight.bid.depapt.lat, flight.bid.depapt.lon],{
                        icon : depart
                    })
                        .addTo(flightPath);
                    L.marker([flight.bid.arrapt.lat, flight.bid.arrapt.lon],{
                        icon : arrive
                    })
                        .addTo(flightPath);

                    var Geodesic = L.geodesic([], {
                        weight: 3,
                        opacity: 0.5,
                        color: 'blue',
                        dashArray: '5,5',
                        steps: 20
                    }).addTo(flightPath);

                    var pos = new L.LatLng(flight.lat, flight.lon);
                    var arr = new L.LatLng(flight.bid.arrapt.lat, flight.bid.arrapt.lon);

                    Geodesic.setLatLngs([[pos, arr]]);

                    // zoom the map to the layer
                    mymap.fitBounds(flightPath.getBounds());
                    App.blocks('#my-block', 'open');

                    //fill info panel;
                    $('#aircraft_img').css( 'background-image','url('+ flight.img_url +')');
                    $('#flightnum').html(flight.bid.airline.icao + flight.bid.flightnum);
                    $('#pilot').html(flight.user.first_name + ' ' + flight.user.last_name);
                    $('#dep').html(flight.bid.depapt.icao);
                    $('#depname').html(flight.bid.depapt.city);
                    $('#arr').html(flight.bid.arrapt.icao);
                    $('#arrname').html(flight.bid.arrapt.city);
                    $('#flightstage').html(flight.phase);
                    $('#milesleft').html(flight.distremain);
                    $('#alt').html(flight.altitude);
                    $('#gs').html(flight.groundspeed);
                    $('#heading').html(flight.heading);
                    $('#route').html(flight.bid.route);
                    $('#aircraft').html(`${flight.bid.aircraft.name}`);
                    $('#aircraftreg').html(`${flight.bid.aircraft.registration}`);
                    $('#airline').html(flight.bid.airline.name);
                    $('#time').html(flight.timeremaining);
                    $('#phase').html(flight.phase);
                    $('#client').html(flight.client);

                })
        };

        function renderAllFlights(allFlights){
            aircrafts.clearLayers();
            allFlights.forEach(function (item){
                if (item.bid.aircraft.image) {
                    var aircraft = L.icon({
                        iconUrl: item.bid.aircraft.image.aircraft_shadow,
                        iconSize: [35, 35],
                        iconAnchor: [17, 17]
                    });
                    L.marker([item.lat, item.lon],{
                        icon : aircraft,
                        rotationAngle: item.heading,
                        flightId: item.id
                    })
                        .on('click', onMarkerClick)
                        .addTo(aircrafts);
                }

            });



            mymap.fitBounds(aircrafts.getBounds());
        };

        renderAllFlights(flights);





    </script>



@endsection