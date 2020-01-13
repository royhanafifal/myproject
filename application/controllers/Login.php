<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_karyawan=$this->login_model->auth_karyawan($username,$password);

        if($cek_karyawan->num_rows() > 0){ //jika login sebagai karyawan
						$data=$cek_karyawan->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		            $this->session->set_userdata('akses','1');
								$this->session->set_userdata('ses_id',$data['id_karyawan']);
		            $this->session->set_userdata('ses_nama',$data['username']);
		            redirect(base_url().'product');

        }else{ //jika login sebagai manager
					$cek_manager=$this->login_model->auth_manager($username,$password);
					if($cek_manager->num_rows() > 0){
							$data=$cek_manager->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','2');
							$this->session->set_userdata('ses_id',$data['id_manager']);
							$this->session->set_userdata('ses_nama',$data['username']);
							redirect(base_url().'product/manager_view');
					}else{  // jika username dan password tidak ditemukan atau salah
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect(base_url().'login');
					}
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
		}
		
		function add_user(){
			$this->load->view('v_daftar');
		}

		function simpan_user_baru(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$alamat = $this->input->post('alamat');
			$jabatan = $this->input->post('akses');
    	$this->login_model->save($username,$password,$alamat,$jabatan);
    	redirect('login');
		}

}
