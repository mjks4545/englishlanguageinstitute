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

    //...............Student Add & View...................

    public function student_add()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/student_add');
        $this->load->view('include/footer');
    }

    public function student_view()
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $query = $this->db->get();
        $result['result'] = $query->result();

       /* echo "<pre>";
        print_r($result);
        echo "</pre>";
        die();*/


        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/student_view',$result);
        $this->load->view('include/footer');
    }

    public function student_edit($s_id = null)
    {
        if($s_id == null)
        {
            redirect(site_url().'admin/student_view');
        }
        $this->db->select('*');
        $this->db->where('s_id',$s_id);
        $this->db->from('student');
        $this->db->join('users','users.u_id = student.fkuser_id');
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/student_edit',$result);
        $this->load->view('include/footer');

    }

    public function create_student_after_post()
    {

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

        if (empty($obj)) {
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
        } else {
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
        redirect(site_url() . 'admin/student_view');
    }

    public function update_student_after_post($s_id = null,$u_id = null)
    {

        if ($s_id == null || $u_id == null) {
            redirect(site_url() . 'admin/student_view');
        } else {
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
            $updated_date = mdate("%y-%m-%d");


            echo $update_user_table = $this->db->update('users',
                [
                    'name' => $student_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['u_id' => $u_id]
            );

            $update_student_table = $this->db->update('student',
                [
                    'reg_number' => $reg_number,
                    'pre_degree' => $previous_degree,
                    'guardian_number' => $guardian_number,
                    'courses' => $course_detail,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['s_id' => $s_id]
            );

            redirect(site_url() . 'admin/student_view');
        }
    }

    public function student_delete($s_id = null , $u_id = null)
    {
        $this->db->delete('student',['s_id' => $s_id]);
        $this->db->delete('users',['u_id' => $u_id]);

        redirect(site_url() . 'admin/student_view');
    }



    //..............End Student Add , View , Edit & Delete................

    //..............Start Teacher Add & View................

    public function teacher_add()
    {
        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/teacher_add');
        $this->load->view('include/footer');
    }

    public function teacher_view()
    {
        $this->db->select('*');
        $this->db->from('teacher');
        $this->db->join('users','users.u_id = teacher.fkuser_id');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/teacher_view',$result);
        $this->load->view('include/footer');
    }

    public function teacher_edit($t_id = null)
    {
        if($t_id == null)
        {
            redirect(site_url().'admin/teacher_view');
        }
        $this->db->select('*');
        $this->db->where('t_id',$t_id);
        $this->db->from('teacher');
        $this->db->join('users','users.u_id = teacher.fkuser_id');
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];

       /* echo "<pre>";
        print_r($result);
        die();*/

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/teacher_edit',$result);
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

    public function update_teacher_after_post($t_id = null,$u_id = null){

        if ($t_id == null || $u_id == null) {
            redirect(site_url() . 'admin/teacher_view');
        } else {
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
            $updated_date = mdate("%y-%m-%d");


            echo $update_user_table = $this->db->update('users',
                [
                    'name' => $teacher_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['u_id' => $u_id]
            );

            $update_teacher_table = $this->db->update('teacher',
                [
                    'reg_number' => $reg_number,
                    'salary' => $salary,
                    'qualification' => $qualification,
                    'class_assign' => $class_assign,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['t_id' => $t_id]
            );

            redirect(site_url() . 'admin/teacher_view');
        }
    }

    public function teacher_delete($t_id = null , $u_id = null)
    {
        $this->db->delete('teacher',['t_id' => $t_id]);
        $this->db->delete('users',['u_id' => $u_id]);

        redirect(site_url() . 'admin/teacher_view');
    }

    //..............End Teacher Add & View................

    //..............Start Visitor View................

    public function visitor_view()
    {
        $this->db->select('*');
        $this->db->from('visitor');
        $this->db->join('users','users.u_id = visitor.fkuser_id');
        $query = $this->db->get();
        $result['result'] = $query->result();

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/visitor_view',$result);
        $this->load->view('include/footer');
    }

    public function visitor_edit($v_id = null)
    {
        if($v_id == null)
        {
            redirect(site_url().'admin/visitor_view');
        }
        $this->db->select('*');
        $this->db->where('v_id',$v_id);
        $this->db->from('visitor');
        $this->db->join('users','users.u_id = visitor.fkuser_id');
        $query = $this->db->get();
        $result = $query->result();
        $result['result'] = $result[0];

       /* echo "<pre>";
         print_r($result);
         die();*/

        $this->load->view('include/header');
        $this->load->view('include/sidebar');
        $this->load->view('admin/visitor_edit',$result);
        $this->load->view('include/footer');

    }

    public function update_visitor_after_post($v_id = null,$u_id = null){

        if ($v_id == null || $u_id == null) {
            redirect(site_url() . 'admin/visitor_view');
        } else {
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
            $address = $this->input->post('address');
            $description = $this->input->post('description');
            $updated_date = mdate("%y-%m-%d");


            echo $update_user_table = $this->db->update('users',
                [
                    'name' => $visitor_name,
                    'f_name' => $father_name,
                    'age' => $age,
                    'nationality' => $nationality,
                    'email' => $email,
                    'contact' => $contact,
                    'address' => $address,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['u_id' => $u_id]
            );

            $update_visitor_table = $this->db->update('visitor',
                [
                    'profession' => $profession,
                    'qualification' => $qualification,
                    'guardian_number' => $guardian_number,
                    'courses' => $desire_courses,
                    'description' => $description,
                    'updated_at' => $updated_date
                ], ['v_id' => $v_id]
            );

            redirect(site_url() . 'admin/visitor_view');
        }
    }

    public function visitor_delete($v_id = null , $u_id = null)
    {
        $this->db->delete('visitor',['v_id' => $v_id]);
        $this->db->delete('users',['u_id' => $u_id]);

        redirect(site_url() . 'admin/visitor_view');
    }



    //..............End Visitor View................

}
