<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sellappartment extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/sellappartment';
		$this->load->view('index',$data);
	}

	
}