<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url().'assets1/css/bootstrap.min.css'?> ">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/_all-skins.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets1//datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/w3.css' ?>">
  <link rel="icon" type="image/png" href="<?= base_url('images/setwapres.png') ?>">

  <script src="<?= base_url().'assets1/js/jquery.min.js' ?>"></script>
  

<style>
* {
    box-sizing: border-box;
}
body {
    font-family: Arial;
    padding: 0px;
    background: #f1f1f1;
}

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

/* Header/Blog Title */
.header {
    padding: 20px;
    text-align: center;
    background: black;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.activenav{
  background-color:#ddd;
  color: black;
}

.activecore{
  background-color:#aaa;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
    float: left;
    width: 20%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 80%;
    background-color: #f1f1f1;
    padding-left: 9px;
}
.dashboardmenu {
    float: left;
    width: 100%;
    background-color: #f1f1f1;
    padding-left: 20px;
}


/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: black;
    margin-top: 400px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}
</style>

</head>
<body>
  <div class="header w3-white w3-black">
    <img src="<?= base_url().'images/logo.svg' ?> " width="80px" alt="">
    <h3>SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</h3>
    <h3>SEKRETARIAT WAKIL PRESIDEN</h3>
  </div>

  <div class="topnav">
    <a href="<?= base_url('unit_kerja/dashboard') ?>" class="navigasi">DASHBOARD</a>
    <a href="<?= base_url('unit_kerja/organisasi') ?>" class="navigasi">ORGANISASI</a>
    <a href="<?= base_url('unit_kerja/kegiatanproses') ?> " class="navigasi">KEGIATAN DAN PROSES BISNIS</a>
    <a href="<?= base_url('unit_kerja/manajemenrisk') ?>" class="navigasi">MANAJEMEN RISIKO</a>
    <a href="<?= base_url('unit_kerja/laporan') ?>" class="navigasi">LAPORAN</a>
    <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar')" href="<?= base_url('login/logOut') ?>" style="float:right">LOGOUT</a>
  </div>

  <div class="container-fluid">
