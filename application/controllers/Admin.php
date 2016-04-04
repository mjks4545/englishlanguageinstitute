<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/index');
        $this->load->view('include/footer');
    }
}
