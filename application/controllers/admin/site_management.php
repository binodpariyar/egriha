<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_management extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'site/form';
		$data['heading'] = 'Site Management';
		$data['edit']=$this->db->get('tbl_site')->row();
		$this->load->view('admin/home',$data);
	}


	public function process(){
		
		$data['facebook']=$this->input->post('facebook');
		$data['google']=$this->input->post('google');
		$data['twitter']=$this->input->post('twitter');
		$data['youtube']=$this->input->post('youtube');
		$this->db->update('tbl_site', $data);
		redirect(admin_url('site_management'));
	}

}