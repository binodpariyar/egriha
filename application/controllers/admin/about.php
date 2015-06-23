<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'about/form';
		$data['heading'] = 'About Us';
		$this->load->view('admin/home',$data);
	}
	

}