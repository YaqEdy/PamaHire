<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeleksiAdministrasi extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
	}

	public $sPid="04f289d5-3ec5-11e8-a66f-782bcbdbdcb7";
	public $sNrp="1234";

	public function index(){

		// 	$_this =& get_instance();

		// $user_session = $_this->session->userdata;
		// $this->sNrp=$user_session['ID']; iki
		// $this->sPid=$user_session['ID']; iki
		// if(isset($user_session['logged_in']) && $user_session['logged_in'] == TRUE && $user_session['group'] == 'user'){
		// 			redirect(set_url('jobseeker'));
		// }
				//$this->site->_isHome = TRUE;
		$this->session->set_userdata('menu','seleksi');
		$this->site->view('SeleksiAdministrasi/index');
	}

	public function read_DDSource()
	{
		$iSource = $this->tbl_vw_t_rekrutmen->getSource();
		echo json_encode($iSource);
	}
	public function read_DDPosisi()
	{
		$iPosisi = $this->M_Posisi_model->getPosisi();
		echo json_encode($iPosisi);
	}

	public function ajax_list()
	{
		// $iSteps=$this->input->get('sSource');
		$iSource=$this->input->post('sSource');

		$list = $this->tbl_vw_seleksi_adm->get_datatables($iSource);

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $tbl_vw_seleksi_adm) {
			$checked="";
			if($tbl_vw_seleksi_adm->administrasi==1){$checked='checked';}

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<a class="btn btn-sm btn-primary" href="#" id="btnSelect" data-toggle="modal" data-target="#mdl_Select"><i class="glyphicon glyphicon-search"></i></a>';

			$row[] = '<img id="imgKTP" src="'.$tbl_vw_seleksi_adm->profil_path.'" height="100" width="80">';
			$row[] = $tbl_vw_seleksi_adm->nama_pelamar;
			$row[] = $tbl_vw_seleksi_adm->jenjang_pendidikan;
			$row[] = $tbl_vw_seleksi_adm->jurusan;
			$row[] = $tbl_vw_seleksi_adm->kode_profesi;
			$row[] = $tbl_vw_seleksi_adm->usia;
			$row[] = $tbl_vw_seleksi_adm->status_pernikahan;
			$row[] = $tbl_vw_seleksi_adm->jenkel;
			$row[] = $tbl_vw_seleksi_adm->nem_ipk;
			$row[] = $tbl_vw_seleksi_adm->status;
			if($tbl_vw_seleksi_adm->administrasi==1)
			{
				$row[] = '<a class="btn btn-sm btn-success" href="#" id="btnStatusFinal" data-toggle="modal" data-target="#mdl_StatusFinal">Lulus</a>';
			}
			else
			{
				$row[] = '<a class="btn btn-sm btn-danger" href="#" id="btnStatusFinal" data-toggle="modal" data-target="#mdl_StatusFinal">Tidak Lulus</a>';
			}
			// $row[] = $tbl_vw_seleksi_adm->verifikator;
			$row[] = $this->sNrp;
			$row[] = $tbl_vw_seleksi_adm->last_update_date;
			$row[] = '<input type="checkbox" class="admCheck" id="admCheck'.$tbl_vw_seleksi_adm->pid_pelamar.'" '.$checked.'/>';

			$row[] = $tbl_vw_seleksi_adm->kriteria;

			$row[] = $tbl_vw_seleksi_adm->no_ktp;
			$row[] = $tbl_vw_seleksi_adm->tempat_lahir;
			$row[] = $tbl_vw_seleksi_adm->tanggal_lahir;
			$row[] = $tbl_vw_seleksi_adm->alamat_ktp;
			$row[] = $tbl_vw_seleksi_adm->sekolah_universitas;

			$row[] = $tbl_vw_seleksi_adm->upload_ktp;
			$row[] = $tbl_vw_seleksi_adm->upload_akte_lahir;
			$row[] = $tbl_vw_seleksi_adm->upload_ijazah;
			$row[] = $tbl_vw_seleksi_adm->upload_transkrip;
			$row[] = $tbl_vw_seleksi_adm->position_title;
			$row[] = $tbl_vw_seleksi_adm->rekrutment;
			$row[] = $tbl_vw_seleksi_adm->gelombang;
			$row[] = $tbl_vw_seleksi_adm->pid_pelamar;
			$row[] = $tbl_vw_seleksi_adm->pid_blacklist;
			$row[] = $tbl_vw_seleksi_adm->keterangan_adm;

			$row[] = $tbl_vw_seleksi_adm->status_jenjang;
			$row[] = $tbl_vw_seleksi_adm->status_jurusan;
			$row[] = $tbl_vw_seleksi_adm->status_usia;
			$row[] = $tbl_vw_seleksi_adm->status_jenkel;
			$row[] = $tbl_vw_seleksi_adm->status_status_pernikahan;
			$row[] = $tbl_vw_seleksi_adm->status_ipk;


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->tbl_vw_seleksi_adm->count_all(),
			"recordsFiltered" => $this->tbl_vw_seleksi_adm->count_filtered(),
			"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}


	public function ajax_StatusAdm(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

		$iCek = $this->tbl_t_progress_lamaran->count(array('pid' => element('pid_blacklist',$i_list)));
		if($iCek < 1){
			$data = array(
				'pid' => element('pid_blacklist',$i_list),
				'administrasi' => element('administrasi',$i_list),
				'keterangan_adm' => element('keterangan_adm',$i_list),

				'created_by' => $this->sNrp,
				'created_date' => date('Y-m-d H:i:s'),
				'last_update_by' => $this->sNrp,
				'last_update_date' => date('Y-m-d H:i:s')
				);

			$this->tbl_t_progress_lamaran->insert($data);
		}else{
			$data = array(
			// 'pid_blacklist' => element('pid_blacklist',$i_list),
				'administrasi' => element('administrasi',$i_list),
				'keterangan_adm' => element('keterangan_adm',$i_list),

				'last_update_by' => $this->sNrp,
				'last_update_date' => date('Y-m-d H:i:s')
				);

			$this->tbl_t_progress_lamaran->update($data,array('pid' => element('pid_blacklist',$i_list)));
		}
		if(element('administrasi',$i_list)==1){
			$iRemark='Status OK.!';
		}else{
			$iRemark='Status NOK.!';
		}
		$iStatus=true;

		//MERUBAH STATUS BLACKLIST(CARA PANGGILNYA)
		// $this->tbl_t_progress_lamaran->blacklist($this->sPid,$this->sNrp,1);

		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

	public function ajax_listValidasi()
	{
		// $iSteps=$this->input->get('sSource');
		$iSource=$this->input->post('sSource');

		$list = $this->tbl_vw_validasi_otomatis->get_datatables($iSource);

		$data = array();
		$no = $_POST['start'];
		foreach ($list as $tbl_vw_validasi_otomatis) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<a class="btn btn-sm btn-primary" href="#" id="btnValidasi" data-toggle="modal" data-target="#mdl_validasi"><i class="glyphicon glyphicon-search"></i></a>';

		    $row[] = $tbl_vw_validasi_otomatis->posisi;
		    $row[] = $tbl_vw_validasi_otomatis->aktivasi_usia;
		    $row[] = $tbl_vw_validasi_otomatis->usia_maxs;
		    $row[] = $tbl_vw_validasi_otomatis->detail_ukuran_usia;
		    $row[] = $tbl_vw_validasi_otomatis->aktivasi_jenis_kelamin;
		    $row[] = $tbl_vw_validasi_otomatis->jenis_kelamin;
		    $row[] = $tbl_vw_validasi_otomatis->aktivasi_status;
		    $row[] = $tbl_vw_validasi_otomatis->status;
		    $row[] = $tbl_vw_validasi_otomatis->aktivasi_ipk;
		    $row[] = $tbl_vw_validasi_otomatis->ipk;
		    $row[] = $tbl_vw_validasi_otomatis->aktivasi_jurusan;
		    $row[] = $tbl_vw_validasi_otomatis->jurusan;

		    $row[] = $tbl_vw_validasi_otomatis->pid_source;
			$row[] = $tbl_vw_validasi_otomatis->pid_verifikasi;
		    $row[] = $tbl_vw_validasi_otomatis->pid_posisi;
		    $row[] = $tbl_vw_validasi_otomatis->jenjang;


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->tbl_vw_seleksi_adm->count_all(),
			"recordsFiltered" => $this->tbl_vw_seleksi_adm->count_filtered(),
			"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_SaveAutoValidasi(){
		$this->load->helper('array');
		$i_list = $this->input->post('sTbl');

			if(element('aktivasi_usia',$i_list)!="true"){$iaktivasi_usia=0;}else{$iaktivasi_usia=1;};
			if(element('aktivasi_jenis_kelamin',$i_list)!="true"){$iaktivasi_jenis_kelamin=0;}else{$iaktivasi_jenis_kelamin=1;};
			if(element('aktivasi_status',$i_list)!="true"){$iaktivasi_status=0;}else{$iaktivasi_status=1;};
			if(element('aktivasi_ipk',$i_list)!="true"){$iaktivasi_ipk=0;}else{$iaktivasi_ipk=1;};
			if(element('aktivasi_jurusan',$i_list)!="true"){$iaktivasi_jurusan=0;}else{$iaktivasi_jurusan=1;};
				$data = array(
					'pid_posisi' => element('pid_posisi',$i_list),
					'aktivasi_usia' => $iaktivasi_usia,
					'usia_maxs' => element('usia_maxs',$i_list),
					'detail_ukuran_usia' => element('detail_ukuran_usia',$i_list),
					'aktivasi_jenis_kelamin' => $iaktivasi_jenis_kelamin,
					'jenis_kelamin' => element('jenis_kelamin',$i_list),
					'aktivasi_status' => $iaktivasi_status,
					'status' => element('status',$i_list),
					'aktivasi_ipk' => $iaktivasi_ipk,
					'ipk' => element('ipk',$i_list),
					'aktivasi_jurusan' => $iaktivasi_jurusan,
					'jurusan' => element('jurusan',$i_list),

					'last_update_by' => $this->sNrp,
					'last_update_date' => date('Y-m-d H:i:s')
					);
				$this->tbl_r_verifikasi_auto->update($data,array('pid_verifikasi' => element('pid_verifikasi',$i_list)));

				$this->tbl_t_progress_lamaran->auto_kualifikasi(element('pid_posisi',$i_list));

			$iRemark='Success.!';
			$iStatus=true;

		echo json_encode(array("status" => $iStatus,"Remark"=>$iRemark));
	}

}
