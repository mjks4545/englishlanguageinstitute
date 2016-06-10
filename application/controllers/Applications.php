<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

    public function class_time_change(){
        $this->db->select('*');
        $this->db->from('course_sub_category');
        $query = $this->db->get();
        $result['result'] = $query->result(); 
        
//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
//        die();
         
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/class_time_change',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
   
    public function create_time_change_after_post(){
        
        $application_to = $this->input->post('app_to');
        $application_director = $this->input->post('app_director');
        $subject_line = $this->input->post('subject_line');
        $time_change_text = $this->input->post('time_change_app');
        $yours_obediently = $this->input->post('yours_obediently');
        $father_name = $this->input->post('father_name');
        $application_name = $this->input->post('application_name');
        $series = $this->input->post('series');
        $app_timing = $this->input->post('app_timing');
        $teacher = $this->input->post('teacher');
        $applicant_name = $this->input->post('applicant_name');
        $chief_counselor = $this->input->post('chief_counselor');
        $accountant = $this->input->post('accountant');
        $app_date = $this->input->post('app_date');
        $created_date = mdate("%y-%m-%d");
        
        $insert_users_table = $this->db->insert('users',
            [
                'name' => $applicant_name,
                'f_name' => $father_name,
                'user_created_at' => $created_date 
            ]
            );            
            $fkuser_id = $this->db->insert_id();

        $insert_application_table = $this->db->insert('applications',
                [
                    'fkuser_id' => $fkuser_id,
                    'app_to' => $application_to,
                    'app_director' => $application_director,
                    'subject_line' => $subject_line,
                    'application_name' => $application_name,
                    'app_text' =>  $time_change_text,
                    'yours_obediently' => $yours_obediently,
                    'series' => $series,                    
                    'app_created_at' => $created_date
                ]
            );
        redirect(site_url() . 'applications/applications_views');
    }

    //--------------------------------------------------------------------------
    
    public function freeze_up(){
        $this->db->select('*');
        $this->db->from('course_sub_category');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/freeze_up',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function freeze_semester_after_post(){

    $application_to = $this->input->post('app_to');
    $application_director = $this->input->post('app_director');
    $subject_line = $this->input->post('subject_line');
    $freeze_semester_text = $this->input->post('freeze_semester_text');
    $yours_obediently = $this->input->post('yours_obediently');
    $father_name = $this->input->post('father_name');
    $application_name = $this->input->post('application_name');
    $series = $this->input->post('series');
    $applicant_name = $this->input->post('applicant_name');
  
    $created_date = mdate("%y-%m-%d");
    
    $insert_users_table = $this->db->insert('users',
            [
                'name' => $applicant_name,
                'f_name' => $father_name,
                'user_created_at' => $created_date 
            ]
            );            
            $fkuser_id = $this->db->insert_id();

    $insert_application_table = $this->db->insert('applications',
            [
                'fkuser_id' => $fkuser_id,
                'app_to' => $application_to,
                'app_director' => $application_director,
                'subject_line' => $subject_line,
                'application_name' => $application_name,
                'app_text' =>  $freeze_semester_text,
                'yours_obediently' => $yours_obediently,
                'series' => $series,                    
                'app_created_at' => $created_date
            ]
        );

    redirect(site_url() . 'applications/applications_views');
    }
    //--------------------------------------------------------------------------

    public function class_promotion(){
        $this->db->select('*');
        $this->db->from('course_sub_category');
        $query = $this->db->get();
        $result['result'] = $query->result();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/class_promotion',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    
    public function class_promotion_after_post(){

    $application_to = $this->input->post('app_to');
    $application_director = $this->input->post('app_director');
    $subject_line = $this->input->post('subject_line');
    $class_promotion_text = $this->input->post('class_promotion_text');
    $yours_obediently = $this->input->post('yours_obediently');
    $father_name = $this->input->post('father_name');
    $application_name = $this->input->post('application_name');
    $series = $this->input->post('series');
    $applicant_name = $this->input->post('applicant_name');
    $created_date = mdate("%y-%m-%d");

    $insert_users_table = $this->db->insert('users',
            [
                'name' => $applicant_name,
                'f_name' => $father_name,
                'user_created_at' => $created_date 
            ]
            );            
            $fkuser_id = $this->db->insert_id();
             
    $insert_application_table = $this->db->insert('applications',
            [
                'fkuser_id' => $fkuser_id,
                'app_to' => $application_to,
                'app_director' => $application_director,
                'subject_line' => $subject_line,
                'application_name' => $application_name,
                'app_text' =>  $class_promotion_text,
                'yours_obediently' => $yours_obediently,
                'series' => $series,
                'app_created_at' => $created_date
            ]
        );

    redirect(site_url() . 'applications/applications_views');
    }
    
    //----------------------------------------------------

     public function applications_views(){
         
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->order_by("app_id", "desc");
        $this->db->join('users','users.u_id = applications.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category. course_c_s_id = applications.series');
        $query = $this->db->get();
        $result['result'] = $query->result();

//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/applications_view',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------

     public function application_detailview( $id = null){
        
        if($id == null)
        {
            redirect(site_url().'applications/applications_view');
        } 
        $this->db->select('*');
        $this->db->from('applications');
        $this->db->join('users','users.u_id = applications.fkuser_id');
        $this->db->join('course_sub_category','course_sub_category. course_c_s_id = applications.series');
        $this->db->where('applications.app_id',$id);
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];

//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
//        die();
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/application_details',$result);
        $this->load->view('include/footer');
    }
    
    //--------------------------------------------------------------------------
    public function leave_application(){
        $this->db->select('*');
        $this->db->from('course_sub_category');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('chiefcounselor/applications/leave_application',$result);
        $this->load->view('include/footer');
    }
    public function create_leave_application_after_post(){
        $application_to = $this->input->post('app_to');
        $application_director = $this->input->post('app_director');
        $subject_line = $this->input->post('subject_line');
        $time_change_text = $this->input->post('time_change_app');
        $yours_obediently = $this->input->post('yours_obediently');
        $father_name = $this->input->post('father_name');
        $application_name = $this->input->post('application_name');
        $series = $this->input->post('series');
        $app_timing = $this->input->post('app_timing');
        $teacher = $this->input->post('teacher');
        $applicant_name = $this->input->post('applicant_name');
        $chief_counselor = $this->input->post('chief_counselor');
        $accountant = $this->input->post('accountant');
        $app_date = $this->input->post('app_date');
        $created_date = mdate("%y-%m-%d");

        $insert_users_table = $this->db->insert('users',
            [
                'name' => $applicant_name,
                'f_name' => $father_name,
                'user_created_at' => $created_date
            ]
        );
        $fkuser_id = $this->db->insert_id();

        $insert_application_table = $this->db->insert('applications',
            [
                'fkuser_id' => $fkuser_id,
                'app_to' => $application_to,
                'app_director' => $application_director,
                'subject_line' => $subject_line,
                'application_name' => $application_name,
                'app_text' =>  $time_change_text,
                'yours_obediently' => $yours_obediently,
                'series' => $series,
                'app_created_at' => $created_date
            ]
        );
        redirect(site_url() . 'applications/applications_views');
    }
    function status()
    {
        $status = $this->uri->segment(3);
        $app_id = $this->uri->segment(4);
        $user_id = $this->uri->segment(5);
        $status =array(
            'status'=>$status
        );
        $this->db->where('app_id',$app_id);
        if($this->db->update('applications',$status)){
            if($status==1)
            {
                $this->db->select("*");
                $this->db->where('u_id',$user_id);
                $query = $this->db->get('users');
                $result = $query->result();
                foreach($result as $row){
                    $name = $row->name;
                    $contact = $row->contact;
                    $msg ='Your Application have been Accepted';
                }
            }
                if($status==2)
                {
                    $this->db->select("*");
                    $this->db->where('u_id',$user_id);
                    $query = $this->db->get('users');
                    $result = $query->result();
                    foreach($result as $row){
                        $name = $row->name;
                        $contact = $row->contact;
                        $msg ='Your Application have been Reject';
                    }
                }
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
          redirect(site_url().'applications/applications_views');
        }
    }
}
