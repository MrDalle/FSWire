@extends('layouts.oneui')
@section('content')


                <!-- MAP -->
                <style type="text/css">
                .map-container {
                    padding-left: 0px;
                    padding-rigt: 0px;
                    border: none;
                }

                .map-container iframe{
                   /* IE needs a position other than static */
                    width: calc(100% - 60px);
                    height: calc(100% - 60px);
                    position: absolute;
                }

                </style>


<body>


                <!-- MAP -->
                <div class="container-fluid map-container">
                    <iframe  frameBorder="0" src="https://www.ventusky.com/"></iframe>
                </div>
                <!-- END MAP -->

                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->


        <!-- END Page Container -->
@endsection
</body>


</html>
