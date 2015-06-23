<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class List_your extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'property/list';
		$data['heading'] = 'User Added Properties';
		$data['list'] = $this->db->get('tbl_property')->result();
		$this->load->view('admin/home',$data);
	}

	public function approve($id){
		$this->db->where('id',$id)->update('tbl_property',array('status'=>1));
		redirect(admin_url('list_your'));
	}

	public function delete($id){
		$this->db->where('id',$id)->delete('tbl_property');
		redirect(admin_url('list_your'));
	}

	public function change_verify(){
		if($this->input->post('value') == 'true'){
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('tbl_property',array('verify'=>1));
		}else{
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('tbl_property',array('verify'=>0));
		}
		echo json_encode(array('success'=>true));
	}

}
