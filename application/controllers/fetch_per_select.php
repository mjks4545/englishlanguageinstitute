<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fetch_per_select extends CI_Controller {
    
    // -------------------------------------------------------------------------
    
    public function index()
    {
    }
    
    public function fetch_country( $id = null ){
	
	$this->db->where( 'country_id' , $id );
	$query = $this->db->get( 'states' );
	$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result'   => 1,
	    'success'  => 'The record is being sucess full inserted',
	    'data'     => $query->result(),
            'role'     => 0
	    
	]) );
	return false;
    }
    
    // -------------------------------------------------------------------------
    
    public function fetch_city( $id = null ){
	
	$this->db->where( 'state_id' , $id );
	$query = $this->db->get( 'cities' );
	$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result'   => 1,
	    'success'  => 'The record is being sucess full inserted',
	    'data'     => $query->result(),
	    'role'   => 1
	]) );
	return false;
    }
    
    // -------------------------------------------------------------------------
    
}
