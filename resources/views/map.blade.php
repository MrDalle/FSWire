@section('stylesheet')

                <!-- MAP -->
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

                @extends('layouts.oneui')
                @section('content')
                <!-- MAP -->
                <div class="js-map-full custom">
                <iframe scrolling="no" frameBorder="0" src="https://map.fswire.net"></iframe>
                <!-- END MAP -->
                </div>
                @endsection
