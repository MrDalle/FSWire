@extends('layouts.oneui')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- User Simple Widgets -->
        <div class="row">
            @foreach($bids as $s)
                <div class="col-sm-6 col-lg-3">
                    <!-- Add Friend -->
                    <div class="bg-image "
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
                                      <a href="#" class="btn btn-primary" role="button">Details</a>
                                      <a href="#" class="btn btn-success" role="button">Briefing</a>
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


@endsection
