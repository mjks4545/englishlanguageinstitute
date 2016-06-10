<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
    
    // -------------------------------------------------------------------------
    
    public function subject_add(){
        
        $this->db->select('*');
        $this->db->from('courses_added');
        $query = $this->db->get();
        $result['result'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('courses/subject_add',$result);
        $this->load->view('include/footer');
	
    }
    
    // -------------------------------------------------------------------------
    
    public function fetch_courses( $id = null ){
        
	$this->db->select('*');
        $this->db->from('courses_category');
        $this->db->where('fk_course_id',$id);
        $query = $this->db->get();
	//$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result'   => 1,
	    'success'  => 'The record is being sucess full inserted',
	    'data'     => $query->result(),
            'role'     => 0
	    
	]) );
	return false;
	
    }
    
    //--------------------------------------------------------------------------
    
     public function fetch_coursescategory( $id = null ){
        
	$this->db->select('*');
        $this->db->from('course_sub_category');
        $this->db->where('fk_course_c_id',$id);
        $query = $this->db->get();
	$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result'   => 1,
	    'success'  => 'The record is being sucess full inserted',
	    'data'     => $query->result(),
            'role'     => 0
	    
	]) );
	return false;
	
    }
    
    // -------------------------------------------------------------------------
    
    public function create_subject_registration_after_post(){
    
         $course_title = $this->input->post('course_title');
         $category_title = $this->input->post('category_title');
         $subject_title = $this->input->post('subject_title');
         $insert_course_sub_category_table = $this->db->insert('course_sub_category',
                 [
                    'fk_course_c_id'  => $category_title,
                    'subject_title' => $subject_title,
                 ]);
         
        redirect(site_url() . 'courses/subject_add');         
    }
    
    // -------------------------------------------------------------------------
    
    public function course_add(){
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('courses/course_add');
        $this->load->view('include/footer');
	
    }
    
    //--------------------------------------------------------------------------
    
    public function create_course_registration_after_post(){
    
         $course_title = $this->input->post('course_title');
                  
         $insert_course_sub_category_table = $this->db->insert('courses_added',
                 [
                    'course_title' => $course_title,
                 ]);
         
         redirect(site_url() . 'courses/subject_add');         
    }
    
    // -------------------------------------------------------------------------
    
    public function coursecategory_add(){
        
        $this->db->select('*');
        $this->db->from('courses_added');
        $query = $this->db->get();
        $result['result'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('courses/coursecategory_add',$result);
        $this->load->view('include/footer');
	
    }
    
    //--------------------------------------------------------------------------
    
    public function create_coursecategory_registration_after_post(){
    
         $course_title = $this->input->post('course_title');
         $category_title = $this->input->post('category_title');
                  
         $insert_course_sub_category_table = $this->db->insert('courses_category',
                 [
                    'fk_course_id' => $course_title,
                    'category_title' => $category_title,
                 ]);
         
         redirect(site_url() . 'courses/subject_add');         
    }
    
}
