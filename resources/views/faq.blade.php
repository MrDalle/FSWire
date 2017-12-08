@extends('layouts.oneui')
@section('content')


<div class="content">
  <div class="row">
            <!-- Frequently Asked Questions -->
            <div class="col-md-6">
                <div class="block block-content block-content-full block-content-narrow">
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
                                  FSWire is the new Version of FSClouds old VA System based on PHPVMS. <p> <p>We are a community driven project and our mission is it to reinvent the way of flight tracking and web based infrastructre for simmers.
We try to create smth new and indepent for bush flyers and Virtual Airline Pilots.Incase you want to support this project you can give us your ideas and thoughts. Or just leave some bugs so we can buy more beer and invest to server upgrades, licencsed plugins and more.
                                </div>

                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                ">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4QKERX5KS8RAC">
<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>


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
                                  As a normal Pilot on FSWire please use the premade schedules or create your own under the free flight menu tab.
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
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq2_q5">Whats free flight?</a>
                                </h3>
                            </div>
                            <div id="faq2_q5" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Free Flight is a new way to create routes if you are not in a VA or just want to fly on you own. Achieved stats in free flight mode will only grant to your account and not the VA.  </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq2_q6">Ranks</a>
                                </h3>
                            </div>
                            <div id="faq2_q6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Currently we feature the follwing Ranks in our System  </div>
                            </div>
                        </div>


                    </div>
                    <!-- END Functionality -->


                                    </form>
</div>
</div>




<div class="col-md-6">
  <div class="block block-content block-content-full block-content-narrow">
                            <h2 class="h3 font-w600 push-50-t push">FSWire Roadmap - Feature Plans</h2>



      <!-- Changelog Content -->
      <div id="changelog" class="panel-group">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h4 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update10" aria-expanded="FALSE">
                          <strong>1.0</strong> Initial Release <span class="font-w400 text-muted pull-right">August 2017 </span>

                      </a>
                  </h4>
              </div>
              <div id="changelog-update10" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;">
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
                                                                            </div>
                                                                        </div>
                                                                    </div>  </div>

                                                                    <div id="changelog" class="panel-group">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update11" aria-expanded="false">
                                                                                        <strong>1.1</strong> PIREP Update <span class="font-w400 text-muted pull-right">Oktober | 2017</span>
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
                                                                                                    <i class="fa fa-plus fa-li text-success"></i> PIREPS will now store stats like Flighttime,Miles flown, Dep/Arr-Time, Fuel used...
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <strong class="text-uppercase">Improvements</strong>
                                                                                            <ul class="fa-ul list-simple-mini push-10-t">
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Improving many pages that are already in the system
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fa fa-check fa-li text-primary"></i> Adding Free Flight mode to devide VA and single pilots in the system.
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
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#changelog" href="#changelog-update14" aria-expanded="false">
                          <strong>1.2</strong> Rank & Achviements Update <span class="font-w400 text-muted pull-right">December | 2017</span>
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
                                      <i class="fa fa-check fa-li text-primary"></i> We will implement a Ranksystem
                                  </li>

                                  <li>
                                      <i class="fa fa-check fa-li text-primary"></i> New Layout for Logbook Page and Pagination
                                  </li>
                                  <li>
                                      <i class="fa fa-check fa-li text-primary"></i> Comlpete Redesign of the Profile Page. Now with ChartJSv2 and more!
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
                                                                                        <strong>1.3</strong> Permission System Update <span class="font-w400 text-muted pull-right">January | 2018</span>
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
                                                                                        <strong>1.4</strong> VA Update <span class="font-w400 text-muted pull-right">March | 2018</span>
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

   </div>



























                            </div>

      <div class="col-sm-6 col-lg-4">
          <button class="btn btn-minw btn-square btn-primary" onclick="window.location.href='https://fswire.net/down.php'" type="button">Downloads</button>
      </div>

  </div>

</div>

@endsection
</body>


</html>
