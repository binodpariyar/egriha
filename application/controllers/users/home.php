<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Users_Controller {

	public function index()
	{
		// debug($this->details);
		$data['main'] = 'users/home';
		$this->load->view('index',$data);
	}

	public function logout(){
		$this->session->set_userdata('client_id','');
		redirect('login');
	}

	public function milestone($id){

		$data['main'] = 'clients/milestone';
		$data['list'] = $this->db->where('id',$id)->get('tbl_milestone_client')->row();
		$data['detail'] = $this->db->where('id',$this->session->userdata('client_id'))->get('tbl_client')->row();
		$this->load->view('index',$data);

	}
	
}

/* End of file index.php */
/* Location: ./application/controllers/client/home.php */
?>