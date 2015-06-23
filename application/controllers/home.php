<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller {



	public function index()

	{

		$data['main'] = 'pages/home';

		$data['projects'] = $this->db->where('client_id',0)->get('tbl_project')->result();

		$this->load->view('index',$data);

	}



	public function request()

	{

		$data['main'] = 'forms/request';

		$this->load->view('temp',$data);

	}



	public function consult()

	{

		$data['main'] = 'forms/consult';

		$this->load->view('temp',$data);

	}



	public function service()

	{

		$data['main'] = 'forms/service';

		$this->load->view('temp',$data);

	}

	public function show($slug)
	{
		$data['main'] = 'pages/aboutus';
		$data['content'] = $this->db->where('slug',$slug)->get('tbl_content')->row();
		$this->load->view('index',$data);
	}

<<<<<<< HEAD
=======
	public function request()
	{
		$data['main'] = 'forms/request';
		$this->load->view('temp',$data);
	}

	public function consult()
	{
		$data['main'] = 'forms/consult';
		$this->load->view('temp',$data);
	}

	public function service()
	{
		$data['main'] = 'forms/service';
		$this->load->view('temp',$data);
	}
>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5

}