@section('stylesheet')

                <!-- MAP -->
                <style type="text/css">

                .js-map-full iframe{
                  height:1080px;
                	width: 100%;

                	position: relative; /* IE needs a position other than static */
                }
                </style>

                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="js-map-full">
                <iframe scrolling="no" frameBorder="0" src="https://map.fswire.net"></iframe>
                <!-- END MAP -->
                </div>
                @endsection
