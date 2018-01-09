<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

          <title>FSWire | Next level va experience</title>

        <meta name="description" content="FSWire - next level va experience ">
        <meta name="author" content="MrDalle">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->

        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <style type="text/css">
        .block-header {
            background-color: #2C343F;
        }


        </style>
        <!-- END Stylesheets -->
    </head>
    <style type="text/css">
    .block-header {
        background-color: #2C343F;
    }


    </style>
        <body class="bg-image" style="background-image: url('assets/img/photos/photo17@2x.jpg');">
        <!-- Lock Screen Content -->
        <img src="assets/img/favicons/fswirelogo.png" alt="">
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Lock Screen Block -->
                    <div class="block block-themed animated bounceIn ">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                <li>
                                    <a href="https://fswire.net" data-toggle="tooltip" data-placement="left" title="get back to home"><i class="si si-home"></i></a>
                                </li>
                            </ul>
                            <h3 class="block-title">Login to FSWire</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                          <!-- Warning Alert
                          <div class="alert alert-danger alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h3 class="font-w300">Warning</h3>
                              <p>in order to reactivate your account please visit the <a class="alert-link" href="{{ url('/password/reset') }}">"forgot password" page!</a>!</p>
                          </div>
                          END Warning Alert -->

                          <form class="js-validation-login form-horizontal push-30-t" action="{{ url('/login') }}" class="form-horizontal" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material form-material-primary floating">

                                            <input class="form-control" id="login-username" name="username" type="text">

                                            <label for="login-username">Username</label>
                                        </div>
                                      </div>
                                  </div>

                              <div class="form-group">
                                  <div class="col-xs-12">
                                      <div class="form-material form-material-primary floating">
                                            <input class="form-control" id="login-password" name="password" type="password">
                                              <label for="login-password">Password</label>

                                        </div>
                                        </div>
                                        </div>
                                        @if ($errors->has('password'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>
                                                Whoops!
                                            </strong>
                                            {{ $errors->first('password') }}
                                        </div>
                                        @endif @if ($errors->has('username'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>
                                                Oh snap!
                                            </strong>
                                            {{ $errors->first('username') }}
                                        </div>
                                        @endif



                                          <div class="col-xs-6">
                                              <label class="css-input switch switch-sm switch-primary">
                                                  <input type="checkbox" id="login-remember-me" name="remember"><span></span> Remember Me?
                                              </label>
                                          </div>
                                          <div class="col-xs-6">
                                              <div class="font-s13 text-right push-5-t">
                                                    <a href="{{ url('/password/reset') }}">Forgot Password?</a>
                                              </div>

                                            </div>
                                          <div class="form-group push-50-t">
                                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 push-25-t">
                                                    <button class="btn btn-sm btn-block btn-primary" type="submit">Log in</button>

                                          </div></div>
                                          <div class="form-group push-5-t">
                                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 push-25-t">
                                          <a href="{{ url('/register') }}">
                                            <button class="btn btn-sm btn-block btn-primary" type="button">
                                                  Register
                                              </button>
                                          </a>




                                          </div></div>


                        </form>

                        <!-- Lock Screen Footer -->
                        <div class="push-10-t text-center animated fadeInUp">
                            <small class="text-black-op font-w600"><span class="js-year-copy"></span> &copy; FSWire 1.3</small>
                        </div>
                        <!-- END Lock Screen Footer -->

                        </div>
                    </div>
                    <!-- END Lock Screen Block -->
                </div>
            </div>
        </div>
        <!-- END Lock Screen Content -->



        <!-- END Lock Screen Content -->



        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_pages_lock.js"></script>
    </body>
</html>
