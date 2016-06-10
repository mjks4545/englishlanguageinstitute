<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // -------------------------------------------------------------------------
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('insert_model');
    }
    
    // -------------------------------------------------------------------------
    
    public function index()
    {
	$query = $this->db->get('login');
        $result['data'] = $query->result();
        $this->load->view( 'include/header' );
        $this->load->view( 'home/home_view', $result );
        $this->load->view( 'include/footer' );
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
            'login'=>'1',
		   'role'      => $role
	       );

	$this->session->set_userdata('user_data',$userdata);
            redirect( site_url() . 'admin' );
	    
    }
    function check(){
        if($_SESSION['role']==''){
            redirect('home/');
        }
    }
    
    // -------------------------------------------------------------------------
    
    public function logout()
    {
        $this->session->sess_destroy();
	redirect('/');
    }
    
    // -------------------------------------------------------------------------
    
    function formData()
    {
	$email        = $this->input->post("email");
	$password     = $this->input->post("password");
	$role	      = $this->input->post("role");
	$chk_account  = $this->insert_model->chk_account($email,$password,$role);
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
