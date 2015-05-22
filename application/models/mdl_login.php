<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_login extends CI_Model {

	public function check_user($username,$password){
		$data = $this->db->get_where('tbl_user',array('username'=>$username,'password'=>md5($password)));
		if($data->num_rows() == 0 ){
			return false;
		}else{
			return $data->row();
		}
	}
}
