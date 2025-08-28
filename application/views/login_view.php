<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Perpustakaan</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/responsivelogin.css');?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .navbar-inverse{
            background-color:#333;
        }
        .navbar-color{
            color:#fff;
        }
        blink, .blink {
            animation: blinker 3s linear infinite;
        }
        @keyframes blinker {
            50% { opacity: 0; }
        }
    </style>
</head>
<body class="hold-transition login-page" style="overflow-y: hidden;background:url('<?php echo base_url('assets/img/Library.png');?>')no-repeat;background-size:100% 100%; ">
<div class="login-box">
    <div class="login-box-body text-center bg-blue">
        <a href="index.php" style="color:#fff;font-size:20px !important;"><b>Sistem Informasi Perpustakaan</b></a>
    </div>
    <div class="login-box-body" style="border:2px solid #226bbf;">
        <form action="<?php echo site_url('login/aksi_login');?>" method="POST">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" required="required" autocomplete="off">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="required" autocomplete="off">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" id="loding" class="btn btn-primary btn-flat">Sign In</button>
                </div>
            </div>
            <br>
        </form>
    </div>
    <footer>
        <div class="login-box-body text-center bg-blue">
           <a style="color: #fff;"> Copyright &copy; Sistem Perpustakaan SMAN 1 Pekanbaru - <?php echo date("Y");?>
        </div>
    </footer>
</div>
<div id="tampilkan"></div>
<script src="<?php echo base_url('assets/adminlte/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/iCheck/icheck.min.js');?>"></script>
</body>
</html>