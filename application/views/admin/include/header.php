<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?= $title ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/bootstrap.min.css'?> ">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/_all-skins.min.css' ?>">
  <link rel="stylesheet" href="<?= base_url().'assets1/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?= base_url().'assets1/css/w3.css' ?>">
  <link rel="icon" type="image/png" href="<?= base_url('images/setwapres.png') ?>">

  <script src="<?= base_url().'assets1/js/jquery.min.js' ?>"></script>
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
}


* {
    box-sizing: border-box;
}
body {
    font-family: Arial;
    padding: 0px;
    background: #f1f1f1;
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
.contentKegiatan {
    float: left;
    width: 100%;
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
.profilepegawai {
    background-color: white;
    width: 60%;
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
#crouton ul {
margin: 0;
padding: 0;
overflow: hidden;
width: 100%;
list-style: none;
}

#crouton li {
float: left;
margin: 0 10px;
}

#crouton a {
background: #ddd;
padding: .7em 1em;
float: left;
text-decoration: none;
color: #444;
text-shadow: 0 1px 0 rgba(255,255,255,.5);
position: relative;
}

#crouton li:first-child a {
border-bottom-left-radius: 5px;
}

#crouton li:last-child a {
border-top-right-radius: 2px;
border-bottom-right-radius: 2px;
}

#crouton a:hover {
background: #626025;
color: white;
}

#crouton li:not(:first-child) > a::before {
content: '';
position: absolute;
top: 50%;
margin-top: -1.5em;
border-width: 1.5em 0 1.5em 1em;
border-color: #ddd #ddd #ddd transparent;
left: -1em;
}

#crouton li:not(:first-child) > a:hover::before {
border-color:  #626025 #626025 transparent;
}

#crouton li:not(:last-child) > a::after {
content: '';
position: absolute;
top: 50%;
margin-top: -1.5em;

right: -1em;
}


</style>
</head>
<body>
  <div class="header w3-white w3-black">
    <img src="<?= base_url().'images/logo.svg' ?> " width="100px" alt="">
    <h3>SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</h3>
    <h3>SEKRETARIAT WAKIL PRESIDEN</h3>
  </div>
<div id='crouton'>
<ul>
  <div class="topnav">
    <li><a href="<?= base_url('admin/dashboard') ?>"><b>DASHBOARD</b></a></li>
    <li><a href="<?= base_url('admin/organisasi?organisasi') ?>"><b>ORGANISASI</b></a></li>
    <li><a href="<?= base_url('admin/Kegiatanprosesbisnis') ?> "><b>KEGIATAN DAN PROSES BISNIS</b></a></li>
    <li><a href="<?= base_url('admin/Manajementrisk') ?>"><b>MANAJEMEN RISIKO</b></a></li>
    <li><a href="<?= base_url('admin/laporan') ?>"><b>LAPORAN</b></a></li>
    <a onclick="return confirm('Anda Yakin Ingin Keluar ?')" href="<?= base_url('admin/login/logout') ?>" style="float:right">Hallo, <?= $this->session->userdata('username') ?> Logout</a>

  </div>
</ul>
</div>
