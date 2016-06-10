<?php
class Add_new_staff extends CI_Model{

    public function add_new_staff_after_post(){
        
        $staff_name          = $this->input->post('name');
        $staff_father_name   = $this->input->post('f_name');
        $staff_qualification = $this->input->post('qualification');
        $staff_profession    = $this->input->post('profession');
        $staff_address       = $this->input->post('address');
        $staff_salary        = $this->input->post('salary');
        $staff_contact       = $this->input->post('number');
        $staff_contracttime  = $this->input->post('contract_time');
        $job_hours           = $this->input->post('job_hours');
        $appointment_date    = $this->input->post('appoint_date');
        $created_at          = date('Y-m-d');
        
        $insert_staff_table = $this->db->insert('staff',
            [
                'name'              => $staff_name,
                'father_name'       => $staff_father_name,
                'qualification'     => $staff_qualification,
                'profession'        => $staff_profession,
                'address'           => $staff_address,
                'salary'            => $staff_salary,
                'contact'           => $staff_contact,
                'contract_time'     => $staff_contracttime,
                'job_hours'         => $job_hours,
                'appointment_date'  => $appointment_date,
                'created_at'        => $created_at,

            ]);
        if($insert_staff_table){
            redirect(site_url() . 'otherstaff/staff_index');
        }else{
            redirect(site_url() . 'otherstaff/add_staff');
        }
    }
    
    //--------------------------------------------------------------------------
    
    public function add_staff_salary_after_post(){        
        $id= $this->input->post('staff_id');
        $name= TRIM($this->input->post('name'));
        // for inserting
       $total_salary     = $this->input->post('salary');
        $paid_month       = $this->input->post('paid_month');
        $amount_reason    = $this->input->post('amount_reason');
        $paid_salary      = $this->input->post('payed_salary');
        $created_at       = date('Y-m-d');
        
        // for chechking and taking old salary record
        $this->db->select("*");
        $this->db->where("fkstaff_id",$id);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get("staff_salaries");
        if($query->num_rows()>0){
         $result = $query->result();
          foreach($result as $r){
           $last_paid = $r->paid_month;
           $remaining_salary = $r->remaining_salary;
          if($last_paid==$paid_month){
              $remaining_salary=($remaining_salary)-($paid_salary);
              $insert_staff_salaries_table = $this->db->insert('staff_salaries',
            [
                'fkstaff_id'       => $id,
                'paid_month'     => $paid_month,
                'total_salary'     => $total_salary,
                'amount_reason'    => $amount_reason,
                'payed_salary'     => $paid_salary,
                'remaining_salary' =>$remaining_salary ,
                'created_at'       => $created_at,

            ]);
              
              
          } 
          if($last_paid!==$paid_month){
               $remaining_salary=($total_salary)+($remaining_salary)-($paid_salary);
              $insert_staff_salaries_table = $this->db->insert('staff_salaries',
            [
                'fkstaff_id'       => $id,
                'paid_month'     => $paid_month,
                'total_salary'     => $total_salary,
                'amount_reason'    => $amount_reason,
                'payed_salary'     => $paid_salary,
                'remaining_salary' =>$remaining_salary ,
                'created_at'       => $created_at,

            ]);
              
          }
        }// end of foreach
        
          } // end of num if
        else{
             $remaining_salary=($total_salary)-($paid_salary);
              $insert_staff_salaries_table = $this->db->insert('staff_salaries',
            [
                'fkstaff_id'       => $id,
                'paid_month'     => $paid_month,
                'total_salary'     => $total_salary,
                'amount_reason'    => $amount_reason,
                'payed_salary'     => $paid_salary,
                'remaining_salary' =>$remaining_salary ,
                'created_at'       => $created_at,

            ]);
             
         }
       
       if($insert_staff_salaries_table){
           redirect(site_url().'otherstaff/payment_slip/'.$id.'/'.$name.'/'.$paid_month.'/'.$total_salary.'/'.$amount_reason.'/'.$paid_salary.'/'.$remaining_salary.'/'.$created_at);
       }else{
            return false;
        }
    
 }
    //--------------------------------------------------------------------------
    
    public function add_teacher_salary_after_post(){        
        $id= $this->input->post('teacher_id');
        $name= TRIM($this->input->post('name'));
        // for inserting
        $total_salary     = $this->input->post('salary');
        $paid_month       = $this->input->post('paid_month');
        $amount_reason    = $this->input->post('amount_reason');
        $paid_salary      = $this->input->post('payed_salary');
        $created_at       = date('Y-m-d');
        
        // for chechking and taking old salary record
        $this->db->select("*");
        $this->db->where("fkteacher_id",$id);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get("teacher_salaries");
        if($query->num_rows()>0){
         $result = $query->result();
          foreach($result as $r){
           $last_paid = $r->paid_month;
           $remaining_salary = $r->remaining_salary;
          if($last_paid==$paid_month){
              $remaining_salary=($remaining_salary)-($paid_salary);
              $insert_teacher_salaries_table = $this->db->insert('teacher_salaries',
            [
                'fkteacher_id'       => $id,
                'paid_month'         => $paid_month,
                'total_salary'       => $total_salary,
                'amount_reason'      => $amount_reason,
                'paid_salary'        => $paid_salary,
                'remaining_salary'   => $remaining_salary ,
                'created_at'         => $created_at,

            ]);          
          } 
          if($last_paid!==$paid_month){
               $remaining_salary=($total_salary)+($remaining_salary)-($paid_salary);
              $insert_teacher_salaries_table = $this->db->insert('teacher_salaries',
            [
                'fkteacher_id'       => $id,
                'paid_month'         => $paid_month,
                'total_salary'       => $total_salary,
                'amount_reason'      => $amount_reason,
                'paid_salary'        => $paid_salary,
                'remaining_salary'   =>$remaining_salary ,
                'created_at'         => $created_at,

            ]);
              
          }
        }// end of foreach
        
          } // end of num if
        else{
             $remaining_salary=($total_salary)-($paid_salary);
              $insert_teacher_salaries_table = $this->db->insert('teacher_salaries',
            [
                'fkteacher_id'       => $id,
                'paid_month'         => $paid_month,
                'total_salary'       => $total_salary,
                'amount_reason'      => $amount_reason,
                'paid_salary'        => $paid_salary,
                'remaining_salary'   =>$remaining_salary ,
                'created_at'         => $created_at,

            ]);
             
         }
       
       if($insert_teacher_salaries_table){
           redirect(site_url().'admin/teacherpayment_slip/'.$id.'/'.$name.'/'.$paid_month.'/'.$total_salary.'/'.$amount_reason.'/'.$paid_salary.'/'.$remaining_salary.'/'.$created_at);
       }else{
            return false;
        }
    
 }
    
    //--------------------------------------------------------------------------
    
    public function update_staff_after_post($id){
        
        $staff_name          = $this->input->post('name');
        $staff_father_name   = $this->input->post('f_name');
        $staff_qualification = $this->input->post('qualification');
        $staff_profession    = $this->input->post('profession');
        $staff_address       = $this->input->post('address');
        $staff_salary        = $this->input->post('salary');
        $staff_contact       = $this->input->post('number');
        $staff_contracttime  = $this->input->post('contract_time');
        $job_hours           = $this->input->post('job_hours');
        $appointment_date    = $this->input->post('appoint_date');
        $updated_at          = date('Y-m-d');
        $this->db->where('id',$id);
        $updated_staff_table = $this->db->update('staff',
            [
                'name'              => $staff_name,
                'father_name'       => $staff_father_name,
                'qualification'     => $staff_qualification,
                'profession'        => $staff_profession,
                'address'           => $staff_address,
                'salary'            => $staff_salary,
                'contact'           => $staff_contact,
                'contract_time'     => $staff_contracttime,
                'job_hours'         => $job_hours,
                'appointment_date'  => $appointment_date,
                'updated_at'        => $updated_at,

            ]);
        if($updated_staff_table){
            redirect(site_url() . 'otherstaff/staff_index');
        }else{
            redirect(site_url() . 'otherstaff/add_staff');
        }
    }
    
    //--------------------------------------------------------------------------
    
    public function view_staff(){
        
        $data   = $this->db->get('staff');
        $result = $data->result(); 
        return $result;
    }
    //-----------------------------------------------------------------------
    public function view_staff_single($id){
        $this->db->where('id',$id);
        $data   = $this->db->get('staff');
        $result = $data->result(); 
        return $result;
    }
    
   //--------------------------------------------------------------------------
    
    public function view_teacher_single($id){
        $this->db->where('t_id',$id);
        $data   = $this->db->get('teacher');
        $result = $data->result(); 
        return $result;
    }
    
   //--------------------------------------------------------------------------
    
    public function salary_details($id){
        $this->db->select('*');
        //$this->db->join('staff_salaries','staff_salaries.fkstaff_id = staff.id');
        $this->db->where('fkstaff_id',$id);        
        $query= $this->db->get('staff_salaries');
        $data = $query->result();
          return $data;
    }
   
//--------------------------------------------------------------------------
    
    public function teachersalary_details($id){
        $this->db->select('*');
        //$this->db->join('staff_salaries','staff_salaries.fkstaff_id = staff.id');
        $this->db->where('fkteacher_id',$id);        
        $query= $this->db->get('teacher_salaries');
        $data = $query->result();
          return $data;
    }
    
    //--------------------------------------------------------------------------
    
    public function edit_staff($id){
        $this->db->where('id',$id);
        $data   = $this->db->get('staff');
        $result = $data->result();
        return $result;
    }
    
    //--------------------------------------------------------------------------
    
    public function staff_salary($id){
        $this->db->where('id',$id);
        $data   = $this->db->get('staff');
        $result = $data->result();
        return $result;
    }
   
    //--------------------------------------------------------------------------
    
    public function teacher_salary($id){
        
        $this->db->select('*');
        $this->db->from('teacher');
        $this->db->join('users','users.u_id = teacher.fkuser_id');
        $this->db->where('t_id',$id);
        $data = $this->db->get();
        $result = $data->result();
        return $result;
    }
    //--------------------------------------------------------------------------
    
    public function delete_staff($id){
        
        $this->db->delete('staff',['id' => $id]);
        $this->db->delete('staff_salaries',['fkstaff_id' => $id]);
        redirect(site_url() . 'otherstaff/staff_index');
    }
}


?>