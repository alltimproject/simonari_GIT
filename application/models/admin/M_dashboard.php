<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{

  function showPenangananRisk()
  {
    $this->db->select('*');

    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp','left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk','left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit','left');
    $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop','left');


    return $this->db->get();
  }
  function rowOpen()
  {
    $where2 = array(
      'tbl_monitor_rtp.status' => 'Open'
    );

    $this->db->select('*');
    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'left');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

    $this->db->where($where2);

    return $this->db->get();
  }
  function rowClose()
  {
    $where2 = array(
      'tbl_monitor_rtp.status' => 'Close'
    );

    $this->db->select('*');
    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'left');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

    $this->db->where($where2);
    return $this->db->get();
  }
  function rowSgtRendah()
  {
    $where2 = 'tbl_sop_risk.hitung BETWEEN 1 AND 5';
    $where3 = 'tbl_sop_risk.dampak != 5';

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        $this->db->where($where2);
        $this->db->where($where3);

        return $this->db->get();
  }

  function rowRendah()
  {
    $where2 = 'tbl_sop_risk.hitung BETWEEN 6 AND 11';
    $where3 = 'tbl_sop_risk.dampak != 5';

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');

        $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop');
        $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        $this->db->where($where2);
        $this->db->where($where3);

        return $this->db->get();
  }

  function rowSedang()
  {
    $where2 = 'tbl_sop_risk.hitung BETWEEN 12 AND 15';
    $where3 = 'tbl_sop_risk.dampak != 5';

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');

        $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop');
        $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

    $this->db->where($where2);
    $this->db->where($where3);

    return $this->db->get();
  }

  function rowTinggi()
  {
    $where2 = 'tbl_sop_risk.hitung BETWEEN 16 AND 19';
    $where3 = 'tbl_sop_risk.dampak != 5';

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');

        $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop');
        $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


    $this->db->where($where2);
    $this->db->where($where3);

    return $this->db->get();
  }

  function rowSgtTinggi()
  {
    $where2 = 'tbl_sop_risk.dampak = 5 OR tbl_sop_risk.hitung BETWEEN 20 AND 25';

    $this->db->select('*');
    //$this->db->select('(select dampak * hitung from tbl_sop_risk) as tingkat ');
    $this->db->from('tbl_sop_risk');

        $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop');
        $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        $this->db->where($where2);
        $this->db->order_by('tbl_sop_risk.hitung', 'desc');


        return $this->db->get();
  }

  function rowMan()
  {
    $where2 = array(
      'tbl_sop_risk.kategori_cause' => 'Man'
    );

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


    $this->db->where($where2);

    return $this->db->get();
  }

  function rowMoney()
  {
    $where2 = array(
      'tbl_sop_risk.kategori_cause' => 'Money'
    );

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


    $this->db->where($where2);

    return $this->db->get();
  }

  function rowMethod()
  {
    $where2 = array(
      'tbl_sop_risk.kategori_cause' => 'Method'
    );

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


        $this->db->where($where2);

        return $this->db->get();
  }

  function rowMachine()
  {
    $where2 = array(
      'tbl_sop_risk.kategori_cause' => 'Machine'
    );

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

    $this->db->where($where2);

    return $this->db->get();
  }

  function rowMaterial()
  {
    $where2 = array(
      'tbl_sop_risk.kategori_cause' => 'Material'
    );

    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


        $this->db->where($where2);

        return $this->db->get();
  }


}
