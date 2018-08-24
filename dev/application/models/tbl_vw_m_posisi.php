<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_vw_m_posisi extends CI_Model {
  var $table = 'tbl_vw_m_posisi';
  var $column = array('pid','posisi_desc','kode_posisi','position_title','employee_type','contract','level','jurusan','education','usia','jenis_kelamin','work_location','job_description','created_by','created_date','last_update_by','last_update_date');
  var $order = array('last_update_date' => 'desc');

	function __construct() {
		parent::__construct();
    $this->load->database();
	}

  public function getPosisiDesc()
  {
    $this->db->from($this->table);
    $query = $this->db->get();

    return $query->result();
  }
}
