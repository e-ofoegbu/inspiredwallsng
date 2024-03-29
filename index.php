<?php
  session_start();
  require('util/db_connect.php');

?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Inspired Walls NG</title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default p-y">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <!-- Header logo -->
                                <div id="logo" class="drawer-header">
                                    <a href="#"><img class="img-circle" src="assets/img/logo/inspiredwallsng.jpg" title="Inspired Walls" alt="Inspired Walls" /></a>
                                </div>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-right app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>

                                <!-- Header navigation menu -->
                            <!--    <ul id="main-menu" class="nav navbar-nav navbar-left">

                                    <li>
                                        <a href="frontend_about.html">About</a>
                                    </li>

                                    <li>
                                        <a href="frontend_pricing.html">Pricing</a>
                                    </li>

                                    <li>
                                        <a href="frontend_team.html">Team</a>
                                    </li>

                                    <li class="dropdown active">
                                        <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                        <ul class="dropdown-menu">

                                            <li class="active">
                                                <a href="frontend_search.html">Search</a>
                                            </li>

                                            <li>
                                                <a href="frontend_support.html">Support</a>
                                            </li>

                                            <li>
                                                <a href="frontend_contact.html">Contact</a>
                                            </li>

                                            <li>
                                                <a href="frontend_400.html">Error 400</a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul> -->
                                <!-- End header navigation menu -->
                            </div>
                        </div>
                        <!-- .container -->
                    </nav>
                    <!-- .navbar -->
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page header -->
                    <div class="page-header bg-blue bg-inverse">
                        <div class="container">
                            <!-- Section Content -->
                            <div class="p-y-lg text-center">
                                <h1 class="display-2">Inspired Walls NG</h1>
                                <p class="text-muted">Create Your Atmosphere✨</p>
                                <p class="text-muted">Your One Stop Wall Interior Store</p>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>
                    <!-- End Page header -->

                    <!-- Page content -->
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                <!-- Login card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Login</h3>
                                        <div class="card-block">
                                            <form action="login.php" method="post">
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_email">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Username" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_password">Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Password" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
									<input type="checkbox" id="frontend_login_remember" /><span></span> Remember me</a>
								</label>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-app-blue btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

                                <!-- Sign up -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Sign up</h3>
                                        <div class="card-block">
                                            <form class="form-horizontal" action="register.php" method="post">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_firstname">First Name</label>
                                                        <input class="form-control" type="text" id="frontend_signup_firstname" placeholder="First Name" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only">Username</label>
                                                        <input class="form-control" type="text" placeholder="Username" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only">Last Name</label>
                                                        <input class="form-control" type="text" placeholder="Last Name" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_password">Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_confirm_password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <label for="frontend_signup_terms" class="css-input switch switch-sm switch-app">
										<input type="checkbox" id="frontend_signup_terms" name="frontend_signup_terms" /><span></span> I agree with <a data-toggle="modal" data-target="#modal-signup-terms" href="#">terms &amp; conditions</a>
									</label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-app btn-block" type="submit" name="signup">Sign Up</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End sign up -->

                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- End page content -->

                    <!-- Modal -->
                    <div class="modal" id="modal-signup-terms" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="card-header bg-blue bg-inverse">
                                    <h4>Terms &amp; Conditions</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End modal -->

                </main>

                <footer class="app-layout-footer">
                    <div class="container p-y-md">
                        <div class="pull-left text-center text-md-left">
                            Inspired Walls &copy; <span class="js-year-copy"></span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

    </body>

</html>
