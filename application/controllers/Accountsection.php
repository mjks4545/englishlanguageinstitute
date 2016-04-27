<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSection extends CI_Controller {

    public function payment(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/payment/payment');
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    
    public function studentpayment_details( $id = null ){
       
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('users','users.u_id = student.fkuser_id');
     
        $this->db->join('courses','courses.fkuser_id = student.fkuser_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = courses.category_subject');
        $this->db->where('student.s_id',$id);
       
        
        
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];
        
                
        echo $result['result']->u_id;
        $this->db->where( 'fkuser_id', $result['result']->u_id );
        $query  = $this->db->get('payment');
        $result['payment'] = $query->result();
      
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/payment/studentpayment_details',$result);
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    
    public function student_data($id = null){
        
        $find_registration = $this->input->post('find_registration');
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('student.s_id',$find_registration);
        
        $query = $this->db->get();
        $result = $query->result();
        
        if( empty( $result ) ){
            redirect(site_url().'accountsection/payment/payment');
        }else{
            redirect( site_url().'accountsection/payment/studentpayment_details/' . $find_registration );
        }
        
        
    }
    
    //--------------------------------------------------------------------------
    
    public function remaining_balance($id = null){
        
        $pay_remaining = $this->input->post('pay_remaining');
        $this->db->select('*');
        $this->db->from('payment');
        $this->db->join('student','student.fkuser_id = payment.fkuser_id');
        //$this->db->where('student.s_id',$id);
        
        
        $query = $this->db->get();
        $result = $query->result();
        
//        echo '<pre>';
//        print_r($result);
//        die();
        
        
    }
    
    //--------------------------------------------------------------------------
    
    public function expanses(){

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expanses');
        $this->load->view('include/footer');

        }
    
    

}
