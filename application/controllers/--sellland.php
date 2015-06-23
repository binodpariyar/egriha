<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sellland extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/sellland';
		$this->load->view('index',$data);
	}

	
}