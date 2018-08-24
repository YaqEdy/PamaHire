<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Frontend_Controller {

	// http://stackoverflow.com/questions/19706046/how-to-read-an-external-local-json-file-in-javascript

	protected $user_detail_email,$user_detail_ktp;

	public function __construct(){
		parent::__construct();
		$this->load->model(array('User_model'));
	}

	// public function index(){
	// 	$data = array();
	// 	$this->site->view('user', $data);
	// }
	//
  // public function register(){
	// 	$data = array();
	// 	$this->site->view('register', $data);
	// }
	//
	// public function datadiri(){
	// 	$data = array();
	// 	$this->site->view('datadiri', $data);
	// }

	public function pendidikan(){
		$data = array();
		$this->site->view('pendidikan', $data);
	}

	public function login(){
	 $result;
	 $status = "failed";
	 $re = "";
	 $post = $this->input->post(NULL, TRUE);
	 $user_detail_email;$user_detail_ktp;

 		if(isset($post['ktp_email']) ){
 			$user_detail_email = $this->User_model->get_by(array('email' => $post['ktp_email']), 1, NULL, TRUE);
			$user_detail_ktp = $this->User_model->get_by(array('nomor_ktp' => $post['ktp_email']), 1, NULL, TRUE);
 		}

 		// $this->form_validation->set_message('required', '%s kosong, tolong diisi!');

		$this->form_validation->set_rules('ktp_email','No.KTP/Email','trim|callback_email_ktp_check|required');
		$this->form_validation->set_rules('password','Password','trim|callback_password_check|required');

 		// $rules = $this->User_model->rules;
 		// $this->form_validation->set_rules($rules);

		// $recaptcha = $this->input->post('reCAPTCHA');
    // $response = $this->recaptcha->verifyResponse($recaptcha);

		$this->form_validation->set_error_delimiters('', '');
		// if($this->form_validation->run() != false && $response['success'] == true){
		if($this->form_validation->run() != false){
			$status = 'success';
			$login_data = array(
 					'ID' => $user_detail_ktp == null ? $user_detail_email->ID : $user_detail_ktp->ID,
	        'email'  => $user_detail_ktp == null ? $user_detail_email->email : $user_detail_ktp->email,
	        'logged_in' => TRUE,
	        'active' => $user_detail_ktp == null ? $user_detail_email->active : $user_detail_ktp->active,
	        //'last_login' => $this->user_detail->last_login,
	        'group' => $user_detail_ktp == null ? $user_detail_email->group : $user_detail_ktp->group,
	        'ktp' => $user_detail_ktp == null ? $user_detail_email->nomor_ktp : $user_detail_ktp->nomor_ktp,
					'menu' => '',
 			);

			$this->session->set_userdata($login_data);
		}
		// else{
			// if(!isset($response['success']) || $response['success'] != true){
			// 	$re = 'reCAPTCHA wajib diisi.';
			// }else{
			// 	$re = '';
			// }
		// }
		$result = array('status' => $status,
										'pesan'=> array('ktp_email' => form_error('ktp_email'),
																		 'password' => form_error('password'),
																		 'recaptcha1' => $re,
																		 'userdetailktp' => $user_detail_ktp,
																		 'userdetailemail' => $user_detail_email,
																		 'group' => $user_detail_ktp == null ? $user_detail_email->group : $user_detail_ktp->group,
																	 ));
		echo json_encode($result);
  }

	public function logout(){
		$this->session->sess_destroy();
		//delete_cookie('username'); delete_cookie('password');
		redirect(set_url(''));
	}

	public function password_check($str){
		$ktp_email = $this->input->post('ktp_email');
		$pass = $this->input->post('password');
		$user_detail_email = $this->User_model->get_by(array('email' => $ktp_email), 1, NULL, TRUE);
		$user_detail_ktp = $this->User_model->get_by(array('nomor_ktp' => $ktp_email), 1, NULL, TRUE);
		if($pass == ""){
			$this->form_validation->set_message('password_check', 'Password tidak boleh kosong.');
			return FALSE;
		}else{
			if(@$user_detail_email->password != ""){
				if(@$user_detail_email->password == crypt($str,@$user_detail_email->password)){
					return TRUE;
				}else if(@$user_detail_email->password){
					$this->form_validation->set_message('password_check', 'Password Anda salah...');
					return FALSE;
				}
			}else if(@$user_detail_ktp->password != ""){
				if(@$user_detail_ktp->password == crypt($str,@$user_detail_email->password)){
					return TRUE;
				}else if(@$user_detail_ktp->password){
					$this->form_validation->set_message('password_check', 'Password Anda salah...');
					return FALSE;
				}
			}else{
				return TRUE;
			}
		}
	}

	public function email_ktp_check($str){
		$ktp_email = $this->input->post('ktp_email');
		$user_detail_email = $this->User_model->get_by(array('email' => $ktp_email), 1, NULL, TRUE);
		$user_detail_ktp = $this->User_model->get_by(array('nomor_ktp' => $ktp_email), 1, NULL, TRUE);
		if($ktp_email == ""){
			$this->form_validation->set_message('email_ktp_check', 'No.KTP/Email tidak boleh kosong.');
			return FALSE;
		}else{
			if(@$user_detail_email->password != ""){
				return TRUE;
			}else if(@$user_detail_ktp->password != ""){
				return TRUE;
			}else{
				$this->form_validation->set_message('email_ktp_check', 'No.KTP/Email tidak terdaftar.');
				return FALSE;
			}
		}
	}

	public function register_check(){
		$result;
		$status = "failed";
		$re = "";
		// $post = $this->input->post();
		// $pass = $post['password'];
		// $ulangi_pass = $post['ulangi_password'];
		// $no_ktp = $post['nomor_ktp'];
		// $ulangi_no_ktp = $post['ulangi_ktp'];

		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('nomor_ktp','Nomor KTP','trim|required|integer|callback_length_ktp_check|callback_nomor_ktp_check');
		$this->form_validation->set_rules('password','Password','trim|required|callback_length_password_check');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_email_check');
		$this->form_validation->set_rules('jenjang','Jenjang Pendidikan','trim|required');
		// $this->form_validation->set_rules('program_studi','Program Studi','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('ulangi_ktp','Ulangi Nomor KTP','trim|required|callback_length_ktp_check|callback_ulangi_ktp_check|integer');
		$this->form_validation->set_rules('ulangi_password','Ulangi Password','trim|required|callback_length_password_check|callback_ulangi_password_check');
		$this->form_validation->set_rules('nem_ipk','NEM/IPK','trim|required|numeric');

		// $recaptcha = $this->input->post('reCAPTCHA');
    // $response = $this->recaptcha->verifyResponse($recaptcha);

		$this->form_validation->set_error_delimiters('', '');
		// if($this->form_validation->run() != false && $response['success'] == true){
		if($this->form_validation->run() != false){
			$status = 'success';
			// $group = 'user';
			// $post = $this->input->post();
			// //passing post data dari view
			// $activaton_code = bCrypt($post['email'],12);
			// $data = array(
			// 		'ID' => uniqid('',true),
			// 		'nama_lengkap' => $post['nama_lengkap'],
			// 		'nomor_ktp' => $post['nomor_ktp'],
			// 		'group' =>  $group,
			// 		'password' => bCrypt($post['password'],12),
			// 		'email' => $post['email'],
			// 		'jenjang_pendidikan' => $post['jenjang'],
			// 		// 'program_studi' => $post['program_studi'],
			// 		'jurusan' => $post['jurusan'],
			// 		'nem_ipk' => $post['nem_ipk'],
			// 		'activation_code' => $activaton_code,
			// 		'active' => 1
			// 	);
			//
			// 	$this->User_model->insert($data);

				// $this->load->library('email');
				// $config = array();
				// $config['charset'] = 'utf-8';
				// $config['useragent'] = 'Codeigniter';
				// $config['protocol']= "smtp";
				// $config['mailtype']= "html";
				// $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				// $config['smtp_port']= "465";
				// $config['smtp_timeout']= "7";
				// $config['smtp_user']= "semangatcoding@gmail.com"; // isi dengan email kamu
				// $config['smtp_pass']= ""; // isi dengan password kamu
				// $config['crlf']="\r\n";
				// $config['newline']="\r\n";
				// $config['wordwrap'] = TRUE;
				 //memanggil library email dan set konfigurasi untuk pengiriman email

				// $this->email->initialize($config);
				 //konfigurasi pengiriman
				// $this->email->from($config['smtp_user']);
				// $this->email->to($post['email']);
				// $this->email->subject("Verifikasi Akun");
				// $this->email->message(
				//  "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
				//   site_url("register/verification/$activaton_code")
				// );

				// if($this->email->send())
				// {
				//     $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, silahkan cek email kamu");
				// }else
				// {
						// $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, namu gagal mengirim verifikasi email");

				// }



			//
			// echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
		}
		// else{
		// 	if(!isset($response['success']) || $response['success'] != true){
		// 		$re = 'reCAPTCHA wajib diisi.';
		// 	}else{
		// 		$re = '';
		// 	}
		// }
		$result = array('status' => $status,
										'pesan'=> array('nama_lengkap' => form_error('nama_lengkap'),
																		 'nomor_ktp' => form_error('nomor_ktp'),
																		 'password' => form_error('password'),
																		 'email' => form_error('email'),
																		 'jenjang' => form_error('jenjang'),
																		 // 'program_studi' => form_error('program_studi'),
																		 'jurusan' => form_error('jurusan'),
																		 'ulangi_ktp' => form_error('ulangi_ktp'),
																		 'ulangi_password' => form_error('ulangi_password'),
																		 'nem_ipk' => form_error('nem_ipk'),
																		 'recaptcha2' => $re));
		echo json_encode($result);
	}

	public function register_submit(){
		$result;
		$status = "failed";
		$re = "";
		// $post = $this->input->post();
		// $pass = $post['password'];
		// $ulangi_pass = $post['ulangi_password'];
		// $no_ktp = $post['nomor_ktp'];
		// $ulangi_no_ktp = $post['ulangi_ktp'];

		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','trim|required');
		$this->form_validation->set_rules('nomor_ktp','Nomor KTP','trim|required|integer|callback_length_ktp_check|callback_nomor_ktp_check');
		$this->form_validation->set_rules('password','Password','trim|required|callback_length_password_check');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_email_check');
		$this->form_validation->set_rules('jenjang','Jenjang Pendidikan','trim|required');
		// $this->form_validation->set_rules('program_studi','Program Studi','trim|required');
		$this->form_validation->set_rules('jurusan','Jurusan','trim|required');
		$this->form_validation->set_rules('ulangi_ktp','Ulangi Nomor KTP','trim|required|callback_length_ktp_check|callback_ulangi_ktp_check|integer');
		$this->form_validation->set_rules('ulangi_password','Ulangi Password','trim|required|callback_length_password_check|callback_ulangi_password_check');
		$this->form_validation->set_rules('nem_ipk','NEM/IPK','trim|required|numeric');

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() != false ){
			$status = 'success';
			$group = 'user';
			$post = $this->input->post();
			//passing post data dari view
			$activaton_code = bCrypt($post['email'],12);
			$data = array(
					'ID' => uniqid('',true),
					'nama_lengkap' => $post['nama_lengkap'],
					'nomor_ktp' => $post['nomor_ktp'],
					'group' =>  $group,
					'password' => bCrypt($post['password'],12),
					'email' => $post['email'],
					'jenjang_pendidikan' => $post['jenjang'],
					// 'program_studi' => $post['program_studi'],
					'jurusan' => $post['jurusan'],
					'nem_ipk' => $post['nem_ipk'],
					'activation_code' => $activaton_code,
					'active' => 1
				);

				$this->User_model->insert($data);

				// $this->load->library('email');
				// $config = array();
				// $config['charset'] = 'utf-8';
				// $config['useragent'] = 'Codeigniter';
				// $config['protocol']= "smtp";
				// $config['mailtype']= "html";
				// $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
				// $config['smtp_port']= "465";
				// $config['smtp_timeout']= "7";
				// $config['smtp_user']= "semangatcoding@gmail.com"; // isi dengan email kamu
				// $config['smtp_pass']= ""; // isi dengan password kamu
				// $config['crlf']="\r\n";
				// $config['newline']="\r\n";
				// $config['wordwrap'] = TRUE;
				 //memanggil library email dan set konfigurasi untuk pengiriman email

				// $this->email->initialize($config);
				 //konfigurasi pengiriman
				// $this->email->from($config['smtp_user']);
				// $this->email->to($post['email']);
				// $this->email->subject("Verifikasi Akun");
				// $this->email->message(
				//  "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
				//   site_url("register/verification/$activaton_code")
				// );

				// if($this->email->send())
				// {
				//     $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, silahkan cek email kamu");
				// }else
				// {
						// $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, namu gagal mengirim verifikasi email");

				// }



			//
			// echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
		}
		// else{
		// 	if(!isset($response['success']) || $response['success'] != true){
		// 		$re = 'reCAPTCHA wajib diisi.';
		// 	}else{
		// 		$re = '';
		// 	}
		// }
		$result = array('status' => $status,
										'pesan'=> array('nama_lengkap' => form_error('nama_lengkap'),
																		 'nomor_ktp' => form_error('nomor_ktp'),
																		 'password' => form_error('password'),
																		 'email' => form_error('email'),
																		 'jenjang' => form_error('jenjang'),
																		 // 'program_studi' => form_error('program_studi'),
																		 'jurusan' => form_error('jurusan'),
																		 'ulangi_ktp' => form_error('ulangi_ktp'),
																		 'ulangi_password' => form_error('ulangi_password'),
																		 'nem_ipk' => form_error('nem_ipk'),
																		 'recaptcha2' => $re));
		echo json_encode($result);
	}

	public function action($param){
		global $SConfig;
		$result;
		if($param == "tambah"){
			$rules = $this->User_model->rules_register;
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == TRUE) {
					$group = 'user';
					$post = $this->input->post();
					//passing post data dari view
					$activaton_code = bCrypt($post['email'],12);
					$data = array(
							'nama_lengkap' => $post['nama_lengkap'],
							'nomor_ktp' => $post['nomor_ktp'],
							'group' =>  $group,
							'password' => bCrypt($post['password'],12),
							'email' => $post['email'],
							'jenjang_pendidikan' => $post['jenjang'],
							// 'program_studi' => $post['program_studi'],
							'jurusan' => $post['jurusan'],
							'nem_ipk' => $post['nem_ipk'],
							'activation_code' => $activaton_code,
							'active' => 1
						);

						$this->User_model->insert($data);

						// $this->load->library('email');
						// $config = array();
						// $config['charset'] = 'utf-8';
						// $config['useragent'] = 'Codeigniter';
						// $config['protocol']= "smtp";
						// $config['mailtype']= "html";
						// $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
						// $config['smtp_port']= "465";
						// $config['smtp_timeout']= "7";
						// $config['smtp_user']= "semangatcoding@gmail.com"; // isi dengan email kamu
						// $config['smtp_pass']= ""; // isi dengan password kamu
						// $config['crlf']="\r\n";
						// $config['newline']="\r\n";
						// $config['wordwrap'] = TRUE;
				     //memanggil library email dan set konfigurasi untuk pengiriman email

				    // $this->email->initialize($config);
				     //konfigurasi pengiriman
				    // $this->email->from($config['smtp_user']);
				    // $this->email->to($post['email']);
				    // $this->email->subject("Verifikasi Akun");
				    // $this->email->message(
				    //  "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
				    //   site_url("register/verification/$activaton_code")
				    // );

				    // if($this->email->send())
				    // {
				    //     $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, silahkan cek email kamu");
				    // }else
				    // {
								// $result = array('status' => 'success','pesan'=>"Berhasil melakukan registrasi, namu gagal mengirim verifikasi email");

				    // }



					//
			    // echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
			}
		}
    //$result = array('status' => 'success','pesan'=> 'wakwaw');

		$result = array('status' => 'success');
    echo json_encode($result);
	}

	public function email_check($str){
		/* bisa digunakan untuk mengecek ke dalam database nantinya */
		if ($this->User_model->count(array('email' => $str)) > 0){
            $this->form_validation->set_message('email_check', 'Email sudah digunakan, mohon diganti yang lain...');
            return FALSE;
        }
        else{
            return TRUE;
        }
	}

	public function nomor_ktp_check($str){
		/* bisa digunakan untuk mengecek ke dalam database nantinya */
		if ($this->User_model->count(array('nomor_ktp' => $str)) > 0){
        $this->form_validation->set_message('nomor_ktp_check', 'KTP sudah digunakan, mohon diganti yang lain...');
        return FALSE;
    }
    else{
        return TRUE;
    }
	}

	public function length_password_check($str){
		/* bisa digunakan untuk mengecek ke dalam database nantinya */
		if (strlen($str)<7 && $str != "") {
		  $this->form_validation->set_message('length_password_check', '{field} minimum 7 karakter');
			return FALSE;
		}
		else {
		  return TRUE;
		}
	}

	public function length_ktp_check($str){
		/* bisa digunakan untuk mengecek ke dalam database nantinya */
		if (strlen($str)<16 && $str != "") {
			$this->form_validation->set_message('length_ktp_check', 'Panjang {field} salah (seharusnya 16 karakter).');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	public function ulangi_password_check($str){
		$pass = $this->input->post('password');

		if ($str != $pass && $str != "") {
			$this->form_validation->set_message('ulangi_password_check', '{field} yang Anda masukkan salah.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	public function ulangi_ktp_check($str){
		$ktp = $this->input->post('nomor_ktp');

		if ($str != $ktp && $str != "") {
			$this->form_validation->set_message('ulangi_ktp_check', '{field} yang Anda masukkan salah.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}
