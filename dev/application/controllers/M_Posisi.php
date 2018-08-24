<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Posisi extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('m_posisi_model','posisi');
		$this->load->model('tbl_m_posisi_detail','posisi_detail');
		$this->load->model('tbl_vw_m_posisi','vw_m_posisi');
		$this->load->model('tbl_vw_m_posisi_detail','vw_m_posisi_detail');
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
		$this->site->view('m_posisi');
	}

	public function read_posisi_rekrutmen()
	{
		$iPosisiDesc = $this->vw_m_posisi->getPosisiDesc();
		echo json_encode($iPosisiDesc);
	}

  public function ajax_list()
	{
		$list = $this->posisi->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $posisi) {
			$no++;
			$row = array();
			$row[] = $no;
			// $row[] = $posisi->pid_rekrutmen;
			$row[] = $posisi->kode_posisi;
			$row[] = $posisi->position_title;
			$row[] = $posisi->employee_type;
			$row[] = $posisi->level;
      $row[] = $posisi->education;
      // $row[] = $posisi->min_gpa;
      $row[] = $posisi->work_location;
      $row[] = $posisi->job_description;

			$row[] = '<a class="btn btn-sm btn-info1" href="javascript:void()" title="Edit" onclick="edit_posisi('."'".$posisi->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_posisi('."'".$posisi->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->posisi->count_all(),
						"recordsFiltered" => $this->posisi->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

  public function ajax_edit($pid)
	{
		$data = $this->posisi->get_by_pid($pid);
		echo json_encode($data);
	}

  public function ajax_add()
	{
		$result;
		$status = "failed";
		$remark_jurusan = "";
		$remark_contract = "";
		$remark_kode = "";
		$pid=date('YmdHisU');
		$this->form_validation->set_rules('kode_posisi','Kode Posisi','trim|required');
		$this->form_validation->set_rules('position_title','Position Title','trim|required');
		$this->form_validation->set_rules('employee_type','Employee Type','trim|required');
		$this->form_validation->set_rules('level','Level','trim|required');
		// $this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('education','Education','trim|required');
		$this->form_validation->set_rules('usia','Usia','trim|required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('status_pernikahan','Status Pernikahan','trim|required');
		// $this->form_validation->set_rules('min_gpa','Min. GPA','trim|required');
		$this->form_validation->set_rules('work_location','Work Location','trim|required');
		$this->form_validation->set_rules('job_description','Job Description','trim|required');

		if(count($this->input->post('jurusan'))>0 && $this->input->post('jurusan') != null){
			$remark_jurusan = "";
		}else{
			$remark_jurusan = "Jurusan tidak boleh kosong.";
		}

		if($this->input->post('employee_type') == 'Contract' && $this->input->post('contract') == null){
			$remark_contract = "Contract tidak boleh kosong.";
		}

		$kode_count = $this->db->get_where('tbl_m_posisi', array('kode_posisi' => $this->input->post('kode_posisi')))->result();
		if(count($kode_count)>0){
			$remark_kode = "Gagal simpan, kode posisi sudah ada";
		}

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_jurusan == "" && $remark_contract == "" && $remark_kode == ""){
			$status = 'success';
			$data = array(
					'pid' => md5($pid),
					'kode_posisi' => $this->input->post('kode_posisi'),
	        'position_title' => $this->input->post('position_title'),
					'employee_type' => $this->input->post('employee_type'),
					'contract' => $this->input->post('contract'),
	        'level' => $this->input->post('level'),
					'jurusan' => $this->input->post('level'),
	        'education' => $this->input->post('education'),
	        // 'min_gpa' => $this->input->post('level'),
					'usia' => $this->input->post('usia'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'status_pernikahan' => $this->input->post('status_pernikahan'),
					'work_location' => $this->input->post('work_location'),
	        'job_description' => $this->input->post('job_description'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$insert = $this->posisi->save($data);
			$list_detail = $this->input->post('jurusan');
			$pid_detail = date('YmdHisU');
			for ($i=0; $i < count($list_detail); $i++) {
				$data_detail = array(
						'pid' => uniqid('',true),
						'pid_posisi' => md5($pid),
		        'pid_jurusan' => $list_detail[$i],
						'min_gpa' => 2.75,
						'created_by'=> 'Abdul',
						'created_date'=> date('Y-m-d H:i:s'),
		        'last_update_by'=> 'Abdul',
		        'last_update_date'=> date('Y-m-d H:i:s')
					);
				$insert_detail = $this->posisi_detail->save($data_detail);
			}
		}

		$result = array('status' => $status,"pid" => md5($pid),
										'pesan'=> array( 'kode_posisi' => $remark_kode != "" ? $remark_kode : form_error('kode_posisi'),
																		 'position_title' => form_error('position_title'),
																		 'employee_type' => form_error('employee_type'),
																		 'level' => form_error('level'),
																		 'education' => form_error('education'),
																		 'usia' => form_error('usia'),
																		 'jenis_kelamin' => form_error('jenis_kelamin'),
																		 'status_pernikahan' => form_error('status_pernikahan'),
																		 'work_location' => form_error('work_location'),
																		 'job_description' => form_error('job_description'),
																		 'jurusan' => $remark_jurusan,
																		 'contract' => $remark_contract
																		 ));
		echo json_encode($result);
	}

	public function ajax_update()
	{
		$result;
		$status = "failed";
		$remark_jurusan = "";
		$remark_contract = "";
		$remark_kode == "";

		$this->form_validation->set_rules('kode_posisi','Kode Posisi','trim|required');
		$this->form_validation->set_rules('position_title','Position Title','trim|required');
		$this->form_validation->set_rules('employee_type','Employee Type','trim|required');
		$this->form_validation->set_rules('level','Level','trim|required');
		// $this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('education','Education','trim|required');
		$this->form_validation->set_rules('usia','Usia','trim|required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('status_pernikahan','Status Pernikahan','trim|required');
		// $this->form_validation->set_rules('min_gpa','Min. GPA','trim|required');
		$this->form_validation->set_rules('work_location','Work Location','trim|required');
		$this->form_validation->set_rules('job_description','Job Description','trim|required');

		if(count($this->input->post('jurusan'))>0 && $this->input->post('jurusan') != null){
			$remark_jurusan = "";
		}else{
			$remark_jurusan = "Jurusan tidak boleh kosong.";
		}

		if($this->input->post('employee_type') == 'Contract' && $this->input->post('contract') == null){
			$remark_contract = "Contract tidak boleh kosong.";
		}

		$kode_count = $this->db->get_where('tbl_m_posisi', array('kode_posisi' => $this->input->post('kode_posisi'),'pid !='=>$this->input->post('pid')))->result();
		if(count($kode_count)>0){
			$remark_kode = "Gagal simpan, kode posisi sudah ada";
		}

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_jurusan == "" && $remark_contract == ""  && $remark_kode == ""){
			$status = 'success';
	    $data = array(
					'kode_posisi' => $this->input->post('kode_posisi'),
	        'position_title' => $this->input->post('position_title'),
					'employee_type' => $this->input->post('employee_type'),
					'contract' => $this->input->post('contract'),
	        'level' => $this->input->post('level'),
					'jurusan' => $this->input->post('level'),
	        'education' => $this->input->post('education'),
	        // 'min_gpa' => $this->input->post('min_gpa'),
					'usia' => $this->input->post('usia'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
	        'work_location' => $this->input->post('work_location'),
					'status_pernikahan' => $this->input->post('status_pernikahan'),
	        'job_description' => $this->input->post('job_description'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$this->posisi->update(array('pid' => $this->input->post('pid')), $data);

			$list_detail = $this->input->post('jurusan');
			$pid_detail = date('YmdHisU');
			for ($i=0; $i < count($list_detail); $i++) {
				if($this->posisi_detail->count_detail($this->input->post('pid'),$list_detail[$i])==0){
					$data_detail = array(
							'pid' => uniqid('',true),
							'pid_posisi' => $this->input->post('pid'),
			        'pid_jurusan' => $list_detail[$i],
							'min_gpa' => 2.75,
							'created_by'=> 'Abdul',
							'created_date'=> date('Y-m-d H:i:s'),
			        'last_update_by'=> 'Abdul',
			        'last_update_date'=> date('Y-m-d H:i:s')
						);
					$insert_detail = $this->posisi_detail->save($data_detail);
				}
			}
			$this->posisi_detail->delete_detail( $this->input->post('pid'),$list_detail);
		}
		$result = array('status' => $status,"pid" => $this->input->post('pid'),
										 'pesan'=> array( 'kode_posisi' => $remark_kode != "" ? $remark_kode : form_error('kode_posisi'),
										 'position_title' => form_error('position_title'),
										 'employee_type' => form_error('employee_type'),
										 'level' => form_error('level'),
										 'education' => form_error('education'),
										 'usia' => form_error('usia'),
										 'jenis_kelamin' => form_error('jenis_kelamin'),
										 'status_pernikahan' => form_error('status_pernikahan'),
										 'work_location' => form_error('work_location'),
										 'job_description' => form_error('job_description'),
										 'jurusan' => $remark_jurusan,
										 'contract' => $remark_contract
																		 ));
		echo json_encode($result);
	}

	public function ajax_delete($pid)
	{
		$this->posisi->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}


//---------------------------------Posisi detail----------------------------------//
public function ajax_select_posisi()
{
	$data = $this->vw_m_posisi_detail->get_by_selected($this->input->post('pid_posisi'));
	echo json_encode($data);
}

public function ajax_list_detail()
{
	$list = $this->vw_m_posisi_detail->get_datatables($this->input->post('pid_posisi'));
	$data = array();
	$no = $_POST['start'];
	foreach ($list as $posisi_detail) {
		$no++;
		$row = array();
		$row[] = $no;
		$row[] = $posisi_detail->jurusan_desc;
		$row[] = $posisi_detail->min_gpa;

		$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_posisi_detail('."'".$posisi_detail->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';

		$data[] = $row;
	}

	$output = array(
					"draw" => $_POST['draw'],
					"recordsTotal" => $this->vw_m_posisi_detail->count_all($this->input->post('pid_posisi')),
					"recordsFiltered" => $this->vw_m_posisi_detail->count_filtered($this->input->post('pid_posisi')),
					"data" => $data,
			);
	//output to json format
	echo json_encode($output);
}

public function ajax_edit_detail($pid)
{
	$data = $this->vw_m_posisi_detail->get_by_pid($pid);
	echo json_encode($data);
}

public function ajax_add_detail()
{
	$pid=date('YmdHisU');
	$data = array(
			'pid' => md5($pid),
			'pid_posisi' => $this->input->post('pid_posisi'),
			'pid_jurusan' => $this->input->post('pid_jurusan'),
			'min_gpa' => $this->input->post('min_gpa'),
			'created_by'=> 'Abdul',
			'created_date'=> date('Y-m-d H:i:s'),
			'last_update_by'=> 'Abdul',
			'last_update_date'=> date('Y-m-d H:i:s')
		);
	$insert = $this->posisi_detail->save($data);
	$iremark='Add success';
	echo json_encode(array("status" => TRUE, "remark"=>$iremark));
}

public function ajax_update_detail()
{
	$data = array(
			'min_gpa' => $this->input->post('min_gpa'),
			'last_update_by'=> 'Abdul',
			'last_update_date'=> date('Y-m-d H:i:s')
		);
	$this->posisi_detail->update(array('pid' => $this->input->post('pid')), $data);
	$iremark='Update success';
	echo json_encode(array("status" => TRUE,"remark"=>$iremark));
}

public function ajax_delete_detail($pid)
{
	$this->posisi->delete_by_pid($pid);
	echo json_encode(array("status" => TRUE));
}
}
