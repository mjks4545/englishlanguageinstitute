<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonthlyTest extends CI_Controller {

    public function result_add( $id = null )
    {
        
        $query  = $this->db->get('course_sub_category');
	$result['result'] = $query->result();
        $result['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_add',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
        
    public function create_monthlytest_result_after_post() {
        
        $fkstudent_id   = $this->input->post('student_id');
        $test_name      = $this->input->post('test_name');
        $test_month     = $this->input->post('test_month');
        $test_date      = $this->input->post('test_date');
        $test_subject   = $this->input->post('test_subject');
        $obtain_marks   = $this->input->post('obtn_marks');
        $total_marks    = $this->input->post('totl_marks');
        
        if($total_marks >= $obtain_marks){
            
            $caltulation = $obtain_marks/$total_marks;
            $percentage  = $caltulation * 100; 
        }
        $average = number_format((float)$percentage, 1, '.', '');
        
        $created_date   = mdate("%y-%m-%d");
         
        $insert_monthlytest_table = $this->db->insert('monthly_test',
            [
                'fkstudent_id' => $fkstudent_id ,
                'test_name'    => $test_name,
                'test_month'   => $test_month,
                'test_date'    => $test_date,
                'test_subject' => $test_subject,
                'obtn_marks'   => $obtain_marks,
                'totl_marks'   => $total_marks,
                'percentage'   => $average,
                'created_at'   => $created_date,
            ]);
        
            redirect(site_url() . 'monthlytest/result_view');
        
    }
    //--------------------------------------------------------------------------
    
    public function result_view( $id = null )
    {
        $this->db->select('*');
        $this->db->from('monthly_test');
        $this->db->join('student', 'student.s_id = monthly_test.fkstudent_id');
        $this->db->join('users', 'users.u_id = student.fkuser_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = monthly_test.test_subject');
        $query = $this->db->get();
        $result['result'] = $query->result();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_view',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function result_details( $id = null )
    {
        $this->db->select('*');
        $this->db->from('monthly_test');
        $this->db->join('student', 'student.s_id = monthly_test.fkstudent_id');
        $this->db->join('users', 'users.u_id = student.fkuser_id');
        $this->db->join('payment', 'payment.fkuser_id = student.fkuser_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = monthly_test.test_subject');
        $this->db->where('monthly_test.test_id',$id);
       
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];
        $result['test']   = $query->result();
        
        
//        echo '<pre>';
//        print_r($result);
//        die();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_details',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function result_delete($test_id = null) {
        
         $this->db->delete('monthly_test',['test_id' => $test_id]);

        redirect(site_url() . 'monthlytest/result_view');
    }
    
}
