<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listyourproperty extends CI_Controller {

	var $user_id;

	public function __construct(){
		parent::__construct();

		if(!$this->ion_auth->logged_in()){
			$data['main'] = 'pages/listyourproperty';
			$this->load->view('index',$data);
		}else{
			$this->user_id = $this->ion_auth->user()->row()->id;
		}
		
	}

	public function index()
	{
		
		if($this->ion_auth->logged_in()){
			$data['list'] = $this->db->where('user_id',$this->user_id)->get('tbl_property')->result();
			$data['main'] = 'pages/listyour';
		}
		else{
			$data['main'] = 'pages/listyourproperty';
		}

		$this->load->view('index',$data);
	}


	public function listForm(){

		$data['main'] = 'pages/listyour';
		$this->load->view('index',$data);	
	}


	public function add(){

		$chk=$this->input->post('property');
		$user=$this->ion_auth->user()->row();

		$data['user_id']=$user->id;
		$data['status']=0;
		$data['area']=$this->input->post('area');
		$data['price']=$this->input->post('price');
		$data['location']=$this->input->post('location');
		$data['condition'] = $this->input->post('condition');
		$data['description'] = $this->input->post('description');
		$data['image_1'] = $this->upload_image('image_1');
		$data['image_2'] = $this->upload_image('image_2');
		$data['image_3'] = $this->upload_image('image_3');
		$data['type'] = $this->input->post('property');
		$data['for'] = $this->input->post('for');

		$this->db->insert('tbl_property',$data);

		$id=$this->db->insert_id();

		switch ($chk) {
			case '1':


			$data_house['floor']=$this->input->post('floor');
			$data_house['storey']=$this->input->post('storey');
			$data_house['year']=$this->input->post('year');
			$data_house['bedroom'] = $this->input->post('bedroom');
			$data_house['bathroom'] = $this->input->post('bathroom');
			$data_house['p_id']=$id;

			$this->db->insert('tbl_house',$data_house);

			break;
			
			case '2':

			$data['year']=$this->input->post('year');
			$data['bedroom'] = $this->input->post('bedroom');
			$data['bathroom'] = $this->input->post('bathroom');

			break;

			default:

			break;
		}
		
		redirect(base_url().'listyourproperty');


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
			$config['upload_path'] = './uploads/list/';
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

	public function check_error($index){
		$error = $_FILES[$index]['error'];
		// echo $error;exit;
		return $error;
	}

	public function show($id){

		if($this->ion_auth->logged_in()){
			$data['main'] = 'pages/viewproperty';
			$data['details'] = $this->db->where('user_id',$this->user_id)->where('id',$id)->get('tbl_property')->row();
			$this->load->view('index',$data);
		}else{
			$data['main'] = 'pages/listyourproperty';
		}

		
	}

}