<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSection extends CI_Controller {
    
    public $class_local;
    public function account_index(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/account_index');
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------
    

    public function payment(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/payment/payment');
        $this->load->view('include/footer');
    }

    //--------------------------------------------------------------------------

    public function payment_invoice( $id = null){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('courses','courses.fkstudent_id = student.s_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = courses.category_subject');
        $this->db->where('student.s_id',$id);
                
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];
       
        $this->db->where('fkstudent_id', $result['result']->s_id);
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
//        
//        echo '<pre>';
//        print_r($result);
//        die();
        
        $this->load->view('accountsection/payment/payment_invoice',$result);

        
    }

    //--------------------------------------------------------------------------
    
    public function studentpayment_details( $id = null ){
       
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $this->db->join('courses','courses.fkstudent_id = student.s_id');
        $this->db->join('course_sub_category', 'course_sub_category.course_c_s_id = courses.category_subject');
        $this->db->where('student.s_id',$id);
      
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];
       
        $this->db->where('fkstudent_id', $result['result']->s_id);
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
        
//        echo '<pre>';
//        print_r($result);
//        die();
             
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
            redirect( site_url().'accountsection/studentpayment_details/' . $find_registration );
        }
        
        
    }
    
    //--------------------------------------------------------------------------
    
    public function payment_remaining($id = null){
        
        $this->db->select('*');
        $this->db->from('student'); 
        $this->db->join('users','users.u_id = student.fkuser_id'); 
        $this->db->where('student.s_id',$id);
       
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];
       
        $this->db->where('fkstudent_id', $result['result']->s_id);
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
        
       
              
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/payment/payment_remaining',$result);
        $this->load->view('include/footer');
        
    }

    //--------------------------------------------------------------------------
    
    public function remaining_balance($id = null){
       $name = $this->uri->segment(4);
       $already_remain  = $this->input->post('already_remain');
       $pay_remaining  = $this->input->post('pay_remaining');
       $fee_type       = $this->input->post('fee_type');
       $reason         = $this->input->post('reason');
       $fee_to_be_paid = 1;
       $updated_date   = mdate("%y-%m-%d");
       $insert_payment_table = $this->db->insert('payment',
            [
                'fkstudent_id'           => $id,
                'amount'                 => $pay_remaining,
                'reason'                 => $fee_type,
                'tobepaid_or_paid_fee'   => $fee_to_be_paid,
                'description'            => $reason,
                'payment_created_at'             => $updated_date,
            ]
        );
        $this->sendsms->
        redirect(site_url() . 'accountsection/view_transection/' . $id.'/'.$name.'/'.$already_remain.'/'.$pay_remaining.'/'.$reason );
    }
    
    //--------------------------------------------------------------------------
  function view_transection(){
      $data['id'] = $this->uri->segment(3);
      $data['name'] = $this->uri->segment(4);
      $data['total_remain'] = $this->uri->segment(5);
      $data['paid'] = $this->uri->segment(6);
      $data['reason'] = $this->uri->segment(7);
      $this->load->view('accountsection/view_transection',$data);

  }
    //--------------------------------------------------------------------------

    public function expanses_add(){

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expanses_add');
        $this->load->view('include/footer');

        }
        
    //--------------------------------------------------------------------------
    
    public function expanses_view(){
        
        $this->db->select('*');
        $this->db->from('expenses');
        $this->db->order_by("expense_id", "desc");
        $query             = $this->db->get();
        $result['result']  = $query->result();
        
        $this->db->where('tobepaid_or_paid_fee','1');
        $query = $this->db->get('payment');
        $result['payment'] = $query->result();
        
        /* Find Daily Income/Expense */
        $this->db->where('`payment_created_at`',mdate("%y-%m-%d"));
        $query = $this->db->get('payment');
        $result['payment_day'] = $query->result();
        
        $this->db->where('`expense_created_at`',mdate("%y-%m-%d"));
        $query = $this->db->get('expenses');
        $result['expenses_day'] = $query->result();
        
        /* Find Weekly Income/Expense */     
        $this->db->where('tobepaid_or_paid_fee','1');  
        $this->db->where('payment_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        $query = $this->db->get('payment');
        $result['payment_week'] = $query->result();
        
        $this->db->where('expense_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        $query = $this->db->get('expenses');
        $result['expenses_week'] = $query->result();
        
        /* Find Monthly Income/Expense */
        $this->db->where('`payment_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        $query = $this->db->get('payment');
        $result['payment_month'] = $query->result();
        
        $this->db->where('`expense_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        $query = $this->db->get('expenses');
        $result['expenses_month'] = $query->result();
        

        /* Find Yearly Income/Expense */
        $this->db->where('`payment_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)');
        $query = $this->db->get('payment');
        $result['payment_year'] = $query->result();
        
        $this->db->where('`expense_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR)');
        $query = $this->db->get('expenses');
        $result['expenses_year'] = $query->result();

//        echo '<pre>';
//        print_r($result);
//        die();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expenses_view',$result);
        $this->load->view('include/footer');

        }
        
    //--------------------------------------------------------------------------
    
    public function create_expenses_after_post(){
	
	$created_date   = mdate("%y-%m-%d");
	$counter        = $this->input->post('number');
	$counter_d	= $this->input->post('number-d');
	
	for( $i=1; $i <= $counter ; $i++ ){
		
	    $patty_size      = 'item_name_' . $i;
	    $number_of_items = 'v_number_' . $i;
	    $price           = 'item_amount_' . $i;
	
	    $item_name      = $this->input->post($patty_size);
	    $v_number       = $this->input->post($number_of_items);
	    $item_amount    = $this->input->post($price);
            if ( empty($item_name) || empty($v_number) || empty($item_amount)){
                
            }else{
                $insert_expenses_create = $this->db->insert('expenses',
                    [
                        'item_name'   => $item_name,    
                        'v_number'    => $v_number,    
                        'item_amount' => $item_amount,    
                        'expense_created_at'  => $created_date,    
                    ]);
            }
	}
	
	for( $i=1; $i <= $counter_d ; $i++ ){
	    
	    $patty_size      = 'item_name_d_' . $i;
	    $price           = 'item_amount_d_' . $i;
	
	    $item_name      = $this->input->post($patty_size);
	    $item_amount    = $this->input->post($price);
            if (empty($item_name) || empty($item_amount)){
                
            }else{
                $insert_expenses_create = $this->db->insert('expenses',
                    [
                        'item_name'   => $item_name,        
                        'item_amount' => $item_amount,    
                        'expense_created_at'  => $created_date,    
                    ]);
            }
	}
	
	redirect(site_url() . 'accountsection/expanses_view');

        
    }    
   
    //--------------------------------------------------------------------------
    
    public function expanses_index(){

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expanses_index');
        $this->load->view('include/footer');

        }
    
    

}
