<?php
$this->db->select("*");
$query = $this->db->get('student');
$students = $query->result();
foreach ($students as $student) {
    $this->db->select("*");
    $this->db->where('tobepaid_or_paid_fee', 0);
    $this->db->where('fkstudent_id', $student->s_id);
    $query = $this->db->get('payment');
    $u_payments = $query->result();
    $total_upay = 0;
    foreach ($u_payments as $u_payment) {
        $total_upay = $total_upay + $u_payment->amount;
    }
    // for paid:
    $this->db->select("*");
    $this->db->where('tobepaid_or_paid_fee', 1);
    $this->db->where('fkstudent_id', $student->s_id);
    $query = $this->db->get('payment');
    $p_payments = $query->result();
    $total_pay = 0;
    foreach ($p_payments as $p_payment) {
        $total_pay = $total_pay + $p_payment->amount;

    }
    if ($total_upay - $total_pay != 0) {
        $this->db->select("*");
        $this->db->where('u_id', $student->fkuser_id);
        $query = $this->db->get('users');
        $users = $query->result();
        foreach ($users as $user) {
            echo ($total_upay - $total_pay).'/' . $student->s_id . '/' . $user->name . "<br/>";
         }
        }
}
