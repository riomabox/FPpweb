<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index(){
		$this->load->view('forum-index.php');
	}

	public function forum(){
		$this->load->view('forum-forum.php');
	}
}