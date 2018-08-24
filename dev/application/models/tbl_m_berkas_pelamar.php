<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_berkas_pelamar extends MY_Model {

	protected $_table_name = 'm_berkas_pelamar';
	protected $_primary_key = 'pid_berkas_pelamar';
	protected $_order_by = 'pid_berkas_pelamar';
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
		if($s_list->upload_ktp==base_url().'null'){
			$str_Alert.='<small>Ktp harus di unggah <a href="'.base_url().'DataDiriPelamar?sSteps=4">Click,</a></small><br/>';
		}
		if($s_list->upload_akte_lahir==base_url().'null'){
			$str_Alert.='<small>Akte Lahir harus di unggah <a href="'.base_url().'DataDiriPelamar?sSteps=4">Click,</a></small><br/>';
		}
		if($s_list->upload_ijazah==base_url().'null'){
			$str_Alert.='<small>Ijazah harus di unggah <a href="'.base_url().'DataDiriPelamar?sSteps=4">Click,</a></small><br/>';
		}
		if($s_list->upload_transkrip==base_url().'null'){
			$str_Alert.='<small>Transkrip harus di unggah <a href="'.base_url().'DataDiriPelamar?sSteps=4">Click,</a></small><br/>';
		}

		return $str_Alert;
	}

	function validasi($s_list){
		$iRemark1=0;
		$iRemark2=0;
		$iRemark3=0;
		$iRemark4=0;

		if(element('upload_ktp',$s_list)==base_url().'null'){
			$iRemark1=1;
		}
		if(element('upload_akte_lahir',$s_list)==base_url().'null'){
			$iRemark2=1;
		}
		if(element('upload_ijazah',$s_list)==base_url().'null'){
			$iRemark3=1;
		}
		if(element('upload_transkrip',$s_list)==base_url().'null'){
			$iRemark4=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4;

		return array(
			"0"=>$count,
			"1"=>$iRemark1,
			"2"=>$iRemark2,
			"3"=>$iRemark3,
			"4"=>$iRemark4
			);
	}

}
