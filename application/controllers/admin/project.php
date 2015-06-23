<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends Admin_Controller {

	var $table_name = 'tbl_project';

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'project/list';
		$data['heading'] = 'Project Management';
		$data['list'] = $this->db->where('client_id',0)->get('tbl_project')->result();
		$this->load->view('admin/home',$data);
	}
	
	public function add()
	{
		$data['main'] = 'project/form';
		$data['heading'] = 'Add A Project';
		$this->load->view('admin/home',$data);
	}

	public function edit($id)
	{
		$data['main'] = 'project/form';
		$data['heading'] = 'Edit A Project';
		$data['edit'] = $this->db->where('id',$id)->get('tbl_project')->row();
		$this->load->view('admin/home',$data);
	}


	public function process(){		
		
		$data['title']=$this->input->post('title');
		$data['owner']=$this->input->post('owner');
		$data['location']=$this->input->post('location');
		$data['area']=$this->input->post('area');
		$data['cat_id']=$this->input->post('category');
		$data['description']=$this->input->post('description');
		$data['client_image'] = $this->upload_image('client_image');
		$data['image_1'] = $this->upload_image('image_1');
		$data['image_2'] = $this->upload_image('image_2');
		$data['image_3'] = $this->upload_image('image_3');
		$data['client_id'] = 0;

		$this->db->insert('tbl_project',$data);

		$id = $this->db->insert_id();

		$services = $this->input->post('service');

		foreach ($services as $service) {
			
			$this->db->insert('tbl_services_project',array('project_id'=>$id,'services_id'=>$service));

		}

		redirect(admin_url('project'));

	}

	public function update($id){

		$data['title']=$this->input->post('title');
		$data['owner']=$this->input->post('owner');
		$data['location']=$this->input->post('location');
		$data['area']=$this->input->post('area');
		$data['cat_id']=$this->input->post('category');
		$data['description']=$this->input->post('description');

		if($this->check_error('client_image') != 4){
			$data['client_image'] = $this->upload_image('client_image');
		}

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

		redirect(admin_url('project'));

	}

	public function delete($id){
		$this->db->where('id',$id)->delete($this->table_name);
		$this->session->set_flashdata('msg','Project Deleted Succesfully');
		redirect(admin_url('project'));
	}

	public function check_error($index){
		$error = $_FILES[$index]['error'];
		// echo $error;exit;
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
			$config['upload_path'] = './uploads/project_images/';
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