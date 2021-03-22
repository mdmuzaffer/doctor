<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>/public/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>/public/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>/public/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>/public/admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url();?>/public/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/public/admin/css/style-responsive.css" rel="stylesheet" />

</head>
<body class="login-img3-body">
  <div class="container">
    <form class="login-form" action="<?=base_url('admin');?>" method="post">
      <div class="login-wrap">
        <span style="color:red;text-align:center;margin-left:71px;">
        <?php 
        if($this->session->flashdata('message')){
          echo $this->session->flashdata('message');
        }?>
        </span>
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>

    <div class="text-right">
      <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">Muzaffer</a>
        </div>
    </div>
  </div>


</body>

</html>
