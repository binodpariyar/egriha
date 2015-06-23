<?php

class Slider_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {

        $data['slider'] = $this->db->order_by('order')->get('tbl_slider')->result();
        $data['heading'] = "Slider management";
        $data['main'] = "slider/list";
        $this->load->view('admin/home', $data);
    }

    function add() {
        $data['heading'] = "Slider management";
        $data['main'] = "slider/form";
        $this->load->view('admin/home', $data);
    }

    function save() {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        // $this->form_validation->set_rules('description', 'Description', 'required|trim');

        if ($this->form_validation->run()) {

            $ext = array_pop(explode('.', $_FILES["image"]["name"]));

            $config['upload_path'] = './uploads/slider_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200000';

            $filename = random_string() . '.' . $ext;
            $config['file_name'] = $filename;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(admin_url('slider_management/add'));
            } else {
                $data['title'] = $this->input->post('title');
                // $data['description'] = $this->input->post('description');
                $data['image'] = $filename;
                $this->db->select_max('order', 'great');
                $res = $this->db->get('tbl_slider');

                $order = $res->row()->great;

                $data['order'] = ++$order;
                $this->db->insert('tbl_slider', $data);
                redirect(admin_url('slider_management'));
            }
        } else {
            $this->add();
        }
    }

    function edit($id) {
        $data['edit'] = $this->db->get_where('tbl_slider', array('id' => $id))->row();
        $data['heading'] = 'Slider Management';
        $data['main'] = 'slider/form';
        $this->load->view('admin/home', $data);
    }

    function update($id) {
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        // $this->form_validation->set_rules('description', 'Description', 'required|trim');

        $error = $_FILES['image']['error'];

        if ($error == 4) {
            $data['title'] = $this->input->post('title');
            // $data['description'] = $this->input->post('description');
            $this->db->where('id', $id);
            $this->db->update('tbl_slider', $data);
            redirect(admin_url('slider_management'));
        } else {
            $ext = array_pop(explode('.', $_FILES["image"]["name"]));
            $filename = random_string() . '.' . $ext;

            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/slider_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(admin_url('slider_management/edit/' . $id));
            } else {
                $data['title'] = $this->input->post('title');
                $data['description'] = $this->input->post('description');
                $data['image'] = $filename;
                $this->db->where('id', $id);
                $this->db->update('tbl_slider', $data);
                redirect(admin_url('slider_management'));
            }
        }
    }

    function delete($id) {
        $this->db->where('id', $id)->delete('tbl_slider');
        redirect(admin_url('slider_management'));
    }

     function manage_order() {
        $order = $this->input->post('item');
        foreach ($order as $key => $o) {
            $this->db->where('id', $o);
            $this->db->update('tbl_slider', array('order' => ($key + 1)));
        }
    }

}
?>