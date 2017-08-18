@extends('layouts.oneui')

@section('head')
    <link href="{{URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- Page Content -->
<div class="content">
    <div class="row">


      @foreach($users as $u)

        <div class="col-sm-6 col-md-4 col-lg-3">
            <!-- Contact -->
            <div class="block block-rounded">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" href="{{ url('flightops/profile/' . $u->id) }}">
                                <i class="si si-user"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="block-title">Pilot</div>
                </div>
                <div class="block-content block-content-full bg-primary text-center">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" href="{{ url('flightops/profile/' . $u->id) }}" src="{{ $u->avatar_url }}" onerror="this.src='https://identicon.org?t={{ $u->username }}&s=400'" alt="Avatar"></a>
                    <div class="h4 font-s13 push-10-t">{{ $u->username }}</div>
                </div>
                <div class="block-content">

                    <table class="table table-borderless table-striped font-s13">
                        <tbody>
                            <tr>
                                <td class="font-w600" style="width: 30%;">Total Flights</td>
                                <td>{{ count($u->pirep) }}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">AVG LDG RTE</td>
                                <td>{{ (int) \App\PIREP::where('user_id', $u->id)->avg('landingrate') }}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">RANK</td>
                                <td>PILOT</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Contact -->
        </div>


@endforeach

      </div>
  </div>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable( {
                responsive: true
            });
        } );
    </script>
    <script src="{{URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
@endsection
