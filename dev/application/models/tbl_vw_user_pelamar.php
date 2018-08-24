<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_vw_user_pelamar extends MY_Model {


	protected $_table_name = 'vw_user_pelamar';
	protected $_primary_key = 'ID';
	protected $_order_by = 'ID';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}

//================================================================================//
	function get_user_pelamar($id=NULL){
		$this->db->from('tbl_vw_user_pelamar');
		$this->db->where('ID',$id);
		$query = $this->db->get();

		return $query->row();
	}

}
