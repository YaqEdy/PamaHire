<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class tbl_m_pengalaman_pelamar extends MY_Model {

	protected $_table_name = 'm_pengalaman_pelamar';
	protected $_primary_key = 'pid_pengalaman_pelamar';
	protected $_order_by = 'pid_pengalaman_pelamar';
	protected $_order_by_type = 'DESC';


	function __construct() {
		parent::__construct();
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
		if(element('nama_perusahaan',$s_list)==''){
			$iRemark1=1;
		}
		if(element('level',$s_list)==''){
			$iRemark2=1;
		}
		if(element('status',$s_list)==''){
			$iRemark3=1;
		}
		if(element('jenis_pekerjaan',$s_list)==''){
			$iRemark4=1;
		}
		if(element('posisi',$s_list)==''){
			$iRemark5=1;
		}
		if(element('pekerjaan_desc',$s_list)==''){
			$iRemark6=1;
		}
		if(element('tahun_masuk',$s_list)==''){
			$iRemark7=1;
		}
		if(element('tahun_keluar',$s_list)==''){
			$iRemark8=1;
		}

		$count=$iRemark1+$iRemark2+$iRemark3+$iRemark4+$iRemark5+$iRemark6+$iRemark7+$iRemark8;

		return array(
			"0"=>$count,
			"1"=>$iRemark1,
			"2"=>$iRemark2,
			"3"=>$iRemark3,
			"4"=>$iRemark4,
			"5"=>$iRemark5,
			"6"=>$iRemark6,
			"7"=>$iRemark7,
			"8"=>$iRemark8
			);
	}

	// function tablePengalamanPelamar($id=NULL){
	// 	return parent::get($id);
	// }

	public function tablePengalamanPelamar($id=NULL,$sParam=NULL){
		$istrHTML='';

		// $iCount = $this->count(array('pid_pelamar' => $id));
		$this->db->select('{PRE}m_pengalaman_pelamar.pid_pengalaman_pelamar,{PRE}m_pengalaman_pelamar.nama_perusahaan,{PRE}m_pengalaman_pelamar.level,{PRE}m_pengalaman_pelamar.status,{PRE}m_pengalaman_pelamar.jenis_pekerjaan,{PRE}m_pengalaman_pelamar.posisi,{PRE}m_pengalaman_pelamar.pekerjaan_desc,{PRE}m_pengalaman_pelamar.tahun_masuk,{PRE}m_pengalaman_pelamar.tahun_keluar ');
		// $iListData=parent::get($id);
		$this->db->from('{PRE}m_pengalaman_pelamar');
		$iListData=$this->db->get()->result();
		$iCek = $this->count(array('pid_pelamar' =>$id));

		if($iCek>0){

			$istrHTML.='<div class="container">';
			$istrHTML.='<div class="row">';
			$istrHTML.='<div class="col-sm-9">';
			$istrHTML.='<div class="table-responsive">';
			$istrHTML.='<table id="gridPengalaman" class="table table-bordered table-hover">';
			$istrHTML.='<thead>';
			$istrHTML.='<tr>';
			$istrHTML.='<th>Nama Perusahaan</th>';
			$istrHTML.='<th>Level</th>';
			$istrHTML.='<th>Status</th>';
			$istrHTML.='<th>Jenis Pekerjaan</th>';
			$istrHTML.='<th>Posisi</th>';
			$istrHTML.='<th>Deskripsi Pekerjaaan</th>';
			$istrHTML.='<th>Thn Masuk</th>';
			$istrHTML.='<th>Thn Keluar</th>';
			if($sParam==1){
				$istrHTML.='<th colspan="2">Action</th>';
			}
			$istrHTML.='</tr>';
			$istrHTML.='</thead>';
			$istrHTML.='<tbody>';

			foreach ($iListData as $row) {
				$istrHTML.='<tr id="'.$row->pid_pengalaman_pelamar.'">';
			// $istrHTML.='<td hidden>'.$row->pid_pengalaman_pelamar.'</td>';
				$istrHTML.='<td>'.$row->nama_perusahaan.'</td>';
				$istrHTML.='<td>'.$row->level.'</td>';
				$istrHTML.='<td>'.$row->status.'</td>';
				$istrHTML.='<td>'.$row->jenis_pekerjaan.'</td>';
				$istrHTML.='<td>'.$row->posisi.'</td>';
				$istrHTML.='<td>'.$row->pekerjaan_desc.'</td>';
				$istrHTML.='<td>'.$row->tahun_masuk.'</td>';
				$istrHTML.='<td>'.$row->tahun_keluar.'</td>';
				if($sParam==1){
					$istrHTML.='<td><button onclick="editPengalaman('.$row->pid_pengalaman_pelamar.')" class="btn btn-warning">Edit</button>';
					$istrHTML.='<button onclick="deletePengalaman('.$row->pid_pengalaman_pelamar.')" class="btn btn-danger">Delete</button></td>';
				}
				$istrHTML.='</tr>';
			}

			$istrHTML.='</tbody>';  
			$istrHTML.='</table>';
			$istrHTML.='</div>';
			$istrHTML.='</div>';
			$istrHTML.='</div>';
			$istrHTML.='</div>';
		}
// $iListData->level
		return $istrHTML;
	}

}
