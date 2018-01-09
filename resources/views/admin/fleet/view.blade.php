
@extends('layouts.oneui')

@section('content')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                VA Management <small>take care of your pilots needs.</small>
            </h1>
        </div>
    </div>
</div>



  <!-- Main Container -->

            <!-- Page Header -->
  <div class="content">



    <div class="col-sm-12">
        <div class="block block-rounded">
            <div class="block-header">
                <i class="fa fa-align-justify"></i> Aircraft Table
            </div>
          <div class="block-content block-content-full ">
                <div class="block-content block-content-full">

                    @if(session('aircraft_created'))
                        <div class="alert alert-success">Aircraft successfully created.</div>
                    @elseif(session('aircraft_updated'))
                        <div class="alert alert-success">Aircraft successfully updated.</div>
                    @endif

                    <a href="{{ url('admin/fleet/create') }}" role="button" class="button btn btn-primary pull-r"><i class="fa fa-plus"></i>&nbsp; New Aircraft</a>

                </div>
                @if($fleet == '[]')
                    <div class="alert alert-info" role="alert">
                        <strong>No Airplanes Found:</strong> The server returned no airplanes in the system.
                    </div>
                @else
                  <table class="table table-bordered table-striped table-hover js-dataTable-full ">
                        <thead>
                        <tr>
                            <th>Airline</th>
                            <th>ICAO</th>
                            <th>Manufacturer</th>
                            <th>Model Name</th>
                            <th>Registration</th>
                            <th>Hub</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fleet as $a)
                            <tr>
                                @if($a->airline != null)
                                    <td>{{$a->airline->icao}}</td>
                                @else
                                    <td>N/A</td>
                                @endif
                                <td>{{$a->icao}}</td>
                                <td>{{$a->manufacturer}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->registration}}</td>
                                @if($a->hub == null)
                                    <td>Not Assigned</td>
                                @else
                                    <td>{{$a->hub->icao}}</td>
                                @endif
                                @if($a->location == null)
                                    <td>N/A</td>
                                @else
                                    <td>{{$a->location->icao}}</td>
                                @endif

                                <td>
                                    <a href="{{ url('/admin/fleet/'.$a->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection

      @section('javascript')
          <script src="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
          <script src="{{ URL::asset('assets/js/pages/base_tables_datatables.js') }}"></script>
@endsection