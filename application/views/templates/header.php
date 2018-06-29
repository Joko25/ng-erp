<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>ng-erp/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>ng-erp/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="<?php echo base_url() ?>ng-erp/assets/DataTable/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url() ?>ng-erp/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() ?>ng-erp/assets/css/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>ng-erp/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>ng-erp/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.dataTables.min.css"> -->

    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>ng-erp/assets/DataTable/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>ng-erp/assets/DataTable/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>ng-erp/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>ng-erp/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>


</head>
<body>
	<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400" ng-controller="mainControllers as header">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#" target="_selft" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="home" rel="tooltip" title="Human Resource Information System" data-placement="bottom">
                    NG-ERP
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url() ?>ng-erp/assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item dropdown">
                    	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<form>
								<div class="dropdown-item">
									<input class="form-control" type="text" name="username" placeholder="Username">
								</div>
								<div class="dropdown-item">
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
								<div class="dropdown-item">
									<input class="btn btn-primary btn-round" type="submit" value="Sign In"> or <a href="signup" style="color: blue">Sign Up</a>
								</div>
							</form>
						</ul>
                    </li> -->
                    <?php 
                        $log = $this->session->userdata('status');
                        // echo $log;
                        if ($log === "login") {
                            # code...
                        ?>
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown">Hello, <?=$this->session->userdata('nama');?><span class="caret"></span></a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="users">Profile</a></li>
                                    <li><a class="dropdown-item" href="setting">Setting</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a class="dropdown-item" href="auth/logout" target="_self">Logout</a></li>
                                  </ul>
                            </li>
                        <?php
                        }else{
                        ?>
                            <!-- <li class="nav-item">
                            </li> -->
                            <li class="nav-item">
                                <span class="nav-link"><a href="login" >Sign in</a></span>
                            </li>
                                <span style="padding: 7% 0;">or</span>
                            <li class="nav-item">
                                <span class="nav-link"><a href="signup">Sign Up</a></span>
                            </li>
                        <?php    
                        }
                    ?>
                    <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown">Hello, <span class="caret"></span></a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/users">Registration</a></li>
                            <li><a class="dropdown-item" href="/setting">Login</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#" target="_self" ng-click="logout()">Logout</a></li>
                          </ul>
                    </li> -->

                    <!-- <li class="nav-item" ng-repeat="nm in navmedia">
                        <a class="nav-link" rel="tooltip" title="{{nm.title}}" data-placement="bottom" href="{{nm.link}}" target="{{nm.target}}">
                            <i class="fa {{nm.icon}}"></i>
                            <p class="d-lg-none d-xl-none">{{nm.name}}</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>