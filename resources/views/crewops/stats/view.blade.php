@section('stylesheet')

                <!-- MAP -->
                <!-- MAP -->
                <style type="text/css">
                .map-container {

                  border: none;
                }

                .map-container iframe{
                  height:1080px;
                  width:100%;


                  position: relative; /* IE needs a position other than static */
                }

                </style>

                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="map-container">
                <iframe scrolling="no" frameBorder="0" src="https://map.fswire.net/statistics"></iframe>
                <!-- END MAP -->
                </div>
                @endsection
