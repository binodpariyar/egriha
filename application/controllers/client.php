<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/client';
		$this->load->view('index',$data);
	}

	
}