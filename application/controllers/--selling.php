<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selling extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/selling';
		$this->load->view('index',$data);
	}
}