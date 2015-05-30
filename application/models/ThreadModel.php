<?php

class ThreadModel extends CI_Model {

    public function insert($title, $tag, $content){
        if(!isset($tag))$tag='';
        date_default_timezone_set("Asia/Jakarta"); 
        
        $data = array (
            
            'thread_judul' => $title,
            'thread_isi' => $content,
            'user_id' => $_SESSION['username'],
            'thread_tag' => $tag,
            'thread_tanggal' =>date("Y-m-d h:i:sa")
            
        );
        $this->db->insert('thread', $data);
    }
    
}

?>