@section('stylesheet')

                <!-- MAP -->
                <style type="text/css">

                .js-map-full iframe{
                  height:100%;
                	width: 100%;

                	position: relative; /* IE needs a position other than static */
                }
                .js-map-full.custom {
                    position: absolute;
                    top: 20px;
                    right: 0px;
                    bottom: 0px;
                    left: 60px;
                    overflow: hidden;
                }
                </style>

@endsection

                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="js-map-full custom">
                <iframe scrolling="no" frameBorder="0" src="https://map.fswire.net"></iframe>
                <!-- END MAP -->
                </div>
                @endsection
