@extends('layouts.oneui')
@section('content')
    <div id="windyty"></div>
    @endsection
@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
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
            var popup = L.popup()
                .setLatLng([50.4, 14.3])
                .setContent("Hello World")
                .openOn( map );
        }

    </script>
    <script async defer src="https://api.windytv.com/v2.3/boot.js"></script>
@section()