<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo site_url('application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/animate.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style-responsive.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/theme/default.css');?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<style>

    .img-responsive.ImgAdj{
        padding-left: 31%;
        margin:-9%;
    }
	
</style>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image Clrchange"><img src="<?php echo site_url('application/assets/img/maxresdefault.jpg')?>" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                   <!-- <span><img class="img-responsive ImgAdj" src="<?php echo base_url('application/assets/img/cloulogic.png');?>"/></span>-->
                    <!--<small>responsive bootstrap 3 admin template</small>-->
                </div>
                <!--<div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>-->
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="<?php echo base_url('payslipCtr/check'); ?>" method="POST" class="margin-bottom-0">
					<div class="form-group m-b-20">
					<select name="emp" class="form-control" onchange="names()" id="selctVal">
					    <?php foreach($this->ps_model->companydetail() as $row)
						{ ?>
					 
					        <option value="<?php echo $row['CMP_NAME']; ?>" ><?php echo $row['CMP_NAME']; ?></option>
					    <?php } ?>
					</select>
					</div>
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" name="UserName" placeholder="UserName" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" name="PassWord" placeholder="Password" />
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" value="yes" name="proceed" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="#">here</a> to register.
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo site_url('application/assets/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo site_url('application/assets/js/login-v2.demo.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
            $(document).ready(function() {
                App.init();
                //LoginV2.init();
            });
	</script>
	
</body>

</html>

