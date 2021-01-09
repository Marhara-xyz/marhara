<?php

class Discovery extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('discovery/index');
        $this->load->view('templates/footer');
    }
}