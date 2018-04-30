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
  <link rel="icon" type="image/png" href="<?= base_url('images/setwapres.png') ?>">

  <style>
  #notifications {
      cursor: pointer;
      position: fixed;
      right: 0px;
      z-index: 9999;
      bottom: 0px;
      margin-bottom: 22px;
      margin-right: 15px;
      min-width: 300px;
      max-width: 800px;
      height: 80px;
  }
  </style>
</head>

<body class="hold-transition login-page" style="background-size: cover; background-image: url('<?= base_url('images/coverlogin123.jpg') ?>')">

        <div class="login-box" style="float: right; margin-right: 65px;">
          <div class="login-box-body" style="background-color: rgba(255,255,255,0.8)">
               <div class="login-logo">
                <center>
                    <img src="<?= base_url().'images/logo.svg'  ?>" class="img-responsive" width="120px">
                    <h5><b>SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</b></h5>
                    <i style="font-size: 15px">Sekretariat Wakil Presiden</i>
                </center>
               </div>

            <div class="alert alert-danger" id="alert"></div>
            <form action="<?= base_url('Login/loginCek') ?>" class="form-login" method="post">
              <div class="form-group has-feedback">
                <input type="text" name="nip" class="form-control" placeholder="NIP">
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




    <?php if($this->session->flashdata('notif') ){ ?>
                  <div class="callout callout-<?= $this->session->flashdata('class') ?>" id="notifications">
                  <?= $this->session->flashdata('notif'); ?>
                  </div>
                  <?php } ?>

<script src="<?= base_url().'assets1/js/jquery.min.js' ?>"></script>
<script src="<?= base_url().'assets1/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets1/js/adminlte.min.js' ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#alert').hide();
    $('.form-login').submit(function(){
      $('#alert').hide();
      if($('input[name=nip]').val() == ""){
        $('#alert').fadeIn('slow').delay(3000).fadeOut('fast').html('<strong> Harap Masukkan NIP </strong>');
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

<script>
  $('#notifications').slideDown('slow').delay(4000).slideUp('slow');
</script>

<script type="text/javascript">
  $(function(){
    $('#show').click(function(){
      if($(this).is(':checked'))
      {
        $('#password').attr('type', 'text');
      } else {
        $('#password').attr('type', 'password');
      }
    });
  });
</script>
