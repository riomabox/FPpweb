<?php

class HomeModel extends CI_Model{
    
  public function getData() {
  	if(isset($_SESSION['username'])){
      $name=$_SESSION['username'];
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('user_email', $name);
      $query=$this->db->get();
      
      return $query->result();
    }
  }

  public function getProfileData($id) {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_id', $id);
    $query=$this->db->get();
    
    return $query->result();
  }
   
 function tampil_upload(){
      $name=$_SESSION['username'];

      $query = $this->db->query("SELECT * FROM user where user_email='$name'");
      return $query->result;
   
    }
   
}
?>

