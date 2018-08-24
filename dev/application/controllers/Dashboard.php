<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend_Controller {

	public function __construct(){
		parent::__construct();

	}

	// public $sPid="";

	public function index(){

		$_this =& get_instance();

		$user_session = $_this->session->userdata;

		// if(isset($user_session['logged_in']) && $user_session['logged_in'] == TRUE && $user_session['group'] == 'user'){
		// 			redirect(set_url('jobseeker'));
		// }
		// $sPid = $user_session['ID'];
		$sPid = $user_session['ID'];
		// $sPid=$this->sPid;
		$iData = $this->tbl_vw_user_pelamar->get_user_pelamar($sPid);
		if(count($iData) < 1){
			redirect(set_url('DataDiriPelamar'));
		}
		// die(print_r($sPid));
		$i_DataDiri=$this->tbl_m_pelamar->getData($sPid);
		$i_Pendidikan=$this->tbl_m_pendidikan_pelamar->getData($sPid);
		$i_InfoKontak=$this->tbl_m_info_kontak_pelamar->getData($sPid);
		$i_BerkasDataDiri=$this->tbl_m_berkas_pelamar->getData($sPid);
		$i_DataKeluarga=$this->tbl_m_keluarga_pelamar->getData($sPid);
		// $i_PengalamanKerja=$this->tbl_m_pengalaman_pelamar->getData($sPid);

		$iRemark1=$this->input->get('sRemark1');
		if($iRemark1==null || $iRemark1==''){
			if($i_DataDiri!=null){
				$iRemark1=$this->tbl_m_pelamar->validasi_($i_DataDiri);
			}else{
				$iRemark1="<small>Form Data Diri Harus Di Isi <a href='".base_url()."DataDiriPelamar?sSteps=1'>Click,</a></small><br/>";
			}
		}
		if($i_InfoKontak!=null){
			$iRemark2=$this->tbl_m_info_kontak_pelamar->validasi_($i_InfoKontak);
		}else{
			$iRemark2="<small>Form Informasi Kontak Harus Diisi <a href='".base_url()."DataDiriPelamar?sSteps=2'>Click,</a></small><br/>";
		}
		if($i_Pendidikan!=null){
			$iRemark3=$this->tbl_m_pendidikan_pelamar->validasi_($i_Pendidikan);
		}else{
			$iRemark3="<small>Form Pendidikan Harus Diisi <a href='".base_url()."DataDiriPelamar?sSteps=3'>Click,</a></small><br/>";
		}
		if($i_BerkasDataDiri!=null){
			$iRemark4=$this->tbl_m_berkas_pelamar->validasi_($i_BerkasDataDiri);
		}else{
			$iRemark4="<small>Form Berkas Harus Diisi <a href='".base_url()."DataDiriPelamar?sSteps=4'>Click,</a></small><br/>";
		}
		if($i_DataKeluarga!=null){
			$iRemark5=$this->tbl_m_keluarga_pelamar->validasi_($i_DataKeluarga);
		}else{
			$iRemark5="<small>Form Keluarga Harus Diisi <a href='".base_url()."DataDiriPelamar?sSteps=5'>Click,</a></small><br/>";
		}
		// if($i_PengalamanKerja!=null){
		// 	$iRemark6=$this->tbl_m_pengalaman_pelamar->validasi_($i_PengalamanKerja);
		// }else{
		// 	$iRemark6="Form Pengalaman Kerja Harus Di Isi";
		// }


		$data = array(
	      'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
	      'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
	      'remark1'=> $iRemark1,
	      'remark2'=> $iRemark2,
	      'remark3'=> $iRemark3,
	      'remark4'=> $iRemark4,
	      'remark5'=> $iRemark5,
	      'tahun_masuk_pendidikan'=> $iData->tahun_masuk_pendidikan,
	      'tahun_lulus'=> $iData->tahun_lulus,
	      'no_ktp'=> $iData->no_ktp,
	      'nem_ipk'=> $iData->nem_ipk,
	      'nama_pelamar'=> $iData->nama_pelamar,
	      'profil_path'=> base_url().$iData->profil_path,
	      'sekolah_universitas'=> $iData->sekolah_universitas,
	      'email'=> $iData->email,
	      'no_hp'=> $iData->no_hp,
	      );
		//$this->site->_isHome = TRUE;
		// die(print_r($user_session['ID']));
		$this->session->set_userdata('menu','dashboard');
		$this->site->view('Dashboard/index', $data);
	}

public function admin(){
	$this->session->set_userdata('menu','dashboard');
	$this->site->view('dashboardadmin');
}


}
