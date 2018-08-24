<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
    // $this->load->model('tbl_vw_t_blacklist','blacklist');
    $this->load->model('tbl_m_position','m_position');
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
		$this->site->view('position');
	}

  public function ajax_list()
	{
    $btn = '';
		$list = $this->m_position->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $position) {
			$no++;
			$row = array();
			$row[] = $no;
      $row[] = $position->division_code;
			$row[] = $position->position_code;
			$row[] = $position->position_desc;
      $row[] = $position->is_active;
      $row[] = '<a class="btn btn-sm btn-info1" href="javascript:void()" title="Edit" onclick="edit_position('."'".$position->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_position('."'".$position->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_position->count_all(),
						"recordsFiltered" => $this->m_position->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

  public function ajax_edit($pid)
	{
		$data = $this->m_position->get_by_pid($pid);
		echo json_encode($data);
	}

  public function ajax_add()
	{
		$result;
		$status = "failed";
		$kode = "";
		$remark_position = "";

		$this->form_validation->set_rules('division_code','Division Code','trim|required');
		$this->form_validation->set_rules('position_code','Position Code','trim|required');
    $this->form_validation->set_rules('position_desc','Position Desc','trim|required');
    $check_position = $this->db->get_where('tbl_m_position', array('division_code' => $this->input->post('division_code'), 'position_code' => $this->input->post('position_code'),'position_desc' => $this->input->post('position_desc')))->result();
		$this->form_validation->set_error_delimiters('', '');

		if(count($check_position) > 0){
			$remark_position = "Gagal simpan, data position sudah ada";
		}

		if($this->form_validation->run() != false && $remark_position == ""){
			$status = 'success';
			$pid=date('YmdHisU');

			$data = array(
					'pid' => md5($pid),
					'division_code' => $this->input->post('division_code'),
					'position_code' => $this->input->post('position_code'),
          'position_desc' => $this->input->post('position_desc'),
					'is_active' => $this->input->post('is_active'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$insert = $this->m_position->save($data);
		}

		$result = array('status' => $status,
										'pesan'=> array('division_code' => form_error('source_code'),
																		 'position_code' => form_error('position_code'),
                                     'position_desc' => form_error('position_desc'),
																		 'remark_pos'=> $remark_position));
		echo json_encode($result);
	}

	public function ajax_update()
	{
		$result;
		$status = "failed";
		$remark_position = "";

    $this->form_validation->set_rules('division_code','Division Code','trim|required');
		$this->form_validation->set_rules('position_code','Position Code','trim|required');
    $this->form_validation->set_rules('position_desc','Position Desc','trim|required');
    $check_position = $this->db->get_where('tbl_m_position', array('division_code' => $this->input->post('division_code'), 'position_code' => $this->input->post('position_code'),'position_desc' => $this->input->post('position_desc'),'pid !='=>$this->input->post('pid')))->result();

		if(count($check_position)>0){
			$remark_position = "Gagal simpan, data source sudah ada";
		}

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_position == ""){
			$status = 'success';
			$data = array(
          'division_code' => $this->input->post('division_code'),
          'position_code' => $this->input->post('position_code'),
          'position_desc' => $this->input->post('position_desc'),
          'is_active' => $this->input->post('is_active'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$this->m_position->update(array('pid' => $this->input->post('pid')), $data);
		}

		$result = array('status' => $status,
                    'pesan'=> array('division_code' => form_error('source_code'),
                                     'position_code' => form_error('position_code'),
                                     'position_desc' => form_error('position_desc'),
                                     'remark_pos'=> $remark_position));
		echo json_encode($result);
	}

	public function ajax_delete($pid)
	{
		$this->m_source->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}

}
