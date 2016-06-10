<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reception extends CI_Controller {
    function check(){
        if($_SESSION['role']==''){
            redirect('home/');
        }
    }

    public function index()
    {
        $this->check();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reception/reception_home');
        $this->load->view('include/footer');
    }
    
    //.........................................................
    
    public function visitor_add()
    { 
        $this->check();
        $query  = $this->db->get('countries');
	$result['result'] = $query->result();
        
        $this->db->select('*');
        $this->db->from('courses_category');
        $query = $this->db->get();
        $result['result_1'] = $query->result();
       
        
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reception/reception',$result);
        $this->load->view('include/footer');
    }


    //.................. visitor form started ...................

    public function create_reception_post(){
        $this->check();
        $visitor_name = $this->input->post('name');
        $father_name = $this->input->post('f_name');
        //$age = $this->input->post('age');
        $profession = $this->input->post('profession');
        //$email = $this->input->post('email');
        $contact = $this->input->post('number');
        //$nic = $this->input->post('nic');
        $desire_courses = $this->input->post('desire_course');
        /*$country = $this->input->post('country');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $address = $this->input->post('address');*/
        $status = $this->input->post('status');
        $description = $this->input->post('description');
        $created_date = mdate("%y-%m-%d");


        $this->db->where('contact', $contact);
        $query = $this->db->get('users');
        $obj = $query->result();

        if(empty($obj)) {
            $insert_user_table = $this->db->insert('users',
                [
                    'name' => $visitor_name,
                    'f_name' => $father_name,
                    'contact' => $contact,
                    /*'country_id' => $country,
                    'province_id' => $province,
                    'city_id' => $city,
                    'address' => $address,*/
                    'description' => $description,
                    'user_created_at' => $created_date
                ]
            );
            $fkuser_id = $this->db->insert_id();
        }
        else
        {
            $fkuser_id = $obj[0]->u_id;
             $insert_user_table = $this->db->update('users',
                [
                    'name' => $visitor_name,
                    'f_name' => $father_name,
                    /*'age' => $age,
                    'email' => $email,
                    */
                    'contact' => $contact,
                    /*'country_id' => $country,
                    'province_id' => $province,
                    'city_id' => $city,
                    'address' => $address,*/
                    'description' => $description,
                    'user_created_at' => $created_date
                ],['u_id' => $fkuser_id]
            );
        }
        $insert_visitor_table = $this->db->insert('visitor',
            [
                'fkuser_id'       => $fkuser_id,
                'profession'      => $profession,
                'status'          => $status,
                'courses'         => $desire_courses,
                'description'     => $description,
                'visitor_created_at'      => $created_date
            ]
            );
        $this->output->set_content_type('application_json');
        $username = 'sstechnology';
        $password = 'sstechnology12@gmail.com';
        $to = $contact;
        $from = 'sstechny';
        $msg = '\n' .'Thanks for visiting the university of spoken english & Computer Sciences.We Hope to see You soon Again';
        $message = $visitor_name . $msg;
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
            $this->output->set_output( json_encode([
                'result' => 1,
                'success'  => 'The Visitor has been successfully Added'
            ]) );
        return FALSE;
    }

    //................... visitor form end ..............
}
