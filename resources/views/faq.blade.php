@extends('layouts.oneui')
@section('content')


<div class="content">
            <!-- Frequently Asked Questions -->
            <div class="block">
                <div class="block-content block-content-full block-content-narrow">
                    <!-- Introduction -->
                    <h2 class="h2 font-w600 push-30-t push">Introduction</h2>
                    <div id="faq1" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1">Welcome to FSWire!</a>
                                </h3>
                            </div>
                            <div id="faq1_q1" class="panel-collapse collapse in ">
                                <div class="panel-body h5">
                                  FSWire is the new Version of FSClouds old VA System based on PHPVMS.
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END Introduction -->

                    <!-- Functionality -->
                    <h2 class="h3 font-w600 push-50-t push">Functionality</h2>
                    <div id="faq2" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">How to create a VA</a>
                                </h3>
                            </div>
                            <div id="faq2_q1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>In order to create a own Virtual Airline on FSWire you need at least 3 Pilots and a Real or Phantasy VA name</p>
                                    Leave us a Support Ticket if you have any question left!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">How can i BID on flights?</a>
                                </h3>
                            </div>
                            <div id="faq2_q2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  To BID a flight  go to our Schedule System and hit the BID button. When launching smartCARS the flight will show up!

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">How can i create routes?</a>
                                </h3>
                            </div>
                            <div id="faq2_q3" class="panel-collapse collapse">
                                <div class="panel-body">
                                  To create routes you must be either an Airline Manager or Owner.
                                  As a normal Pilot on FSWire please use the premade schedules in our system.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq2_q4">My Username is userSystem.Windows.Forms.Label, Text: ????</a>
                                </h3>
                            </div>
                            <div id="faq2_q4" class="panel-collapse collapse">
                                <div class="panel-body">
                              Congrats! your account is one out of many which got succesfully merge into FSWire. In order to change your Username please visit the Profile tab and edit your profile there!
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- END Functionality -->


                                    </form>




                                <div class="col-md-8 col-md-offset-2">
                                                                <h1 class="font-w500 text-black push-30">FSWire Roadmap - Future Plans</h1>

                                                                <!-- Changelog Content -->
                                                                <div id="changelog" class="panel-group">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update10" aria-expanded="false">
                                                                                    <strong>1.0</strong> Initial Release <span class="font-w400 text-muted pull-right">August 2017</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">


                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Allmost all features of the old VAS are included
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> New Livemap with 3D mode and live telemetry
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Improved loading times on all pages with pagination
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Improved backend’s pages like Route Creator and Schedules
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> All lists are now searchable
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> <code>https://</code> was added to secure your passwords and transfered data
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.5.1 (2.4.0)
                                                                                            </li>

                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Fixed bug on some pages seeing admin access only menu items
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> <code>smartCARS</code> issue corosponding our map solved
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small overall CSS fixes
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Markup Changes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-success"></i> Added <code>.side-content-full</code> class to sidebar's main navigation parent
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 3.2 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>  </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update11" aria-expanded="false">
                                                                                        <strong>1.1</strong> PIREP Update <span class="font-w400 text-muted pull-right">September | 2017</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> PIREPS will now store stats like Flighttime,Miles flown, Dep/Arr-Time
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Improvements</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Improving many pages that are already in the system
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Updates</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.5.1 (2.4.0)
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>

                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update12" aria-expanded="false">
                                                                                        <strong>1.3</strong> Permission System Update <span class="font-w400 text-muted pull-right">October | 2017</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> With this update we will build in a role - permission system which is more adressed to the structe of FSWire
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Improvements</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Improving many pages that are already in teh system
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>


                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update13" aria-expanded="false">
                                                                                        <strong>1.4</strong> VA Update <span class="font-w400 text-muted pull-right">December | 2017</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> In this update we will enhance your VA experience. You will be able to join a VA and visit their profile page!
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> Due the Permission system you will only see routes and planes from your VA
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Improvements</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Free Flight and VA Mode for Pilots using FSWire
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>


                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update14" aria-expanded="false">
                                                                                        <strong>1.5</strong> Rank & Achviements Update <span class="font-w400 text-muted pull-right">February | 2018</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update14" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> With Ranks you can measure your skills and collect achivements while using FSWire and track your flights
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> Collect Achievements while flying with FSWire!
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Improvements</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> We will implement the old Ranksystem with a new Achievemnt system
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>


                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update15" aria-expanded="false">
                                                                                        <strong>1.65</strong> Support Update <span class="font-w400 text-muted pull-right">April | 2018</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> To enhance also the support experience we will built it into FSWire instead of handling it over a subdomain
                                                                                                </li>



                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update16" aria-expanded="false">
                                                                                        <strong>1.8</strong> Flightplanner Update <span class="font-w400 text-muted pull-right">June | 2018</span>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="changelog-update16" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <ul class="list list-simple">
                                                                                        <li>
                                                                                            <strong class="text-uppercase">New features</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">


                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i>Create a Route for a plane of your choice
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fa fa-plus fa-li text-success"></i>Its builded on top of the Simbrief API
                                                                                                </li>


                                                                                        </li>
                                                                                    </ul>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

  </div>  </div>



























                            </div></div>

@endsection
</body>


</html>
