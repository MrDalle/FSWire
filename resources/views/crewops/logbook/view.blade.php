
@extends('layouts.oneui')
@section('plugin')
    <link rel="stylesheet" href="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.css') }}">
    @endsection
@section('content')
<body>
<!-- Page Content -->
<main id="main-container">
  <div class="content bg-gray-lighter">
      <div class="row items-push">
          <div class="col-sm-7">
              <h1 class="page-heading">
                  Logbook <small>all flights in one place.</small>
              </h1>
          </div>
      </div>
  </div>

<div class="content">
  <div class="block">
    <div class="block-content">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
        <table class="table table-bordered table-striped js-dataTable-full">
          <thead>
              <tr>
                  <th class="text-center">ICAO</th>
                  <th class="text-center">Airline</th>
                  <th>Flight</th>
                  <th class="hidden-xs">Depparture</th>
                  <th class="hidden-xs" style="width: 15%;">Arrival</th>
                  <th class="text-center" style="width: 10%;">Aircraft</th>
                  <th class="text-center" style="width: 10%;">Approved</th>
                  <th class="text-center" style="width: 10%;">Edit</th>
              </tr>
          </thead>

                        <tbody>
                          <tbody>
                            @foreach($pireps as $p)
                              <tr>
                                  <td class="text-center">{{ $p->airline->icao }}</td>
                                  <td class="text-center">{{ $p->airline->name }}</td>
                                  <td class="text-center">{{ $p->flightnum }}</td>
                                  <td class="text-center">{{ $p->depapt->icao }}</td>
                                  <td class="text-center">{{ $p->arrapt->icao }}</td>
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

                                  <td class="text-center">
                                      <div class="btn-group">
                                          <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>

                                      </div>
                                  </td>
                              </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</main>
    <!-- END Dynamic Table Full -->
    @endsection
@section('javascript')
    <script src="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/base_tables_datatables.js') }}"></script>
    @endsection
</body>
