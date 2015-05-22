<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/home';
		$data['projects'] = $this->db->where('client_id',0)->get('tbl_project')->result();
		$this->load->view('index',$data);
	}
}