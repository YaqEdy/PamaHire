<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jurusan extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('m_jurusan_model','jurusan');
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
		$this->site->view('m_jurusan');
	}

  public function ajax_list()
	{
		$list = $this->jurusan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $jurusan) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $jurusan->kode_jurusan;
			$row[] = $jurusan->pendidikan;
			$row[] = $jurusan->jurusan;

			$row[] = '<a class="btn btn-sm btn-info1" href="javascript:void()" title="Edit" onclick="edit_jurusan('."'".$jurusan->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger1" href="javascript:void()" title="Hapus" onclick="delete_jurusan('."'".$jurusan->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->jurusan->count_all(),
						"recordsFiltered" => $this->jurusan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

  public function ajax_edit($pid)
	{
		$data = $this->jurusan->get_by_pid($pid);
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
		$remark_jurusan = "";

		$this->form_validation->set_rules('pendidikan','Pendidikan','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
    $check_jurusan = $this->db->get_where('tbl_m_jurusan', array('pendidikan' => $this->input->post('pendidikan'),'jurusan' => $this->input->post('jurusan')))->result();
		$this->form_validation->set_error_delimiters('', '');

		if(count($check_jurusan) > 0){
			$remark_jurusan = "Gagal simpan, data jurusan sudah ada";
		}

		if($this->form_validation->run() != false && $remark_jurusan == ""){
			$status = 'success';
			$pid=date('YmdHisU');

			$kode_count = $this->db->get_where('tbl_m_jurusan', array('pendidikan' => $this->input->post('pendidikan')))->result();

			if(count($kode_count)>0){
				$kode = $this->input->post('pendidikan').'('.substr('00000'.(string)(count($kode_count)+1),-5).')';
			}else{
				$kode = $this->input->post('pendidikan').'(00001)';
			}

			$data = array(
					'pid' => md5($pid),
					'kode_jurusan' => $kode,
					'pendidikan' => $this->input->post('pendidikan'),
					'jurusan' => $this->input->post('jurusan'),
					'created_by'=> 'Abdul',
					'created_date'=> date('Y-m-d H:i:s'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$insert = $this->jurusan->save($data);
		}

		$result = array('status' => $status,
										'pesan'=> array('pendidikan' => form_error('pendidikan'),
																		 'jurusan' => form_error('jurusan'),
																		 'remark_jrs'=> $remark_jurusan));
		echo json_encode($result);
	}

	public function ajax_update()
	{
		$result;
		$status = "failed";
		$remark_jrs = "";

		$this->form_validation->set_rules('pendidikan','Pendidikan','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$kode_count = $this->db->get_where('tbl_m_jurusan', array('pendidikan' => $this->input->post('pendidikan'),'jurusan' => $this->input->post('jurusan'),'pid !='=>$this->input->post('pid')))->result();
		if(count($kode_count)>0){
			$remark_jrs = "Gagal simpan, data jurusan sudah ada";
		}
		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false && $remark_jrs == ""){
			$status = 'success';
			$data = array(
					'pendidikan' => $this->input->post('pendidikan'),
					'jurusan' => $this->input->post('jurusan'),
	        'last_update_by'=> 'Abdul',
	        'last_update_date'=> date('Y-m-d H:i:s')
				);
			$this->jurusan->update(array('pid' => $this->input->post('pid')), $data);
		}

		$result = array('status' => $status,
										'pesan'=> array('pendidikan' => form_error('pendidikan'),
																		 'jurusan' => form_error('jurusan'),
																		 'remark_jrs' => $remark_jrs));
		echo json_encode($result);
	}

	public function ajax_delete($pid)
	{
		$this->jurusan->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}

}
