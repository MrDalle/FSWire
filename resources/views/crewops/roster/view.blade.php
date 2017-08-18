@extends('layouts.oneui')

@section('head')
    <link href="{{URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- Page Content -->
<div class="content">
    <div class="row">
<<<<<<< refs/remotes/origin/master
=======

      @foreach($users as $u)
>>>>>>> Roster
        <div class="col-sm-6 col-md-4 col-lg-3">
            <!-- Contact -->
            <div class="block block-rounded">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="modal" data-target="#modal-contact-edit">
                                <i class="si si-pencil"></i>
                            </button>
                        </li>
                    </ul>
<<<<<<< refs/remotes/origin/master
                    <div class="block-title">Joshua Munoz</div>
                </div>
                <div class="block-content block-content-full bg-primary text-center">
                    <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar16.jpg" alt="">
                    <div class="font-s13 push-10-t">Graphic Designer</div>
                </div>
                <div class="block-content">
                    <div class="text-center push">
                        <a class="text-default" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-facebook-square"></i>
                        </a>
                        <a class="text-info" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-twitter-square"></i>
                        </a>
                        <a class="text-danger" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-youtube-square"></i>
                        </a>
                    </div>
                    <table class="table table-borderless table-striped font-s13">
                        <tbody>
                            <tr>
                                <td class="font-w600" style="width: 30%;">Category</td>
                                <td>Work</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Phone</td>
                                <td>+ 00 66008300</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Email</td>
                                <td>user1@one.ui</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Contact -->
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <!-- Contact -->
            <div class="block block-rounded">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="modal" data-target="#modal-contact-edit">
                                <i class="si si-pencil"></i>
                            </button>
                        </li>
                    </ul>
                    <div class="block-title">Ashley Welch</div>
                </div>
                <div class="block-content block-content-full bg-primary text-center">
                    <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar6.jpg" alt="">
                    <div class="font-s13 push-10-t">Photographer</div>
=======
                    <div class="block-title"><a href="{{ url('flightops/profile/' . $u->id) }}">{{ $u->username }}</a></div>
                </div>
                <div class="block-content block-content-full bg-primary text-center">
                    <img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar16.jpg" alt="">
                    <div class="font-s13 push-10-t">{{ $u->id }}</div>
>>>>>>> Roster
                </div>
                <div class="block-content">
                    <div class="text-center push">
                        <a class="text-default" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-facebook-square"></i>
                        </a>
                        <a class="text-info" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-twitter-square"></i>
                        </a>
                        <a class="text-danger" href="javascript:void(0)">
                            <i class="fa fa-2x fa-fw fa-youtube-square"></i>
                        </a>
                    </div>
                    <table class="table table-borderless table-striped font-s13">
                        <tbody>
                            <tr>
<<<<<<< refs/remotes/origin/master
                                <td class="font-w600" style="width: 30%;">Category</td>
                                <td>Work</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Phone</td>
                                <td>+ 00 43008422</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Email</td>
                                <td>user2@one.ui</td>
                            </tr>
=======
                                <td class="font-w600" style="width: 30%;">Total Flights</td>
                                <td>{{ count($u->pirep) }}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Miles Flown</td>
                                <td>0</td>
                            </tr>
>>>>>>> Roster
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Contact -->
        </div>
<<<<<<< refs/remotes/origin/master
=======
@endforeach
>>>>>>> Roster
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
