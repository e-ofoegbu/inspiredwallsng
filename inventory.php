<?php
/*
session_start();

if (!isset($_SESSION['username'])){
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}
if (isset($_GET['logut'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
}
*/
?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Inventory &ndash; Stock</title>

        <meta name="description" content="Inventory|Stock" />
        <meta name="author" content="rustheme" />
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

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="#"><img class="img-responsive" src="assets/img/logo/logo-backend.png" title="Inspired Walls NG" alt="Inspired Walls NG" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Components</li>

                                <li class="nav-item nav-item-has-subnav active open">
                                    <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> Forms</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_forms_elements.html">Elements</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_samples.html">Samples</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_pickers_select.html">Pickers &amp; Select</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_validation.html">Validation</a>
                                        </li>

                                        <li class="active">
                                            <a href="base_forms_wizard.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">Inspired Walls &copy; <span class="js-year-copy"></span></p>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
					<span class="sr-only">Toggle drawer</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <span class="navbar-page-title">

					Inventory &ndash; Input Form
				</span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-left app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right"></span> News </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right"></span> Messages </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm">##current user## <span class="caret"></span></span>
                                            <img class="img-avatar img-avatar-48" src="assets/img/avatars/avatar3.jpg" alt="User profile pic" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">
                                                Pages
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right"></span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-right -->
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">

                        <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <!-- .col-lg-6 -->

                        </div>
                        <!-- .row -->
                        <!-- End Wizards with Progress -->

                        <!-- Wizards with Validation -->
                        <h2 class="section-title">Inventory</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Classic Validation Wizard (.js-wizard-classic-validation class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                                <div class="card js-wizard-classic-validation">
                                    <!-- Step Tabs -->
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a class="inactive" href="#validation-classic-step1" data-toggle="tab">1. Product</a>
                                        </li>
                                        <li>
                                            <a class="inactive" href="#validation-classic-step2" data-toggle="tab">2. Details</a>
                                        </li>
                                        <li>
                                            <a class="inactive" href="#validation-classic-step3" data-toggle="tab">3. Extra</a>
                                        </li>
                                    </ul>
                                    <!-- End Step Tabs -->

                                    <!-- Form -->
                                    <!-- jQuery Validation (.js-form1 class is initialized in js/pages/base_forms_wizard.js) -->
                                    <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-form1 validation form-horizontal" action="base_forms_wizard.html" method="post">
                                        <!-- Steps Content -->
                                        <div class="card-block tab-content">
                                            <!-- Step 1 -->
                                            <div class="tab-pane m-t-md m-b-lg active" id="validation-classic-step1">
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-firstname">Product Name</label>
                                                        <input class="form-control" type="text" id="validation-classic-firstname" name="validation-classic-productname" placeholder="Please enter product name" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-lastname">Product Type</label>
                                                        <input class="form-control" type="dropdown" id="validation-classic-lastname" name="validation-classic-producttype" placeholder="Please enter product type">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-email">Price</label>
                                                        <input class="form-control" type="number" id="validation-classic-email" name="validation-classic-price" placeholder="Please enter product price">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Step 1 -->

                                            <!-- Step 2 -->
                                            <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step2">
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-details">Details</label>
                                                        <textarea class="form-control" id="validation-classic-details" name="validation-classic-details" rows="9" placeholder="Share something about yourself"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Step 2 -->

                                            <!-- Step 3 -->
                                            <div class="tab-pane m-t-md m-b-lg" id="validation-classic-step3">
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-city">City</label>
                                                        <input class="form-control" type="text" id="validation-classic-city" name="validation-classic-city" placeholder="Where do you live?">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <label for="validation-classic-skills">Skills</label>
                                                        <select class="form-control" id="validation-classic-skills" name="validation-classic-skills" size="1">
										<option value="">Please select your best skill</option>
										<option value="1">Photoshop</option>
										<option value="2">HTML</option>
										<option value="3">CSS</option>
										<option value="4">JavaScript</option>
									</select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Step 3 -->
                                        </div>
                                        <!-- End Steps Content -->

                                        <!-- Steps Navigation -->
                                        <div class="card-block b-t">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <button class="wizard-prev btn btn-default" type="button">Previous</button>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <button class="wizard-next btn btn-default" type="button">Next</button>
                                                    <button class="wizard-finish btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Steps Navigation -->
                                    </form>
                                    <!-- End Form -->
                                </div>
                                <!-- .card -->
                                <!-- End Classic Validation Wizard -->
                            </div>
                            <!-- .col-lg-6 -->

                            <div class="col-lg-6">
                                <!-- Validation Wizard (.js-wizard-validation class is initialized in js/pages/base_forms_wizard.js) -->
                                <!-- For more examples please check http://vadimg.com/twitter-bootstrap-wizard-example/ -->
                                <div class="card js-wizard-validation">
                            </div>
                            <!-- .col-lg-6 -->

                        </div>
                        <!-- .row -->
                        <!-- End Wizards with Validation -->
                    </div>
                    <!-- End Page Content -->

                    <!-- Terms Modal -->
                    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div class="card m-b-0">
                                    <div class="card-header">
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
                                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                            quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> I agree</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Terms Modal -->

                </main>

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

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_wizard.js"></script>

    </body>

</html>
