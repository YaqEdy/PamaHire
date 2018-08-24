<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeluangKarir extends Frontend_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->library('pagination');
    $this->load->database();


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
    // konfigurasi class pagination
    $config['base_url']=base_url()."PeluangKarir/index";
    $config['total_rows']= $this->db->query("SELECT * FROM tbl_vw_t_peluang_karir WHERE status = 'posted' OR status = 'closed';")->num_rows();
    $config['per_page']=3;
    $config['num_links'] = 2;
    $config['uri_segment']=3;
    //Tambahan untuk styling
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";

    $config['first_link']='< Pertama ';
    $config['last_link']='Terakhir > ';
    $config['next_link']='> ';
    $config['prev_link']='< ';

    $this->pagination->initialize($config);

    // konfigurasi model dan view untuk menampilkan data
    $this->load->model('tbl_vw_t_rekrutmen');
    $data['datarekrutmen']=$this->tbl_vw_t_rekrutmen->getAll($config);
    $this->site->view('peluangkarir', $data);
	}

	public function peluangkarirdetail($pid_rekrutmen,$pid_posisi){
		$this->load->model('tbl_vw_t_rekrutmen');
		$data['datarekrutmen']=$this->tbl_vw_t_rekrutmen->getDetail($pid_rekrutmen,$pid_posisi);
		$this->site->view('peluangkarirdetail',$data);
	}

	public function ajax_kirim_lamaran()
	{
		$result;
		$status = "error";
		$remarks = "Gagal";
		$status_validasi = 0;
		$_this =& get_instance();

		$user_session = $_this->session->userdata;
		$this->form_validation->set_rules('pid_rekrutmen','ID Rekrutmen','trim|required');
		$this->form_validation->set_rules('pid_posisi','ID Posisi','trim|required');


		$sub_lamaran = $this->db->order_by('last_update_date', 'DESC')->get_where('tbl_t_progress_lamaran', array('pid_rekrutmen' => $this->input->post('pid_rekrutmen'),'pid_pelamar' => $user_session['ID']))->row();
		$sub_blacklist = $this->db->get_where('tbl_t_blacklist', array('pid_pelamar' => $user_session['ID']))->row();
		$sub_pelamar = $this->db->get_where('tbl_user', array('ID' => $user_session['ID']))->row();
		// foreach ($sub_posisi->result() as $sub_pos) {
		// $sub_jurusan = $this->db->get_where('tbl_m_jurusan', array('pid' => $sub_pos->pid_jurusan))->row();
		if(isset($sub_blacklist)){
			if($sub_blacklist->status_blacklist == 1){
				$status_validasi = 0;
				$remarks = 'Anda di blacklist';
			}else{
				$status_validasi = 1;
			}
		}else{
			$status_validasi = 1;
		}

		if($status_validasi == 1){
			if(isset($sub_lamaran)){
				if($sub_lamaran->administrasi == null || $sub_lamaran->administrasi == '1'){
					$status_validasi = 0;
					$remarks = 'Anda telah terdaftar di lowongan PAMA';
				}else{
					$status_validasi = 1;
				}
			}else{
				$status_validasi = 1;
			}
		}

		if($status_validasi == 1){
			if(isset($sub_pelamar)){
				$sub_jurusan = $this->db->get_where('tbl_vw_m_posisi_detail', array('pid_posisi' => $this->input->post('pid_posisi'),'jurusan' => $sub_pelamar->jurusan))->row();
				if (isset($sub_jurusan)) {
					if($sub_pelamar->nem_ipk >= $sub_jurusan->min_gpa){
						$status_validasi = 1;
					}else{
						$status_validasi = 0;
						$remarks = 'IPK tidak cukup';
					}
				}else{
					$status_validasi = 0;
					$remarks = 'Jurusan tidak sesuai';
				}
			}else{
				$status_validasi = 0;
				$remarks = 'Anda belum melakukan login';
			}
		}

		if($status_validasi == 1){
			$this->form_validation->set_error_delimiters('', '');
			if($this->form_validation->run() != false ){
				$status = 'success';
				$remarks = 'berhasil';
				$data = array(
						'pid' => uniqid('',true),
						'pid_pelamar' => $user_session['ID'],
						'pid_rekrutmen' => $this->input->post('pid_rekrutmen'),
						'pid_posisi' => $this->input->post('pid_posisi'),
						'created_by'=> 'Abdul',
						'created_date'=> date('Y-m-d H:i:s'),
		        'last_update_by'=> 'Abdul',
		        'last_update_date'=> date('Y-m-d H:i:s')
					);
				$insert = $this->tbl_t_progress_lamaran->insert($data);
			}
		}

		$result = array('status' => $status,
										'pesan'=> $remarks);
		echo json_encode($result);
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

			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_jurusan('."'".$jurusan->pid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_jurusan('."'".$jurusan->pid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

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

		$this->form_validation->set_rules('pendidikan','Pendidikan','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false ){
			$status = 'success';
			$pid=date('YmdHisU');
			$data = array(
					'pid' => md5($pid),
					'kode_jurusan' => md5($pid),
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
																		 ));
		echo json_encode($result);
	}

	public function ajax_update()
	{
    $data = array(
				'kode_jurusan' => $this->input->post('kode_jurusan'),
				'pendidikan' => $this->input->post('pendidikan'),
				'jurusan' => $this->input->post('jurusan'),
        'last_update_by'=> 'Abdul',
        'last_update_date'=> date('Y-m-d H:i:s')
			);
		$this->jurusan->update(array('pid' => $this->input->post('pid')), $data);
		$iremark='Update success';
		echo json_encode(array("status" => TRUE,"remark"=>$iremark));
	}

	public function ajax_delete($pid)
	{
		$this->jurusan->delete_by_pid($pid);
		echo json_encode(array("status" => TRUE));
	}

}
