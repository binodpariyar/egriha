<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/contact';
		$this->load->view('index',$data);
	}
}