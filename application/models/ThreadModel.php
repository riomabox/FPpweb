<?php

class ThreadModel extends CI_Model {

    public function insert($title, $tag, $content){
        if(!isset($tag))$tag='';
        date_default_timezone_set("Asia/Jakarta"); 


        $data = array (
            
            'thread_judul' => $title,
            'thread_isi' => $content,
            'user_id' => $_SESSION['userid'],
            'thread_tag' => $tag,
            'thread_tanggal' =>date("Y-m-d h:i:sa")
            
        );
        $this->db->insert('thread', $data);

        return $this->db->insert_id();

        $sql = "
                UPDATE user 
                SET user_jumlah_post = user_jumlah_post + 1
                WHERE user_id = '".$_SESSION['userid']."'
                ";
        $this->db->query($sql);
    }

    public function insertK($userID, $threadID, $content){
        date_default_timezone_set("Asia/Jakarta"); 


        $data = array (
            
            'comment_isi' => $content,
            'user_id' => $userID,
            'thread_id' => $threadID,
            'comment_tanggal' =>date("Y-m-d h:i:sa")
            
        );
        $this->db->insert('comment', $data);

        $sql = "
                UPDATE thread 
                SET thread_reply = thread_reply + 1
                WHERE thread_id = '".$threadID."'
                ";
        $this->db->query($sql);

        $sql = "
                UPDATE user 
                SET user_jumlah_post = user_jumlah_post + 1
                WHERE user_id = '".$userID."'
                ";
        $this->db->query($sql);        
    }

    public function listThread(){
        $this->db->select('thread_judul, thread_reply, thread_id, user_username, thread_tanggal');
        $this->db->from('thread, user');
        $this->db->where('user.user_id = thread.user_id');
        $query=$this->db->get();
        
        return $query->result();
    }
    
}

?>