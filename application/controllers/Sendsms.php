<?php

class Sendsms extends CI_Controller
{

    function send_sms()
    {
        $contact = $this->uri->segment(3);
        $name = $this->uri->segment(4);
        $msg = $this->input->post('msg');
        $username = 'sstechnology';
        $password = 'sstechnology12@gmail.com';
        $to = $contact;
        $from = 'sstechny';
        $msg = '\n' . $msg;
        $message = $name . $msg;
        $url = "http://Lifetimesms.com/plain?username=" . $username . "&password=" . $password .
            "&to=" . $to . "&from=" . urlencode($from) . "&message=" . urlencode($message) . " ";
//Curl Start
        $ch = curl_init();
        $timeout = 30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $response = curl_exec($ch);
        curl_close($ch);
        redirect('admin/view_balance');

    }

    function send_smsallblnc()
    {
        $msg = $this->input->post('msg');
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

                    $name = $user->name;
                    $contact = $user->contact;
                    $username = 'sstechnology';
                    $password = 'sstechnology12@gmail.com';
                    $to = $contact;
                    $from = 'sstechny';
                    $msg = '\n' . $msg;
                    $message = $name . $msg;
                    $url = "http://Lifetimesms.com/plain?username=" . $username . "&password=" . $password .
                        "&to=" . $to . "&from=" . urlencode($from) . "&message=" . urlencode($message) . " ";
//Curl Start
                    $ch = curl_init();
                    $timeout = 30;
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                    $response = curl_exec($ch);
                    curl_close($ch);

                }
            }
        }
        redirect('admin/view_balance');
    }

    function new_admission($name, $contact, $payment)
    {
        $username = 'sstechnology';
        $password = 'sstechnology12@gmail.com';
        $to = $contact;
        $from = 'sstechny';
        $msg = '\n' . 'Dear You Have Paid Total Fee';
        $payment = '\n' . $payment;
        $message = $name . $msg . $payment;
        $url = "http://Lifetimesms.com/plain?username=" . $username . "&password=" . $password .
            "&to=" . $to . "&from=" . urlencode($from) . "&message=" . urlencode($message) . " ";
//Curl Start
        $ch = curl_init();
        $timeout = 30;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $response = curl_exec($ch);
        curl_close($ch);


    }
}


?>