<?php
class Expense_model extends CI_Model{
    
    public function add_new_expense(){

            $voucher_number      = $this->input->post('v_number');
            $payment_date        = $this->input->post('payment_date');
            $cash_paid_to        = $this->input->post('paid_to');
            $rupees              = $this->input->post('rupees');
            $on_account_of       = $this->input->post('account_of');
            $description         = $this->input->post('description');
            $payment_mode        = $this->input->post('payment_mode');
            $expense_created_at  = date('Y-m-d');
            $userdata = $this->session->userdata('id') ;
            $insert_expense_table = $this->db->insert('expenses',
                [
                    'voucher_number'      => $voucher_number,
                    'payment_date'        => $payment_date,
                    'cash_paid_to'        => $cash_paid_to,
                    'rupees'              => $rupees,
                    'on_account_of'       => $on_account_of,
                    'description'         => $description,
                    'payment_mode'        => $payment_mode,
                    'approved_by'         => $userdata,
                    'expense_created_at'  => $expense_created_at,

                ]);
            if($insert_expense_table){
                redirect(site_url() . 'expenses/view_expenses');
            }else{
                redirect(site_url() . 'expenses/add_expense');
                return 0;
            }
        }
    
    //--------------------------------------------------------------------------
    
    public function view_expenses(){
        
        $this->db->select('*');
        $this->db->from('expenses');
        $this->db->order_by('expense_id','desc');
        $this->db->join('users','users.u_id = expenses.approved_by');
        
        $query            = $this->db->get();
        $result['result'] = $query->result();
        return $result;
    }
        
}

