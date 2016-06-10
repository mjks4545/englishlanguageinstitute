<?php
class Admin_m extends CI_Model{

    /*function view_balance()
    {
        $this->db->select('*');
        $this->db->order_by('p_id','desc');
        $query = $this->db->get('payment');
        $data = $query->result();

        $newdata = [];

        foreach ( $data as $data ){

            if(in_array( $data->fkstudent_id,$newdata ) ){
                continue;
            }
            $newdata[] = $data->fkstudent_id;
            $newdata1[] = $data;

        }
        return $newdata1;
    }*/
    function unpaid_fee()
    {
        $this->db->select("*");
        $this->db->where('tobepaid_or_paid_fee','0');
        $query = $this->db->get('payment');
        $data = $query->result();
        return $data;
    }
    function paid_fee()
    {
        $this->db->select("*");
        $this->db->where('tobepaid_or_paid_fee','1');
        $query = $this->db->get('payment');
        $data = $query->result();
        return $data;
    }
    function all_students()
    {
        $this->db->select('*');
        $query = $this->db->get('student');
        $data = $query->result();
        return $data;
    }
    function all_users()
    {
        $this->db->select('*');
        $query = $this->db->get('users');
        $data = $query->result();
        return $data;
    }
}


?>