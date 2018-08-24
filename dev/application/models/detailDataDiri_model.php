<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class detailDataDiri_model extends MY_Model {

	protected $_table_name = 'm_berkas_pelamar';
	protected $_primary_key = 'pid_berkas_pelamar';
	protected $_order_by = 'pid_berkas_pelamar';
	protected $_order_by_type = 'DESC';
	function __construct() {
		parent::__construct();
		$this->load->model(array('tbl_m_pengalaman_pelamar'));

	}

	public function detailFormDataDiri($sPid,$sParam=null)
	{
		$iHTML='';

		$iData = $this->tbl_vw_user_pelamar->get_user_pelamar($sPid);
		if($sParam!=null){
			$iHTML.='<link href="'.base_url().'templates/frontend/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">';
			$iHTML.='<style> .detail{font-weight: normal !important; margin-top: -25px !important; margin-left: 175px !important; }</style>';
		}

		$iHTML.='<div class="row"></div>';
		$iHTML.='<div class="col-sm-1"></div>';
		$iHTML.='<div class="col-sm-10">';

		$iHTML.='<div class="panel panel-primary">';
		if($sParam==null){
			$iHTML.='<div class="panel-heading">Profil';
			$iHTML.='</div>';
		}
		if($sParam!=null){
			$iHTML.='<div class="panel-heading">';

			$iHTML.='<img src="templates/frontend/images/logopama.png" height="50" style="margin-top:20px">';
			$iHTML.='<b style="font-size:30px; margin-left:35px;"> PT.Pamapersada Nusantara</b></br>';
			$iHTML.='<small><p style="font-size:12px; margin-left:50px;">Jl.Rawagelam 1 No.9, Jakarta Industrial Estate Pulo Gadung, Jakarta 13930 - Indonesia</p></small>';
			$iHTML.='</div>';
		}
		$iHTML.='<div class="panel-body">';
		
		if($sParam==null){
			$iHTML.='<a href="'.base_url().'DataDiriPelamar/exportPdf" download class="btn btn-warning">Export Pdf</a>';
		}
		$iHTML.='<form class="form-horizontal">';
		$iHTML.='<h4 align="center"><u><b>Data Diri</u></b>';
		$iHTML.='</h4>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Photo';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<img id="pvimgProfile" src="'.$iData->profil_path.'" width="200" height="236" class="control-label detail">';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">No. Ktp';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvno_ktp" for="disabledInput" class="control-label detail">'.$iData->no_ktp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Email';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvemail" for="disabledInput" class="control-label detail">'.$iData->email;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Nama';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvnama" for="disabledInput" class="control-label detail">'.$iData->nama_pelamar;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iJenkel="";
		if($iData->jenkel==1){$iJenkel="Pria";}else if($iData->jenkel==0){$iJenkel="Wanita";}
		$iHTML.='<label id="pvjenkel" for="disabledInput" class="control-label detail">'.$iJenkel;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Tempat Lahir';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvtempat_lahir" for="disabledInput" class="control-label detail">'.$iData->tempat_lahir;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvtanggal_lahir" for="disabledInput" class="control-label detail">'.$iData->tanggal_lahir;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Status';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvstatus" for="disabledInput" class="control-label detail">'.$iData->status_pernikahan;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Agama';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvagama" for="disabledInput" class="control-label detail">'.$iData->agama;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Gol Darah';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvgolDarah" for="disabledInput" class="control-label detail">'.$iData->gol_darah;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';

		$iHTML.='<h4 align="center"><u><b>Informasi Kontak</u></b>';
		$iHTML.='</h4>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Alamat KTP';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvalamatKTP" for="disabledInput" class="control-label detail">'.$iData->alamat_ktp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Kota/Kabupaten KTP';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvkota_ktp" for="disabledInput" class="control-label detail">'.$iData->kota_ktp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Propinsi KTP';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvpropinsi_ktp" for="disabledInput" class="control-label detail">'.$iData->propinsi_ktp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';

		if($iData->domisili_sama!=1){
			$iHTML.='<div class="form-group">';
			$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Alamat Domisili';
			$iHTML.='</label>';
			$iHTML.='<div class="col-sm-7">';
			$iHTML.='<label id="pvalamatDomisili" for="disabledInput" class="control-label detail">'.$iData->alamat_domisili;
			$iHTML.='</label>';
			$iHTML.='</div>';
			$iHTML.='</div>';
			$iHTML.='<div class="form-group">';
			$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Kota Domisili';
			$iHTML.='</label>';
			$iHTML.='<div class="col-sm-7">';
			$iHTML.='<label id="pvkota_domisili" for="disabledInput" class="control-label detail">'.$iData->kota_domisili;
			$iHTML.='</label>';
			$iHTML.='</div>';
			$iHTML.='</div>';
			$iHTML.='<div class="form-group">';
			$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Propinsi Domisili';
			$iHTML.='</label>';
			$iHTML.='<div class="col-sm-7">';
			$iHTML.='<label id="pvpropinsi_domisili" for="disabledInput" class="control-label detail">'.$iData->propinsi_domisili;
			$iHTML.='</label>';
			$iHTML.='</div>';
			$iHTML.='</div>';
		}

		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Kode Pos';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvkodePos" for="disabledInput" class="control-label detail">'.$iData->kode_pos;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">No Telepon';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvnoTelepon" for="disabledInput" class="control-label detail">'.$iData->no_telpon;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">No Handpone';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvnoHp" for="disabledInput" class="control-label detail">'.$iData->no_hp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';

		$iHTML.='<h4 align="center"><u><b>Pendidikan</u></b>';
		$iHTML.='</h4>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Jenjang Pendidikan';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvjenjangPendidikan" for="disabledInput" class="control-label detail">'.$iData->jenjang_pendidikan;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Sekolah/Universitas';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvsekolahUniversitas" for="disabledInput" class="control-label detail">'.$iData->sekolah_universitas;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Jurusan';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvjurusan" for="disabledInput" class="control-label detail">'.$iData->jurusan;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">NEM/IPK';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvnemIPK" for="disabledInput" class="control-label detail">'.$iData->nem_ipk;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Tahun Masuk';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvtahunMasuk" for="disabledInput" class="control-label detail">'.$iData->tahun_masuk_pendidikan;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Tahun Lulus';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-2">';
		$iHTML.='<label id="pvtahunLulus" for="disabledInput" class="control-label detail">'.$iData->tahun_lulus;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';

		$iHTML.='<h4 align="center"><u><b>Berkas dan Data Diri</u></b>';
		$iHTML.='</h4>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">KTP';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<img id="pvimgKTP" src="'.$iData->upload_ktp.'" height="200" class="control-label detail">';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Akte Lahir';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<img id="pvimgAkteLahir" src="'.$iData->upload_akte_lahir.'" height="200" class="control-label detail">';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Ijazah';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<img id="pvimgIjazah" src="'.$iData->upload_ijazah.'" height="200" class="control-label detail">';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Transkip';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<img id="pvimgTranskrip" src="'.$iData->upload_transkrip.'" height="200" class="control-label detail">';
		$iHTML.='</div>';
		$iHTML.='</div>';

		$iHTML.='<h4 align="center"><u><b>Data Keluarga</u></b>';
		$iHTML.='</h4>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Nama Lengkap';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvdkNamaLengkap" for="disabledInput" class="control-label detail">'.$iData->nama_lengkap;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';		
		$iJenis_Kelamin='';
		if($iData->jenis_kelamin==1){$iJenis_Kelamin='Pria';}else if($iData->jenis_kelamin==0){$iJenis_Kelamin="Wanita";}
		$iHTML.='<label id="pvdkJenkel" for="disabledInput" class="control-label detail">'.$iJenis_Kelamin;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Hubungan Keluarga';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-3">';
		$iHTML.='<label id="pvdkHubunganKeluarga" for="disabledInput" class="control-label detail">'.$iData->hubungan_keluarga;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvdkTanggalLahir" for="disabledInput" class="control-label detail">'.$iData->tanggal_lahir_keluarga;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Alamat';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvdkAlamat" for="disabledInput" class="control-label detail">'.$iData->alamat;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">No Telp';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvdkNoTelp" for="disabledInput" class="control-label detail">'.$iData->no_telp;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';
		$iHTML.='<div class="form-group">';
		$iHTML.='<label for="disabledInput" class="col-sm-2 control-label">Pekerjaan';
		$iHTML.='</label>';
		$iHTML.='<div class="col-sm-7">';
		$iHTML.='<label id="pvdkPekerjaan" for="disabledInput" class="control-label detail">'.$iData->pekerjaan;
		$iHTML.='</label>';
		$iHTML.='</div>';
		$iHTML.='</div>';

		// return $this->db->count_all_results();
		$this->db->from('{PRE}m_pengalaman_pelamar');
		$iCek = $this->count(array('pid_pelamar' =>$sPid));
		if($iCek>0){
			$iHTML.='<h4 align="center"><u><b>Pengalaman Kerja</u></b>';
			$iHTML.='</h4>';

			$iHTML .= $this->tbl_m_pengalaman_pelamar->tablePengalamanPelamar($sPid,0);			
		}

		$iHTML.='</form>';
		if($sParam==null){
			$iHTML.='<button class="btn btn-warning" onclick="pvUbah()">Ubah';
			$iHTML.='</button>';
			$iHTML.='<button class="btn btn-success" onclick="pvSave()">Save';
			$iHTML.='</button>';
		}
		$iHTML.='</div>';

		$iHTML.='</div>';
		$iHTML.='</div>';

		$iHTML.='</div>';

		return $iHTML;
	}

}
