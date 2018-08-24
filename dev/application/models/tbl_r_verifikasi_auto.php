<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_r_verifikasi_auto extends MY_Model {

	protected $_table_name = 'r_verifikasi_auto';
	protected $_primary_key = 'pid_verifikasi';
	protected $_order_by = 'pid_verifikasi';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
	}



}
