<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{

  function cek_loginadmin($where)
  {
    return $this->db->get_where('tbl_admin', $where);
  }

}
