<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_posisi_detail extends CI_Model {
  var $table = 'tbl_m_posisi_detail';
  var $column = array('pid','pid_posisi','pid_jurusan','min_gpa','created_by','created_date','last_update_by','last_update_date');
  var $order = array('last_update_date' => 'desc');

	function __construct() {
		parent::__construct();
    $this->load->database();
	}

  public function getalldata(){
    $this->db->from($this->table);
		$query = $this->db->get();

		return $query->row();
  }
  private function _get_datatables_query($pid_posisi)
	{

		$this->db->from($this->table);
    $this->db->where('pid_posisi',$pid_posisi);
		$i = 0;

		foreach ($this->column as $item)
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $this->db->where('pid_posisi',$pid_posisi);
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

	function get_datatables($pid_posisi)
	{
		$this->_get_datatables_query($pid_posisi);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered($pid_posisi)
	{
		$this->_get_datatables_query($pid_posisi);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($pid_posisi)
	{
		$this->db->from($this->table);
    $this->db->where('pid_posisi',$pid_posisi);
		return $this->db->count_all_results();
	}

  public function count_detail($pid_posisi,$pid_jurusan)
	{
		$this->db->from($this->table);
    $this->db->where('pid_posisi',$pid_posisi);
    $this->db->where('pid_jurusan',$pid_jurusan);
		return $this->db->count_all_results();
	}

	public function get_by_pid($pid)
	{
		$this->db->from($this->table);
		$this->db->where('pid',$pid);
		$query = $this->db->get();

		return $query->row();
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

  public function delete_detail($id,$jurusan)
	{
		$this->db->where('pid_posisi', $id);
    $this->db->where_not_in('pid_jurusan', $jurusan);
		$this->db->delete($this->table);
	}
}
