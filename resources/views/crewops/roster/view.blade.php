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
                            <button type="button" data-toggle="modal" data-target="#modal-contact-edit">
                                <i class="si si-pencil"></i>
                            </button>
                        </li>
                    </ul>

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
