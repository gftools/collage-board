<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function index(){
		$query = $this->db->query('SELECT * FROM images LIMIT 20');
		$this->load->view('user_registration', array(
			'resultset' => $query->result_array()
		));
	}
}
