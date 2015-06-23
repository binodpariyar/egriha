<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		$this->load->library('flashdata');
	}
	public function index()
	{
		$data['main'] = 'pages/signup';
		
		$this->load->view('index',$data);
		

	}
	public function add(){

		// debug($_POST);exit;
		// $data['last_name'] = $this->input->post('category');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password=$this->input->post('password');
		
		$group=array('2');
		$additional_data=array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address')
			);

		if($this->ion_auth->register($username, $password, $email, $additional_data, $group)){
			$this->session->set_flashdata('msg',"Registered Sucessfully");
		}else{

			$errors = $this->ion_auth->errors_array();
			$err=implode('<br />', $errors);
			// echo $err;
			$this->session->set_flashdata('msg',$err);
		}

		redirect(base_url().'signup');
	}




	public function checkEmail(){
		$email=$this->input->post('email');

		$data=$this->db->get_where('users',array('email'=>$email));


		echo json_encode($data->num_rows());

	}
	public function checkUser(){
		$user=$this->input->post('username');

		$data=$this->db->get_where('users',array('username'=>$user));
		
		
		echo json_encode($data->num_rows());

	}
}