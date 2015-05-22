<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculator extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/calculator';
		$this->load->view('index',$data);
	}

	
}