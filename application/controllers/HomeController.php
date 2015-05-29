<?php

class HomeController extends CI_Controller{
    public function index(){
        $this->load->library('session');
        $this->load->view('forum-forum');
    }
    public function foto(){
         $this->HomeModel->tampil_upload();
    }
}

?>