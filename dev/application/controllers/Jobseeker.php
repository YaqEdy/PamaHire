<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$_this =& get_instance();

		$user_session = $_this->session->userdata;

		if(isset($user_session['logged_in']) && $user_session['logged_in'] != TRUE || $user_session['group'] != 'user'){
					redirect(set_url(''));
		}
		$data = array();
		//$this->site->is_url_admin();
		$this->site->view('jobseeker', $data);
	}

	// public function action($param){
	// 	global $SConfig;
	// 	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	// 		if($param=='ambil'){
	// 			$this->load->model(array('Komentar_model', 'Artikel_model'));
	// 			echo json_encode(array(
	// 					'record_komentar' => $this->Komentar_model->get_by(NULL, 5),
	// 					'record_artikel' => $this->Artikel_model->get_by(array('post_type' => 'artikel'), 3)
	// 				));
	// 		}
	// 	}
	// }

}
