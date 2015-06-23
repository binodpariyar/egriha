<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo config_item('app_name'); ?></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/signin.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/dashboard.css'; ?>">
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.min.js'; ?>"></script>
	
	<script>
		var admin_url = '<?php echo admin_url() ?>';

		$(document).ready(function(){

		});

	</script>

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo config_item('app_name'); ?></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url().'login/logout' ?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li>
						<a href="<?php echo admin_url(); ?>">
							Dashboard
						</a>
					</li>					
					<li>
						<a href="<?php echo admin_url('slider_management'); ?>">
							Slider
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('about'); ?>">
							About Us
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('about/vastushastra'); ?>">
							Vastushastra
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('about/construction'); ?>">
							Construction
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('project'); ?>">
							Project Management
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('advertisement'); ?>">
							Advertisements
						</a>
					</li>					
					<li>
						<a href="<?php echo admin_url('site_management'); ?>">
							Site Management
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('client_management'); ?>">
							Client Management
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('list_your'); ?>">
							Propert List
						</a>
					</li>
					<li>
						<a href="<?php echo admin_url('user_management'); ?>">
							User Management
						</a>
					</li>
					
					
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<?php if($this->session->flashdata('msg') != "" ) { ?>
				<div role="alert" class="alert alert-success fade in col-md-4 pull-right">
					<button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
					<strong>System Alert</strong><br/> 
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<?php } ?>

				<h1 class="page-header"><?php echo $heading; ?></h1>

				<?php //loading the main view file ?>
				<?php $this->load->view('admin/'.$main); ?>
				<?php //end of template ?>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/ck/ckeditor.js'; ?>"></script>

</body>
</html>