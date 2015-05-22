<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/service';
		
		// if(isset($_GET['cat_id'])){
		// 	$data['cat_id'] = $this->input->get('cat_id');
		// 	$data['projects'] = $this->db->where('client_id',0)->where('cat_id',$data['cat_id'])->get('tbl_project')->result();
		// }else{
		// 	$data['cat_id'] = 0;
		// 	$data['projects'] = $this->db->where('client_id',0)->get('tbl_project')->result();
		// }		

		$this->load->view('index',$data);
	}
}