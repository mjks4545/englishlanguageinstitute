
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function course_add(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('courses/course_add');
        $this->load->view('include/footer');
    }

}
