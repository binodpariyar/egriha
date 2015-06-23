<<<<<<< HEAD
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
		// $this->db->where()
		 $this->db->update('tbl_site', $data);
		 redirect(admin_url('Site_management'));
	}

=======
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
		// $this->db->where()
		 $this->db->update('tbl_site', $data);
		 redirect(admin_url('Site_management'));
	}

>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
}