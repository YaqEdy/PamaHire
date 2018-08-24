<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_Rekrutmen extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('t_rekrutmen_model','rekrutmen');
		$this->load->model('tbl_t_rekrutmen_detail','rekrutmen_detail');
		$this->load->model('tbl_vw_t_rekrutmen','vw_rekrutmen');
	}

	public function index(){
		$_this =& get_instance();

		// $user_session = $_this->session->userdata;
    //
		// if(isset($user_session['logged_in']) && $user_session['logged_in'] != TRUE || $user_session['group'] != 'user'){
		// 			redirect(set_url(''));
		// }
		// $data = array();
		//$this->site->is_url_admin();
		$this->session->set_userdata('menu','rekrutmenadmin');
		$this->site->view('t_rekrutmen');
	}

  public function ajax_list()
	{
		$list = $this->vw_rekrutmen->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $vw_rekrutmen) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $vw_rekrutmen->judul_rekrutmen;
			$row[] = $vw_rekrutmen->tipe_rekrutmen;
			$row[] = $vw_rekrutmen->kota_kabupaten;
			$row[] = $vw_rekrutmen->gelombang;
			$row[] = $vw_rekrutmen->bulan.'-'.$vw_rekrutmen->tahun;

			$row[] = '
					<a class="btn btn-sm btn-success1" href="javascript:void()" title="Reposting" onclick="reposting_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-retweet"></i></a>
					<a class="btn btn-sm btn-info1" href="javascript:void()" title="Posting" onclick="posting_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-send"></i> Posting</a>
					<a class="btn btn-sm btn-primary1" href="javascript:void()" title="Edit" onclick="edit_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->vw_rekrutmen->count_all(),
						"recordsFiltered" => $this->vw_rekrutmen->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_posted()
	{
		$list = $this->vw_rekrutmen->get_datatables_posted();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $vw_rekrutmen) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $vw_rekrutmen->judul_rekrutmen;
			$row[] = $vw_rekrutmen->tipe_rekrutmen;
			$row[] = $vw_rekrutmen->kota_kabupaten;
			$row[] = $vw_rekrutmen->gelombang;
			$row[] = $vw_rekrutmen->bulan.'-'.$vw_rekrutmen->tahun;

			$row[] = '
					<a class="btn btn-sm btn-success1" href="javascript:void()" title="Reposting" onclick="reposting_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-retweet"></i></a>
					<a class="btn btn-sm btn-info1" href="javascript:void()" title="Closed" onclick="closed_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-folder-close"></i> Closed</a>
					<a class="btn btn-sm btn-primary1" href="javascript:void()" title="Edit" onclick="edit_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
					<a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->vw_rekrutmen->count_all_posted(),
						"recordsFiltered" => $this->vw_rekrutmen->count_filtered_posted(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function read_lowongan()
	{
		$iJudulLowongan = $this->rekrutmen->getJudulLowongan();
		echo json_encode($iJudulLowongan);
	}

	public function ajax_list_closed()
	{
		$list = $this->vw_rekrutmen->get_datatables_closed();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $vw_rekrutmen) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $vw_rekrutmen->judul_rekrutmen;
			$row[] = $vw_rekrutmen->tipe_rekrutmen;
			$row[] = $vw_rekrutmen->kota_kabupaten;
			$row[] = $vw_rekrutmen->gelombang;
			$row[] = $vw_rekrutmen->bulan.'-'.$vw_rekrutmen->tahun;

			$row[] = '<a class="btn btn-sm btn-success1" href="javascript:void()" title="Reposting" onclick="reposting_rekrutmen('."'".$vw_rekrutmen->pid."'".')"><i class="glyphicon glyphicon-retweet"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->vw_rekrutmen->count_all_closed(),
						"recordsFiltered" => $this->vw_rekrutmen->count_filtered_closed(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_rekrutmen_detail()
	{
		$data = $this->rekrutmen_detail->get_by_selected($this->input->post('pid_rekrutmen'));
		echo json_encode($data);
	}

  public function ajax_edit($pid)
	{
		$data = $this->vw_rekrutmen->get_by_pid($pid);
		echo json_encode($data);
	}

  public function ajax_add()
	{
		$result;
		$status = "failed";
		$remark_rek = "";
		$remark_per = "";
		$pid=date('YmdHisU');

		$this->form_validation->set_rules('pid_source','Source','trim|required');
		$this->form_validation->set_rules('kota_kabupaten','Kota/Kabupaten','trim|required');
		$this->form_validation->set_rules('gelombang','Gelombang','trim|required');
		// $this->form_validation->set_rules('periode_bln','Periode','trim|required');
		// $this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('judul_rekrutmen','Judul Rekrutmen','trim|required');
		$this->form_validation->set_rules('tipe_rekrutmen','Tipe Rekrutmen','trim|required');
		$this->form_validation->set_rules('deskripsi_event','Deskripsi Event','trim|required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','trim|required');
		// $this->form_validation->set_rules('min_gpa','Min. GPA','trim|required');
		$this->form_validation->set_rules('tanggal_selesai','Tanggal Selesai','trim|required');
		$this->form_validation->set_rules('zona_waktu','Jam','trim|required');

		$list_detail = $this->input->post('posisi');

		if(count($list_detail)==0 || $list_detail == null){
			$remark_rek = "Posisi tidak boleh kosong. ";
		}

		if($this->input->post('periode_bln') == "" && $this->input->post('periode_thn') != ""){
			$remark_per = "Periode bulan tidak boleh kosong.";
		}else if($this->input->post('periode_bln') != "" && $this->input->post('periode_thn') == ""){
			$remark_per = "Periode tahun tidak boleh kosong.";
		}else if($this->input->post('periode_bln') == "" && $this->input->post('periode_thn') == ""){
			$remark_per = "Periode tidak boleh kosong.";
		}else{
			$remark_per = "";
		}

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_rek == "" && $remark_per == ""){
			$status = 'success';
			$data = array(
					'pid' => md5($pid),
					'pid_source' => $this->input->post('pid_source'),
					'kota_kabupaten' => $this->input->post('kota_kabupaten'),
					'gelombang' => $this->input->post('gelombang'),
					'periode' => $this->input->post('periode_thn').'-'.$this->input->post('periode_bln'),
					'judul_rekrutmen' => $this->input->post('judul_rekrutmen'),
					'tipe_rekrutmen' => $this->input->post('tipe_rekrutmen'),
					// 'vendor_psikotes' => $this->input->post('vendor_psikotes'),
					// 'vendor_labs' => $this->input->post('vendor_labs'),
					'deskripsi_event' => $this->input->post('deskripsi_event'),
					'tanggal_mulai' => $this->input->post('tanggal_mulai'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					// 'barcode' => $this->input->post('barcode'),
					'zona_waktu' => $this->input->post('zona_waktu'),
					'status' => $this->input->post('status'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$insert = $this->rekrutmen->save($data);

			for ($i=0; $i < count($list_detail); $i++) {
					$data_detail = array(
							'pid' => uniqid('',true),
							'pid_rekrutmen' => md5($pid),
			        'pid_posisi' => $list_detail[$i],
							'created_by'=> 'Abdul',
							'created_date'=> date('Y-m-d H:i:s'),
			        'last_update_by'=> 'Abdul',
			        'last_update_date'=> date('Y-m-d H:i:s')
						);
					$insert_detail = $this->rekrutmen_detail->save($data_detail);
				}
		}
		$iremark='Add success';
		$result = array('status' => $status,
										'pesan'=> array('pid_source' => form_error('pid_source'),
																		'kota_kabupaten' => form_error('kota_kabupaten'),
																		'gelombang' => form_error('gelombang'),
																		'periode' => $remark_per,
																		'judul_rekrutmen' => form_error('judul_rekrutmen'),
																		'tipe_rekrutmen' => form_error('tipe_rekrutmen'),
																		'deskripsi_event' => form_error('deskripsi_event'),
																		'tanggal_mulai' => form_error('tanggal_mulai'),
																		'tanggal_selesai' => form_error('tanggal_selesai'),
																		'zona_waktu' => form_error('zona_waktu'),
																		'posisi' => $remark_rek,
																		 ));
		echo json_encode($result);
	}

	public function ajax_update()
	{
		$result;
		$status = "failed";
		$remark_rek = "";
		$remark_per = "";

		$this->form_validation->set_rules('pid_source','Source','trim|required');
		$this->form_validation->set_rules('kota_kabupaten','Kota/Kabupaten','trim|required');
		$this->form_validation->set_rules('gelombang','Gelombang','trim|required');
		// $this->form_validation->set_rules('periode','Periode','trim|required');
		// $this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('judul_rekrutmen','Judul Rekrutmen','trim|required');
		$this->form_validation->set_rules('tipe_rekrutmen','Tipe Rekrutmen','trim|required');
		$this->form_validation->set_rules('deskripsi_event','Deskripsi Event','trim|required');
		$this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai','trim|required');
		// $this->form_validation->set_rules('min_gpa','Min. GPA','trim|required');
		$this->form_validation->set_rules('tanggal_selesai','Tanggal Selesai','trim|required');
		$this->form_validation->set_rules('zona_waktu','Jam','trim|required');

		$list_detail = $this->input->post('posisi');

		if(count($list_detail)==0 || $list_detail == null){
			$remark_rek = "Posisi tidak boleh kosong. ";
		}

		if($this->input->post('periode_bln') == "" && $this->input->post('periode_thn') != ""){
			$remark_per = "Periode bulan tidak boleh kosong.";
		}else if($this->input->post('periode_bln') != "" && $this->input->post('periode_thn') == ""){
			$remark_per = "Periode tahun tidak boleh kosong.";
		}else if($this->input->post('periode_bln') == "" && $this->input->post('periode_thn') == ""){
			$remark_per = "Periode tidak boleh kosong.";
		}else{
			$remark_per = "";
		}

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_rek == "" && $remark_per == ""){
			$status = 'success';
			$data = array(
					'pid_source' => $this->input->post('pid_source'),
					'kota_kabupaten' => $this->input->post('kota_kabupaten'),
					'gelombang' => $this->input->post('gelombang'),
					'periode' => $this->input->post('periode_thn').'-'.$this->input->post('periode_bln'),
					'judul_rekrutmen' => $this->input->post('judul_rekrutmen'),
					'tipe_rekrutmen' => $this->input->post('tipe_rekrutmen'),
					// 'vendor_psikotes' => $this->input->post('vendor_psikotes'),
					// 'vendor_labs' => $this->input->post('vendor_labs'),
					'deskripsi_event' => $this->input->post('deskripsi_event'),
					'tanggal_mulai' => $this->input->post('tanggal_mulai'),
					'tanggal_selesai' => $this->input->post('tanggal_selesai'),
					//'barcode' => $this->input->post('barcode'),
					'zona_waktu' => $this->input->post('zona_waktu'),
					'status' => $this->input->post('status'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$this->rekrutmen->update(array('pid' => $this->input->post('pid')), $data);

			$list_detail = $this->input->post('posisi');
			if(count($list_detail)>0){
				$this->rekrutmen_detail->delete_by_pid_rek($this->input->post('pid'));
			}
			for ($i=0; $i < count($list_detail); $i++) {
					$data_detail = array(
							'pid' => uniqid('',true),
							'pid_rekrutmen' => $this->input->post('pid'),
			        'pid_posisi' => $list_detail[$i],
							'created_by'=> 'Abdul',
							'created_date'=> date('Y-m-d H:i:s'),
			        'last_update_by'=> 'Abdul',
			        'last_update_date'=> date('Y-m-d H:i:s')
						);
					$insert_detail = $this->rekrutmen_detail->save($data_detail);
				}
		}

		$result = array('status' => $status,
										'pesan'=> array('pid_source' => form_error('pid_source'),
																		'kota_kabupaten' => form_error('kota_kabupaten'),
																		'gelombang' => form_error('gelombang'),
																		'periode' => $remark_per,
																		'judul_rekrutmen' => form_error('judul_rekrutmen'),
																		'tipe_rekrutmen' => form_error('tipe_rekrutmen'),
																		'deskripsi_event' => form_error('deskripsi_event'),
																		'tanggal_mulai' => form_error('tanggal_mulai'),
																		'tanggal_selesai' => form_error('tanggal_selesai'),
																		'zona_waktu' => form_error('zona_waktu'),
																		'posisi' => $remark_rek,
																		 ));
		echo json_encode($result);
	}

	public function ajax_posting()
	{
		$data = array(
				'status' => 'posted',
        'last_update_by'=> 'Abdul',
        'last_update_date'=> date('Y-m-d H:i:s')
			);
		$this->rekrutmen->update(array('pid' => $this->input->post('pid_posting')), $data);
		$iremark='Posting success';
		echo json_encode(array("status" => TRUE,"remark"=>$iremark));
	}

	public function ajax_closed()
	{
		$data = array(
				'status' => 'closed',
        'last_update_by'=> 'Abdul',
        'last_update_date'=> date('Y-m-d H:i:s')
			);
		$this->rekrutmen->update(array('pid' => $this->input->post('pid_closed')), $data);
		$iremark='closed success';
		echo json_encode(array("status" => TRUE,"remark"=>$iremark));
	}

	public function ajax_delete($pid)
	{
		$this->rekrutmen->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}

}
