<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$data = [	'title' => 'Register',
					'isi'	=> 'register'];
		$this->load->view('layout/wrapper.php', $data, FALSE);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */