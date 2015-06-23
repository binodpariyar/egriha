<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell extends CI_Controller {

	public function home()
	{
		$data['main'] = 'pages/rent_list';
		$this->db->where('status',1);
		$this->db->where('for',2);
		$this->db->where('type',1);
		$data['list'] = $this->db->get('tbl_property')->result();
		$this->load->view('index',$data);
	}

	public function appartment(){
		$data['main'] = 'pages/rent_list';
		$this->db->where('status',1);
		$this->db->where('for',2);
		$this->db->where('type',2);
		$data['list'] = $this->db->get('tbl_property')->result();
		$this->load->view('index',$data);
	}

	public function land(){
		$data['main'] = 'pages/rent_list';
		$this->db->where('status',1);
		$this->db->where('for',2);
		$this->db->where('type',3);
		$data['list'] = $this->db->get('tbl_property')->result();
		$this->load->view('index',$data);
	}

	public function description($id){
		$data['main'] = 'pages/description';
		$this->db->where('id',$id);
		$this->db->where('status',1);
		$this->db->where('for',2);
		$data['details'] = $this->db->get('tbl_property')->row();
		$data['path'] = 'sell';
		$data['filter'] = 'location';
		if(isset($_GET['filter'])){
			$data['filter'] = $_GET['filter'];
			switch($_GET['filter']){
				case 'area':
				$this->db->where('status',1);
				$this->db->where('area',$data['details']->location);
				break;
				case 'location':
				$this->db->where('status',1);
				$this->db->where('location like','%'.$data['details']->location.'%');
				break;
				case 'price':
				$this->db->where('status',1);
				$this->db->where('price like',$data['details']->location);
				break;
			}
		}else{
			$this->db->where('location like','%'.$data['details']->location.'%');			
			$this->db->where('status',1);
		}
		
		$this->db->where('for',2);
		$data['projects'] = $this->db->get('tbl_property')->result();

		$this->load->view('index',$data);
	}

}