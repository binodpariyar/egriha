<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_management extends Admin_Controller {

	var $table_name = 'tbl_client';

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data['main'] = 'client/list';
		$data['heading'] = 'Client Management';
		$data['list']=$this->db->get($this->table_name)->result();

		$this->load->view('admin/home',$data);
	}

	public function add(){
		$data['main'] = 'client/form';
		$data['heading'] = 'Add New client';
		$this->load->view('admin/home',$data);
	}

	public function edit($id){

		$data['edit'] = $this->db->where('id',$id)->get($this->table_name)->row();
		$data['main'] = 'client/form';
		$data['heading'] = 'Edit a client';

		$this->load->view('admin/home',$data);
	}


	public function process(){

		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['image'] = $this->upload_image('image');
		$data['username'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		
		$this->db->insert($this->table_name,$data);

		$this->session->set_flashdata('msg','client added Succesfully');

		redirect(admin_url('client_management'));
	}

	public function update($id){

		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');

		$data['username'] = $this->input->post('username');

		if($this->check_error('image') != 4){
			$data['image'] = $this->upload_image('image');
		}

		if($this->input->post('password') != ""){
			$data['password'] = md5($this->input->post('password'));
		}
		
		$this->db->where('id',$id)->update($this->table_name,$data);
		$this->session->set_flashdata('msg','client Updated Succesfully');
		redirect(admin_url('client_management'));
	}


	public function show($id){
		$data['main'] = 'client/show';
		$data['heading'] = 'Milestones for '.$this->db->where('id',$id)->get('tbl_project')->row()->title;
		$data['id'] = $id;
		$data['list']= $this->db->where('project_id',$id)->get('tbl_milestone_client')->result();
		$this->load->view('admin/home',$data);
	}

	public function add_milestone($id){
		$data['main'] = 'client/milestone';
		$data['heading'] = 'Add New Miltestone';
		$data['id'] = $id;
		$this->load->view('admin/home',$data);
	}

	public function process_milestone($id){

		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		$data['image'] = $this->upload_image('image');
		$data['image_1'] = $this->upload_image('image_1');
		$data['image_2'] = $this->upload_image('image_2');
		$data['project_id'] = $id;
		$data['status'] = 0;

		$this->db->insert('tbl_milestone_client',$data);
		$this->session->set_flashdata('msg','Milestone Added Succesfully');
		redirect(admin_url('client_management/show/'.$id));

	}

	public function edit_milestone($id){

		$data['edit'] = $this->db->where('id',$id)->get('tbl_milestone_client')->row();
		$data['main'] = 'client/milestone';
		$data['heading'] = 'Edit a milestone';
		$this->load->view('admin/home',$data);

	}

	public function update_milestone($id){

		$data['name'] = $this->input->post('name');
		$data['description'] = $this->input->post('description');
		
		if($this->check_error('image') != 4){
			$data['image'] = $this->upload_image('image');
		}

		if($this->check_error('image_1') != 4){
			$data['image_1'] = $this->upload_image('image_1');
		}

		if($this->check_error('image_2') != 4){
			$data['image_2'] = $this->upload_image('image_2');
		}		
		
		$data['status'] = $this->input->post('status');

		$this->db->where('id',$id)->update('tbl_milestone_client',$data);
		$this->session->set_flashdata('msg','Milestone Updated Succesfully');

		$project_id = $this->db->where('id',$id)->get('tbl_milestone_client')->row()->project_id;

		redirect(admin_url('client_management/show/'.$project_id));

	}

	public function show_project($id){
		$data['main'] = 'client/list_p';
		$data['heading'] = 'Project List for '.$this->db->where('id',$id)->get('tbl_client')->row()->name;
		$data['list'] = $this->db->where('client_id',$id)->get('tbl_project')->result();
		$data['id'] = $id;
		$this->load->view('admin/home',$data);
	}

	public function add_project($id){
		$data['main'] = 'client/form_p';
		$data['id'] = $id;
		$data['heading'] = 'Add new Project';
		$this->load->view('admin/home',$data);
	}

	public function edit_project($id){
		$data['main'] = 'client/form_p';
		$data['id'] = $id;
		$data['heading'] = 'Edit Project';
		$data['edit'] = $this->db->where('id',$id)->get('tbl_project')->row();
		$this->load->view('admin/home',$data);
	}

	public function process_project($id){		
		
		$data['title']=$this->input->post('title');
		$data['owner']=$this->input->post('owner');
		$data['location']=$this->input->post('location');
		$data['cat_id']=$this->input->post('category');
		$data['area']=$this->input->post('area');
		$data['description']=$this->input->post('description');
		$data['image_1'] = $this->upload_image('image_1');
		$data['image_2'] = $this->upload_image('image_2');
		$data['image_3'] = $this->upload_image('image_3');
		$data['client_id'] = $id;

		$this->db->insert('tbl_project',$data);

		$project_id = $this->db->insert_id();

		$services = $this->input->post('service');

		foreach ($services as $service) {
			
			$this->db->insert('tbl_services_project',array('project_id'=>$project_id,'services_id'=>$service));

		}		

		redirect(admin_url('client_management/show_project/'.$id));

	}

	public function update_project($id){

		$data['title']=$this->input->post('title');
		$data['owner']=$this->input->post('owner');
		$data['location']=$this->input->post('location');
		$data['area']=$this->input->post('area');
		$data['cat_id']=$this->input->post('category');
		$data['description']=$this->input->post('description');

		if($this->check_error('image_1') != 4){
			$data['image_1'] = $this->upload_image('image_1');
		}

		if($this->check_error('image_2') != 4){
			$data['image_2'] = $this->upload_image('image_2');
		}

		if($this->check_error('image_3') != 4){
			$data['image_3'] = $this->upload_image('image_3');
		}

		$this->db->where('id',$id);
		$this->db->update('tbl_project',$data);

		$this->db->where('project_id',$id)->delete('tbl_services_project');

		$services = $this->input->post('service');

		foreach ($services as $service) {
			$this->db->insert('tbl_services_project',array('project_id'=>$id,'services_id'=>$service));
		}

		$client_id = $this->db->where('id',$id)->get('tbl_project')->row()->client_id;
		redirect(admin_url('client_management/show_project/'.$client_id));

	}



	public function delete($id){
		$this->db->where('id',$id)->delete($this->table_name);
		$this->session->set_flashdata('msg','client Deleted Succesfully');
		redirect(admin_url('client_management'));
	}

	public function check_error($index){
		$error = $_FILES[$index]['error'];
		return $error;
	}

	public function upload_image($index){
		
		if(!isset($_FILES[$index])){
			return false;
		}

		$error = $_FILES[$index]['error'];

		if($error == 0){

			$ext = array_pop(explode('.', $_FILES[$index]["name"]));
			$filename = random_string(). '.' . $ext;

			$config['file_name'] = $filename;
			$config['upload_path'] = './uploads/milestone_images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '200000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$this->upload->do_upload($index);

			return $filename;

		} else {
			return $error;
		}

	}

}