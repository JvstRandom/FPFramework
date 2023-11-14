<?php

class Daftar_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Webinar_m");
    }

    function daftarPenyelenggara(){
            if ($this->input->post()) {
                // $data_login_user = $this->input->post();
                // $result = $this->login_m->insert_mahasiswa($data_input_user);
                // redirect('index/index');
            } else {
                $data['judul'] = "Penyelenggara";
                $this->load->view('apps/D_penyelenggara', $data);
            }
    }

    function daftarUser(){
        if ($this->input->post()) {
            // $data_login_user = $this->input->post();
            // $result = $this->login_m->insert_mahasiswa($data_input_user);
            // redirect('index/index');
        } else {
            $data['judul'] = "Pengguna";
            $this->load->view('apps/D_penyelenggara', $data);
        }
}



}