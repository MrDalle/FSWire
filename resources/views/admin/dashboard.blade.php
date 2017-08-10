
@extends('layouts.oneui')

@section('content')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Manager Dashbaord <small>FSWire Stats</small>
            </h1>
        </div>
    </div>
</div>




  <!-- Main Container -->
        <main id="main-container">
            <!-- Page Header -->
  <div class="content">
    <div class="col-sm-6 col-lg-3">
                                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                    <div class="block-content block-content-full bg-success">
                                        <div class="h1 font-w700 text-white">{{ \App\ScheduleTemplate::where('enabled', 1)->count() }}</div>
                                        <div class="h5 text-white-op text-uppercase push-5-t">Schedules</div>
                                    </div>
                                    <div class="block-content block-content-full block-content-mini">
                                        <i class="fa fa-arrow-up text-success"></i> +90% This week
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                                        <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                                            <div class="block-content block-content-full bg-primary">
                                                                <div class="h1 font-w700 text-white">{{ \App\User::where('status', 1)->count() }}</div>
                                                                <div class="h5 text-white-op text-uppercase push-5-t">Active Pilots</div>
                                                            </div>
                                                            <div class="block-content block-content-full block-content-mini">
                                                                <i class="fa fa-arrow-up text-success"></i> +22% This week
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-sm-6 col-lg-3">
                                                                                <a class="block block-rounded block-link-hover3 text-center" href="javascript:void(0)">
                                                                                    <div class="block-content block-content-full bg-danger">
                                                                                        <div class="h1 font-w700 text-white">{{ \App\PIREP::all()->count() }}</div>
                                                                                        <div class="h5 text-white-op text-uppercase push-5-t">Logged Flights</div>
                                                                                    </div>
                                                                                    <div class="block-content block-content-full block-content-mini">
                                                                                        <i class="fa fa-arrow-up text-success"></i> +45% This week
                                                                                    </div>
                                                                                </a>
                                                                            </div>


</div></main>
@endsection
