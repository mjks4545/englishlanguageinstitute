<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/index');
        $this->load->view('include/footer');
    }

    public function student_view()
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('users','users.id = student.fkuser_id');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/student_view',$result);
        $this->load->view('include/footer');


    }

    public function student_add()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/student_add');
        $this->load->view('include/footer');
    }

    public function create_student_after_post(){

        $student_name = $this->input->post('name');
        $father_name = $this->input->post('f_name');
        $age = $this->input->post('age');
        $previous_degree = $this->input->post('pre_degree');
        $nationality = $this->input->post('nationality');
        $reg_number = $this->input->post('reg_number');
        $email = $this->input->post('email');
        $guardian_number = $this->input->post('g_number');
        $contact = $this->input->post('number');
        $course_detail = $this->input->post('course_detail');
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
                    'name' => $student_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'description' => $description,
                    'created_at' => $created_date
                ]
            );
            $fkuser_id = $this->db->insert_id();
        }
        else
        {
            $fkuser_id = $obj[0]->id;
        }
        $insert_student_table = $this->db->insert('student',
            [
                'fkuser_id' => $fkuser_id,
                'reg_number' => $reg_number,
                'pre_degree' => $previous_degree,
                'guardian_number' => $guardian_number,
                'courses' => $course_detail,
                'description' => $description,
                'created_at' => $created_date
            ]
        );
        redirect(site_url().'admin/student_view');
    }

    public function teacher_view()
    {
        $this->db->select('*');
        $this->db->from('teacher');
        $this->db->join('users','users.id = teacher.fkuser_id');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/teacher_view',$result);
        $this->load->view('include/footer');
    }

    public function teacher_add()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/teacher_add');
        $this->load->view('include/footer');
    }

    public function create_teacher_after_post(){

        $teacher_name = $this->input->post('name');
        $father_name = $this->input->post('f_name');
        $age = $this->input->post('age');
        $qualification = $this->input->post('qualification');
        $nationality = $this->input->post('nationality');
        $reg_number = $this->input->post('reg_number');
        $email = $this->input->post('email');
        $class_assign = $this->input->post('class_assign');
        $contact = $this->input->post('number');
        $salary = $this->input->post('salary');
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
                    'name' => $teacher_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'description' => $description,
                    'created_at' => $created_date
                ]
            );
            $fkuser_id = $this->db->insert_id();
        }
        else
        {
            $fkuser_id = $obj[0]->id;
        }
        $insert_teacher_table = $this->db->insert('teacher',
            [
                'fkuser_id' => $fkuser_id,
                'reg_number' => $reg_number,
                'salary' => $salary,
                'qualification' => $qualification,
                'class_assign' => $class_assign,
                'description' => $description,
                'created_at' => $created_date
            ]
        );

        redirect(site_url().'admin/teacher_view');
    }



}
