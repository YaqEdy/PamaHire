<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
    // $this->load->model('tbl_vw_t_blacklist','blacklist');
    $this->load->model('tbl_m_source','m_source');
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
		$this->site->view('source');
	}

  public function ajax_list()
	{
    $btn = '';
		$list = $this->m_source->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $source) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $source->source_code;
			$row[] = $source->source_name;
      $row[] = $source->is_active;
      $row[] = '<a class="btn btn-sm btn-info1" href="javascript:void()" title="Edit" onclick="edit_source('."'".$source->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_source('."'".$source->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_source->count_all(),
						"recordsFiltered" => $this->m_source->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

  public function ajax_edit($pid)
	{
		$data = $this->m_source->get_by_pid($pid);
		echo json_encode($data);
	}

  public function ajax_jurusan()
	{
		$data = $this->jurusan->get_by_education($this->input->post('edu'));
		echo json_encode($data);
	}

  public function ajax_add()
	{
		$result;
		$status = "failed";
		$kode = "";
		$remark_source = "";

		$this->form_validation->set_rules('source_code','Source Code','trim|required');
		$this->form_validation->set_rules('source_name','Source Name','trim|required');
    $check_source = $this->db->get_where('tbl_m_source', array('source_code' => $this->input->post('source_code'),'source_name' => $this->input->post('source_name')))->result();
		$this->form_validation->set_error_delimiters('', '');

		if(count($check_source) > 0){
			$remark_source = "Gagal simpan, data source sudah ada";
		}

		if($this->form_validation->run() != false && $remark_source == ""){
			$status = 'success';
			$pid=date('YmdHisU');

			$data = array(
					'pid' => md5($pid),
					'source_code' => $this->input->post('source_code'),
					'source_name' => $this->input->post('source_name'),
					'is_active' => $this->input->post('is_active'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$insert = $this->m_source->save($data);
		}

		$result = array('status' => $status,
										'pesan'=> array('source_code' => form_error('source_code'),
																		 'source_name' => form_error('source_name'),
																		 'remark_src'=> $remark_source));
		echo json_encode($result);
	}

	public function ajax_update()
	{
		$result;
		$status = "failed";
		$remark_source = "";

		$this->form_validation->set_rules('source_code','Source Code','trim|required');
		$this->form_validation->set_rules('source_name','Source Name','trim|required');
    $check_source = $this->db->get_where('tbl_m_source', array('source_code' => $this->input->post('source_code'),'source_name' => $this->input->post('source_name'),'pid !='=>$this->input->post('pid')))->result();

		if(count($check_source)>0){
			$remark_source = "Gagal simpan, data source sudah ada";
		}
		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_source == ""){
			$status = 'success';
			$data = array(
					'source_code' => $this->input->post('source_code'),
					'source_name' => $this->input->post('source_name'),
					'is_active' => $this->input->post('is_active'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$this->m_source->update(array('pid' => $this->input->post('pid')), $data);
		}

		$result = array('status' => $status,
										'pesan'=> array('source_code' => form_error('source_code'),
																		 'source_name' => form_error('source_name'),
																		 'remark_src' => $remark_source));
		echo json_encode($result);
	}

	public function ajax_delete($pid)
	{
		$this->m_source->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}

}
