<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{
	public function index(){
		$query = $this->db->query('SELECT * FROM images LIMIT 20');
		$this->load->view('welcome_message', array(
			'resultset' => $query->result_array()
		));
	}
}
