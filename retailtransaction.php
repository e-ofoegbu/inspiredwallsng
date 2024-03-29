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
        <title>Forms &ndash; Validation | AppUI</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
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
                            <a href="index.html"><img class="img-responsive" src="assets/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Apps</li>

                                <li class="nav-item">
                                    <a href="index.html"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href="frontend_home.html"><i class="ion-ios-monitor-outline"></i> Frontend</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Components</li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> UI Elements</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_ui_buttons.html">Buttons</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_cards.html">Cards</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_cards_api.html">Cards API</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_layout.html">Layout</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_grid.html">Grid</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_icons.html">Icons</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_modals_tooltips.html">Modals / Tooltips</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_alerts_notify.html">Alerts / Notify</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_pagination.html">Pagination</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_progress.html">Progress</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_tabs.html">Tabs</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_typography.html">Typography</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_widgets.html">Widgets</a>
                                        </li>

                                    </ul>
                                </li>

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

                                        <li class="active">
                                            <a href="base_forms_validation.html">Validation</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_wizard.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> Tables</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_tables_styles.html">Styles</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_responsive.html">Responsive</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_tools.html">Tools</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_pricing.html">Pricing</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_datatables.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> Pages</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_pages_blank.html">Blank</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_inbox.html">Inbox</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_invoice.html">Invoice</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_profile.html">Profile</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_search.html">Search</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> JS plugins</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_js_maps.html">Maps</a>
                                        </li>

                                        <li>
                                            <a href="base_js_sliders.html">Sliders</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_flot.html">Charts - Flot</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_chartjs.html">Charts - Chart.js</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_sparkline.html">Charts - Sparkline</a>
                                        </li>

                                        <li>
                                            <a href="base_js_draggable.html">Draggable</a>
                                        </li>

                                        <li>
                                            <a href="base_js_syntax_highlight.html">Syntax highlight</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">AppUI Template &copy;</p>
                            <a href="https://shapebootstrap.net/item/1525731-appui-admin-frontend-template/?ref=rustheme" target="_blank" rel="nofollow">Purchase a license</a>
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

					Forms &ndash; Validation
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

                                <ul id="main-menu" class="nav navbar-nav navbar-left">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">English <span class="caret"></span></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">French</a></li>
                                            <li><a href="javascript:void(0)">German</a></li>
                                            <li><a href="javascript:void(0)">Italian</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">Analytics</a></li>
                                            <li><a href="javascript:void(0)">Visits</a></li>
                                            <li><a href="javascript:void(0)">Changelog</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
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
                                            <span class="m-r-sm">John Doe <span class="caret"></span></span>
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
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="frontend_login_signup.html">Logout</a>
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
                        <!-- Forms Row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Bootstrap Forms Validation -->
                                <h2 class="section-title">Bootstrap Forms</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Validation</h4>
                                        <ul class="card-actions">
                                            <li>
                                                <button type="button"><i class="ion-more"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
                                        <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-bootstrap form-horizontal" action="base_forms_validation.html" method="post">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-username">Username <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-username" name="val-username" placeholder="Choose a nice username..." />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-email">Email <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your valid email..." />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-password">Password <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="password" id="val-password" name="val-password" placeholder="Choose a good one.." />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-confirm-password">Confirm Password <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="password" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it to be safe!">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-suggestions">Suggestions <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="Share your ideas with us.."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-skill">Best Skill <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="val-skill" name="val-skill">
									<option value="">Please select</option>
									<option value="html">HTML</option>
									<option value="css">CSS</option>
									<option value="javascript">Javascript</option>
									<option value="ruby">Ruby</option>
									<option value="php">PHP</option>
									<option value="asp">ASP.NET</option>
									<option value="python">Python</option>
									<option value="mysql">MySQL</option>
								</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-website">Website <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-website" name="val-website" placeholder="http://example.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-digits">Digits <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-digits" name="val-digits" placeholder="3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-number">Number <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-number" name="val-number" placeholder="3.0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="val-range">Range [1, 5] <span class="text-orange">*</span></label>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms</a> <span class="text-orange">*</span></label>
                                                <div class="col-md-8">
                                                    <label class="css-input css-checkbox css-checkbox-default" for="val-terms">
									<input type="checkbox" id="val-terms" name="val-terms" value="1" /><span></span> I agree to the terms
								</label>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button class="btn btn-app" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- Bootstrap Forms Validation -->
                            </div>
                            <!-- .col-lg-6 -->

                            <div class="col-lg-6">
                                <!-- Material Forms Validation -->
                                <h2 class="section-title">Material Forms</h2>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Validation</h4>
                                        <ul class="card-actions">
                                            <li>
                                                <button type="button"><i class="ion-more"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                        <!-- For more examples please check https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-material form-horizontal m-t-sm" action="base_forms_validation.html" method="post">
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-username2" name="val-username2" placeholder="Choose a nice username..." />
                                                        <label for="val-username2">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-email2" name="val-email2" placeholder="Enter your valid email..." />
                                                        <label for="val-email2">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="password" id="val-password2" name="val-password2" placeholder="Choose a good one.." />
                                                        <label for="val-password2">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="password" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it to be safe!">
                                                        <label for="val-confirm-password2">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="val-suggestions2" name="val-suggestions2" rows="3" placeholder="Share your ideas with us.."></textarea>
                                                        <label for="val-suggestions2">Suggestions</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <select class="form-control" id="val-skill2" name="val-skill2">
										<option value="">Please select</option>
										<option value="html">HTML</option>
										<option value="css">CSS</option>
										<option value="javascript">Javascript</option>
										<option value="ruby">Ruby</option>
										<option value="php">PHP</option>
										<option value="asp">ASP.NET</option>
										<option value="python">Python</option>
										<option value="mysql">MySQL</option>
									</select>
                                                        <label for="val-skill2">Best Skill</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-website2" name="val-website2" placeholder="http://example.com">
                                                        <label for="val-website2">Website</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-digits2" name="val-digits2" placeholder="3">
                                                        <label for="val-digits2">Digits</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-number2" name="val-number2" placeholder="3.0">
                                                        <label for="val-number2">Number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <div class="form-material">
                                                        <input class="form-control" type="text" id="val-range2" name="val-range2" placeholder="3" />
                                                        <label for="val-range2">Range [1, 5]</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <label><a data-toggle="modal" data-target="#modal-terms" href="#">Terms</a> <span class="text-orange">*</span></label>
                                                </div>
                                                <div class="col-xs-12">
                                                    <label class="css-input css-checkbox css-checkbox-default" for="val-terms2">
									<input type="checkbox" id="val-terms2" name="val-terms2" value="1" /><span></span> I agree to the terms
								</label>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-app" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- End Material Forms Validation -->
                            </div>
                            <!-- .col-lg-6 -->

                        </div>
                        <!-- .row -->
                        <!-- End Forms Row -->

                        <!-- Terms Modal -->
                        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-popin">
                                <div class="modal-content">
                                    <div class="card m-b-0">
                                        <div class="card-header bg-app bg-inverse">
                                            <h4>Terms &amp; Conditions</h4>
                                            <ul class="card-actions">
                                                <li>
                                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-block">
                                            <h4 class="m-t">1. <strong>General</strong></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.</p>
                                            <h4>2. <strong>Account</strong></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta.
                                                Integer fermentum tincidunt auctor.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                        <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Terms Modal -->
                    </div>
                    <!-- End Page Content -->

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
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/base_forms_validation.js"></script>

    </body>

</html>
