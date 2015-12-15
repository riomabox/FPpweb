<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function thread(){
		require_once(base_url().'libraries/ion_auth.php');
		$this->form_validation->set_rules('title','Judul','required');
		$this->form_validation->set_rules('content','Isi','required');
		if($this->form_validation->run() == false){
			$this->form_validation->set_message('Judul dan isi topik tidak boleh kosong');
			require_once(base_url().'page/thread');
		}
	}

	
}