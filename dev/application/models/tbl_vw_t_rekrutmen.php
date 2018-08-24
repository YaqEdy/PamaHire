<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_vw_t_rekrutmen extends CI_Model {
  var $table = 'tbl_vw_t_rekrutmen';
  var $column = array('pid',
                      'pid_source',
                      'kota_kabupaten',
                      'gelombang',
                      'periode',
                      'bulan',
                      'kode_bulan',
                      'tahun',
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

  private function _get_datatables_query()
	{

		$this->db->from($this->table);
    $this->db->where('status','draft');

		$i = 0;

		foreach ($this->column as $item)
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $this->db->where('status','draft');
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
    $this->db->where('status','draft');
		return $this->db->count_all_results();
	}

  //---------------------------grid posted-------------------------------//
  private function _get_datatables_query_posted()
  {

    $this->db->from($this->table);
    $this->db->where('status','posted');
    $i = 0;

    foreach ($this->column as $item)
    {
      if($_POST['search']['value'])
        ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $this->db->where('status','posted');
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

  function get_datatables_posted()
  {
    $this->_get_datatables_query_posted();
    if($_POST['length'] != -1)
    $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result();
  }

  function count_filtered_posted()
  {
    $this->_get_datatables_query_posted();
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all_posted()
  {
    $this->db->from($this->table);
    $this->db->where('status','posted');
    return $this->db->count_all_results();
  }
  //-------------------------------^^------------------------------------//

  //---------------------------grid closed-------------------------------//
  private function _get_datatables_query_closed()
  {

    $this->db->from($this->table);
    $this->db->where('status','closed');
    $i = 0;

    foreach ($this->column as $item)
    {
      if($_POST['search']['value'])
        ($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
        $this->db->where('status','closed');
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

  function get_datatables_closed()
  {
    $this->_get_datatables_query_closed();
    if($_POST['length'] != -1)
    $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result();
  }

  function count_filtered_closed()
  {
    $this->_get_datatables_query_closed();
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all_closed()
  {
    $this->db->from($this->table);
    $this->db->where('status','closed');
    return $this->db->count_all_results();
  }
  //-------------------------------^^------------------------------------//


	public function get_by_pid($pid)
	{
		$this->db->from($this->table);
		$this->db->where('pid',$pid);
		$query = $this->db->get();

		return $query->row();
	}

  function getAll($config){
      $hasilquery=$this->db->get('tbl_vw_t_peluang_karir', $config['per_page'], $this->uri->segment(3));
      if ($hasilquery->num_rows() > 0) {
          foreach ($hasilquery->result() as $value) {
              $data[]=$value;
          }
          return $data;
      }
  }

  function getAllLimit(){
    $this->db->from('tbl_vw_t_peluang_karir');
    $where = '(status="posted" or status = "closed")';
    $this->db->where($where);
    $this->db->limit(3);
    $query = $this->db->get();
    return $query->result();
  }

  function getDetail($pid_rekrutmen,$pid_posisi){

  		$this->db->from('tbl_vw_t_peluang_karir');
  		$this->db->where('pid',$pid_rekrutmen);
      $this->db->where('pid_posisi',$pid_posisi);
  		$query = $this->db->get();

  		return $query->row();
  }


    function getSource(){
    $this->db->distinct();
    $this->db->select('pid_source');
    $this->db->from('tbl_vw_t_rekrutmen');
    $iListSource=$this->db->get()->result();

    return $iListSource;
  }

}
