<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // -------------------------------------------------------------------------
    
    public function index()
    {
        $this->load->view('include/header');
        //$this->load->view('include/sidebar');
        $this->load->view('home/home_view');
        $this->load->view('include/footer');
    }
    
    // -------------------------------------------------------------------------
    
    public function login_after_post()
    {
        //print_r( $_POST );
	$email     = $this->input->post('email');
	$password  = $this->input->post('password');
	
	$query =    $this->db->get_where('users',[
			'email'     => $email,
			'password'  => $password
		    ]);
	$data = $query->result();
	
	if( empty( $data ) ){
	    redirect( site_url() . 'home' );
	}
	$id    = $data[0]->u_id;
	$name  = $data[0]->name;
	$email = $data[0]->email;
	$role  = $data[0]->role;
	$userdata = array(
		   'u_id'      => $id,
		   'name'      => $name,
		   'email'     => $email,
		   'logged_in' => TRUE,
		   'role'      => $role
	       );

	$this->session->set_userdata($userdata);
	redirect( site_url() . 'admin' );
	    
    }
    
    // -------------------------------------------------------------------------
    
    public function logout()
    {
        $this->session->sess_destroy();
	redirect('/');
    }
    
    // -------------------------------------------------------------------------
    
    public function is_login()
    {
	if( isset($_SESSION['email']) ){
	    
	}  else {
	    redirect('/');
	}
    }

    // -------------------------------------------------------------------------
   
}
