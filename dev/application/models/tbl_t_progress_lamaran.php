<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_t_progress_lamaran extends MY_Model {

	protected $_table_name = 't_progress_lamaran';
	protected $_primary_key = 'pid';
	protected $_order_by = 'pid';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}

function auto_kualifikasi($spid_posisi){
	$this->db->query("call sp_auto_kualifikasi('".$spid_posisi."')");
}

}
