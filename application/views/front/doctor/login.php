<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  
  <title>Login Page | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>public/assect/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>public/assect/backend/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>public/assect/backend/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>public/assect/backend/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url();?>public/assect/backend/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>public/assect/backend/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>public/assect/backend/css/developer_custom.css" rel="stylesheet" />
  <!-- animation css js-->

  <link rel="stylesheet" href="<?php echo base_url();?>public/animation/vendor/reset.css">
  <link rel="stylesheet" href="<?php echo base_url();?>public/animation/vendor/circular/stylesheet.css">

  <script src="<?php echo base_url();?>public/animation/vendor/jquery.js"></script>
  <script src="<?php echo base_url();?>public/animation/vendor/three.r92.min.js"></script>

  <script src="<?php echo base_url();?>public/animation/dist/vanta.birds.min.js"></script>

  <script src="<?php echo base_url();?>public/animation/gallery/gallery.min.js"></script>

</head>

<body class="login-img3-body">
  <section class="wm">
  <div class="container">
	<?php $attributes = array('class' => 'login-form', 'id' => 'myform');
     echo form_open('/login',$attributes);?>
      <div class="login-wrap">
        <span style="color:red;text-align:center;margin-left:71px;">
        <?php 
        if($this->session->flashdata('message')){
          echo $this->session->flashdata('message');
        }?>
        </span>
        <p class="login-img"><i class="icon_lock_alt"></i></p>
		<?php if(isset($logout)){?><center><h4 style="color:red;"> Successfully Logout ! </h4></center><?php } ?>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" placeholder="E-mail" autofocus>
        </div>
		<?php echo form_error('username', '<div class="error">', '</div>'); ?>
	   <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
		</div>
		<?php echo form_error('password', '<div class="error">', '</div>'); ?>
        
		<label class="checkbox">
      <input type="checkbox" value="remember-me"> Remember me
      <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
    </label>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
    <?php echo form_close(); ?>
	<br>
	 <a href="<?php echo base_url();?>admin/signup"><span class="btn btn-info btn-lg btn-block">Signup</span></a>
    </div>
  </div>
  </section>
</body>

</html>
