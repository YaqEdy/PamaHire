<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_vw_t_blacklist extends CI_Model {
  var $table = 'tbl_vw_t_blacklist';
  var $column = array('ID',
                      'nama_lengkap',
                      'nomor_ktp',
                      'email',
                      'jenjang_pendidikan',
                      'jurusan',
                      'nem_ipk',
                      'active',
                      'pid',
                      'pid_pelamar',
                      'lama_blacklist',
                      'status_blacklist',
                      'status_desc',
                      'lama_blacklist',
                      'created_by','created_date','last_update_by','last_update_date');
  var $order = array('last_update_date' => 'desc');

	function __construct() {
		parent::__construct();
    $this->load->database();
	}

  private function _get_datatables_query()
	{

		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column as $item)
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}

		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_pid($pid)
	{
		$this->db->from($this->table);
		$this->db->where('ID',$pid);
		$query = $this->db->get();

		return $query->row();
	}

}
