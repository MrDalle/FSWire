@section('stylesheet')

                <!-- MAP -->
                <style type="text/css">
              .header-navbar-fixed #main-container {
                	padding-top: -54px;
                }

                .map-container {
                	width: 100%;
                  border: none;
                }

                .map-container iframe{
                  height:1080px;
                	width: 100%;

                	position: relative; /* IE needs a position other than static */
                }
                </style>

                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="content">
                    <div class="pull-t pull-r-l">
                <div class="map-container">
                <iframe scrolling="no" frameBorder="0" src="https://map.fswire.net"></iframe>
                </div>
                <!-- END MAP -->
                </div>
                </div>
                @endsection
