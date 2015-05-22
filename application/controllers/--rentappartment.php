<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rentappartment extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/rentappartment';
		$this->load->view('index',$data);
	}
}