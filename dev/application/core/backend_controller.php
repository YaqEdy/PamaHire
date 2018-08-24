<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends MY_Controller{

	function __construct(){
		parent::__construct();

		// $this->load->helper(array('security','url', 'form'));
		// $this->load->library(array('Site','form_validation','Recaptcha','email'));
		// $this->load->model(array());


		$this->load->helper(array('form', 'security' ,'date', 'admin_helper'));
		$this->load->library(array('form_validation'));
		$this->load->model(array());

		$this->site->side = 'backend';
		// $this->site->template = 'templatevamp';

		// $this->site->is_logged_in();
	}

}