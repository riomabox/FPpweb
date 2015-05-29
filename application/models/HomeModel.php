<?php

class HomeModel extends CI_Model{
    
    public function getData() {
    	$name=$_SESSION['username'];
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email', $name);
        $query=$this->db->get();
        
        return $query->result();
    }
   
 function tampil_upload(){
         	$name=$_SESSION['username'];

  $query = $this->db->query("SELECT * FROM user where user_email='$name'");
  foreach($query->result_array() as $ok){
   //header('Content-type: image');
   $image = $ok['user_pict']; 
  }
  //header("Content-type: image/*");
  return $image;
   
    }
   
}
?>

