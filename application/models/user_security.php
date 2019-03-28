<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class User_security extends CI_Model
		{
			public function get_security()
			{
				$email = $this->session->userdata('email');
				if(empty($email))
					{
						$this->session->sess_destroy();
						redirect('home/login');

					}
			}

		}