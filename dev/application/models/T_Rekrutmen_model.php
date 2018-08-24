<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class T_Rekrutmen_model extends CI_Model {
  var $table = 'tbl_t_rekrutmen';
  var $column = array('pid',
                      'pid_source',
                      'kota_kabupaten',
                      'gelombang',
                      'periode',
                      'judul_rekrutmen',
                      'tipe_rekrutmen',
                      // 'vendor_psikotes',
                      // 'vendor_labs',
                      'deskripsi_event',
                      'tanggal_mulai',
                      'tanggal_selesai',
                      // 'barcode',
                      'zona_waktu',
                      'status',
                      'created_by','created_date','last_update_by','last_update_date');
  var $order = array('last_update_date' => 'desc');

	function __construct() {
		parent::__construct();
    $this->load->database();
	}

  public function getJudulLowongan()
  {
    $this->db->from($this->table);
    $query = $this->db->get();

    return $query->result();
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
		$this->db->where('pid',$pid);
		$query = $this->db->get();

		return $query->row();
	}

  // public function get_by_education($edu)
	// {
	// 	$this->db->from($this->table);
	// 	$this->db->where('pendidikan',$edu);
	// 	$query = $this->db->get();
  //
	// 	return $query->result();
	// }

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
