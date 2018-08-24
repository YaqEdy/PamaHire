<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_keluarga_pelamar extends MY_Model {

	protected $_table_name = 'm_keluarga_pelamar';
	protected $_primary_key = 'pid_keluarga_pelamar';
	protected $_order_by = 'pid_keluarga_pelamar';
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
		if($s_list->nama_lengkap==''){
			$str_Alert.='<small>Nama Lengkap Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->jenis_kelamin==''){
			$str_Alert.='<small>Jenis Kelamin Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->hubungan_keluarga==''){
			$str_Alert.='<small>Hubungan Keluarga Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->tanggal_lahir==''){
			$str_Alert.='<small>Tanggal Lahir Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->alamat==''){
			$str_Alert.='<small>Alamat Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->no_telp==''){
			$str_Alert.='<small>No Telephone Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
		}
		if($s_list->pekerjaan==''){
			$str_Alert.='<small>Pekerjaan Harus Diisi <a href="'.base_url().'DataDiriPelamar?sSteps=5">Click,</a></small><br/>';
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
		if(element('nama_lengkap',$s_list)==''){
			$iRemark1=1;
		}
		if(element('jenis_kelamin',$s_list)==''){
			$iRemark2=1;
		}
		if(element('hubungan_keluarga',$s_list)=='' || element('hubungan_keluarga',$s_list)=='--Select--'){
			$iRemark3=1;
		}
		if(element('tanggal_lahir',$s_list)==''){
			$iRemark4=1;
		}
		if(element('alamat',$s_list)==''){
			$iRemark5=1;
		}
		if(element('no_telp',$s_list)==''){
			$iRemark6=1;
		}
		if(element('pekerjaan',$s_list)==''){
			$iRemark7=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4+$iRemark5+$iRemark6+$iRemark7;

		return array(
			"0"=>$count,
			"1"=>$iRemark1,
			"2"=>$iRemark2,
			"3"=>$iRemark3,
			"4"=>$iRemark4,
			"5"=>$iRemark5,
			"6"=>$iRemark6,
			"7"=>$iRemark7
			);
	}

}
