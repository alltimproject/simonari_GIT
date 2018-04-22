<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Pdf {

    function pdf()
    {
      $CI = &get_instance();
      log_message('Debug', 'mPDF class is loaded');
    }

    function load()
    {
      include_once APPPATH.'/third_party/mpdf60/mpdf.php';

      return new mPDF('utf-8', 'A4-L','','Arial');
    }
  }

 ?>
