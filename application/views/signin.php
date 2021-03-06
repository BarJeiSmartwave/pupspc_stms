<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Log In | Administrator </title>
	
	<link href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

</head>
<body>

	<div class="container" id="log-in-container">
		<?php
		echo form_open("login/submit", ["class"=>"form-log-in"]);
		?>
		<?php
		echo form_error("username");
		?> 
		<?php
		echo form_error("password");
		?>
		<div class="panel panel-default panel-login-pupspc">
			<legend class="panel-heading panel-heading-pupspc">
				<i class="fa fa-spin fa-clock-o"></i> PUP San Pedro STMS
			</legend>
			<div class="panel-body">
				<fieldset>
					<?php
					// element props
					$username = [
					"name"=>"username",
					"id"=>"username",
					"class"=>"form-control",
					"placeholder"=>"Username",
					"autofocus"=>"autofocus"
					];

					$password = [
					"name"=>"password",
					"id"=>"password",
					"class"=>"form-control",
					"placeholder"=>"Password"
					];

					$submit = [
					"id"=>"submit",
					"name"=>"submit",
					"value"=>"Log In",
					"class"=>"btn btn-primary btn-block"
					];
					?>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
						<div class="form-group">
							<?php
							echo form_input($username, set_value("username"));
							?>
						</div>
					</div>
					<div class="divider"></div>
					<div class="input-group">
						<span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="Minimum of 8 characters"><i class="fa fa-key fa-fw"></i></span>
						<div class="form-group">
							<?php
							echo form_password($password);
							?> 
						</div>
					</div>
				</fieldset>
				<div id="div-submit-login">
					<?php 
					echo form_submit($submit);
					?>
				</div>
			</div>
		</div>
		<?php
		echo anchor("login/studentLogin", "Click here for student login", ["id"=>"link-switch-login"]);
		echo form_close();
		?>
	</div>
</body>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.js'); ?>"></script>
<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
<script>
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
</html>