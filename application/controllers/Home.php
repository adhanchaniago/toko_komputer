<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->model('Admin_models');				
			}

			public function login()
			{
				$this->load->view('admin/login');
			}

			public function getlogin()

			{
				$username 			= $this->input->post('username');
				$password 			= $this->input->post('password');
				$level1 			= 1;
				if($this->db->get_where('admin', array('level' => $level1))->row())
					{
						$this->Admin_models->getlogin_admin($username, $password);
					}
					else
					{
						$this->session->set_flashdata('info', 'username tidak terdaftar / password salah');
						redirect('home/login');
					}
			}

			public function index()
			{
				$data['contact']			= $this->db->get_where('t_contact', array('id' => 1))->row();
				$data['katagori']			= $this->Admin_models->list_katagori_home();
				$data['content'] 			= 'home/halaman1';
				$data['header'] 			= 'home/header';
				$data['footer'] 			= 'home/footer';
				// pagination
				 //konfigurasi pagination
		        $config['base_url'] 		= site_url('home/index'); //site url
		        $config['total_rows'] 		= $this->db->count_all('t_product'); //total row
		        $config['per_page'] 		= 10;  //show record per halaman
		        $config["uri_segment"] 		= 3;  // uri parameter
		        $choice 					= $config["total_rows"] / $config["per_page"];
		        $config["num_links"] 		= floor($choice);
		         // Membuat Style pagination untuk BootStrap v4
		        $config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';

		        $this->pagination->initialize($config);
		        $data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		        $data['data'] 				= $this->Admin_models->get_product_list($config["per_page"], $data['page']);
		        $data['pagination'] 		= $this->pagination->create_links();
				$this->load->view('home/index',$data);
			}

			public function sub_product($id)
			{
				$data['contact']			= $this->db->get_where('t_contact', array('id' => 1))->row();
				$data['katagori']			= $this->Admin_models->list_katagori_home();
				$data['content'] 			= 'home/halaman1';
				$data['header'] 			= 'home/header';
				$data['footer'] 			= 'home/footer';
				// pagination
				 //konfigurasi pagination
		        $config['base_url'] 		= site_url('home/sub_product'); //site url
		        $config['total_rows'] 		= $this->db->count_all('t_product'); //total row
		        $config['per_page'] 		= 10;  //show record per halaman
		        $config["uri_segment"] 		= 3;  // uri parameter
		        $choice 					= $config["total_rows"] / $config["per_page"];
		        $config["num_links"] 		= floor($choice);
		         // Membuat Style pagination untuk BootStrap v4
		        $config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';

		        $this->pagination->initialize($config);
		        $data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		        $data['data'] 				= $this->Admin_models->get_sub_product_list($config["per_page"], $data['page'],$id);
		        $data['pagination'] 		= $this->pagination->create_links();
				$this->load->view('home/index',$data);
			}

			public function cari_product()
			{
				$cari 						= $this->input->post('cari');
				$data['contact']			= $this->db->get_where('t_contact', array('id' => 1))->row();
				$data['katagori']			= $this->Admin_models->list_katagori_home();
				$data['content'] 			= 'home/halaman1';
				$data['header'] 			= 'home/header';
				$data['footer'] 			= 'home/footer';
				// pagination
				 //konfigurasi pagination
		        $config['base_url'] 		= site_url('home/cari_product'); //site url
		        $config['total_rows'] 		= $this->db->count_all('t_product'); //total row
		        $config['per_page'] 		= 10;  //show record per halaman
		        $config["uri_segment"] 		= 3;  // uri parameter
		        $choice 					= $config["total_rows"] / $config["per_page"];
		        $config["num_links"] 		= floor($choice);
		         // Membuat Style pagination untuk BootStrap v4
		        $config['first_link']       = 'First';
		        $config['last_link']        = 'Last';
		        $config['next_link']        = 'Next';
		        $config['prev_link']        = 'Prev';
		        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		        $config['full_tag_close']   = '</ul></nav></div>';
		        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		        $config['num_tag_close']    = '</span></li>';
		        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['prev_tagl_close']  = '</span>Next</li>';
		        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		        $config['first_tagl_close'] = '</span></li>';
		        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		        $config['last_tagl_close']  = '</span></li>';

		        $this->pagination->initialize($config);
		        $data['page'] 				= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		        $data['data'] 				= $this->Admin_models->product_cari($config["per_page"], $data['page'],$cari);
		        $data['pagination'] 		= $this->pagination->create_links();
				$this->load->view('home/index',$data);

			}

			public function detail_product($id)
			{
				$data['contact']			= $this->db->get_where('t_contact', array('id' => 1))->row();
				$data['katagori']			= $this->Admin_models->list_katagori_home();
				$edit						= $this->Admin_models->edit_list_product($id)->result();
				foreach ($edit as $row ) {
									$data['id'] 				= $row->id;
									$data['id_dsc'] 			= $row->id_dsc;
									$data['id_katagori']  		= $row->id_katagori_1;
									$data['id_sub_katagori'] 	= $row->id_sub_katagori_1;
									$data['katagori2'] 			= $row->katagori;
									$data['sub_katagori'] 		= $row->sub_katagori;
									$data['grouping'] 			= $row->grouping;
									$data['nama_product'] 		= $row->nama_product;
									$data['harga'] 				= $row->harga;
									$data['notes'] 				= $row->notes;
									$data['foto'] 				= $row->foto;
									$data['desc'] 				= $row->deskripsi;
									$data['spesifikasi'] 		= $row->spesifikasi;
								}
				$data['content'] 			= 'home/detail_product';
				$data['header'] 			= 'home/header';
				$data['footer'] 			= 'home/footer';				
				$this->load->view('home/index',$data);
			}

			public function cara_order()
			{
				$data['contact']			= $this->db->get_where('t_contact', array('id' => 1))->row();
				$data['katagori']			= $this->Admin_models->list_katagori_home();
				$data['content'] 			= 'home/cara_order';
				$data['header'] 			= 'home/header';
				$data['footer'] 			= 'home/footer';				
				$this->load->view('home/index',$data);
			}

		
		}