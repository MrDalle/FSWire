
@extends('layouts.oneui')
@section('plugin')
    <link rel="stylesheet" href="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.css') }}">
    @endsection
@section('content' )


<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Logbook from {{ Auth::user()->username }}</h1>
            <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">You have made {{ \App\PIREP::where('user_id', Auth::user()->id)->count() }} flights</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- Page Content -->

<section class="content content-boxed overflow-hidden">
    <div class="push-50-t push-50">
        <div class="row">
            @foreach($pireps as $p)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a class="block block-rounded block-link-hover2" href="{{ url('flightops/logbook/'.$p->id) }}">

                    @if($p->status === 1)
                    <div class="block-content block-content-full text-center bg-gray-dark ribbon ribbon-bookmark ribbon-success ">
                        <div class="ribbon-box ribbon-primary font-w400">APPROVED</div>
                        <div class="push-50-t push-20 animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                            <i class="h2 font-w700 mheight-150  text-white-op">{{ $p->airline->icao }}{{ $p->flightnum }}</i>
                        </div>
                        <div class="text-white-op">
                            <em>{{ $p->airline->name }}</em> • <em>{{ $p->airline->icao }}</em>
                        </div>
                    </div>
                    @elseif($p->status === 2)
                        <div class="block-content block-content-full text-center bg-gray-dark ribbon ribbon-bookmark ribbon-danger ">
                            <div class="ribbon-box ribbon-primary font-w400">PENDING</div>
                            <div class="push-50-t push-20 animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <i class="h2 text-white-op">{{ $p->airline->icao }}{{ $p->flightnum }}</i>
                            </div>
                            <div class="text-white-op">
                                <em>{{ $p->airline->name }}</em> • <em>{{ $p->airline->icao }}</em>
                            </div>
                        </div>
                    @else
                        <div class="block-content block-content-full text-center bg-gray-dark ribbon ribbon-bookmark ribbon-alert ">
                            <div class="ribbon-box ribbon-primary font-w600">DENIED</div>
                            <div class="push-50-t push-20 animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <i class="h2 text-center">{{ $p->airline->icao }}{{ $p->flightnum }}</i>
                            </div>
                            <div class="text-white-op">
                                <em>{{ $p->airline->name }}</em> • <em>{{ $p->airline->icao }}</em>
                            </div>
                        </div>
                    @endif


                    <div class="block-content">
                        <h4 class="mheight-20 text-center">{{ $p->depapt->icao }} - {{ $p->arrapt->icao }}</h4>
                        <h4 class="mheight-20 text-center">{{ $p->aircraft->name }} - {{ $p->aircraft->registration }}</h4>
                        <h4 class="mheight-50 text-center">{{ $p->landingrate }} FPM</h4>
                        <div class="font-s12 text-center push">{{ $p->created_at }}</div>
                    </div>
                </a>

            </div>

            @endforeach

        </div>

    </div>

</section>














    @endsection
@section('javascript')
    <script src="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/base_tables_datatables.js') }}"></script>
    @endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection