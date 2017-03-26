<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V1 extends CI_Controller{

	public function me(){
		if(!$this->input->is_ajax_request()){
			exit('No direct script access allowed');
		}else{

		}
	}

	public function user(){
	}

	public function images(){
	}

	public function image(){
	}

	public function tags(){
	}

	public function tag(){
	}
}
