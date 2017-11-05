
@extends('layouts.oneui')
@section('plugin')
    <link rel="stylesheet" href="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.css') }}">
    @endsection
@section('content')
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



<div class="content">
  <div class="col-xs-12 col-md-12 col-lg-12">
  <div class="block animated fadeInUp">
    <div class="block-content ">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->

        <table class="table table-bordered table-striped table-hover js-dataTable-full ">
            <thead>
            <tr>
                <th class="text-center">ICAO</th>
                <th>Airline</th>
                <th>Flight</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Landing Rate</th>
                <th>Aircraft</th>
                <th>Approved</th>
                <th>Flight Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pireps as $p)
                <tr>
                    <td class="text-center">{{ $p->airline->icao }}</td>
                    <td class="text-center">{{ $p->airline->name }}</td>
                    <td class="text-center">{{ $p->flightnum }}</td>
                    <td class="text-center">{{ $p->depapt->icao }}</td>
                    <td class="text-center">{{ $p->arrapt->icao }}</td>
                    <td class="text-center">{{ $p->landingrate }} FPM</td>
                    <td class="text-center">{{ $p->aircraft->name }} ({{ $p->aircraft->registration }})</td>
                    <td class="text-center">
                        @if($p->status === 1)
                            <span class="label label-success">APPROVED</span>
                        @elseif($p->status === 2)
                            <span class="label label-warning">PENDING</span>
                        @else
                            <span class="label label-danger">DENIED</span>
                        @endif
                    </td>

                    <td class="text-center">{{ $p->flighttime }}</td>
            </tr>
                @endforeach
            </tbody>
        </table>

                </div>
            </div>
        </div>


    <!-- END Dynamic Table Full -->
    @endsection
@section('javascript')
    <script src="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/base_tables_datatables.js') }}"></script>
    @endsection
