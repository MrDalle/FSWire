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

    </script>
    <script async defer src="https://api.windytv.com/v2.3/boot.js"></script>
@endsection