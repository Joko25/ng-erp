<div class="page-header" style="height: 80px;">
</div>
<div class="main" >
    <div class="section section-nucleo-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="title">NG-ERP Online</h2>
                    <h5 class="description">
                        Hello, <br/>
                        Harap Sinin terlebih dahulu. Jika belum memiliki akun, silahkan <a href="signup">Registrasi</a> dahulu
                    </h5>
                <!-- <div class="nucleo-container">
                    <img src="assets/img/nucleo.svg" alt="">
                </div> -->
             
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="container">
                        <div class="content">
                        	<h4>Login</h4>
                            <div class="alert alert-warning alert-dismissible fade show" id="alertLogin">
                                <button type="button" class="close" onclick="javascript:$('#alertLogin').hide()" >&times;</button>
                                <strong>Warning!</strong> <span id="msglogin"></span>
                            </div>
                        	<form method="post" id="fm"><!-- action="<?php echo base_url('ng-erp/auth/aksi_login'); ?>" -->
		                        <div class="input-group form-group-no-border input-md">
		                            <span class="input-group-addon">
		                                <i class="now-ui-icons users_circle-08"></i>
		                            </span>
		                            <input type="text" class="form-control" placeholder="Username" name='username' id='username' required />
		                        </div>
		                        <div class="input-group form-group-no-border input-lg">
		                            <span class="input-group-addon">
		                                <i class="now-ui-icons text_caps-small"></i>
		                            </span>
		                            <input type="password" placeholder="Password" class="form-control" name='password' id='password' required />
		                        </div>
                                
                            </form>
                        </div>
	                    <div class="footer text-center">
	                        <button class="btn btn-primary btn-round btn-lg btn-block" onclick="signin()">Sign In</button>
	                    </div>
	                    <div class="pull-left">
	                        <h6>
	                            <a href="signup" class="link">Create Account</a>
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
<script type="text/javascript">

    $(function(){
        $('#alertLogin').hide();
    });

    function signin(){
        var url = "<?php echo base_url('ng-erp/auth/aksi_login'); ?>";
        console.log($('#username').val());

        $.post(url,{
            'username':$('#username').val(),
            'password':$('#password').val() 
        }).done(function(result){
            var result = eval('('+result+')');                      
            if (result.errorMsg){
                $('#alertLogin').show();
                $('#msglogin').text(result.errorMsg);
                console.log(result.errorMsg);
            } else {
                window.location.href = 'dashboard';
            }
        });
    }
</script>