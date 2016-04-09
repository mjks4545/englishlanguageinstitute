<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountsection extends CI_Controller {

    public function student_registration(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('accountsection/student_registration');
        $this->load->view('include/footer');
    }
    public function register_student_after_post()
    {

        $student_name = $this->input->post('name');
        $father_name = $this->input->post('f_name');
        $age = $this->input->post('age');
        $registration_number = $this->input->post('reg_number');
        $nationality = $this->input->post('nationality');
        $profession = $this->input->post('profession');
        $qualification = $this->input->post('qualification');
        $email = $this->input->post('email');
        $guardian_number = $this->input->post('g_number');
        $contact = $this->input->post('number');
        $course_detail = $this->input->post('courses');
        $created_date = mdate("%y-%m-%d");

        $course_name = $this->input->post('courses');
        $course_duration = $this->input->post('course_duration');
        $course_starting = $this->input->post('starting_date');
        $course_ending = $this->input->post('completion_date');

        $admission_fee = $this->input->post('admission_fee');
        $monthly_fee = $this->input->post('monthly_fee');
        $amount_received = $this->input->post('amount_received');
        $received_date = $this->input->post('received_date');
        $remaining_fee = $this->input->post('balance');
        $next_fee_date = $this->input->post('next_fee_date');


        $this->db->where('email', $email);
        $this->db->or_where('contact', $contact);
        $query = $this->db->get('users');
        $obj = $query->result();

        if (empty($obj)) {
            $insert_user_table = $this->db->insert('users',
                [
                    'name' => $student_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'created_at' => $created_date
                ]
            );
            $fkuser_id = $this->db->insert_id();
        } else {
            $fkuser_id = $obj[0]->u_id;
        }
        $insert_student_table = $this->db->insert('student',
            [
                'fkuser_id' => $fkuser_id,
                'reg_number' => $registration_number,
                'qualification' => $qualification,
                'profession' => $profession,
                'guardian_number' => $guardian_number,
                'courses' => $course_detail,
                'created_at' => $created_date
            ]
        );


        $insert_courses_table = $this->db->insert('courses',
            [
                'fkuser_id' => $fkuser_id,
                'course_name' => $course_name,
                'course_duration' => $course_duration,
                'starting_date' => $course_starting,
                'ending_date' => $course_ending,
                'created_at' => $created_date
            ]
        );

        $insert_payment_table = $this->db->insert('payment',
            [
                'fkuser_id' => $fkuser_id,
                'admission_fee' => $admission_fee,
                'monthly_fee' => $monthly_fee,
                'received_fee' => $amount_received,
                'remaining_fee' => $remaining_fee,
                'received_date' => $received_date,
                'next_fee_date' => $next_fee_date,
                'created_at' => $created_date
            ]
        );

        redirect(site_url() . 'accountsection/student_registration');
    }



}
