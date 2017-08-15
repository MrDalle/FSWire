@extends('layouts.oneui')

@section('content')

<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h1 font-w700 text-white push-10 animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Bid Page</h1>
            <h2 class="h5 text-white-op animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">you have bid on X flights</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
    <!-- Page Content -->
    <div class="content">


        <!-- User Simple Widgets -->
        <div class="row">
            @foreach($bids as $s)
                <div class="col-sm-6 col-lg-3">
                    <!-- Add Friend -->
                    <div class="bg-image animated fadeInUp "
                         style="background-image: url('{{ $s->airline->widget }}'); background-size: 100% 100%;">
                        <div class="bg-black-op">
                            <div class="block block-themed block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-center">{{ $s->airline->name }}</h3>
                                </div>
                                <div class="block-content block-content-full text-center">

                                    <h3 class="h1 font-w700 text-white">{{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                                </div>
                                <div class="block-content block-content-full text-center">

                                  <span class="pull-middle">
                                      <a href="#" class="btn btn-primary" data-toggle="modal"
                                              data-target="#modal-popout{{$s->id}}" role="button">Details</a>
                                              <a href="#" class="btn btn-warning" data-toggle="modal"
                                                      data-target="#modal-popout-brief{{$s->id}}" role="button">Briefing</a>
                                      <a href="#" class="btn btn-danger" role="button" onclick="event.preventDefault();
                                                               document.getElementById('delete-bid{{ $s->id }}').submit();">Cancel</a>
                                      <form id="delete-bid{{ $s->id }}" method="POST" action="{{ url('/flightops/bids/'.$s->id) }}" accept-charset="UTF-8" hidden>
                                          {{ csrf_field() }}
                                          <input name="_method" type="hidden" value="DELETE">
                                      </form>
                                  </span>


                                </div>
                                <div class="">
                                    <table class="block-table text-center bg-gray-lighter border-b">
                                        <tbody>
                                        <tr>
                                            <td class="border-r" style="width: 50%;">
                                                <div class="h1 font-w700">{{ $s->depapt->icao }}</div>
                                                <div class="h5 text-muted text-uppercase push-5-t">Departure</div>
                                            </td>
                                            <td class="border-r" style="width: 50%;">
                                                <div class="h1 font-w700">{{ $s->arrapt->icao }}</div>
                                                <div class="h5 text-muted text-uppercase push-5-t">Arrival</div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>


                            </div>
                        </div>
                    </div>
                    <!-- END Add Friend -->

                </div>

        </div>
          @endforeach
    </div>





    @foreach($bids as $s)
        <!-- Pop Out Modal DETIALS-->
        <div class="modal fade" id="modal-popout{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout modal-m">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">

                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Details for {{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                        </div>
                        <div class="">
                            <table class="block-table text-center bg-gray-lighter border-b">
                                <tbody>
                                <tr>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h1 font-w700">{{ $s->depapt->icao }}</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">{{ $s->depapt->name }}</div>
                                    </td>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h1 font-w700">{{ $s->arrapt->icao }}</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">{{ $s->arrapt->name }}</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="">
                            <table class="block-table text-center bg-gray-lighter border-b">
                                <tbody>
                                <tr>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h2 font-w700">@if($s->aircraft == null)
                                                Not Assigned
                                            @else
                                                {{$s->aircraft->name}}
                                            @endif</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">Airframe</div>
                                    </td>
                                    <td class="border-r" style="width: 50%;">
                                        <div class="h4 font-w700">{{ $s->airline->name }}</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">{{ $s->airline->icao }}</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary text" type="button" data-dismiss="modal"><i
                                    class="fa fa-check"></i> Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Modal -->




        <!-- Pop Out Modal BRIEFING-->
        <div class="modal fade" id="modal-popout-brief{{$s->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout modal-m">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">

                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Briefing for {{ $s->airline->icao }}{{ $s->flightnum }}</h3>
                        </div>

                        </div>
                        <div class="block-content text-center">
                           <h2>This feature will be implemented later. Stay tuned!</h2>

</div>

                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary text" type="button" data-dismiss="modal"><i
                                    class="fa fa-check"></i> Ok
                        </button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- END Pop Out Modal -->
    @endforeach

</div>


@endsection
