		<footer class="footer" data-background-color="black" ng-controller="mainControllers as footer" >
		    <div class="container">
		        <nav>
		            <ul>
		                <li ng-repeat="nav in navfooter">
		                    <!-- <a href="{{nav.link}}" target="{{nav.target}}">
		                        {{nav.name}}
		                    </a> -->
		                </li>
		            </ul>
		        </nav>
		        <div class="copyright">
		            &copy;
		            <?php echo date('Y');?>
		            <a href="#">NG-ERP</a>. Coded by
		            <a href="#">Joko Mulyono</a>.
		        </div>
		    </div>
		</footer>
	</body>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>ng-erp/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
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
</html>