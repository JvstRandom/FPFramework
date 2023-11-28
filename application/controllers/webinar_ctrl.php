<?php

class webinar_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Webinar_m");
        $this->load->library("template");
    }

    // menampilkan homepage
    function index()
    {
        // $this->load->view("index");
        $this->template->Tampilan("index");
    }

    function s() {
        // $this->load->view("search_page");
        $this->template->Tampilan("search_page");
    }

    function profile() {
        $this->template->Tampilan("profile");
    }

    function webinar_page() {
        $this->template->Tampilan("webinar_page");
    }

    function dashboard_page() {
        $this->load->view("Dashboard/dashboard_index");
    }
}