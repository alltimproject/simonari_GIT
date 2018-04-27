<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Simonari</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url().'assets1/css/bootstrap.min.css'?> ">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/_all-skins.min.css' ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/w3.css' ?>">
</head>

<body class="hold-transition login-page" style="background-size: cover; background-image: url('<?= base_url('images/asdsad.jpg') ?>')">

    
    <div class="login-box" style="float: right; margin-right: 35px;">
          <div class="login-box-body" style="background-color: rgba(255,255,255,0.8)">
               <div class="login-logo">
                <center>
                    <img src="<?= base_url().'images/logo.svg'  ?>" class="img-responsive" width="120px">
                    <h5><b>SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</b></h5>
                    <i style="font-size: 15px">Sekretariat Wakil Presiden</i>
                </center>
               </div>

            <div class="alert alert-danger" id="alert"></div>
            <p class="login-box-msg">ADMINISTRATOR</p>
            <form action="<?= base_url('admin/login/proses_login') ?>" class="form-login" method="post">
              <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <span class="fa fa-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <span class="fa fa-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>
                      <input type="checkbox" id="show"> <small> Show Password</small>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <div class="social-auth-links text-center">
                <center><small>Copyright © 2018 Tim Satgas SPIP Sekretariat Wakil Presiden. All rights reserved. </small></center>
            </div>
          </div>
        </div>

<script src="<?= base_url().'assets1/js/jquery.min.js' ?>"></script>
<script src="<?= base_url().'assets1/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets1/js/adminlte.min.js' ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#alert').hide();
    $('.form-login').submit(function(){
      $('#alert').hide();
      if($('input[name=username]').val() == ""){
        $('#alert').fadeIn('slow').delay(3000).fadeOut('fast').html('<strong> Harap Masukkan Username </strong>');
        return false;
      } else if($('input[name=password]').val() == "") {
        $('#alert').fadeIn('slow').delay(3000).fadeOut('fast').html('<strong> Harap Masukkan Password </strong>');
        return false;
      } else {
        return true;
      }

    });
  });
</script>
</body>
</html>
