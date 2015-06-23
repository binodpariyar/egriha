<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'dashboard/list';
		$data['heading'] = 'Dashboard';
		$this->load->view('admin/home',$data);
	}

}