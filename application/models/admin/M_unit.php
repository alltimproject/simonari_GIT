<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model{

  function getAllunit()
  {
    return $this->db->get('tbl_unit_kerja');
  }



}
