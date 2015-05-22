<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Findland extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/findland';
		$this->load->view('index',$data);
	}

	
}