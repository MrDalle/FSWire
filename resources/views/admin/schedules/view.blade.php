
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




            <!-- Page Header -->
  <div class="content">



    <div class="col-sm-12">
      <div class="block block-rounded">
          <div class="block-header">
                <i class="fa fa-align-justify"></i> Schedules Table
            </div>
          <div class="block-content block-content-full">
                <div class="block-content block-content-full">

                    @if(session('schedule_created'))
                        <div class="alert alert-success">Route successfully created.</div>
                    @elseif(session('schedule_updated'))
                        <div class="alert alert-success">Route successfully updated.</div>
                    @endif

                    <a href="{{ url('admin/schedule/create') }}" role="button" class="button btn btn-primary"><i class="fa fa-plus"></i>&nbsp; New Route</a>
                </div>
                @if($schedules == '[]')
                    <div class="alert alert-info" role="alert">
                        <strong>No Routes Found:</strong> The server returned no routes in the system.
                    </div>
                @else
                <table id="table_id" class="table table-bordered table-striped table-hover js-dataTable-full ">
                    <thead>
                    <tr>
                        <th>Airline Code</th>
                        <th>Flight Number</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Aircraft Group</th>
                        <th>Seasonal</th>
                        <th>Enabled</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $s)
                    <tr>
                        <td>{{$s->airline->icao}}</td>
                        <td>{{$s->flightnum}}</td>
                        <td>{{$s->depapt->icao}} - {{$s->depapt->name}}</td>
                        <td>{{$s->arrapt->icao}} - {{$s->arrapt->name}}</td>
                        @if($s->aircraft_group == null)
                        <td>Not Assigned</td>
                        @else
                            <td>{{$s->aircraft_group->name}}</td>
                        @endif
                        @if($s->seasonal == '1')
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                        @if($s->enabled == '1')
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                        @if($s->type == '1')
                            <td>Passenger</td>
                        @else
                            <td>Cargo</td>
                        @endif
                        <td>
                            <a href="{{ url('/admin/schedule/'.$s->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                {{--<a href="#" role="button" class="btn btn-danger" onclick="event.preventDefault();
                                        document.getElementById('delete-{{ $s->id }}').submit();">Delete</a>--}}
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                    @endif
                {{ $schedules->links('vendor.pagination.oneui-default') }}
            </div>
        </div>
    </div>
  </div></main>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable( {
                responsive: true,
                "autoWidth": false
            });
            /*
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("href");
            });
            */
            $(".clickable-row").click(function() {
                return false;
            }).dblclick(function() {
                window.document.location = $(this).data("href");
                return false;
            });
        } );
    </script>
    <script src="{{URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{ URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/base_tables_datatables.js') }}"></script>
@endsection
