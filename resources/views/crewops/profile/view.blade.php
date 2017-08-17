@extends('layouts.oneui')
            <!-- Header -->
            <style>
            .bg-image {
                height: 400px;
                background-color: #f9f9f9;
                background-position: 0 50%;
                -webkit-background-size: cover;
                background-size: cover;
            }

            .bg-primary-dark-op {
                height: 300px;
                background-color: rgba(62, 74, 89, 0.83);
            }



            </style>
@section('content')
<!-- Main Container -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- User Header -->
        <div class="block">
                        <!-- Basic Info -->
                        <div class="bg-image" style="background-image: url('{{ $user->cover_url }}')">

                            <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                                <div class="push-30-t push animated fadeInDown">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ $user->avatar_url }}" onerror="this.src='http://identicon.org?t={{ $user->username }}&s=400'" alt="Avatar"></a>
                                </div>
                                <div class="push-30 animated fadeInUp">
                                    <h2 class="h4 font-w600 text-white push-5">{{ $user->username }}</h2>
                                    <h3 class="h5 text-gray">Rank Name</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END Basic Info -->

                        <!-- Stats -->
                        <div class="block-content text-center">
                            <div class="row items-push text-uppercase">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total Hours</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ $totalflightime }}</a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">Total flights</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ \App\PIREP::where('user_id', $user->id)->count() }}</a>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">AVG LDG RTE</div>
                                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{ (int) \App\PIREP::where('user_id', $user->id)->avg('landingrate') }}</a>
                                </div>

                                <div class="col-xs-6 col-sm-3">
                                    <div class="font-w700 text-gray-darker animated fadeIn">RANK</div>
                                    <div class="text-warning push-10-t animated flipInX">
                                        <div class="h2 font-w700 text-gray-darker animated fadeIn">PILOT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Stats -->
                    </div>
                    <!-- END User Header -->

                    <!-- Main Content -->
                    <div class="row">
                      <div class="col-sm-7 col-lg-8">

                          <!-- Timeline -->
                          <div class="block block-opt-refresh-icon6">
                              <div class="block-header">
                                  <ul class="block-options">
                                      <li>
                                          <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                      </li>
                                      <li>
                                          <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                      </li>
                                  </ul>
                                  <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Recent Flights</h3>
                              </div>

@foreach(\App\PIREP::where('user_id', $user->id)->orderBy('id', 'desc')->limit(10)->get() as $p)
                                  <!-- System Notification -->
                                  <div class="block-content content-full">
                                      <div class="block-header">
                                        <table class="table table-condensed table-hover">
                                          <tbody>
                                          <ul class="block-options">
                                              <li>
                                                  <span><em class=" label label-success">{{ date('d/m/Y', strtotime($p->created_at)) }}</em></span>
                                              </li>

                                              <li>
                                                  <span><i class="fa fa-database "></i></span>
                                              </li>

                                          </ul>
<td class=" h4 font-w400">{{ $p->airline->icao . $p->flightnum }}
                                          <td class="h1 font-w700">{{ $p->depapt->icao }} -
                                          {{ $p->arrapt->icao }}</td></td>
                                          </div>
</tbody></table>
                                      </div>

                                  </div>@endforeach
                                  <!-- END System Notification -->


                                      </div>





                                </div>
                                <div class="col-sm-5 col-lg-4 ">

                                    <!-- Follow -->
                                    <div class="block">
                                        <div class="block-content block-content-full text-center">
                                            <button class="btn btn-sm btn-success"  onclick="window.location.href='/flightops/settings'"><i class="fa fa-fw fa-plus"></i> Edit Profile</button>

                                        </div>
                                    </div>
                                    <!-- END Follow -->




                                            </div>

    @endsection
