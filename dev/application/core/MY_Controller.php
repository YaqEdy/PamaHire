<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MY_Controller extends CI_Controller{

	public $data = array();

	function __construct(){
		parent::__construct();

		// $this->load->helper(array('template_helper','user_helper','date'));
		// $this->load->library(array('Site', 'session'));
		// $this->load->model(array('User_model'));

		$this->load->helper(array('template_helper','user_helper'));
		$this->load->library(array('Site','session'));
		$this->load->model(array('User_model'));

		$this->load->model(array('M_Posisi_model'));
		$this->load->model(array('tbl_m_pelamar'));
		$this->load->model(array('tbl_vw_user_pelamar'));
		$this->load->model(array('tbl_m_info_kontak_pelamar'));
		$this->load->model(array('tbl_m_pendidikan_pelamar'));
		$this->load->model(array('tbl_m_keluarga_pelamar'));
		$this->load->model(array('tbl_m_pengalaman_pelamar'));
		$this->load->model(array('tbl_m_berkas_pelamar'));
		$this->load->model(array('detailDataDiri_model'));
		$this->load->model(array('tbl_r_provinsi_kota'));
		$this->load->model(array('tbl_r_universitas'));
		$this->load->model(array('tbl_r_jurusan'));

		$this->load->model(array('tbl_vw_seleksi_adm'));
		$this->load->model(array('tbl_t_progress_lamaran'));
		$this->load->model(array('tbl_vw_t_rekrutmen'));
		$this->load->model(array('tbl_vw_validasi_otomatis'));
		$this->load->model(array('tbl_r_verifikasi_auto'));

	}

}
