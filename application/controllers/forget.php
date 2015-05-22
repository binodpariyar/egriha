<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forget extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/forget';
		$this->load->view('index',$data);
	}
}