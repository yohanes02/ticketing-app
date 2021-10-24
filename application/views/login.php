<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Smart Helpdesk Ticketing</title>

<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<style>
.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}

body {
	background-color: #e4e5e6;
}
</style>

</head>

<body>

    <div class="container" style="margin-top:40px;">
		
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3" style="padding: 10px; border: 2px solid #ccc; border-radius: 10px; background-color: white">
				<?php echo $this->session->flashdata("msg");?>
				<div class="panel panel-default" style="border: none; margin-bottom:0px">
					<div class="panel-heading text-center" style="border: 1px solid #ccc; border-radius: 10px; font-size: 20px; height: auto; background-color: #ccc">
						<strong style="color:black"> Smart Helpdesk Ticketing</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="<?php echo base_url();?>login/login_akses" method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img img-responsive"
											src="<?php echo base_url() ?>/assets/img/person.png" alt="">
											<p class="text-center" style="font-size: 20px"><strong style="color:black">Log In</strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- <div class="panel-footer ">
						Don't have an account! <a href="#" onClick=""> Sign Up Here </a>
					</div> -->
                </div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>