@extends('layouts.oneui')
@section('content')


<div class="content content-boxed">
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

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq2_q5">Do you have any plans for the future?</a>
                                </h3>
                            </div>
                            <div id="faq2_q5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Yes we do!
                                    <div class="block">
                                  <div class="block-content">
                                      <ul class="list list-activity push">
                                          <li>
                                              <i class="si si-wallet text-success"></i>
                                              <div class="font-w600">1.0</div>
                                              <div><a href="javascript:void(0)">Release | Map Update</a></div>
                                              <div><small class="text-muted">The Map update features a new live map with many tools to make your next flight easier.</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-pencil text-info"></i>
                                              <div class="font-w600">1.1</div>
                                              <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i>PIREP Update</a></div>
                                              <div><small class="text-muted">PIREPS will now store stats like Flighttime,Miles flown, Dep/Arr-Time etc.</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-plus text-success"></i>
                                              <div class="font-w600">1.3</div>
                                              <div><a href="javascript:void(0)">Permission System Update</a></div>
                                              <div><small class="text-muted">With this update we will build in a role - permission system which is more adressed to the structe of FSWire</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-close text-danger"></i>
                                              <div class="font-w600">1.35</div>
                                              <div><a href="javascript:void(0)">VA Update</a></div>
                                              <div><small class="text-muted">In this update we will enhance your VA experience. You will be able to join a VA and visit their profile page!</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-wrench text-warning"></i>
                                              <div class="font-w600">1.5</div>
                                              <div><a href="javascript:void(0)">Rank & Miles Update</a></div>
                                              <div><small class="text-muted">With Ranks you can measure your skills and collect achivements while using FSWire and track your flights</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-wrench text-warning"></i>
                                              <div class="font-w600">1.6</div>
                                              <div><a href="javascript:void(0)">Support Update</a></div>
                                              <div><small class="text-muted">To enhance also the support experience we will built it into FSWire instead of handling it over a subdomain</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-wrench text-warning"></i>
                                              <div class="font-w600">1.8</div>
                                              <div><a href="javascript:void(0)">Flightplanner Update</a></div>
                                              <div><small class="text-muted">Create a Route for a plane of your choice would be nice or? with this update you will be able to create companyroutes for almost any plane</small></div>
                                          </li>
                                          <li>
                                              <i class="si si-wrench text-success"></i>
                                              <div class="font-w600">Buy us a coffe! </div>
                                              <div><a href="https://fswire.net/donate.php"Paypal Donation</a></div>
                                              <div><small class="text-muted">support us so we can keep up the good work and upgrade server structre and more </small></div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Functionality -->

                                        </div>
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
                                                                    </div>

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
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Improving many pages that are already in teh system
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

  </div>  </div>  </div>  



























                            </div>

@endsection
</body>


</html>
