@extends('layouts.oneui')
<!-- Header -->

@section('content')
    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- User Header -->
        <div class="block">
            <!-- Basic Info -->
            <div class="bg-image" style="background-image: url('{{ $user->cover_url }}');">

                <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                    <div class="push-30-t push animated fadeInDown">
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ $user->avatar_url }}"
                             onerror="this.src='http://identicon.org?t={{ $user->username }}&s=400'" alt="Avatar"></a>
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
                        <a class="h2 font-w300 text-primary animated flipInX"
                           href="javascript:void(0)">{{ $totalflightime }}</a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">Total flights</div>
                        <a class="h2 font-w300 text-primary animated flipInX"
                           href="javascript:void(0)">{{ \App\PIREP::where('user_id', $user->id)->count() }}</a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">AVG LDG RTE</div>
                        <a class="h2 font-w300 text-primary animated flipInX"
                           href="javascript:void(0)">{{ \App\PIREP::where('user_id', $user->id)->avg('landingrate') }}</a>
                    </div>

                    <div class="col-xs-6 col-sm-3">
                        <div class="font-w700 text-gray-darker animated fadeIn">RANK</div>
                        <div class="text-warning push-10-t animated flipInX">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Stats -->
        </div>
        <!-- END User Header -->

        <!-- Main Content -->
        @if(count($errors))
            <div class="alert alert-danger">
                <strong>The following error(s) occurred:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('flightops/settings') }}" method="post">
            {{ csrf_field() }}
            <div class="block">
                <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                    <li class="active">
                        <a href="#tab-profile-personal"><i class="fa fa-fw fa-pencil"></i> Personal</a>
                    </li>
                    <li>
                        <a href="#tab-profile-password"><i class="fa fa-fw fa-asterisk"></i> Password</a>
                    </li>
                    <li>
                        <a href="#tab-profile-privacy"><i class="fa fa-fw fa-lock"></i> Privacy</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <!-- Personal Tab -->
                    <div class="tab-pane fade in active" id="tab-profile-personal">
                        <div class="row items-push">
                            <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                                <div class="form-group">
                                  <div class="col-xs-12">
                                      <label for="email">Username</label>
                                      <input class="form-control input-lg" type="username" name="username"
                                             value="{{ Auth::user()->email }}" class="form-control">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="email">Email Address</label>
                                        <input class="form-control input-lg" type="email" name="email"
                                               value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="email">Background URL</label>

                                        @if($user->cover_url === null)

                                            <input class="form-control input-lg" type="text" name="cover_url"
                                                   value="{{ url('assets/img/photos/bg.png') }}" class="form-control">
                                        @else

                                            <input class="form-control input-lg" type="text" name="cover_url"
                                                   value="{{ $user->cover_url }}" class="form-control">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="email">Avatar URL</label>

                                        @if($user->avatar_url === null)

                                            <input class="form-control input-lg" type="text" name="avatar_url"
                                                   value="{{ url('assets/img/avatars/avatar1.jpg') }}" class="form-control">
                                        @else

                                            <input class="form-control input-lg" type="text" name="avatar_url"
                                                   value="{{ $user->avatar_url }}" class="form-control">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="firstname">Firstname</label>
                                        <input class="form-control input-lg" type="text" name="first_name"
                                               value="{{ Auth::user()->first_name }}" class="form-control">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="lastname">Lastname</label>
                                        <input class="form-control input-lg" type="text" name="last_name"
                                               value="{{ Auth::user()->last_name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="profile-bio">Bio</label>
                                        <textarea class="form-control input-lg" id="profile-bio" name="profile-bio"
                                                  rows="15" placeholder="Enter a few details about yourself..">Hi there, welcome to my profile! I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow me to know more about me and my projects. Thanks for stopping by, wish you a great day!</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="profile-skills">Simulator</label>
                                        <select class="form-control" id="profile-skills" name="profile-skills" size="8"
                                                multiple="">

                                            <option value="7">FSX</option>
                                            <option value="7">FSX:SE</option>
                                            <option value="7">P3D V3</option>
                                            <option value="7">P3D V4</option>
                                            <option value="7">X-Plane 10</option>
                                            <option value="7">X-Plane 11</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="profile-city">HUB</label>
                                        <input class="form-control input-lg" type="text" id="profile-city"
                                               name="profile-city" placeholder="Enter your HUB..">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END Personal Tab -->

                    <!-- Password Tab -->
                    <div class="tab-pane fade" id="tab-profile-password">
                        <div class="row items-push">
                            <div class="col-sm-6 col-sm-offset-3 form-horizontal">

                                <hr>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="profile-password-new">New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="profile-password-new-confirm">Confirm New Password</label>
                                        <input type="password" name="password2" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Password Tab -->

                    <!-- Privacy Tab -->
                    <div class="tab-pane fade" id="tab-profile-privacy">
                        <div class="row items-push">
                            <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Online Status</div>
                                        <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Auto Updates</div>
                                        <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Notifications</div>
                                        <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                        <div class="font-s13 font-w600">API Access</div>
                                        <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Privacy Tab -->
                </div>
                <div class="block-content block-content-full bg-gray-lighter text-center">
                    <a href="{{ url('flightops/profile/' . Auth::id()) }}" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-sm btn-primary" type="submit">Save Changes</button>
                </div>
            </div>
        </form>
        <!-- END Main Content -->
    </div>
    <!-- END Page Content -->
    </main>
@endsection
