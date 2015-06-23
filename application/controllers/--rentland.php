<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rentland extends CI_Controller {
	public function index()
	{
		$data['main'] = 'pages/rentland';
		$this->load->view('index',$data);
	}

	
}