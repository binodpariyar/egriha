<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Griha Nepal</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/signin.css'; ?>">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				
				<form role="form" method="post" class="form-signin" action="<?php echo base_url().'login/process'; ?>">
					<h2 class="form-signin-heading">Please Login</h2>
					<?php if($this->session->flashdata('msg') != "") { ?>
					<h4 style="color:#e50000;"><?php echo $this->session->flashdata('msg'); ?></h4>
					<?php } ?>
					<div class="form-group">
						<input type="text" name="username" autofocus="" autocomplete="off" required="" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" required="" placeholder="Password" class="form-control">
					</div>
					<!-- <label class="checkbox">
						<input type="checkbox" value="remember-me"> Remember me
					</label>
 -->					<button type="submit" class="btn btn-lg btn-primary btn-block">Log in</button>
				</form>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
</body>
</html>