<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blacklist extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->database();
    $this->load->model('tbl_vw_t_blacklist','blacklist');
    $this->load->model('tbl_t_blacklist','t_blacklist');
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
    $this->session->set_userdata('menu','blacklist');
		$this->site->view('blacklist');
	}

  public function ajax_list()
	{
    $btn = '';
		$list = $this->blacklist->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $blacklist) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $blacklist->nomor_ktp;
			$row[] = $blacklist->nama_lengkap;
      $row[] = $blacklist->jenjang_pendidikan;
			$row[] = $blacklist->jurusan;
      $row[] = $blacklist->tanggal_blacklist;
      $row[] = $blacklist->lama_blacklist;
      $row[] = $blacklist->status_desc;
      $row[] = $blacklist->last_update_by;
      if($blacklist->status_blacklist == '1'){
        $btn = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit('."'".$blacklist->ID."'".')"><i class="glyphicon glyphicon-pencil"></i> edit</a>
        <a class="btn btn-sm btn-info" href="javascript:void()" title="Edit" onclick="unblacklist('."'".$blacklist->ID."'".')"><i class="glyphicon glyphicon-ok-circle"></i> unblacklist</a>';
      }else{
        $btn = '<a class="btn btn-sm btn-danger" href="javascript:void()" title="Blacklist" onclick="blacklist('."'".$blacklist->ID."'".')"><i class="glyphicon glyphicon-ban-circle"></i> blacklist</a>';
      }
      $row[] = $btn;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->blacklist->count_all(),
						"recordsFiltered" => $this->blacklist->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

  public function ajax_blacklist($pid)
	{
		$data = $this->blacklist->get_by_pid($pid);
		echo json_encode($data);
	}

  public function blacklist()
	{
		$result;
		$status = "failed";
    // $this->form_validation->set_rules('pid_pelamar','ID','trim|required');
    $this->form_validation->set_rules('tanggal_blacklist','Tanggal Blacklist','trim|required');
		$this->form_validation->set_rules('nomor_ktp','Nomor KTP','trim|required');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','trim|required');
    $this->form_validation->set_rules('lama_blacklist','Lama Blacklist','trim|required');
		$this->form_validation->set_error_delimiters('', '');

		if($this->form_validation->run() != false ){
			$status = 'success';
			$pid=date('YmdHisU');
      $sub_blacklist = $this->db->get_where('tbl_t_blacklist', array('pid_pelamar' => $this->input->post('pid_pelamar')))->row();
      if(!isset($sub_blacklist)){
        $data = array(
  					'pid' => md5($pid),
  					'pid_pelamar' => $this->input->post('pid_pelamar'),
            'tanggal_blacklist' => $this->input->post('tanggal_blacklist'),
  					'lama_blacklist' => $this->input->post('lama_blacklist'),
  					'status_blacklist' => '1',
  					'created_by'=> 'Abdul',
  					'created_date'=> date('Y-m-d H:i:s'),
  	        'last_update_by'=> 'Abdul',
  	        'last_update_date'=> date('Y-m-d H:i:s')
  				);
  			$insert = $this->t_blacklist->save($data);
      }else{
        $data = array(
            'tanggal_blacklist' => $this->input->post('tanggal_blacklist'),
  					'lama_blacklist' => $this->input->post('lama_blacklist'),
  					'status_blacklist' => '1',
  					'created_by'=> 'Abdul',
  					'created_date'=> date('Y-m-d H:i:s'),
  	        'last_update_by'=> 'Abdul',
  	        'last_update_date'=> date('Y-m-d H:i:s')
  				);
          $this->t_blacklist->update(array('pid_pelamar' => $this->input->post('pid_pelamar')), $data);
      }

		}

		$result = array('status' => $status,
										'pesan'=> array('nomor_ktp' => form_error('nomor_ktp'),
																		 'nama_lengkap' => form_error('nama_lengkap'),
                                     'lama_blacklist' => form_error('lama_blacklist'),
																		 ));
		echo json_encode($result);
	}

	public function unblacklist()
	{
    $result;
		$status = "failed";

    $this->form_validation->set_rules('pid_pelamar','ID','trim|required');
    if($this->form_validation->run() != false ){
      $status = 'success';
      $data = array(
          'tanggal_blacklist' => null,
  				'lama_blacklist' => 0,
  				'status_blacklist' => '0',
          'last_update_by'=> 'Abdul',
          'last_update_date'=> date('Y-m-d H:i:s')
  			);
  		$this->t_blacklist->update(array('pid_pelamar' => $this->input->post('pid_pelamar')), $data);
    }

    $result = array('status' => $status,
										'pesan'=> array('pid_pelamar' => form_error('pid_pelamar')));
		echo json_encode($result);
	}

  public function ajax_update()
	{
    $result;
		$status = "failed";

    $this->form_validation->set_rules('pid_pelamar','ID','trim|required');
    if($this->form_validation->run() != false ){
      $status = 'success';
      $data = array(
          'tanggal_blacklist' => $this->input->post('tanggal_blacklist'),
  				'lama_blacklist' => $this->input->post('lama_blacklist'),
          'last_update_by'=> 'Abdul',
          'last_update_date'=> date('Y-m-d H:i:s')
  			);
  		$this->t_blacklist->update(array('pid_pelamar' => $this->input->post('pid_pelamar')), $data);
    }

    $result = array('status' => $status,
										'pesan'=> array('pid_pelamar' => form_error('pid_pelamar')));
		echo json_encode($result);
	}
	// public function ajax_delete($pid)
	// {
	// 	$this->jurusan->delete_by_pid($pid);
	// 	echo json_encode(array("status" => TRUE));
	// }

}
