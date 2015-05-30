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
  
  public function profileKomen($id){
    $this->db->select('comment_isi, thread_judul, comment_tanggal, thread.thread_id');
    $this->db->from('comment, thread');
    $this->db->where('comment.thread_id = thread.thread_id');
    $this->db->where('comment.user_id', $id);
    $query= $this->db->get();

    return $query->result();
  }

  public function profileTrit($id){
    $this->db->select('thread_isi, thread_judul, thread_tanggal, thread_id');
    $this->db->from('thread');
    $this->db->where('thread.user_id', $id);
    $query= $this->db->get();

    return $query->result();
  }
}
?>

