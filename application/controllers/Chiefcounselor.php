<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChiefCounselor extends CI_Controller {
    public function check(){
        if($_SESSION['role']==''){
            redirect('home/');
        }
    }
    
    
    public function index()
    {
        $this->check();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/chief_index');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
    public function index_details()
    { 
        $this->check();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/index_details');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
 
}

