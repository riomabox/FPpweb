<?php

class HomeModel extends CI_Model{
    
    public function getData() {
        $query = $this->db->get('user');
        return $query->result();
    }
    
    public function add_data($data)
    {
        $this->db->insert('user', $data);
        return;
    }
   
}
?>