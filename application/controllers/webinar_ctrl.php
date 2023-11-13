<?php

class webinar_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Webinar_m");
    }

    // menampilkan homepage
    function index() {
        $this->load->view("index");
    }

}