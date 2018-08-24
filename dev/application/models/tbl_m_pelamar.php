<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_pelamar extends MY_Model {

	var $_table_name = 'm_pelamar';
	protected $_primary_key = 'pid_pelamar';
	protected $_order_by = 'pid_pelamar';
	protected $_order_by_type = 'DESC';

	function __construct() {
		parent::__construct();
	}

	function getData($sParam){
		$this->db->select('*');
		return parent::get($sParam);
	}

	function validasi_($s_list){
		$str_Alert='';
		if($s_list->profil_path==base_url().'null'){
			$str_Alert.='<small>Foto harus di unggah <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->no_ktp==''){
			$str_Alert.='<small>No Ktp Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->nama_pelamar==''){
			$str_Alert.='<small>Nama Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->email==''){
			$str_Alert.='<small>Email Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->jenkel==''){
			$str_Alert.='<small>Jenis Kelamin Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->tempat_lahir==''){
			$str_Alert.='<small>Tempat Lahir Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->tanggal_lahir==''){
			$str_Alert.='<small>Tanggal Lahir Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->status_pernikahan==''){
			$str_Alert.='<small>Status Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->agama==''){
			$str_Alert.='<small>Agama Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}
		if($s_list->gol_darah==''){
			$str_Alert.='<small>Gol Darah Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=1">Click,</a></small><br/>';
		}

		return $str_Alert;
	}



	function validasi($s_list){
		$iRemark1=0;
		$iRemark2=0;
		$iRemark3=0;
		$iRemark4=0;
		$iRemark5=0;
		$iRemark6=0;
		$iRemark7=0;
		$iRemark8=0;
		$iRemark9=0;
		$iRemark10=0;
		if(element('profil_path',$s_list)==base_url().'null'){
			$iRemark1=1;
		}
		if(element('no_ktp',$s_list)==''){
			$iRemark2=1;
		}
		if(element('email',$s_list)==''){
			$iRemark3=1;
		}
		if(element('nama_pelamar',$s_list)==''){
			$iRemark4=1;
		}
		if(element('jenkel',$s_list)==''){
			$iRemark5=1;
		}
		if(element('tempat_lahir',$s_list)==''){
			$iRemark6=1;
		}
		if(element('tanggal_lahir',$s_list)==''){
			$iRemark7=1;
		}
		if(element('status_pernikahan',$s_list)==''){
			$iRemark8=1;
		}
		if(element('agama',$s_list)==''){
			$iRemark9=1;
		}
		if(element('gol_darah',$s_list)==''){
			$iRemark10=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4+$iRemark5+$iRemark6+$iRemark7+$iRemark8+$iRemark9+$iRemark10;

		return array(
			"0"=>$count,
			"1"=>$iRemark1,
			"2"=>$iRemark2,
			"3"=>$iRemark3,
			"4"=>$iRemark4,
			"5"=>$iRemark5,
			"6"=>$iRemark6,
			"7"=>$iRemark7,
			"8"=>$iRemark8,
			"9"=>$iRemark9,
			"10"=>$iRemark10
			);
	}


}
