<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_login');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = "Login | Simonari";
    $this->load->view('admin/v_login', $data);
  }

  function proses_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $where = array(
      'username' => $username,
      'password' => md5($password)
    );

    $cek = $this->m_login->cek_loginadmin($where)->num_rows();
    if($cek > 0 ){
      $data_session = array(
        'username' => $username,
        'status'   => 'loginactive'
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('admin/dashboard'));
    }else{
      $this->session->set_flashdata('msg', 'Periksa Kembali Username dan Password Anda');
      redirect(base_url('admin/login'));
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('admin/login') );
  }

}
