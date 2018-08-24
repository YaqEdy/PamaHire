<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_r_jurusan extends MY_Model {

	protected $_table_name = 'r_jurusan';
	protected $_primary_key = 'id';
	protected $_order_by = 'id';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}


	function getJurusan(){
		$this->db->distinct();
		$this->db->select('{PRE}r_jurusan.jurusan');
		$this->db->from('{PRE}r_jurusan');
		$iListJurusan=$this->db->get()->result();

		return $iListJurusan;
	}


}
