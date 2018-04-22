<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_core extends CI_Model{

  function update($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function delete($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  function tambah($data, $table)
  {
    $this->db->insert($table, $data);
  }

}
