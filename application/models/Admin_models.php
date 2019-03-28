<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Admin_models extends CI_Model
	{
		public function getlogin_admin($username, $password)
		{
			$password 	= md5($password);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('admin');
			if($querry->num_rows()>0)
				{
					foreach ($querry->result() as $row) 
					{
						$sess = array(	'username' 	=> $row->username,
									  	'password' 	=> $row->password,										
									);
						$this->session->set_userdata($sess);
						$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Sukses !</strong> Berhasil Login !!
                	</div>');
						redirect('admin/home');
					}
				}else 
					{
						$this->session->set_flashdata('info', 'username dan password salah');
						redirect('home/login');
					} 

		}
	
		// dashboard
		public function j_katagori()
		{
			$query = $this->db->query('SELECT * FROM t_katagori');
			$total = $query->num_rows();
			return $total;
		}

		public function j_sub_katagori()
		{
			$query = $this->db->query('SELECT * FROM t_sub_katagori');
			$total = $query->num_rows();
			return $total;
		}

		public function j_product()
		{
			$query = $this->db->query('SELECT * FROM t_product');
			$total = $query->num_rows();
			return $total;

		}

		// halaman pendaftar

		public function upload_file($nama_file)
		{
				$this->load->library('upload'); 
		
				$config['upload_path'] 		= './excel/';
				$config['allowed_types'] 	= 'xlsx|xls';
				$config['max_size']			= '2048';
				$config['overwrite'] 		= true;
				$config['file_name'] 		= $nama_file;
			
				$this->upload->initialize($config); 
				if($this->upload->do_upload('file')){ 
				
					$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
					return $return;
				}else{
					
					$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());

					return $return;
				}
		}

		// master katagori
		public function list_katagori()
		{
			$this->db->select('*');
			$this->db->from('t_katagori');
			return $this->db->get();
		}

		public function add_katagori($nama_katagori)
		{
			$data = array('nama_katagori'=> $nama_katagori );
			$this->db->insert('t_katagori',$data);
		}

		public function edit_katagori($nama_katagori,$id)
		{
			$data = array('nama_katagori'=> $nama_katagori );
			$this->db->where('id', $id);
			$this->db->update('t_katagori', $data);
		}

		public function delete_katagori($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('t_katagori');
		}
		// end

		// master sub katagori

		public function list_sub_katagori()
		{
			$this->db->select('a.id ,a.id_katagori, a.nama_sub as nama ,b.nama_katagori as katagori');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->from('t_sub_katagori a');
			return $this->db->get();
		}

		public function v_edit_sub($id)
		{
			$this->db->select('a.id ,a.id_katagori, a.nama_sub as nama ,b.nama_katagori as katagori');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->from('t_sub_katagori a');
			$this->db->where('a.id', $id);
			return $this->db->get();
		}

		public function add_sub_katagori($id_katagori,$nama_sub)
		{
			$data = array('id_katagori' => $id_katagori ,'nama_sub'=>$nama_sub );
			$this->db->insert('t_sub_katagori',$data);

		}

		public function edit_sub_katagori($id_katagori,$nama_sub, $id)
		{
			$data = array('id_katagori' => $id_katagori ,'nama_sub'=>$nama_sub );
			$this->db->where('id', $id);
			$this->db->update('t_sub_katagori',$data);

		}

		public function delete_sub_katagori($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('t_sub_katagori');
		}

		// end

		// master barang
		public function list_product()
		{
			$this->db->select('a.id ,a.id_katagori, a.spesifikasi, a.id_sub_katagori, a.grouping ,a.nama_product, a.harga, a.notes, b.nama_katagori as katagori, c.nama_sub as sub_katagori, d.foto, d.desc as deskripsi');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->join('t_sub_katagori c','a.id_sub_katagori = c.id','left' );
			$this->db->join('t_product_des d','a.id = d.id_product','left');
			$this->db->from('t_product a');
			return $this->db->get();
		}

		public function getsub($id_katagori)
		{
			$sql="SELECT * FROM t_sub_katagori WHERE id_katagori={$id_katagori} ORDER BY nama_sub";
			  $query=$this->db->query($sql);
		    return $query->result();
		}

		public function insert_multiple_product($data)
		{
			$this->db->insert_batch('t_product', $data);
		}

		public function add_product($id_katagori,$sub_katagori,$grouping,$nama_product,$harga,$notes, $spesifikasi)
		{
			$data = array(	'id_katagori'	 	=>$id_katagori ,
							'id_sub_katagori'	=>$sub_katagori,
							'grouping'			=>$grouping,
							'nama_product'		=>$nama_product,
							'harga'				=>$harga,
							'notes'				=>$notes,
							'spesifikasi' 		=>$spesifikasi );
			$this->db->insert('t_product', $data);
		}

		public function delete_product($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('t_product');
		}

		public function edit_list_product($id)
		{
			$this->db->select('a.id ,a.id_katagori,a.spesifikasi, a.id_sub_katagori, a.grouping ,a.nama_product, a.harga, a.notes, b.nama_katagori as katagori,b.id as id_katagori_1,c.id as id_sub_katagori_1, c.nama_sub as sub_katagori, d.foto, d.desc as deskripsi, d.id as id_dsc');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->join('t_sub_katagori c','a.id_sub_katagori = c.id','left' );
			$this->db->join('t_product_des d','a.id = d.id_product','left');
			$this->db->where('a.id', $id);
			$this->db->from('t_product a');
			return $this->db->get();
		}

		

		public function edit_product1($id_katagori,$sub_katagori,$grouping,$nama_product,$harga,$notes,$spesifikasi,$id)
		{
			$data = array(	'id_katagori' 		=>$id_katagori ,
								'id_sub_katagori'	=>$sub_katagori ,
								'grouping' 			=>$grouping ,
								'nama_product' 		=>$nama_product ,
								'harga' 			=>$harga ,
								'notes' 			=>$notes ,
								'spesifikasi' 		=>$spesifikasi
							);
				$this->db->where('id',$id);
				$this->db->update('t_product',$data);
		}

		public function edit_product2($id_dsc,$desc)
		{
			$data = array('desc' =>$desc);
			$this->db->where('id',$id_dsc);
			$this->db->update('t_product_des',$data);
		}

		public function edit_product3($nama_file,$id_dsc)
		{
			$data = array('foto' =>$nama_file);
			$this->db->where('id',$id_dsc);
			$this->db->update('t_product_des',$data);

		}

		public function add_product_desc($id_product,$desc)
		{
			$data = array('desc' =>$desc, 'id_product'=>$id_product);
			$this->db->insert('t_product_des',$data);
		}

		public function add_product_foto($nama_file,$id_product, $desc)
		{
			$data = array('foto' =>$nama_file,'id_product'=>$id_product,'desc'=>$desc);
			$this->db->insert('t_product_des',$data);
		}

		public function edit_cara_order($desc)
		{
			$data = array('cara_order' =>$desc);
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function ganti_logo($nama_file)
		{
			$data = array('logo' =>$nama_file);
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function edit_contact($email,$phone,$alamat)
		{
			$data = array(	'email' => $email ,
							'phone' => $phone,
							'alamat'=> $alamat );
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function edit_sosmed($facebook,$twitter)
		{
			$data = array(	'facebook' => $facebook ,
							'twitter' => $twitter );
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function edit_seo($title,$description,$keywords,$tag)
		{
			$data = array(	'title' 		=>$title ,
							'deskripsi'		=>$description,
							'keywords'		=>$keywords,
							'tag'			=>$tag);
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function ganti_bg($nama_file)
		{
			$data = array('img_bg' =>$nama_file);
			$this->db->where('id',1);
			$this->db->update('t_contact', $data);
		}

		public function ganti_password($username,$pass)
		{
			$data = array(	'username' 		=>$username ,
							'password'		=>$pass);
			$this->db->where('id',1);
			$this->db->update('admin', $data);
		}

		public function list_katagori_home()
		{
			$query = $this->db->get('t_katagori');
		    $return = array();
		    foreach ($query->result() as $katagori){
		          $return[$katagori->id] = $katagori;
		          $return[$katagori->id]->id_katagori = $this->get_sub_katagori($katagori->id);
		    }
		    return $return;
		}

		public function get_sub_katagori($id_katagori)
		{
			$this->db->where('id_katagori',$id_katagori);
	        $query = $this->db->get('t_sub_katagori');
	        return $query->result();
		}

		public function get_product_list($limit, $start)
		{

        	$this->db->select('a.id ,a.id_katagori,a.spesifikasi, a.id_sub_katagori, a.grouping ,a.nama_product, a.harga, a.notes, b.nama_katagori as katagori,b.id as id_katagori_1,c.id as id_sub_katagori_1, c.nama_sub as sub_katagori, d.foto, d.desc as deskripsi, d.id as id_dsc');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->join('t_sub_katagori c','a.id_sub_katagori = c.id','left' );
			$this->db->join('t_product_des d','a.id = d.id_product','left');
			$this->db->from('t_product a');
			$this->db->limit($limit, $start);
			$this->db->order_by('grouping', 'RANDOM');
			return $this->db->get();

		}

		public function get_sub_product_list($limit, $start,$id)
		{
			$this->db->select('a.id ,a.id_katagori,a.spesifikasi, a.id_sub_katagori, a.grouping ,a.nama_product, a.harga, a.notes, b.nama_katagori as katagori,b.id as id_katagori_1,c.id as id_sub_katagori_1, c.nama_sub as sub_katagori, d.foto, d.desc as deskripsi, d.id as id_dsc');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->join('t_sub_katagori c','a.id_sub_katagori = c.id','left' );
			$this->db->join('t_product_des d','a.id = d.id_product','left');
			$this->db->where('id_sub_katagori', $id);
			$this->db->from('t_product a');
			$this->db->limit($limit, $start);
			$this->db->order_by('grouping', 'RANDOM');
			return $this->db->get();
		}

		public function product_cari ($limit, $start,$cari)
		{
			$this->db->select('a.id ,a.id_katagori,a.spesifikasi, a.id_sub_katagori, a.grouping ,a.nama_product, a.harga, a.notes, b.nama_katagori as katagori,b.id as id_katagori_1,c.id as id_sub_katagori_1, c.nama_sub as sub_katagori, d.foto, d.desc as deskripsi, d.id as id_dsc');
			$this->db->join('t_katagori b','a.id_katagori = b.id','left' );
			$this->db->join('t_sub_katagori c','a.id_sub_katagori = c.id','left' );
			$this->db->join('t_product_des d','a.id = d.id_product','left');
			$this->db->like('a.nama_product', $cari);
			$this->db->from('t_product a');
			$this->db->limit($limit, $start);
			$this->db->order_by('grouping', 'RANDOM');
			return $this->db->get();
		}



		

		
	}