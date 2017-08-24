
@extends('layouts.oneui')

@section('content')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Manager Dashbaord <small>take care of your pilots needs.</small>
            </h1>
        </div>
    </div>
</div>




  <!-- Main Container -->
        <main id="main-container">
            <!-- Page Header -->
  <div class="content">



    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> PIREPs Table
            </div>
            <div class="card-block">

                <table id="table_id" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Username</th>
                        <th>Airline</th>
                        <th>#</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pireps as $p)
                        <tr>
                            <td>{{ $p->date_created }}</td>
                            <td>{{ $p->user->username }}</td>
                            <td>{{ $p->airline->icao }}</td>
                            <td>{{ $p->flightnum }}</td>
                            <td>{{ $p->depapt->icao }}</td>
                            <td>{{ $p->arrapt->icao }}</td>
                            <td>
                                <a href="{{ url('admin/pireps/'.$p->id) }}" class="btn btn-primary btn-sm disabled">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $pireps->links('vendor.pagination.oneui-default') }}
            </div>
        </div>
    </div>
@endsection
