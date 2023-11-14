<?php

class Login_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Webinar_m");
    }

    function loginUser(){
        if ($this->input->post()) {
            $data_login_user = $this->input->post();
            $result = $this->login_m->insert_mahasiswa($data_login_user);
            redirect('index/index');
        } else {
            $data['judul'] = "Pengguna";
            $this->load->view('apps/login', $data);
        }
    }

    function loginPenyelenggara(){
        if ($this->input->post()) {
            $data_login_user = $this->input->post();
            $result = $this->login_m->insert_mahasiswa($data_login_user);
            redirect('index/index');
        } else {
            $data['judul'] = "Penyelenggara";
            $this->load->view('apps/login', $data);
        }
    }



}