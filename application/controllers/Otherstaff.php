<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OtherStaff extends CI_Controller {
    
    public function staff_index()
    {
        $this->load->model('add_new_staff');
        $result['result'] = $this->add_new_staff->view_staff();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/otherstaff/view_staff',$result);
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    
    public function salary_details()
    {
        $id = $this->uri->segment(3);
        $this->load->model('add_new_staff');
        $data['result'] = $this->add_new_staff->salary_details($id);
        $data['staff'] = $this->add_new_staff->view_staff_single($id);
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/otherstaff/salary_details',$data);
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    public function edit_staff()
    {
        $id = $this->uri->segment(3);
        $this->load->model('add_new_staff');
        $data['result'] = $this->add_new_staff->edit_staff($id);
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/otherstaff/edit_staff',$data);
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    
    public function add_staff_form(){
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/otherstaff/add_staff');
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function add_new_staff_after_post(){
        
        $this->load->model('add_new_staff');
        $result = $this->add_new_staff->add_new_staff_after_post();
//        echo $result;
                   
    }
    
    //--------------------------------------------------------------------------
    
    public function update_staff_after_post(){
        $id = $this->uri->segment(3);
        $this->load->model('add_new_staff');
        $result = $this->add_new_staff->update_staff_after_post($id);
//        echo $result;
                   
    }
    
    //--------------------------------------------------------------------------
    public function delete_staff(){
        $id = $this->uri->segment(3);
        $this->load->model('add_new_staff');
        $result = $this->add_new_staff->delete_staff($id);
//        echo $result;
                  
    }
    
    //--------------------------------------------------------------------------
    public function salary_payment(){
        $id = $this->uri->segment(3);
        $this->load->model('add_new_staff');
        $data['result'] = $this->add_new_staff->staff_salary($id);
        
//        echo '<pre>';print_r($result);die();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/otherstaff/salary_payment',$data);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function add_staff_salary_after_post(){
        $this->load->model('add_new_staff');
        $result['result'] = $this->add_new_staff->add_staff_salary_after_post();
//        echo $result;
                   
    }
//------------------------------------------------------------------------------
function payment_slip($result){
    
    $data['id'] = $this->uri->segment(3);
    $data['name'] = $this->uri->segment(4);
    $data['paid_month'] = $this->uri->segment(5);
    $data['total_salary'] = $this->uri->segment(6);
    $data['amount_reason'] = $this->uri->segment(7);
    $data['paid_salary'] = $this->uri->segment(8);
    $data['remain_salary'] = $this->uri->segment(9);
    $data['created_at']= $this->uri->segment(10);
    //print_r($data);
        $this->load->view('admin/otherstaff/payment_slip',$data);
    
    }
}
