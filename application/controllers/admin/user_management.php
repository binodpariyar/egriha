<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends Admin_Controller {

	var $table_name = 'tbl_user';

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data['main'] = 'user/list';
		$data['heading'] = 'User Management';
		$data['list']=$this->db->get($this->table_name)->result();

		$this->load->view('admin/home',$data);
	}

	public function add(){
		$data['main'] = 'user/form';
		$data['heading'] = 'Add New User';
		$this->load->view('admin/home',$data);
	}

	public function edit($id){

		$data['edit'] = $this->db->where('id',$id)->get($this->table_name)->row();
		$data['main'] = 'user/form';
		$data['heading'] = 'Edit a User';

		$this->load->view('admin/home',$data);
	}

	public function process(){

		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));

		
		$this->db->insert($this->table_name,$data);

		$this->session->set_flashdata('msg','User added Succesfully');

		redirect(admin_url('user_management'));
	}

	public function update($id){

		$data['name'] = $this->input->post('name');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');

		if($this->input->post('password') != ""){
			$data['password'] = md5($this->input->post('password'));
		}
		
		$this->db->where('id',$id)->update($this->table_name,$data);
		$this->session->set_flashdata('msg','User Updated Succesfully');
		redirect(admin_url('user_management'));
	}

	public function delete($id){
		$this->db->where('id',$id)->delete($this->table_name);
		$this->session->set_flashdata('msg','User Deleted Succesfully');
		redirect(admin_url('user_management'));
	}

}