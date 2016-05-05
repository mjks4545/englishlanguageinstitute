<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonthlyTest extends CI_Controller {

    public function test_index(){
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/test_index');
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    public function test_studentdetails($id = null){
        $this->db->select('*');
        $this->db->from('monthly_test');
        $this->db->join('courses','courses.category_subject = monthly_test.subject_id');
        $this->db->join('student','student.s_id = courses.fkstudent_id');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('mark_obtained','mark_obtained.fk_student_id = student.s_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = monthly_test.subject_id');
        $this->db->where('monthly_test.test_id', $id);
        $this->db->where('mark_obtained.fktest_id', $id);

        $query = $this->db->get();
        $result['result'] = $query->result();
       
//        echo '<pre>';
//        print_r($result);
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/test_studentdetails',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function student_testview($id = null){
       $this->db->select('*');
       $this->db->from('monthly_test');
       $this->db->join('courses','courses.category_subject = monthly_test.subject_id');
       $this->db->join('student','student.s_id = courses.fkstudent_id');
       $this->db->join('users','users.u_id = student.fkuser_id');
       $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = monthly_test.subject_id');
       $this->db->where('courses.category_subject',$id);
       $this->db->where('monthly_test.status', 0);
       
       $query = $this->db->get();
       $result['result']           = $query->result();
       if(empty($result['result']))
       {
           redirect(site_url().'monthlytest/result_add');
       }
    
//        echo '<pre>';
//        print_r($result);
//        die();
       
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/student_testview',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function result_add(){
        
        $query  = $this->db->get('course_sub_category');
	$result['result'] = $query->result();
        
//        echo '<pre>';
//        print_r($result);
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_add',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function all_student_testview(){

//        echo '<pre>';
//        print_r($result);
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/student_testview');
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
        
    public function create_monthlytest_result_after_post($id = null) {
        
        $test_name      = $this->input->post('test_name');
        $test_month     = $this->input->post('test_month');
        $test_date      = $this->input->post('test_date');
        $total_marks      = $this->input->post('total_marks');
        $subject_id     = $this->input->post('test_subject');
        $created_date   = mdate("%y-%m-%d");
        
        $insert_monthlytest_table = $this->db->insert('monthly_test',
            [
                'test_name'    => $test_name,
                'test_month'   => $test_month,
                'test_date'    => $test_date,
                'total_marks'  => $total_marks,
                'subject_id'   => $subject_id,
                'created_at'   => $created_date,
            ]);
        
            redirect(site_url() . 'monthlytest/student_testview/'.$subject_id);
        
    }
    //--------------------------------------------------------------------------
    
    public function result_view( $id = null )
    {
       $this->db->select('*');
       $this->db->from('monthly_test');
       $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = monthly_test.subject_id');
       $query = $this->db->get();
       $result['result'] = $query->result();
        
//        echo '<pre>';
//        print_r($result);
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('monthlytest/result_view',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function result_details( $s_id = null, $test_id = null )
    {
        $this->db->select('*');
        $this->db->from('mark_obtained');
        $this->db->join('monthly_test','monthly_test.test_id = mark_obtained.fktest_id');
        $this->db->join('student','student.s_id = mark_obtained.fk_student_id');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('courses','courses.fkstudent_id = student.s_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = courses.category_subject');
        $this->db->where('mark_obtained.fk_student_id', $s_id);
        $this->db->where('mark_obtained.fktest_id', $test_id);

        $query            = $this->db->get();
        $result           = $query->result();
        $result['result'] = $result[0];
       
      
//        $result['test']   = $query->result();
//        
        $this->db->where( 'payment.fkstudent_id', $s_id);
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
        
        
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
    
    //--------------------------------------------------------------------------
    
    public function enter_student_marks($id = null) {
        
	$counter = $this->input->post('counter');
	$created_date   = mdate("%y-%m-%d");
        
        $this->db->where('monthly_test.test_id',$id);
        $query = $this->db->get('monthly_test');
        $result['monthly_test'] = $query->result();
       
	for( $i=1; $i <= $counter; $i++ ){
	    $temp_o_m = 'obtain_marks_' . $i;
	    $temp_s_i = 'student_id_' . $i;
	    $obtain_marks = $this->input->post($temp_o_m);
	    $student_id   = $this->input->post($temp_s_i);
	    $test_id    = $this->input->post('fktest_id');
            $percentage = '';
            
            
	    if( !empty( $obtain_marks ) ){

                $insert_status_monthlytest = $this->db->update('monthly_test',
		    [
			'status'  => 1,
		    ],['test_id' => $id]
		);
                if($result['monthly_test'][0]->total_marks >= $obtain_marks){
                 $calculation = $obtain_marks/$result['monthly_test'][0]->total_marks;
                 $percentage = $calculation * 100;
                                      
                }
                $average = number_format((float)$percentage, 1, '.', '');
               
		$insert_marks = $this->db->insert('mark_obtained',
		    [
			'fk_student_id'  => $student_id,
			'fktest_id'      => $test_id,
			'ob_marks'       => $obtain_marks,
			'percentage'     => $average,
			'created_at'     => $created_date
		    ]
		);
	    }
           
	}
       
        redirect(site_url().'monthlytest/test_index');
    }
    
    //--------------------------------------------------------------------------

}
