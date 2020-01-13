<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	function auth_karyawan($username,$password){
		$query=$this->db->query("SELECT * FROM karyawan WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_manager($username,$password){
		$query=$this->db->query("SELECT * FROM manager WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	function save($username,$password,$alamat,$jabatan){
		$data = array(
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'akses' => $jabatan
		  );
		  if($jabatan==1){
			$this->db->insert('karyawan',$data);
		  }else{
			$this->db->insert('manager',$data);
		  }
		  
	}

}
