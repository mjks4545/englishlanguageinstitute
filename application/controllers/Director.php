<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Director extends CI_Controller {
    function check(){
        if($_SESSION['role']==''){
            redirect('home/');
        }
    }

    public function index()
    {
        $this->check();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('director/director_home');
        $this->load->view('include/footer');
    }
}
