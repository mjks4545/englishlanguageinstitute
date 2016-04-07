<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

    public function class_time_change(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/class_time_change');
        $this->load->view('include/footer');
    }

    public function freeze_up(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/freeze_up');
        $this->load->view('include/footer');
    }

    public function class_promotion(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/class_promotion');
        $this->load->view('include/footer');
    }


}
