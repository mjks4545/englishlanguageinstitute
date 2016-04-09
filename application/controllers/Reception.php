<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reception extends CI_Controller {

    public function index()
    {
        $query  = $this->db->get('countries');
	$result['result'] = $query->result();
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('reception/reception',$result);
        $this->load->view('include/footer');
    }

    //.................. visitor form started ...................

    public function create_reception_post(){

        $visitor_name = $this->input->post('name');
        $father_name = $this->input->post('f_name');
        $age = $this->input->post('age');
        $qualification = $this->input->post('qualification');
        $nationality = $this->input->post('nationality');
        $profession = $this->input->post('profession');
        $email = $this->input->post('email');
        $guardian_number = $this->input->post('g_number');
        $contact = $this->input->post('number');
        $desire_courses = $this->input->post('desire_course');
        $country = $this->input->post('country');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $address = $this->input->post('address');
        $description = $this->input->post('description');
        $created_date = mdate("%y-%m-%d");

        $this->db->where('email', $email);
        $this->db->or_where('contact', $contact);
        $query = $this->db->get('users');
        $obj = $query->result();

        if(empty($obj)) {
            $insert_user_table = $this->db->insert('users',
                [
                    'name' => $visitor_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'country_id' => $country,
                    'province_id' => $province,
                    'city_id' => $city,
                    'address' => $address,
                    'description' => $description,
                    'created_at' => $created_date
                ]
            );
            $fkuser_id = $this->db->insert_id();
        }
        else
        {
            $fkuser_id = $obj[0]->u_id;
        }
        $insert_visitor_table = $this->db->insert('visitor',
            [
                'fkuser_id' => $fkuser_id,
                'profession' => $profession,
                'qualification' => $qualification,
                'guardian_number' => $guardian_number,
                'courses' => $desire_courses,
                'description' => $description,
                'created_at' => $created_date
            ]
            );
        redirect(site_url().'reception');
    }

    //................... visitor form end ..............
}
