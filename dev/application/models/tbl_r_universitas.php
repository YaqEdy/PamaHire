<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_r_universitas extends MY_Model {

	protected $_table_name = 'r_universitas';
	protected $_primary_key = 'id';
	protected $_order_by = 'id';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}


	function getUniversitas(){
		$this->db->distinct();
		$this->db->select('{PRE}r_universitas.universitas');
		$this->db->from('{PRE}r_universitas');
		$iListUniversitas=$this->db->get()->result();

		return $iListUniversitas;
	}


}
