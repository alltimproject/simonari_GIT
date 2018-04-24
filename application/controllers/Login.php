<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');

  }

  function index()
  {
    $data['title'] = "Login | Simonari";
    $this->load->view('v_login', $data);
  }

  function loginCek()
  {
    $nip = $this->input->post('nip');
    $password = $this->input->post('password');

    $where = array(
      'nip' => $nip,
      'password' => md5($password)
    );

    $cek = $this->m_login->loginCek($where);
    $cek2 = $this->m_login->loginCekUnor($where);


    if($cek->num_rows() > 0)
    {
      foreach($cek->result() as $key)
      {
        //tbl pegawai
        $nip          = $key->nip;
        $nama_pegawai = $key->nama_pegawai;
        $id_jabatan   = $key->id_jabatan;
        $nama_jabatan = $key->nama_jabatan;
        $ket_jabatan  = $key->ket_jabatan;
        $foto         = $key->foto;
        //
        // //unor
        $id_unor      = $key->id_unor;
        $nama_unor    = $key->nama_unor;
        //
        //unit kerja
        $id_unit      = $key->id_unit;
        $nama_unit    = $key->nama_unit;
        $sasaran      = $key->sasaran;
        $iku          = $key->iku;
      }

      $session = array(
        'nip'          => $nip,
        'nama_pegawai' => $nama_pegawai,
        'id_jabatan'   => $id_jabatan,
        'nama_jabatan' => $nama_jabatan,
        'ket_jabatan'  => $ket_jabatan,
        'foto'         => $foto,

        'id_unit'      => $id_unit,
        'nama_unit'    => $nama_unit,

        'id_unor'      => $id_unor,
        'nama_unor'    => $nama_unor,
        'sasaran'      => $sasaran,
        'iku'          => $iku,

        'login' => 'ok'
      );

      $this->session->set_userdata($session);
      $this->session->set_flashdata('modal', 'oklogin');
      redirect('unit_kerja/Dashboard');

    } elseif($cek2->num_rows() > 0)
    {
      foreach($cek2->result() as $key)
      {
        //tbl pegawai
        $nip = $key->nip;
        $nama_pegawai = $key->nama_pegawai;
        $id_jabatan = $key->id_jabatan;
        $nama_jabatan = $key->nama_jabatan;
        $ket_jabatan  = $key->ket_jabatan;
        $foto = $key->foto;
        //
        // //unor
        $id_unor = $key->id_unor;
        $nama_unor = $key->nama_unor;

      }

      $session = array(
        'nip' => $nip,
        'nama_pegawai' => $nama_pegawai,
        'id_jabatan'   => $id_jabatan,
        'nama_jabatan' => $nama_jabatan,
        'ket_jabatan'  => $ket_jabatan,
        'foto'         => $foto,

        'id_unor' => $id_unor,
        'nama_unor' => $nama_unor,

        'login' => 'ok'
      );

      $this->session->set_userdata($session);
      $this->session->set_flashdata('modal', 'oklogin');
      redirect('unit_organisasi/Dashboard');


    } else {
      $this->session->set_flashdata('notif', 'Password atau Username Salah. Silahkan Coba lagi');
      $this->session->set_flashdata('class', 'danger');
      redirect('login');
    }
  }

  function logOut()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

}

?>
