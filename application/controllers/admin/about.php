<<<<<<< HEAD
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
	

=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'about/form';
		$data['heading'] = 'About Us';
		$data['details'] = $this->db->where('slug','About-Us')->get('tbl_content')->row();
		$this->load->view('admin/home',$data);
	}

	public function vastushastra()
	{
		$data['main'] = 'about/form';
		$data['heading'] = 'Vastushastra';
		$data['details'] = $this->db->where('slug','vastushastra')->get('tbl_content')->row();
		$this->load->view('admin/home',$data);
	}

	public function construction()
	{
		$data['main'] = 'about/form';
		$data['heading'] = 'Construction';
		$data['details'] = $this->db->where('slug','construction')->get('tbl_content')->row();
		$this->load->view('admin/home',$data);
	}
	

	public function save($slug)
	{
		$this->db->where('slug',$slug)->update('tbl_content',array('body'=>$this->input->post('body')));
		redirect(admin_url('about/'.$slug));
	}


>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
}