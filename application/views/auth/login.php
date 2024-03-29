<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMOD 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/') ?>plugins/iCheck/square/blue.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/custom/images/icons/icon.ico') ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url('assets/custom/images/icons/icon.ico') ?>" type="image/x-icon" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/custom/css/layout.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p><img src="<?php echo base_url('assets/custom/images/icons/logo.ico') ?>" class="logo"></p>
    <a href="<?php echo site_url('dashboard') ?>"><b></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <div id="infoMessage"><?php echo $message;?></div>
    <?php echo form_open("auth/login");?>
    <div class="form-group has-feedback">
      <?php echo form_input($identity);?>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <?php echo form_input($password);?>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="checkbox icheck">
          <label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember Me
          </label>
        </div>
        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        </div>
      <!-- /.col -->
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-sm btn-block btn-flat">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
  </div>
    <?php echo form_close();?> 
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE/') ?>plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
