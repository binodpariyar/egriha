<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_management extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'site/form';
		$data['heading'] = 'Site Management';
		$this->load->view('admin/home',$data);
	}
	

}