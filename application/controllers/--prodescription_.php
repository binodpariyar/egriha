<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prodescription extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/prodescription';
		$this->load->view('index',$data);
	}
}