<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_pendidikan_pelamar extends MY_Model {

	var $_table_name = 'm_pendidikan_pelamar';
	protected $_primary_key = 'pid_pendidikan_pelamar';
	protected $_order_by = 'pid_pendidikan_pelamar';
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
		if($s_list->jenjang_pendidikan==''){
			$str_Alert.='<small>Jenjang Pendidikan Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
		}
		if($s_list->sekolah_universitas==''){
			$str_Alert.='<small>Sekolah/Universitas Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
		}
		if($s_list->jurusan==''){
			$str_Alert.='<small>Jurusan Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
		}
		if($s_list->nem_ipk==''){
			$str_Alert.='<small>Nem/Ipk Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
		}
		if($s_list->tahun_masuk==''){
			$str_Alert.='<small>Tahun Masuk Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
		}
		if($s_list->tahun_lulus==''){
			$str_Alert.='<small>Tahun Lulus Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=3">Click,</a></small><br/>';
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
		if(element('jenjang_pendidikan',$s_list)==''){
			$iRemark1=1;
		}
		if(element('sekolah_universitas',$s_list)==''){
			$iRemark2=1;
		}
		if(element('jurusan',$s_list)==''){
			$iRemark3=1;
		}
		if(element('nem_ipk',$s_list)==''){
			$iRemark4=1;
		}
		if(element('tahun_masuk',$s_list)==''){
			$iRemark5=1;
		}
		if(element('tahun_lulus',$s_list)==''){
			$iRemark6=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4+$iRemark5+$iRemark6;

		return array(
			"0"=>$count,
			"1"=>$iRemark1,
			"2"=>$iRemark2,
			"3"=>$iRemark3,
			"4"=>$iRemark4,
			"5"=>$iRemark5,
			"6"=>$iRemark6
			);
	}


}
