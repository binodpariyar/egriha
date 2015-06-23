<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mdl_login');
	}

	public function index(){
		$this->load->view('login');
	}

	public function process(){
		$data = $this->mdl_login->check_user($this->input->post('username'),$this->input->post('password'));
		if($data){
			$this->session->set_userdata('id',$data->id);
			redirect('admin');
		}else{
			$this->session->set_flashdata('msg','Invalid Username or Password');
			redirect('login_admin');
		}
	}

	public function logout(){
		$this->session->set_userdata('id',"");
		redirect('admin');
	}
}
