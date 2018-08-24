<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_info_kontak_pelamar extends MY_Model {

	var $_table_name = 'm_info_kontak_pelamar';
	protected $_primary_key = 'pid_info_kontak_pelamar';
	protected $_order_by = 'pid_info_kontak_pelamar';
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
		if($s_list->alamat_ktp==''){
			$str_Alert.='<small>Alamat Ktp Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
		}
		if($s_list->kota_ktp==''){
			$str_Alert.='<small>Kota/Kabupaten ktp Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
		}
		if($s_list->propinsi_ktp==''){
			$str_Alert.='<small>Provinsi ktp Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
		}

		if($s_list->domisili_sama!=1){

			if($s_list->alamat_domisili==''){
				$str_Alert.='<small>Alamat domisili Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
			}
			if($s_list->kota_domisili==''){
				$str_Alert.='<small>Kota/Kabupaten Domisili Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
			}
			if($s_list->propinsi_domisili==''){
				$str_Alert.='<small>Provinsi Domisili Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
			}
		}
		if($s_list->kode_pos==''){
			$str_Alert.='<small>Kode pos Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
		}
		if($s_list->no_telpon==''){
			$str_Alert.='<small>No telephone Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
		}
		if($s_list->no_hp==''){
			$str_Alert.='<small>No handphone Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=2">Click,</a></small><br/>';
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
		if(element('alamat_ktp',$s_list)==''){
			$iRemark1=1;
		}
		if(element('propinsi_ktp',$s_list)==''){
			$iRemark2=1;
		}
		if(element('kota_ktp',$s_list)==''){
			$iRemark3=1;
		}

		if(element('domisili_sama',$s_list)!=1){
			if(element('alamat_domisili',$s_list)==''){
				$iRemark4=1;
			}
			if(element('propinsi_domisili',$s_list)==''){
				$iRemark5=1;
			}
			if(element('kota_domisili',$s_list)==''){
				$iRemark6=1;
			}
		}
		
		if(element('kode_pos',$s_list)==''){
			$iRemark7=1;
		}
		if(element('no_telpon',$s_list)==''){
			$iRemark8=1;
		}
		if(element('no_hp',$s_list)==''){
			$iRemark9=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4+$iRemark5+$iRemark6+$iRemark7+$iRemark8+$iRemark9;

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
			"9"=>$iRemark9
			);
	}


}
