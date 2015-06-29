<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertisement extends Admin_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'ads/list';
		$data['ads'] = $this->db->order_by('order')->get('tbl_advertisement')->result();
		$data['heading'] = 'Advertisement';
		$this->load->view('admin/home',$data);
	}

	function add() {
        $data['heading'] = "Advertisement management";
        $data['main'] = "ads/form";
        $this->load->view('admin/home', $data);
    }

    function save() {

        // debug($_POST);exit;

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');

        if ($this->form_validation->run()) {

            $ext = array_pop(explode('.', $_FILES["image"]["name"]));

            $config['upload_path'] = './uploads/patners_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200000';

            $filename = random_string() . '.' . $ext;
            $config['file_name'] = $filename;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(admin_url('advertisement/add'));
            } else {
                $data['title'] = $this->input->post('title');
                $data['link'] = $this->input->post('link');
                $data['image'] = $filename;
                $this->db->select_max('order', 'great');
                $res = $this->db->get('tbl_advertisement');

                $order = $res->row()->great;

                $data['order'] = ++$order;
                $this->db->insert('tbl_advertisement', $data);
                redirect(admin_url('advertisement'));
            }
        } else {
            $this->add();
        }
    }

    function edit($id) {
        $data['edit'] = $this->db->get_where('tbl_advertisement', array('id' => $id))->row();
        $data['heading'] = 'advertisement Management';
        $data['main'] = 'ads/form';
        $this->load->view('admin/home', $data);
    }

    function update($id) {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');

        $error = $_FILES['image']['error'];

        if ($error == 4) {
            $data['title'] = $this->input->post('title');
            $data['link'] = $this->input->post('link');
            $this->db->where('id', $id);
            $this->db->update('tbl_advertisement', $data);
            redirect(admin_url('advertisement'));
        } else {
            $ext = array_pop(explode('.', $_FILES["image"]["name"]));
            $filename = random_string() . '.' . $ext;

            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/patners_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(admin_url('advertisement/edit/' . $id));
            } else {
                $data['title'] = $this->input->post('title');
                $data['link'] = $this->input->post('link');
                $data['image'] = $filename;
                $this->db->where('id', $id);
                $this->db->update('tbl_advertisement', $data);
                redirect(admin_url('advertisement'));
            }
        }
    }

    function delete($id) {
        $this->db->where('id', $id)->delete('tbl_advertisement');
        redirect(admin_url('advertisement'));
    }

    function manage_order() {
        $order = $this->input->post('item');
        foreach ($order as $key => $o) {
            $this->db->where('id', $o);
            $this->db->update('tbl_advertisement', array('order' => ($key + 1)));
        }
    }

}