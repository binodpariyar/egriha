<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sellflat extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/sellflat';
		$this->load->view('index',$data);
	}

	
}