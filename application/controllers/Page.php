<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index(){
		$this->load->view('forum-index.php');
	}

	public function forum(){
		$this->load->model('LoginModel');
		$data = array();
          if($query = $this->HomeModel->getData())
         {
             $data['records'] = $query;
         }
        
     
		$this->load->view('forum-forum.php',$data);
	}
	
	public function forumCat(){
		$this->load->view('forum-category.php');
	}

	public function thread(){
		$this->load->view('forum-thread.php');
	}

	public function profile(){
		$this->data['posts']=$this->HomeModel->getData();

		$this->load->view('forum-profile.php',$this->data);
	}

	public function stats(){
		$this->load->view('profile-overview.php');
	}

	public function komen(){
		$this->load->view('profile-komentar.php');
	}

	public function trit(){
		$this->load->view('profile-thread.php');
	}

	 function create()
    {
		 $pass=md5($this->input->post('pass'));
        $data = array(
					
					'user_username'=>$this->input->post('user'),
					  'user_name'=>$this->input->post('nama'),
					   'user_email'=>$this->input->post('email1'),
						'user_password'=>$pass);
        
		 
    $this->HomeModel->add_data($data);
        $this->forum();
    }
}