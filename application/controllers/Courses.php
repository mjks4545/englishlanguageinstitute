
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function course_add(){
        
        $this->db->select('*');
        $this->db->from('courses_added');
//        $this->db->join('courses_category','courses_category.course_c_id = course_sub_category.fk_course_c_id');
//        $this->db->join('courses_added','courses_added.course_id = courses_category.fk_course_id');
        $query = $this->db->get();
        $result['result'] = $query->result();
         //$result['result'] = $result[0]; 
//        echo '<pre>';
//        print_r($result);
//        die();
        
      
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('courses/course_add',$result);
        $this->load->view('include/footer');
    }

}
