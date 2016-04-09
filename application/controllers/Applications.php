<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

    public function class_time_change(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/class_time_change');
        $this->load->view('include/footer');
    }
    
    public function create_time_change_after_post(){
        
        $application_to = $this->input->post('app_to');
        $application_director = $this->input->post('app_director');
        $subject_line = $this->input->post('subject_line');
        $time_change_text = $this->input->post('time_change_app');
        $yours_obediently = $this->input->post('yours_obediently');
        $father_name = $this->input->post('father_name');
        $series = $this->input->post('series');
        $app_timing = $this->input->post('app_timing');
        $teacher = $this->input->post('teacher');
        $applicant_name = $this->input->post('applicant_name');
        $chief_counselor = $this->input->post('chief_counselor');
        $accountant = $this->input->post('accountant');
        $app_date = $this->input->post('app_date');
        $created_date = mdate("%y-%m-%d");

        $insert_application_table = $this->db->insert('application',
                [
                    'app_to' => $application_to,
                    'app_director' => $application_director,
                    'subject_line' => $subject_line,
                    'yours_obediently' => $yours_obediently,
                    'applicant_name' => $applicant_name,
                    'father_name' => $father_name,
                    'series' => $series,
                    'app_timing' => $app_timing,
                    'teacher' => $teacher,
                    'chief_counselor' => $chief_counselor,
                    'accountant' => $accountant,
                    'app_date' => $app_date,                    
                    'created_at' => $created_date
                ]
            );
        
            $fkapp_id = $this->db->insert_id();
           
        $insert_time_change_app_table = $this->db->insert('time_changing_app',
            [
                'fkapp_id' => $fkapp_id,
                'time_change_text' =>  $time_change_text,
                'created_at' => $created_date
            ]
        );
        redirect(site_url() . 'applications/class_time_change');
    }

    
   
    //-----------------------------------------------

    public function freeze_up(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/freeze_up');
        $this->load->view('include/footer');
    }
    
    public function freeze_semester_after_post(){

    $application_to = $this->input->post('app_to');
    $application_director = $this->input->post('app_director');
    $subject_line = $this->input->post('subject_line');
    $freeze_semester_text = $this->input->post('freeze_semester_text');
    $yours_obediently = $this->input->post('yours_obediently');
    $father_name = $this->input->post('father_name');
    $series = $this->input->post('series');
    $app_timing = $this->input->post('app_timing');
    $teacher = $this->input->post('teacher');
    $applicant_name = $this->input->post('applicant_name');
    $chief_counselor = $this->input->post('chief_counselor');
    $accountant = $this->input->post('accountant');
    $app_date = $this->input->post('app_date');
    $created_date = mdate("%y-%m-%d");

    $insert_application_table = $this->db->insert('application',
            [
                'app_to' => $application_to,
                'app_director' => $application_director,
                'subject_line' => $subject_line,
                'yours_obediently' => $yours_obediently,
                'applicant_name' => $applicant_name,
                'father_name' => $father_name,
                'series' => $series,
                'app_timing' => $app_timing,
                'teacher' => $teacher,
                'chief_counselor' => $chief_counselor,
                'accountant' => $accountant,
                'app_date' => $app_date,                    
                'created_at' => $created_date
            ]
        );

        $fkapp_id = $this->db->insert_id();
       //echo $fkapp_id;die();
    $insert_freeze_semester_table = $this->db->insert('freeze_semester_app',
        [
            'fkapp_id' => $fkapp_id,
            'freeze_semester_text' =>  $freeze_semester_text,
            'created_at' => $created_date
        ]
    );
    redirect(site_url() . 'applications/freeze_up');
    }
    //-----------------------------------------------

    public function class_promotion(){
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('applications/class_promotion');
        $this->load->view('include/footer');
    }
    
    public function class_promotion_after_post(){

    $application_to = $this->input->post('app_to');
    $application_director = $this->input->post('app_director');
    $subject_line = $this->input->post('subject_line');
    $class_promotion_text = $this->input->post('class_promotion_text');
    $yours_obediently = $this->input->post('yours_obediently');
    $father_name = $this->input->post('father_name');
    $series = $this->input->post('series');
    $app_timing = $this->input->post('app_timing');
    $teacher = $this->input->post('teacher');
    $applicant_name = $this->input->post('applicant_name');
    $chief_counselor = $this->input->post('chief_counselor');
    $accountant = $this->input->post('accountant');
    $app_date = $this->input->post('app_date');
    $created_date = mdate("%y-%m-%d");

    $insert_application_table = $this->db->insert('application',
            [
                'app_to' => $application_to,
                'app_director' => $application_director,
                'subject_line' => $subject_line,
                'yours_obediently' => $yours_obediently,
                'applicant_name' => $applicant_name,
                'father_name' => $father_name,
                'series' => $series,
                'app_timing' => $app_timing,
                'teacher' => $teacher,
                'chief_counselor' => $chief_counselor,
                'accountant' => $accountant,
                'app_date' => $app_date,                    
                'created_at' => $created_date
            ]
        );

        $fkapp_id = $this->db->insert_id();
      
    $insert_class_promotion_table = $this->db->insert('class_promotion_app',
        [
            'fkapp_id' => $fkapp_id,
            'class_promotion_text' =>  $class_promotion_text,
            'created_at' => $created_date
        ]
    );
    redirect(site_url() . 'applications/class_promotion');
    }


}
