<?php 
/*echo"<pre>";
print_r($doctorData);
echo $doctorData['0']->image;
die;*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>/public/assect/appointment/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>/public/assect/appointment/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>/public/assect/appointment/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>/public/assect/appointment/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>/public/assect/appointment/css/colors.css" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->
	<!-- Core JS files -->
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/plugins/forms/selects/select2.min.js"></script>
	
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/core/app.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/pages/datatables_advanced.js"></script>

	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/plugins/ui/ripple.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>/public/assect/appointment/js/pages/form_layouts.js"></script>
	<script src="<?php echo base_url();?>/public/medicen/js/jquery.czMore-1.5.3.2.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- /theme JS files -->
	<style type="text/css">
		.error{
			color:red;
		}
	</style>

</head>
<body>
	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-puzzle3"></i>
						<span class="visible-xs-inline-block position-right">Git updates</span>
						<span class="status-mark border-orange-400"></span>
					</a>
				</li>
			</ul>

			<div class="navbar-right">
				<p class="navbar-text">Morning, Victoria!</p>
				<p class="navbar-text"><span class="label bg-success-400">Online</span></p>
				<ul class="nav navbar-nav">				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Activity</span>
							<span class="status-mark border-orange-400"></span>
						</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bubble8"></i>
							<span class="visible-xs-inline-block position-right">Messages</span>
							<span class="status-mark border-orange-400"></span>
						</a>
					</li>					
				</ul>
			</div>
		</div>
	</div>
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<?php 
								if(!empty($profileData)){?>
								<a href="<?=base_url('/doctor/dashbord');?>">
								<img src="<?=base_url('/upload/'.$profileData['0']->image);?>" class="img-circle img-responsive" alt="">
								</a>
							<?php }?>
								<?php 
									if($this->session->userdata()){
									echo "<h6>".$this->session->userdata('name')."</h6>";
								echo'<span class="text-size-small">'.$this->session->userdata('email').'</span>';
								}?>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="<?=base_url('/doctor/profile');?>"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="<?php echo base_url('/doctor/logout');?>"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?php echo base_url('/doctor/profile');?>"><i class="icon-home4"></i> <span>Add Profile</span></a></li>
								<li>
									<a href="<?php echo base_url('/doctor/profile_update');?>"><i class="icon-stack2"></i> <span>Update Profile</span></a>
									<ul>
										<li><a href="<?php echo base_url('/doctor/profile_update');?>">Update</a></li>
										<li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-copy"></i> <span>Layouts</span></a></li>
								<li><a href="#"><i class="icon-droplet2"></i> <span>Color system</span></a></li>
					
								<li><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.6</span></span></a></li>
								
								<!-- /main -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Datatables</span> - Advanced</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="datatable_advanced.html">Datatables</a></li>
							<li class="active">Advanced</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				
				