@extends('layouts.oneui')
@section('plugin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
    @endsection
@section('stylesheet')
    <style type="text/css">
        .js-map-full.custom {
            position: absolute;
            top: 60px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            overflow: hidden;
        }
    </style>
    @endsection
@section('content')
    <div class="js-map-full custom">
    <div id="windyty"></div>
    </div>
    @endsection
@section('javascript')
    <script type="text/javascript">

        var windytyInit = {
            // Required: API key
            key: 'PsL-At-XpsPTZexBwUkO7Mx5I',

            // Optional: Initial state of the map
            lat: 50.4,
            lon: 14.3,
            zoom: 5,
        }

        // Required: Windyty main function is called after
        // initialization of API
        //
        // @map is instance of Leaflet maps
        //
        function windytyMain(map) {
           
        }

        map.on('click', function(e) {
            var lon, lat;
            lon = e.latlng.lng;
            lat = e.latlng.lat;

            var values = W.interpolation.interpolateValues(lat, lon);

            console.log(lat + ', ' + lon);
            console.log(values);

            var content = function(values) {
                var html, param, value, metric;
                var overlays = {
                    wind: {
                        metric: 'm/s'
                    },
                    gust: {
                        metric: 'm/s'
                    },
                    rain: {
                        metric: 'mm'
                    },
                    temp: {
                        metric: '°C',
                        conversion: function(v) { return v - 273.15 }
                    },
                    clouds: {
                        metric: 'mm/h',
                        conversion: function(v) { return (v - 200) / 60 }
                    }
                };

                var format = function (p, v, m) {
                    return '<b>' + p + '</b>' + ': ' + Math.round(v) + m + '<br />';
                };

                html = '';
                html += format('wind speed', values.wind, 'm/s');
                html += format('wind angle', values.wind, '°');

                if (values.overlayName == 'wind') {
                    return html;
                }

                param = values.overlayName;
                value = values.overlayValue;
                metric = overlays[param].metric;

                if (overlays[param].conversion && overlays[param].conversion != undefined) {
                    value = overlays[param].conversion(value);
                }

                html += format(param, value, metric);

                return html;
            }

            var popup = L.popup().setLatLng(e.latlng).setContent(content(values)).openOn(map);
        });

    </script>
    <script async defer src="https://api.windytv.com/v2.3/boot.js"></script>
@endsection