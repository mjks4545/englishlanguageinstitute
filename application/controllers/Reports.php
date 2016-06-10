<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    
    
    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/reports_index');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
    public function daily_index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/daily_reports/daily_index');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------

    public function daily_applications_reports()
    {    

        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('users','users.u_id = applications.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = applications.series');
        $this->db->where('applications.app_created_at',mdate("%y-%m-%d"));
        
        $query = $this->db->get();
        $result['result'] = $query->result();
       
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/daily_reports/applications_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------

    public function daily_visitor_reports()
    {    

        $this->db->select('*');
        $this->db->from('visitor');
        $this->db->join('users','users.u_id = visitor.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = visitor.courses');
        $this->db->where('visitor.visitor_created_at',mdate("%y-%m-%d"));
        
        $query = $this->db->get();
        $result['result'] = $query->result();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/daily_reports/visitors_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------

    public function daily_finance_reports()
    {

        $this->db->where('`payment_created_at`',mdate("%y-%m-%d"));
        $this->db->where('tobepaid_or_paid_fee',1);
        $query = $this->db->get('payment');
        $result['payment_day'] = $query->result();

        $this->db->where('`expense_created_at`',date('Y-m-d'));
        $this->db->order_by('expense_id','desc');
        $query = $this->db->get('expenses');
        $result['expenses_day'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/daily_reports/profitloss_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
   
    public function weekly_index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/weekly_reports/weekly_index');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
   
    public function weekly_applications_reports()
    {   
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('users','users.u_id = applications.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = applications.series');
        $this->db->where('applications.app_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        
        $query = $this->db->get();
        $result['result'] = $query->result();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/weekly_reports/applications_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
   
    public function weekly_visitor_reports()
    {   
        $this->db->select('*');
        $this->db->from('visitor');
        $this->db->join('users','users.u_id = visitor.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = visitor.courses'); 
        $this->db->where('visitor.visitor_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        
        $query = $this->db->get('');
        $result['result'] = $query->result();
        
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/weekly_reports/visitors_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
   
    public function weekly_finance_reports()
    {   
        $this->db->where('tobepaid_or_paid_fee','1');  
        $this->db->where('payment_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        $query = $this->db->get('payment');
        $result['payment_week'] = $query->result();
        
        $this->db->where('expense_created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        $query = $this->db->get('expenses');
        $result['expenses_week'] = $query->result();
        
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/weekly_reports/profitloss_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
   
    public function monthly_index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/monthly_reports/monthly_index');
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
    public function monthly_applications_reports()
    {   
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('users','users.u_id = applications.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = applications.series');
        $this->db->where('applications.app_created_at >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        
        $query = $this->db->get();
        $result['result'] = $query->result();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/monthly_reports/applications_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
    public function monthly_visitor_reports()
    {   
        $this->db->select('*');
        $this->db->from('visitor');
        $this->db->join('users','users.u_id = visitor.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category.course_c_s_id = visitor.courses');
        $this->db->where('visitor.visitor_created_at >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        
        $query = $this->db->get();
        $result['result'] = $query->result();
       
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/monthly_reports/visitors_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
  
    public function monthly_finance_reports()
    {   
         $this->db->where('`payment_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        $query = $this->db->get('payment');
        $result['payment_month'] = $query->result();
        
        $this->db->where('`expense_created_at` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)');
        $query = $this->db->get('expenses');
        $result['expenses_month'] = $query->result();
       
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reports/monthly_reports/profitloss_reports',$result);
        $this->load->view('include/footer');
    }

    // -------------------------------------------------------------------------
    
 
}


