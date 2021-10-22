<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$data = [	'title' => 'Data User',
					'isi'	=> 'datauser'];
		$this->load->view('layout/wrapper.php', $data, FALSE);
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */