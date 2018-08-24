<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_t_blacklist extends CI_Model {
  var $table = 'tbl_t_blacklist';
  var $column = array('pid',
                      'pid_pelamar',
                      'lama_blacklist',
                      'status_blacklist',
                      'created_by','created_date','last_update_by','last_update_date');
  var $order = array('last_update_date' => 'desc');

	function __construct() {
		parent::__construct();
    $this->load->database();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_pid($id)
	{
		$this->db->where('pid', $id);
		$this->db->delete($this->table);
	}
}
