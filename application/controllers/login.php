<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mdl_login');
	}

	public function index(){
		$data['main'] = "pages/login";
		$this->load->view('index',$data);
	}

	public function process(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$clientData = $this->db->get_where('tbl_client',array('username'=>$username,'password'=>md5($password)));
		

		if($clientData->num_rows() == 0 ){
			// return false;

			$identity = $this->input->post('username');
			$password = $this->input->post('password');
			$remember = FALSE; 

			if($this->ion_auth->login($identity, $password, $remember)){

				redirect('listyourproperty');

			}else{
				// debug($this->ion_auth->errors_array());exit;
				$this->session->set_flashdata('msg_client',"Invalid Username or Password");
				redirect('login');

			}
		}else{
			$this->session->set_userdata('client_id',$clientData->row()->id);
			redirect('clients');
			// return $data->row();
		}

	}


	public function log_out(){
		$this->ion_auth->logout();
		redirect(base_url());
	}


}
