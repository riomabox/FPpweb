<?php

class HomeController extends CI_Controller{
    public function index(){
        $this->load->library('session');
        $this->load->view('home');
    }
    public function foto(){
        $this->load->library('session');
        $this->load->view('profilepicture');
    }
}

?>