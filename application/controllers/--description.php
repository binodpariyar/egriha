<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Description extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/description';
		$this->load->view('index',$data);
	}

	
}