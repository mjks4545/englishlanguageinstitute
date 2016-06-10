<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {
    
    public function add_expense(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expanses_add');
        $this->load->view('include/footer');
    }
        
    //----------------------------------------------------------------------
      
    public function add_new_expense(){

        $this->load->model('expense_model');
        $result = $this->expense_model->add_new_expense();
        echo $result;

        }
        
    //----------------------------------------------------------------------
    
    public function view_expenses(){

        $this->load->model('expense_model');
        $result = $this->expense_model->view_expenses();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/expanses/expenses_view',$result);
        $this->load->view('include/footer');

        }
        
    //----------------------------------------------------------------------
    
}

