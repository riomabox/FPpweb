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

  public function thread($id){
    $this->db->select('*');
    $this->db->from('thread');
    $this->db->where('thread_id', $id);
    $query= $this->db->get();

    return $query->result();
  }

  public function getTS($id){
    $this->db->select('user_id');
    $this->db->from('thread');
    $this->db->where('thread_id', $id);
    $query= $this->db->get();
    $userid = $query->result();

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_id', $userid[0]->user_id);
    $query= $this->db->get();

    return $query->result();
  }

  public function getK($id){
    $this->db->select('*');
    $this->db->from('comment, user');
    $this->db->where('comment.user_id = user.user_id');
    $this->db->where('thread_id', $id);
    $query= $this->db->get();

    return $query->result();
  }
   
}
?>

