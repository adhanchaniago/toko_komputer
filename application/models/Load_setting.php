<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Load_setting extends CI_Model
	{
		public function get_admin()
		{
			$this->db->select('*');
			$this->db->from('admin');
			return $this->db->get();

		}

		public function update_username($nama, $username, $password)
		{
			$pass = md5($password);
			$data =  array('nama'=>$nama, 'username'=>$username, 'password'=>$pass);
			return $this->db->update('admin', $data);
		}

		public function edit_setting_img($nama_file)
		{
			$data= array('foto' => $nama_file);
			$this->db->update('admin',$data);
		}

		public function kontak()
		{
			$this->db->select('*');
			$this->db->from('setting');
			return $this->db->get();
		}

		public function edit_tab1($facebook, $instagram, $twitter)
		{
			$data = array('facebook' => $facebook ,
						  'instagram' => $instagram,
						  'twitter'  => $twitter );
			$this->db->update('setting', $data);
		}

		public function edit_tab2($alamat, $google_maps, $hp, $email)
		{
			$data = array('alamat' 		=> $alamat ,
						  'google_maps'	=> $google_maps,
						  'hp' 			=> $hp,
						  'email'		=> $email );
			$this->db->update('setting', $data);
		}

	}