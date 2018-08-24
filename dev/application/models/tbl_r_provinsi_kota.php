<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_r_provinsi_kota extends MY_Model {

	protected $_table_name = 'r_provinsi_kota';
	protected $_primary_key = 'id';
	protected $_order_by = 'id';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}


	function getProvinsi(){
		$this->db->distinct();
		$this->db->select('{PRE}r_provinsi_kota.provinsi');
		$this->db->from('{PRE}r_provinsi_kota');
		$iListProvinsi=$this->db->get()->result();

		return $iListProvinsi;
	}
	function getKotaKab($sParam){
		if($sParam=="ALL"){
			$this->db->select('{PRE}r_provinsi_kota.kota');
			$this->db->from('{PRE}r_provinsi_kota');
			$iListKota=$this->db->get()->result();
		}else{			
			$this->db->select('{PRE}r_provinsi_kota.kota');
			$this->db->from('{PRE}r_provinsi_kota');
			$this->db->where('provinsi',$sParam);
			$iListKota=$this->db->get()->result();
		}

		return $iListKota;
	}


}
