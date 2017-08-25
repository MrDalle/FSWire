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
                                </div>



                                <div class="col-md-8 col-md-offset-2">
                                                                <h1 class="font-w300 text-black push-30">Changelog</h1>

                                                                <!-- Changelog Content -->
                                                                <div id="changelog" class="panel-group">
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update10" aria-expanded="false">
                                                                                    <strong>3.2</strong> Update <span class="font-w400 text-muted pull-right">May 13, 2017</span>
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
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Project Management Pages
                                                                                                <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Dashboard Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Project Page (with Tasks UI)
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Create Project Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Edit Project Page
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Image Cropper
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Masonry
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Improved frontend’s horizontal navigation spacing (to match with header’s) on mobile screens
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Improved backend’s page headings styles
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Small under the hood improvements to main JS code
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> <code>https://</code> was added to Google web fonts and Google Maps urls
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.5.1 (2.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datetimepicker 4.17.47 (4.17.44)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 3.4.0 (3.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> SweetAlert2 6.6.2 (6.3.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.6.2 (4.6.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Card 2.3.0 (2.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> ChartJS 2.5.0 (2.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JS Cookie 2.1.4 (2.1.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> DataTables 1.10.15 (1.10.13)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 9.11.0 (9.9.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Ion RangeSlider 2.1.7 (2.1.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Gmaps 0.4.25 (0.4.24)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Summernote 0.8.3 (0.8.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Wizard 1.4.2 (1.3.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Scroll Lock 3.1.2 (2.2.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) AngularJS 1.6.4 (1.6.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Router 0.4.2 (0.3.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Bootstrap Tpls 2.5.0 (2.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) oclazyload 1.0.10 (1.0.9)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Fixed bug in mobile navigation (boxed layout pages)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> <code>rtl_start_frontend_header_nav.html</code> Small inline CSS fixes to the Get Started file
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
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update9" aria-expanded="false">
                                                                                    <strong>3.1</strong> Update <span class="font-w400 text-muted pull-right">January 17, 2017</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update9" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Coming Soon v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Contacts Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> SimpleMDE Markdown Editor
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> SweetAlert2 replaced SweetAlert (it is a new supported fork of the original)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Minimum width was added to main navigation’s icons, so now there is no link flashing on page loading
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> (AngularJS version only) Bootstrap Popovers examples now open on hover by default
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Font Awesome 4.7.0 (4.6.3) - 41 new icons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.4.0 (2.3.5)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datetimepicker 4.17.44 (4.17.42)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Card 2.1.0 (2.0.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> ChartJS 2.4.0 (2.3.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.6.1 (4.5.11)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> DataTables 1.10.13 (1.10.12)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 3.1.0 (3.0.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 9.9.0 (9.7.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Ion RangeSlider 2.1.6 (2.1.4)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Validation 1.16.0 (1.15.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Vide 0.5.1 (0.5.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> SweetAlert2 6.3.1 (1.1.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) AngularJS 1.6.1 (1.5.8)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Router 0.3.2 (0.3.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Bootstrap Tpls 2.4.0 (2.1.4)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) NgStorage 0.3.11 (0.3.10)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Markup Changes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-success"></i> SweetAlert2 replaced original SweetAlert, so please remember to update your included styles and scripts accordingly (<code>plugins/sweetalert/*</code> folder was removed and <code>plugins/sweetalert2/*</code> was added). Check out the activity page or head down to the JavaScript section to check out the new required files. Have in mind that the new plugin works in IE10 and up. For migration instructions, you can check out <a href="https://github.com/limonte/sweetalert2/wiki/Migration-from-SweetAlert-to-SweetAlert2">https://github.com/limonte/sweetalert2/wiki/Migration-from-SweetAlert-to-SweetAlert2</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-success"></i> <code>rtl_start_backend.html</code> Small inline CSS change to the RTL Backend Get Started file
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-success"></i> <code>rtl_start_frontend.html</code> Small inline CSS change to the RTL Frontend Get Started file
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 3.1 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update8" aria-expanded="false">
                                                                                    <strong>3.0</strong> Update <span class="font-w400 text-muted pull-right">October 4, 2016</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update8" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Boxed Dashboard
                                                                                                <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Dashboard Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Products Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Customers Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Sales Page
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <i class="fa fa-plus fa-li text-success"></i> Settings Page
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Chart.js v2 Page with examples
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> ScrollTo helper: uiScrollTo() now works better when the header is fixed
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap 3.3.7 (3.3.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery 2.2.4 (2.2.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery UI 1.12.1 (1.11.4)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Validation 1.15.1 (1.15.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.3.5 (2.3.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datepicker 1.6.4 (1.6.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datetimepicker 4.17.42 (4.17.37)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Card 2.0.3 (1.3.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JavaScript Cookie 2.1.3 (2.1.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.5.11 (4.5.9)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Summernote 0.8.2 (0.8.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 3.0.1 (2.9.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> The Final Countdown for jQuery 2.2.0 (2.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) AngularJS 1.5.8 (1.5.7)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Router 0.3.1 (0.3.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Bootstrap Tpls 2.1.4 (1.3.2)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Material forms are now working as expected in webkit browsers when autofill is enabled
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> .scrollLock() was changed to .scrollLock('enable') in app.js
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small overall CSS fixes
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 3.0 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update7" aria-expanded="false">
                                                                                    <strong>2.2</strong> Update <span class="font-w400 text-muted pull-right">July 15, 2016</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update7" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Landing Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Dashboard v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Travel Agency Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Travel Package Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Travel Guide Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Video backgrounds with Vide plugin
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> CountTo plugin: uiHelperAppearCountTo() Helper + jsCountTo Directive now accepts 'data-before' values
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Image overlay white gradients (showcased in Travel Package page)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Language declaration (<code>lang="en"</code>) was added in <code>html</code> tag
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Word wrapping in chat UI
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Google Maps API script url was updated to support the new required API key (to create your own, please visit <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#key">Google</a>)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.5.9 (4.5.8)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Datatables 1.10.12 (1.10.11)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 2.9.0 (2.7.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 9.8.0 (9.3.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JavaScript Cookie 2.1.2 (2.1.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Select2 4.0.3 (4.0.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) AngularJS 1.5.7 (1.5.5)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Router 0.3.0 (0.2.18)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> (AngularJS version only) Select2 plugin: jsSelect2 directive was fixed
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small overall CSS fixes
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 2.2 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update6" aria-expanded="false">
                                                                                    <strong>2.1</strong> Update <span class="font-w400 text-muted pull-right">May 19, 2016</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update6" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Cards Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Files Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Tickets Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Multiple table tools per page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> DataTables with full pagination example
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block loading state now blocks interactivity with buttons/links
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Font Awesome 4.6.3 (4.5.0) - 30 new icons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery 2.2.3 (2.2.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.3.2 (2.3.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datepicker 1.6.1 (1.5.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Card 1.3.2 (1.2.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Chart.js 1.1.1 (1.0.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.5.8 (4.5.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Datatables 1.10.11 (1.10.10)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 2.7.1 (2.6.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> GmapsJS 0.4.24 (0.4.22)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 9.3.0 (9.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Summernote 0.8.1 (0.7.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JavaScript Cookie 2.1.1 (2.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Validation Plugin 1.15.0 (1.14.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Slick 1.6.0 (1.5.9)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Magnific Popup 1.1.0 (1.0.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Dropzone 4.3.0 (4.2.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Scroll Lock 2.2.0 (1.1.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Select2 4.0.2 (4.0.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Ion Range Slider 2.1.4 (2.1.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) AngularJS 1.5.5 (1.5.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> (AngularJS version only) Angular UI Bootstrap 1.3.2 (1.2.4)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Select2 multiple height fix
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Slick Slider fixed when using white navigation along with hover option
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small fixes to block classes
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> <code>.bg-image</code> updated to fix an issue with newer Chrome versions
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Image hover options improved for mobile usage
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small overall fixes
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Markup Changes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-success"></i> <code>js/plugins/summernote/summernote-bs3.min.css</code> was removed and no longer needs to be included in the page where Summernote is used
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 2.1 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update5" aria-expanded="false">
                                                                                    <strong>2.0</strong> Update <span class="font-w400 text-muted pull-right">March 11, 2016</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update5" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> AngularJS Version
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b">Documentation was updated and extra details were added regarding the new version. If you need any further info regarding the update do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update4" aria-expanded="false">
                                                                                    <strong>1.4</strong> Update <span class="font-w400 text-muted pull-right">January 22, 2016</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update4" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Page Loader Feature
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> SweetAlert Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> jQuery AutoComplete Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Social Timeline Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Dashboard Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Orders Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Order Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Products Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Product Edit Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Customer Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Home Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Search Results Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Products List Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Product Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Commerce - Checkout Frontend Page
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block styles (eg bordered) now don't apply on children blocks
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Scroll blocking was added to chat popup
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Custom JS helpers added to Docs
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap 3.3.6 (3.3.5)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Font Awesome 4.5.0 (4.4.0) - 20 new icons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery 2.2.0 (2.1.4)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Maxlength 1.7.0 (1.6.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datepicker 1.5.1 (1.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Datetimepicker 4.17.37 (4.15.35)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Wizard 1.3.2 (1.0.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.5.6 (4.5.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Datatables 1.10.10 (1.10.8)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 2.6.0 (2.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> GmapsJS 0.4.22 (0.4.19)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 9.1 (8.7)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Summernote 0.7.3 (0.6.16)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery CountTo 1.2.0 (1.1.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JavaScript Cookie 2.1.0 (2.0.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Slick 1.5.9 (1.5.5)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Magnific Popup 1.0.1 (1.0.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Easy Pie Chart 2.1.7 (2.1.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> SlimScroll 1.3.8 (1.3.3)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Dropzone 4.2.0 (4.0.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Select2 4.0.1 (4.0.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HTML5 Placeholder jQuery Plugin 2.3.1 (2.1.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Ion Range Slider 2.1.2 (2.0.13)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Mini sidebar animation fix (Firefox/IE10/IE11)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Vertical button group markup fix
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small z-index fix in uiHelperNotify() in app.js
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 1.4 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update3" aria-expanded="false">
                                                                                    <strong>1.3</strong> Update <span class="font-w400 text-muted pull-right">November 17, 2015</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update3" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Chat Full
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Chat Fixed
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Chat Popup
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Learning - Courses Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Learning - Course Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> e-Learning - Lesson Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Profile v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Profile Edit Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Side Overlay Tabs
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Ribbons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Google Maps Full Page
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Form Validation - Select2 plugin + Currency format support
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block API improvements for nested blocks
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Time format in Mask Inputs plugin
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Better Android support for frontend's horizontal navigation
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Material inputs and browser autofill fix.
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Bootstrap fix in PHP version (url was hardcoded - not using assets folder variable)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Headings not using correctly Less variables
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Tiny CSS fixes
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Markup Changes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-flat"></i> Now, you don't have to include '?sensor=true' when including Google Maps API
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-flat"></i> Side Overlay inner HTML markup was updated to support the newly added tabs feature
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 1.3 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update2" aria-expanded="false">
                                                                                    <strong>1.2</strong> Update <span class="font-w400 text-muted pull-right">September 1, 2015</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update2" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> PSD UI Kits (Backend &amp; Frontend)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> RTL Pages (Get Started)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Datetimepicker Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Input Sliders Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Input Maxlength Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Rating Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Tree View Component
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Vector Maps
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Login v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Reminder v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Register v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Lock Screen v2 Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Maintenance Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Blog Classic Frontend Page
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block options in tabs
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block options with form Submit/Reset and regular buttons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Block loading icon variations
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Plugin unminified files were added and are now available if needed for debugging
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Font Awesome 4.4.0 (4.3.0) - 66 new icons
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap Colorpicker 2.3 (2.1.2)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> CKEditor 4.5.3 (4.4.7)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Datatables 1.10.8 (1.10.7)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> FullCalendar 2.4.0 (2.3.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> GmapsJS 0.4.19 (0.4.18)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> HighlightJS 8.7 (8.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Countdown 2.1.0 (2.0.4)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Tags Input 1.3.6 (1.3.6)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Validation 1.14.0 (1.13.1)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery Masked Input 1.4.1 (1.4.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Summernote 0.6.16 (0.6.7)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> jQuery CountTo 1.1.0 (1.0.0)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> JS Cookie 2.0.3 (1.5.1)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Validation message failed to show for checkbox in form validation material examples (Login/Lock/Reminder/Register/Form Wizard)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small Main Navigation JS fix
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 1.2 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update1" aria-expanded="false">
                                                                                    <strong>1.1</strong> Update <span class="font-w400 text-muted pull-right">July 25, 2015</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="changelog-update1" class="panel-collapse collapse" aria-expanded="false">
                                                                            <div class="panel-body">
                                                                                <ul class="list list-simple">
                                                                                    <li>
                                                                                        <strong class="text-uppercase">New features</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Main header navigation (horizontal) for frontend
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Slimscroll helper for easy scrollable areas
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Option for saving color theme between pages with cookies (when changed from theme list)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Forum Categories Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Forum Topics Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Forum Discussion Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Forum New Topic Backend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Blog List Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Blog Grid Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Blog Story Frontend Page
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-plus fa-li text-success"></i> Blog Story Cover Frontend Page
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Improvements</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Disabled states for custom CSS switches, checkboxes and radios
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Small spacing improvements in main navigation
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-check fa-li text-primary"></i> Various small improvements in <code>js/app.js</code>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Updates</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-angle-double-up fa-li text-amethyst"></i> Bootstrap 3.3.5 (3.3.4)
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Fixes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> IE9 rendering issues
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Draggable blocks couldn't be dragged onto an empty list
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> CKEditor helper failed to init only one editor at a time (inline or normal)
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Validation message failed to show for checkbox in form validation material examples
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Hovering over a disabled floating material input didn't update cursor accordingly when hovering its label
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-heartbeat fa-li text-city"></i> Small fixes in the docs
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>
                                                                                        <strong class="text-uppercase">Markup Changes</strong>
                                                                                        <ul class="fa-ul list-simple-mini push-10-t">
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-flat"></i> Fixing IE9 rendering issues required to separate the original Bootstrap CSS styles from <code>oneui.css</code> and be included on its own. Remember to include <code>css/boostrap.min.css</code> in your <code>&lt;head&gt;</code> tag before <code>oneui.css</code> as shown in the new pages of 1.1 version.
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-flat"></i> <code>js/plugins/select2/select2-bootstrap.css</code> was renamed to <code>js/plugins/select2/select2-bootstrap.min.css</code>, so it will need to be updated in the pages you are including it.
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fa fa-code fa-li text-flat"></i> You can now add the class <code>enable-cookies</code> in <code>#page-container</code> (in all your pages or if you are using the PHP version you can change it from <code>inc/config.php</code>) to save the active color theme between pages (when changed from theme list).
                                                                                            </li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                                <p class="remove-margin-b"><a href="javascript:void(0)" data-toggle="scroll-to" data-speed="650" data-target="#docs-template-updating">Updating</a> to the new 1.1 version is easy but if you need any assistance do not hesitate to <a href="http://goo.gl/ZXmNx0">contact us</a>! :-)</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading">
                                                                            <h4 class="panel-title">
                                                                                <strong>1.0</strong> <span class="font-w400">Release</span> <span class="font-w400 text-muted pull-right">June 20, 2015</span>
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- END Changelog Content -->
                                                            </div>






























                            </div>

@endsection
</body>


</html>
