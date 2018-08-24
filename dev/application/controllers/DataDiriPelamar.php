<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDiriPelamar extends Frontend_Controller {

	public function __construct(){
		parent::__construct();

		// $this->load->model(array('tbl_m_pelamar'));
		// $this->load->model(array('User_model'));
		// $this->load->model(array('tbl_vw_user_pelamar'));
		// $this->load->model(array('tbl_m_info_kontak_pelamar'));
		// $this->load->model(array('tbl_m_pendidikan_pelamar'));
		// $this->load->model(array('tbl_m_keluarga_pelamar'));
		// $this->load->model(array('tbl_m_pengalaman_pelamar'));
		// $this->load->model(array('tbl_m_berkas_pelamar'));
		// $this->load->model(array('detailDataDiri_model'));
		// $this->load->model(array('tbl_r_provinsi_kota'));

	}

	// public $sPid="04f289d5-3ec5-11e8-a66f-782bcbdbdcb7";
	public $sPid="111AAA222AAA";
	public $sNrp="1234";

	public function index(){
		$_this =& get_instance();

		$user_session = $_this->session->userdata;

		$iSteps=$this->input->get('sSteps');
		if($iSteps>0){
			$iSteps=$this->input->get('sSteps');
		}else{
			$iSteps=0;
		}

		$iLihatCV=$this->input->get('sLihatCV');
		if($iLihatCV>0){
			$iLihatCV=$this->input->get('sLihatCV');
			$iSteps=6;
		}else{
			$iLihatCV=0;
		}
		// 	$_this =& get_instance();

		// $user_session = $_this->session->userdata;

		// if(isset($user_session['logged_in']) && $user_session['logged_in'] == TRUE && $user_session['group'] == 'user'){
		// 			redirect(set_url('jobseeker'));
		// }

		$data = array(
	      'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
	      'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
	      'iSteps' => $iSteps, // javascript recaptcha ditaruh di head
	      'iLihatCV' => $iLihatCV, // javascript recaptcha ditaruh di head
				'iIDs'=> $user_session['ID'],
	      );
		//$this->site->_isHome = TRUE;
		$this->site->view('DataDiriPelamar/index', $data);
	}

	public function ajax_ReadPelamar()
	{
		$iData = $this->tbl_vw_user_pelamar->get_user_pelamar($this->input->post('sID'));
		$iTable = $this->tbl_m_pengalaman_pelamar->tablePengalamanPelamar($this->input->post('sID'),1);
		// $this->exportPdf();

		echo json_encode(array("status" => TRUE,"data"=>$iData,'tblPengalaman'=>$iTable));
	}

	public function read_DDKota()
	{
		$iKotaKab = $this->tbl_r_provinsi_kota->getKotaKab($this->input->post('sProvinsi'));
		echo json_encode($iKotaKab);
	}
	public function read_DDProvinsi()
	{
		$iProvinsi = $this->tbl_r_provinsi_kota->getProvinsi();
		echo json_encode($iProvinsi);
	}
	public function read_DDUniversitas()
	{
		$iUniversitas = $this->tbl_r_universitas->getUniversitas();
		echo json_encode($iUniversitas);
	}
	public function read_DDJurusan()
	{
		$iJurusan = $this->tbl_r_jurusan->getJurusan();
		echo json_encode($iJurusan);
	}


	public function ajax_Upload(){
		$status;
		$remarks;
		$this->load->library('upload', $this->site->media_upload_config());
		$sParam=$_POST['sParam'];
		$pid=$_POST['pid_pelamar'];

		if($sParam=='KTP' || $sParam=='AkteLahir'|| $sParam=='Ijazah'|| $sParam=='Transkrip'){
			$uploadPath='berkas/';
		}
		$fileSize=$_FILES['file']['size'];
		$fileinfo = pathinfo($_FILES['file']['name']);
		$extension = $fileinfo['extension'];

		if($fileSize<=500000 ){
			if ( 0 < $_FILES['file']['error'] ) {
				$status=false;
				$remarks=$_FILES['file']['error'];
			// echo 'Error: ' . $_FILES['file']['error'] . '<br>';
			}
			else {
			//UPLOAD FOTO
				$filefullpath='uploads/'. $uploadPath . uniqid() .'.' .$extension;
				// $filePath=base_url().$filefullpath;
				$filePath=$filefullpath;
				move_uploaded_file($_FILES['file']['tmp_name'], $filefullpath);
			// $this->site->resize_img($filefullpath,450,450,1);
				//SAVE TO DATABASE
				$iCek = $this->tbl_m_berkas_pelamar->count(array('pid_berkas_pelamar' => $_POST['pid_pelamar']));
				if($iCek < 1){
					if($sParam=='KTP'){
						$data = array(
							'pid_berkas_pelamar' => $pid,
							'upload_ktp' => $filePath,
							'create_by' => $this->sNrp,
							'create_date' => date('Y-m-d H:i:s'),
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='AkteLahir'){
						$data = array(
							'pid_berkas_pelamar' => $pid,
							'upload_akte_lahir' => $filePath,
							'create_by' => $this->sNrp,
							'create_date' => date('Y-m-d H:i:s'),
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='Ijazah'){
						$data = array(
							'pid_berkas_pelamar' => $pid,
							'upload_ijazah' => $filePath,
							'create_by' => $this->sNrp,
							'create_date' => date('Y-m-d H:i:s'),
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='Transkrip'){
						$data = array(
							'pid_berkas_pelamar' => $pid,
							'upload_transkrip' => $filePath,
							'create_by' => $this->sNrp,
							'create_date' => date('Y-m-d H:i:s'),
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}

					$this->tbl_m_berkas_pelamar->insert($data);
				}else{
					if($sParam=='KTP'){
						$data = array(
							'upload_ktp' => $filePath,
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='AkteLahir'){
						$data = array(
							'upload_akte_lahir' => $filePath,
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='Ijazah'){
						$data = array(
							'upload_ijazah' => $filePath,
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}else if($sParam=='Transkrip'){
						$data = array(
							'upload_transkrip' => $filePath,
							'last_update_by' => $this->sNrp,
							'last_update_date' => date('Y-m-d H:i:s')
							);
					}
					$this->tbl_m_berkas_pelamar->update($data,array('pid_berkas_pelamar' => $_POST['pid_pelamar']));
				}

				$status=true;
				$remarks='Success.!';
			}
		}else{
			$status=false;
			$filePath='';
			$remarks='Image Maks. 500 kb, Format : JPEG,JPG,PNG .!';
		}
		echo json_encode(array("status" => $status,"Remark"=>$remarks,'path'=>$filePath));
	}

	public function ajax_SaveDataDiri(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_pelamar->validasi($i_list);

		if($iRemark[0]==0){
			$dataUser = array(
				'nama_lengkap' => element('nama_pelamar',$i_list),
				'email' => element('email',$i_list),
				);

			$iCek = $this->tbl_m_pelamar->count(array('pid_pelamar' => element('pid_pelamar',$i_list)));
			if($iCek < 1){
				$data = array(
					'pid_pelamar' => element('pid_pelamar',$i_list),
					'nama_pelamar' => element('nama_pelamar',$i_list),
					'no_ktp' => element('no_ktp',$i_list),
					'email' => element('email',$i_list),
					'tempat_lahir' => element('tempat_lahir',$i_list),
					'tanggal_lahir' => element('tanggal_lahir',$i_list),
					'jenkel' => element('jenkel',$i_list),
					'agama' => element('agama',$i_list),
					'gol_darah' => element('gol_darah',$i_list),
					'status_pernikahan' => element('status_pernikahan',$i_list),
					'create_by' => $this->sNrp,
					'create_date' => date('Y-m-d H:i:s'),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);

				$this->tbl_m_pelamar->insert($data);
				$this->User_model->update($dataUser,array('ID' => element('pid_pelamar',$i_list)));
			}else{
				$data = array(
					'nama_pelamar' => element('nama_pelamar',$i_list),
					'no_ktp' => element('no_ktp',$i_list),
					'email' => element('email',$i_list),
					'tempat_lahir' => element('tempat_lahir',$i_list),
					'tanggal_lahir' => element('tanggal_lahir',$i_list),
					'jenkel' => element('jenkel',$i_list),
					'agama' => element('agama',$i_list),
					'gol_darah' => element('gol_darah',$i_list),
					'status_pernikahan' => element('status_pernikahan',$i_list),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);

				$this->tbl_m_pelamar->update($data,array('pid_pelamar' => element('pid_pelamar',$i_list)));
				$this->User_model->update($dataUser,array('ID' => element('pid_pelamar',$i_list)));
			}
			$iStatus=true;
			$iRemark='Success.!';
		}else{
			$iStatus=false;
		}
		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_UploadProfile(){
		$status;
		$remarks;
		$this->load->library('upload', $this->site->media_upload_config());
		$pid_pelamar=$_POST['pid_pelamar'];

		$fileSize=$_FILES['file']['size'];
		$fileinfo = pathinfo($_FILES['file']['name']);
		$extension = $fileinfo['extension'];

		if($fileSize<=500000){
			if ( 0 < $_FILES['file']['error'] ) {
				$status=false;
				$remarks=$_FILES['file']['error'];
			// echo 'Error: ' . $_FILES['file']['error'] . '<br>';
			}
			else {
			//UPLOAD FOTO
				// $config['allowed_types'] = 'gif|jpg|png|jpeg';
				// $config['max_width']  = '3000';
				// $config['max_height']  = '3000';

				$filefullpath='uploads/profiles/' . $pid_pelamar.'.' .$extension;
				// $filePath=base_url().$filefullpath;
				$filePath=$filefullpath;
				move_uploaded_file($_FILES['file']['tmp_name'], $filefullpath);
				// $this->site->resize_img($filefullpath,512,384,1);

				$iCek = $this->tbl_m_pelamar->count(array('pid_pelamar' => $_POST['pid_pelamar']));

				if($iCek < 1){
					$data = array(
						'pid_pelamar' => $_POST['pid_pelamar'],
						'profil_path' => $filePath,
						'create_by' => $this->sNrp,
						'create_date' => date('Y-m-d H:i:s'),
						'last_update_by' => $this->sNrp,
						'last_update_date' => date('Y-m-d H:i:s')
						);
					$this->tbl_m_pelamar->insert($data);
				}else{
					$data = array(
						'profil_path' => $filePath,
						'last_update_by' => $this->sNrp,
						'last_update_date' => date('Y-m-d H:i:s')
						);
					$this->tbl_m_pelamar->update($data,array('pid_pelamar' => $_POST['pid_pelamar']));
				}
				$status=true;
				$remarks='Success.!';
			}
		}else{
			$status=false;
			$filePath='';
			$remarks='Image Maks. 500 kb, Format : JPEG,JPG,PNG .!';
		}

		echo json_encode(array("status" => $status,"Remark"=>$remarks,'path'=>$filePath));
	}

	public function ajax_SaveInformasiKontak(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_info_kontak_pelamar->validasi($i_list);
		if($iRemark[0]==0){
			$iCek = $this->tbl_m_info_kontak_pelamar->count(array('pid_info_kontak_pelamar' => element('pid_info_kontak_pelamar',$i_list)));

			if(element('domisili_sama',$i_list)==1){
				$ialamat_domisili="";
				$ikota_domisili="";
				$ipropinsi_domisili="";
			}else{
				$ialamat_domisili=element('alamat_domisili',$i_list);
				$ikota_domisili=element('kota_domisili',$i_list);
				$ipropinsi_domisili=element('propinsi_domisili',$i_list);
			}
			if($iCek < 1){
				$data = array(
					'pid_info_kontak_pelamar' => element('pid_info_kontak_pelamar',$i_list),
					'alamat_ktp' => element('alamat_ktp',$i_list),
					'kota_ktp' => element('kota_ktp',$i_list),
					'propinsi_ktp' => element('propinsi_ktp',$i_list),
					'domisili_sama' => element('domisili_sama',$i_list),
					'alamat_domisili' => $ialamat_domisili,
					'kota_domisili' => $ikota_domisili,
					'propinsi_domisili' => $ipropinsi_domisili,
					'kode_pos' => element('kode_pos',$i_list),
					'no_telpon' => element('no_telpon',$i_list),
					'no_hp' => element('no_hp',$i_list),
					'create_by' => $this->sNrp,
					'create_date' => date('Y-m-d H:i:s'),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_info_kontak_pelamar->insert($data);
			}else{
				$data = array(
					'alamat_ktp' => element('alamat_ktp',$i_list),
					'kota_ktp' => element('kota_ktp',$i_list),
					'propinsi_ktp' => element('propinsi_ktp',$i_list),
					'domisili_sama' => element('domisili_sama',$i_list),
					'alamat_domisili' => $ialamat_domisili,
					'kota_domisili' => $ikota_domisili,
					'propinsi_domisili' => $ipropinsi_domisili,
					'kode_pos' => element('kode_pos',$i_list),
					'no_telpon' => element('no_telpon',$i_list),
					'no_hp' => element('no_hp',$i_list),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_info_kontak_pelamar->update($data,array('pid_info_kontak_pelamar' => element('pid_info_kontak_pelamar',$i_list)));
			}
			$iRemark='Success.!';
			$iStatus=true;
		}else
		{
			$iStatus=false;
		}

		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_SavePendidikan(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_pendidikan_pelamar->validasi($i_list);
		if($iRemark[0]==0){
			$iCek = $this->tbl_m_pendidikan_pelamar->count(array('pid_pendidikan_pelamar' => element('pid_pendidikan_pelamar',$i_list)));

			if($iCek < 1){
				$data = array(
					'pid_pendidikan_pelamar' => element('pid_pendidikan_pelamar',$i_list),
					'jenjang_pendidikan' => element('jenjang_pendidikan',$i_list),
					'sekolah_universitas' => element('sekolah_universitas',$i_list),
					'jurusan' => element('jurusan',$i_list),
					'nem_ipk' => element('nem_ipk',$i_list),
					'tahun_masuk' => element('tahun_masuk',$i_list),
					'tahun_lulus' => element('tahun_lulus',$i_list),
					'create_by' => $this->sNrp,
					'create_date' => date('Y-m-d H:i:s'),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_pendidikan_pelamar->insert($data);
			}else{
				$data = array(
					'jenjang_pendidikan' => element('jenjang_pendidikan',$i_list),
					'sekolah_universitas' => element('sekolah_universitas',$i_list),
					'jurusan' => element('jurusan',$i_list),
					'nem_ipk' => element('nem_ipk',$i_list),
					'tahun_masuk' => element('tahun_masuk',$i_list),
					'tahun_lulus' => element('tahun_lulus',$i_list),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_pendidikan_pelamar->update($data,array('pid_pendidikan_pelamar' => element('pid_pendidikan_pelamar',$i_list)));
			}
			$iRemark='Success.!';
			$iStatus=true;
		}else
		{
			$iStatus=false;
		}

		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_SaveBerkasDataDiri(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_berkas_pelamar->validasi($i_list);
		if($iRemark[0]==0){
			$iRemark='Success.!';
			$iStatus=true;
		}else
		{
			$iStatus=false;
		}
		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_SaveDataKeluarga(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_keluarga_pelamar->validasi($i_list);
		if($iRemark[0]==0){
			$iCek = $this->tbl_m_keluarga_pelamar->count(array('pid_keluarga_pelamar' => element('pid_keluarga_pelamar',$i_list)));
			if($iCek < 1){
				$data = array(
					'pid_keluarga_pelamar' => element('pid_keluarga_pelamar',$i_list),
					'nama_lengkap' => element('nama_lengkap',$i_list),
					'jenis_kelamin' => element('jenis_kelamin',$i_list),
					'hubungan_keluarga' => element('hubungan_keluarga',$i_list),
					'tanggal_lahir' => element('tanggal_lahir',$i_list),
					'alamat' => element('alamat',$i_list),
					'no_telp' => element('no_telp',$i_list),
					'pekerjaan' => element('pekerjaan',$i_list),
					'create_by' => $this->sNrp,
					'create_date' => date('Y-m-d H:i:s'),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);

				$this->tbl_m_keluarga_pelamar->insert($data);
			}else{
				$data = array(
					'nama_lengkap' => element('nama_lengkap',$i_list),
					'jenis_kelamin' => element('jenis_kelamin',$i_list),
					'hubungan_keluarga' => element('hubungan_keluarga',$i_list),
					'tanggal_lahir' => element('tanggal_lahir',$i_list),
					'alamat' => element('alamat',$i_list),
					'no_telp' => element('no_telp',$i_list),
					'pekerjaan' => element('pekerjaan',$i_list),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);

				$this->tbl_m_keluarga_pelamar->update($data,array('pid_keluarga_pelamar' => element('pid_keluarga_pelamar',$i_list)));
			}
			$iRemark='Success.!';
			$iStatus=true;
		}else
		{
			$iStatus=false;
		}
		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_SavePengalamanKerja(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iRemark=$this->tbl_m_pengalaman_pelamar->validasi($i_list);
		if($iRemark[0]==0){
			$iCek = $this->tbl_m_pengalaman_pelamar->count(array('pid_pengalaman_pelamar' => element('pid_pengalaman_pelamar',$i_list)));
			if($iCek < 1){
				$data = array(
					'pid_pengalaman_pelamar' => md5(uniqid()),
					'pid_pelamar' => element('pid_pelamar',$i_list),
					'nama_perusahaan' => element('nama_perusahaan',$i_list),
					'level' => element('level',$i_list),
					'status' => element('status',$i_list),
					'jenis_pekerjaan' => element('jenis_pekerjaan',$i_list),
					'posisi' => element('posisi',$i_list),
					'pekerjaan_desc' => element('pekerjaan_desc',$i_list),
					'tahun_masuk' => element('tahun_masuk',$i_list),
					'tahun_keluar' => element('tahun_keluar',$i_list),
					'create_by' => $this->sNrp,
					'create_date' => date('Y-m-d H:i:s'),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_pengalaman_pelamar->insert($data);
			}else{
				$data = array(
					'nama_perusahaan' => element('nama_perusahaan',$i_list),
					'level' => element('level',$i_list),
					'status' => element('status',$i_list),
					'jenis_pekerjaan' => element('jenis_pekerjaan',$i_list),
					'posisi' => element('posisi',$i_list),
					'pekerjaan_desc' => element('pekerjaan_desc',$i_list),
					'tahun_masuk' => element('tahun_masuk',$i_list),
					'tahun_keluar' => element('tahun_keluar',$i_list),
					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_m_pengalaman_pelamar->update($data,array('pid_pengalaman_pelamar' => element('pid_pengalaman_pelamar',$i_list)));
			}
			$iRemark='Success.!';
			$iStatus=true;
		}else
		{
			$iStatus=false;
		}

		$iTable = $this->tbl_m_pengalaman_pelamar->tablePengalamanPelamar(element('pid_pelamar',$i_list),1);
		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark,'tblPengalaman'=>$iTable));
	}
	public function ajax_DeletePengalamanKerja(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$this->tbl_m_pengalaman_pelamar->delete(element('pid_pengalaman_pelamar',$i_list));
		$iTable = $this->tbl_m_pengalaman_pelamar->tablePengalamanPelamar(element('pid_pelamar',$i_list),1);
		echo json_encode(array("status" => TRUE,"Remark"=>"Delete Success.!",'tblPengalaman'=>$iTable));
	}

	public function ajax_Preview(){
		$detail=$this->detailDataDiri_model->detailFormDataDiri($this->input->post('sPID'));
		echo json_encode(array("status" => true,"Remark"=>"Success.!",'detail'=>$detail));
	}

	public function selesai(){
		$this->load->helper('array');
		$sPid=$this->sPid;

		// $i_DataDiri=$this->tbl_m_pelamar->getData($sPid);
		// $i_Pendidikan=$this->tbl_m_pelamar->getData($sPid);
		// $i_BerkasDataDiri=$this->tbl_m_pelamar->getData($sPid);
		// $i_DataKeluarga=$this->tbl_m_pelamar->getData($sPid);
		// $i_PengalamanKerja=$this->tbl_m_pelamar->getData($sPid);

		$i_DataDiri = $this->input->post('sDataDiri');
		$i_InfoKontak = $this->input->post('sInfoKontak');
		$i_Pendidikan = $this->input->post('sPendidikan');
		$i_BerkasDataDiri = $this->input->post('sBerkasDataDiri');
		$i_DataKeluarga = $this->input->post('sDataKeluarga');
		$i_PengalamanKerja = $this->input->post('sPengalamanKerja');

		if($i_DataDiri!=null){
			$iRemark1=$this->tbl_m_pelamar->validasi($i_DataDiri);
		}else{
			$iRemark1="Form Data Diri Harus Di Isi";
		}
		if($i_InfoKontak!=null){
			$iRemark2=$this->tbl_m_info_kontak_pelamar->validasi($i_InfoKontak);
		}else{
			$iRemark2="Form Informasi Kontak Harus Di Isi";
		}
		if($i_Pendidikan!=null){
			$iRemark3=$this->tbl_m_pendidikan_pelamar->validasi($i_Pendidikan);
		}else{
			$iRemark3="Form Pendidikan Harus Di Isi";
		}
		if($i_BerkasDataDiri!=null){
			$iRemark4=$this->tbl_m_berkas_pelamar->validasi($i_BerkasDataDiri);
		}else{
			$iRemark4="Form Berkas Harus Di Isi";
		}
		if($i_DataKeluarga!=null){
			$iRemark5=$this->tbl_m_keluarga_pelamar->validasi($i_DataKeluarga);
		}else{
			$iRemark5="Form Keluarga Harus Di Isi";
		}
		if($i_PengalamanKerja!=null){
			$iRemark6=$this->tbl_m_pengalaman_pelamar->validasi($i_PengalamanKerja);
		}else{
			$iRemark6="Form Pengalaman Kerja Harus Di Isi";
		}

		// if($iRemark1=='' && $iRemark2=='' && $iRemark3=='' && $iRemark4=='' && $iRemark5=='' && $iRemark6==''){
			// redirect('Dashboard');
		// }else{
			// redirect('Dashboard');
		// redirect(base_url());
		// }
		// redirect(set_url('Dashboard'));

		echo json_encode(array("status" => true,"redirect"=>base_url()."Dashboard?sRemark1=".$iRemark1,"Remark1"=>$iRemark1,'Remark2'=>$iRemark2));
	}

	public function exportPdf()
	{
		$sPid=$this->sPid;
		include(APPPATH."third_party/dompdf/autoload.inc.php");

		$dompdf=new Dompdf\Dompdf();

		$iHtml=$this->detailDataDiri_model->detailFormDataDiri($sPid,'pdf');
		// $dompdf->set_base_path(base_url());
		$dompdf->loadHtml($iHtml);
		$dompdf->setPaper('A4','portrait'); //landscape
		$dompdf->render();
		$dompdf->output();
		$dompdf->stream("tes.pdf");
	}

	public function DataDiriPdf()
	{
		$sPid=$this->sPid;
		$data = array(
	      'expPdf' => $this->detailDataDiri_model->detailFormDataDiri($sPid,'pdf') // javascript recaptcha ditaruh di head
	      );
		$this->site->view('DataDiriPelamar/DataDiriPdf', $data);

	}


}
