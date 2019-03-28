<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			
			private $filename 	= "import_product";
			public function __construct()
			{
				parent::__construct();
				$this->load->model('User_security');
				$this->load->model('Admin_security');
				$this->load->model('Load_setting');
				$this->load->model('Admin_models');
				$this->Admin_security->get_security();				
			}

// ---------------------------------------------Halaman Login & Logout -----------------------------------------------------------//
			

			

			public function logout()
			{
				$this->session->sess_destroy();
				$this->session->set_flashdata('info', 'logout sukses');
				redirect(base_url('home/login'));
			}

// ---------------------------------------------Halaman Home admin -----------------------------------------------------------//

			public function home()
			{
				
				$data['username']			= $this->session->userdata('username');
				$this->load->view('admin/home', $data);
			}

			public function dashboard()
			{
				
				$data['j_katagori']		= $this->Admin_models->j_katagori();
				$data['j_sub_katagori']	= $this->Admin_models->j_sub_katagori();
				$data['j_product']		= $this->Admin_models->j_product();
				
				$this->load->view('admin/dashboard',$data);
			}

			// master katagori

			public function master_katagori()
			{
				
						
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['table']				= $this->Admin_models->list_katagori()->result();
				$this->load->view('admin/master_katagori/table',$data);

			}

			public function add_katagori()
			{
				
				$nama_katagori			= xss_clean($this->input->post('nama_katagori'));
				$this->Admin_models->add_katagori($nama_katagori);
				$this->session->set_flashdata('info', 'sukses Menginput Data');
				redirect('Admin/home#master_katagori');	
			}

			public function edit_katagori()
			{
				$nama_katagori			= xss_clean($this->input->post('nama_katagori'));
				$id 					= xss_clean($this->input->post('id'));
				$this->Admin_models->edit_katagori($nama_katagori,$id);
				$this->session->set_flashdata('info', 'Sukses Merubah Data');
				redirect('Admin/home#master_katagori');	
			}

			public function delete_katagori()
			{
				$id 					= xss_clean($this->input->post('id'));
				$this->Admin_models->delete_katagori($id);
				$this->session->set_flashdata('info', 'Sukses Menghapus Data');
				redirect('Admin/home#master_katagori');	
			}

			// sub katagori

			public function master_sub_katagori()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['table']				= $this->Admin_models->list_sub_katagori()->result();
				$data['katagori'] 			= $this->Admin_models->list_katagori()->result();
				$this->load->view('admin/master_sub_katagori/table',$data);
			}

			public function add_sub_katagori()
			{
				$id_katagori			= xss_clean($this->input->post('id_katagori'));
				$nama_sub				= xss_clean($this->input->post('nama_sub'));
				$this->Admin_models->add_sub_katagori($id_katagori,$nama_sub);
				$this->session->set_flashdata('info', 'sukses Menginput Data');
				redirect('Admin/home#master_sub_katagori');	
			}

			public function v_edit_sub($id)
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['id'] 				= $id;
				$data['katagori2'] 			= $this->Admin_models->list_katagori()->result();
				$edit= $this->Admin_models->v_edit_sub($id)->result();
				foreach ($edit as $row) {
					$data['sub_katagori'] 	= $row->nama;
					$data['id_katagori'] 	= $row->id_katagori;
					$data['katagori'] 		= $row->katagori;
				}
				$this->load->view('admin/master_sub_katagori/edit',$data);

			}
			public function edit_sub_katagori()
			{
				$id 					= xss_clean($this->input->post('id'));
				$id_katagori			= xss_clean($this->input->post('id_katagori'));
				$nama_sub				= xss_clean($this->input->post('sub_katagori'));
				$this->Admin_models->edit_sub_katagori($id_katagori,$nama_sub, $id);
				$this->session->set_flashdata('info', 'Sukses Merubah Data');
				redirect('Admin/home#master_sub_katagori');	
			}

			public function delete_sub_katagori()
			{
				$id 					= xss_clean($this->input->post('id'));
				$this->Admin_models->delete_sub_katagori($id);
				$this->session->set_flashdata('info', 'sukses Menginput Data');
				redirect('Admin/home#master_sub_katagori');	
			}

			// master product
			public function master_product()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['table']				= $this->Admin_models->list_product()->result();
				$data['katagori'] 			= $this->Admin_models->list_katagori()->result();
				$this->load->view('admin/master_product/table',$data);
			}

			public function getsub($id_katagori)
				{
				  	$sub 	=$this->Admin_models->getsub($id_katagori);
				   	echo"<option value=''>Pilih Sub Katagori</option>";
					  foreach($sub as $k)
					  {
					    echo "<option value='{$k->id}'>{$k->nama_sub}</option>";
					  }
				}

			public function preview_import()
			{
				$data = array();
				if(isset($_POST['preview']))
					{
						$data['id_katagori'] 		= $this->input->post('id_katagori');
						$data['id_sub_katagori'] 	= $this->input->post('sub_katagori');
						$filename 					= $this->input->post('file');
						$upload 					= $this->Admin_models->upload_file($this->filename);
						if($upload['result'] == "success")
							{ 
								$excelreader 	= new PHPExcel_Reader_Excel2007();
								$loadexcel 		= $excelreader->load('./excel/'.$this->filename.'.xlsx'); 
								$sheet 			= $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
								$data['sheet'] 	= $sheet;
								
							}else
								{ 
									$data['upload_error'] = $upload['error'];
									
								}
					}
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$this->load->view('admin/preview_upload',$data);
			}

			public function import_product()
			{
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel 	 = $excelreader->load('excel/'.$this->filename.'.xlsx'); 
				$sheet 		 = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);			
				$data 		 = array();				
				$numrow 	 = 1;
				foreach($sheet as $row){
					
					if($numrow > 1){
						
						array_push($data, array(
							'id_katagori' 		=> $this->input->post('id_katagori'),
							'id_sub_katagori'	=> $this->input->post('id_sub_katagori'),
							'grouping'			=>$row['A'], 
							'nama_product'		=>$row['B'], 
							'harga'				=>$row['C'],
							'spesifikasi' 		=>$row['D'], 
							'notes'				=>$row['E'],
					 
						));
					}
					
					$numrow++; 
				}
				$this->session->set_flashdata('info', 'sukses Menginput Data');
				$this->Admin_models->insert_multiple_product($data);				
				redirect("admin/home#master_product");
			}

			public function v_add_product()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['table']				= $this->Admin_models->list_product()->result();
				$data['katagori'] 			= $this->Admin_models->list_katagori()->result();
				$this->load->view('admin/master_product/add',$data);
			}

			public function add_product()
			{
				$id_katagori	= xss_clean($this->input->post('id_katagori'));
				$sub_katagori	= xss_clean($this->input->post('sub_katagori'));
				$grouping		= xss_clean($this->input->post('grouping'));
				$nama_product	= xss_clean($this->input->post('nama_product'));
				$harga			= xss_clean($this->input->post('harga'));
				$notes			= xss_clean($this->input->post('notes'));
				$spesifikasi 	= xss_clean($this->input->post('spesifikasi'));

				$this->Admin_models->add_product($id_katagori,$sub_katagori,$grouping,$nama_product,$harga,$notes, $spesifikasi);
				$this->session->set_flashdata('info', 'sukses Menginput Data');
				redirect('Admin/home#master_product');	
			}

			public function delete_product()
			{
				$id 					= xss_clean($this->input->post('id'));
				$this->Admin_models->delete_product($id);
				$this->session->set_flashdata('info', 'sukses Menghapus Data');
				redirect('Admin/home#master_product');
			}

			public function v_edit_product($id)
			{

				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$edit						= $this->Admin_models->edit_list_product($id)->result();
				$data['katagori2'] 			= $this->Admin_models->list_katagori()->result();
				
				foreach ($edit as $row ) {
					$data['id'] 				= $row->id;
					$data['id_dsc'] 			= $row->id_dsc;
					$data['id_katagori']  		= $row->id_katagori_1;
					$data['id_sub_katagori'] 	= $row->id_sub_katagori_1;
					$data['katagori'] 			= $row->katagori;
					$data['sub_katagori'] 		= $row->sub_katagori;
					$data['grouping'] 			= $row->grouping;
					$data['nama_product'] 		= $row->nama_product;
					$data['harga'] 				= $row->harga;
					$data['notes'] 				= $row->notes;
					$data['foto'] 				= $row->foto;
					$data['desc'] 				= $row->deskripsi;
					$data['spesifikasi'] 		= $row->spesifikasi;
				}
				$this->load->view('admin/master_product/edit',$data);
			}

			public function edit_product()
			{
				$config =  array(
                  'upload_path'     => "./assets/img/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
       				 			$id 				= $this->input->post('id');
       				 			$id_dsc 			= $this->input->post('id_dsc');
       				 			$desc 				= $this->input->post('desc');
       				 			$id_katagori 		= $this->input->post('id_katagori');
       				 			$sub_katagori 		= $this->input->post('sub_katagori');
       				 			$grouping 			= $this->input->post('grouping');
       				 			$nama_product 		= $this->input->post('nama_product');
       				 			$harga 				= $this->input->post('harga');
       				 			$notes 				= $this->input->post('notes');
       				 			$spesifikasi 		= $this->input->post('spesifikasi');

       				 			if(!$desc==''){
       				 				$this->Admin_models->edit_product2($id_dsc,$desc);
       				 				$this->Admin_models->edit_product1($id_katagori,$sub_katagori,$grouping,$nama_product,$harga,$notes,$spesifikasi,$id);
       				 			}else{
       				 				$this->Admin_models->edit_product1($id_katagori,$sub_katagori,$grouping,$nama_product,$harga,$notes,$spesifikasi,$id);
       				 			}
       				 			

	       				 		$this->session->set_flashdata('info','Berhasil Merubah Data saja');
	                            redirect('Admin/home#master_product');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $id_dsc 		=$this->input->post('id_dsc');                              
                                $this->Admin_models->edit_product3($nama_file,$id_dsc); 
                                $this->session->set_flashdata('info','data berhasil di Ubah');
                                redirect('Admin/home#master_product');
    		         		}    
			}

			public function add_desc($id)
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['id_product'] 		= $id;
				$this->load->view('admin/master_product/add_desc',$data);
			}

			public function add_des_product()
			{
				$config =  array(
                  'upload_path'     => "./assets/img/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
       				 			$id_product = $this->input->post('id_product');
       				 			$desc 		= $this->input->post('desc');
       				 			

       				 			if(!$desc==''){
       				 				$this->Admin_models->add_product_desc($id_product,$desc);
       				 			}else{
       				 				$this->session->set_flashdata('info','Deskripsi Harus di Input');
       				 				redirect('Admin/home#add_desc/'.$id_product);
       				 			}   				 			

	       				 		$this->session->set_flashdata('info','Berhasil Menambahkan Data');
	                            redirect('Admin/home#master_product');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];
                                $id_product 	=$this->input->post('id_product');
                                $desc 			= $this->input->post('desc');              
                                $this->Admin_models->add_product_foto($nama_file,$id_product,$desc); 
                                $this->session->set_flashdata('info','berhasil Menambahkan Data');
                                redirect('Admin/home#master_product');
    		         		}   
			}
			// setting
			public function cara_order()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['edit']				= $this->db->get_where('t_contact', array('id' => 1))->row();
				$this->load->view('admin/setting/cara_order',$data);
			}

			public function contact()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['edit']				= $this->db->get_where('t_contact', array('id' => 1))->row();
				$this->load->view('admin/setting/contact',$data);
			}

			public function ubah_password()
			{
				$data['script_table'] 		= 'admin/script_js';
				$data['load_data']			= 'admin/script_data';
				$data['edit']				= $this->db->get_where('admin', array('id' => 1))->row();
				$this->load->view('admin/setting/edit_admin',$data);
			}

			public function edit_cara_order()
			{
				$desc = $this->input->post('desc');
				$this->Admin_models->edit_cara_order($desc); 
                $this->session->set_flashdata('info','berhasil Merubah Data');
                redirect('Admin/home#cara_order');
			}

			public function ganti_logo()
			{
				$config =  array(
                  'upload_path'     => "./assets/img/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
       				 			$this->session->set_flashdata('info','Silahkan Masukkan Gambar');
	                            redirect('Admin/home#contact');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];            
                                $this->Admin_models->ganti_logo($nama_file); 
                                $this->session->set_flashdata('info','berhasil Merubah Logo');
                                redirect('Admin/home#contact');
    		         		} 
			}

			public function edit_contact()
			{
				$email 	= $this->input->post('email');
				$phone 	= $this->input->post('phone');
				$alamat = $this->input->post('alamat');
				$this->Admin_models->edit_contact($email,$phone,$alamat); 
                $this->session->set_flashdata('info','berhasil Merubah Data');
                redirect('Admin/home#contact');
			}

			public function edit_sosmed()
			{
				$facebook 	= $this->input->post('facebook');
				$twitter 	= $this->input->post('twitter');
				$this->Admin_models->edit_sosmed($facebook,$twitter); 
                $this->session->set_flashdata('info','berhasil Merubah Data');
                redirect('Admin/home#contact');

			}

			public function edit_seo()
			{
				$title 			= $this->input->post('title');
				$description 	= $this->input->post('description');
				$keywords 		= $this->input->post('keywords');
				$tag 			= $this->input->post('tag');
				$this->Admin_models->edit_seo($title,$description,$keywords,$tag); 
                $this->session->set_flashdata('info','berhasil Merubah Data');
                redirect('Admin/home#contact');
			}

			public function ganti_bg()
			{
				$config =  array(
                  'upload_path'     => "./assets/img/",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'encrypt_name'    => False, 
                                   );
                  $this->upload->initialize($config);
                  $this->load->library('upload',$config);

       				 if ( ! $this->upload->do_upload('gambar')) 
       				 		{
       				 			$this->session->set_flashdata('info','Silahkan Masukkan Gambar');
	                            redirect('Admin/home#contact');
       				 		} else {

       				 			$upload_data  	=$this->upload->data();
                                $nama_file    	=$upload_data['file_name'];
                                $ukuran_file  	=$upload_data['file_size'];            
                                $this->Admin_models->ganti_bg($nama_file); 
                                $this->session->set_flashdata('info','berhasil Merubah Logo');
                                redirect('Admin/home#contact');
    		         		} 
			}

			public function ganti_password()
			{
				$username 	= $this->input->post('username');
				$password 	= $this->input->post('password');
				$pass 		= md5($password);
				$this->Admin_models->ganti_password($username,$pass); 
                $this->session->set_flashdata('info','berhasil Merubah username dan password');
                redirect('Admin/home#ubah_password');
			}
	}


