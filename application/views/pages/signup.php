<div class="page-header" style="height: 80px;">
    <!-- <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/bg6.jpg');"></div>
    <div class="container">
        <div class="content-center brand">
            <h1 class="h1-seo">admin at {{career.title}}</h1>
            <h3>{{career.slog}}</h3>
                <form class="form" method="" action="">
                <div class="content">
                    <div class="input-group form-group-no-border input-md">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search" ng-mode='search'/>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
</div>
<div class="main" >
    <div class="section section-nucleo-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="title">NG-ERP Online</h2>
                    <h5 class="description">
                        Hello {{user}}, <br/>
                        NG-HRIS adalah website sederhana untuk kepentingan perusahaan dalam memasarkan product, dan recruitment. ini adalah halaman administrator. anda bisa mengatur semua halaman di sini. 
                    </h5>
                    <!-- <div class="nucleo-container">
                    <img src="assets/img/nucleo.svg" alt="">
                </div> -->
             
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="container">
                        <div class="content">
                        	<h4>Login</h4>
                        	<form action="<?php echo base_url('ng-erp/auth/aksi_login'); ?>" method="post">
		                        <div class="input-group form-group-no-border input-md">
		                            <span class="input-group-addon">
		                                <i class="now-ui-icons users_circle-08"></i>
		                            </span>
		                            <input type="text" class="form-control" placeholder="Username" name='username'/>
		                        </div>
		                        <div class="input-group form-group-no-border input-lg">
		                            <span class="input-group-addon">
		                                <i class="now-ui-icons text_caps-small"></i>
		                            </span>
		                            <input type="password" placeholder="Password" class="form-control" name='password'/>
		                        </div>
                        		
        	                    <div class="footer text-center">
        	                        <button class="btn btn-primary btn-round btn-lg btn-block" ng-click="signin()">Sign Up</button>
        	                    </div>
                            </form>
                        </div>
	                    <div class="pull-left">
	                        <h6>
	                            <a href="signup" class="link">SignIn</a>
	                        </h6>
	                    </div>
	                    <div class="pull-right">
	                        <h6>
	                            <a href="help" class="link">Need Help?</a>
	                        </h6>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>