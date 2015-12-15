<?php

class LoginModel extends CI_Model {
    public function login($name, $pass){
        date_default_timezone_set("Asia/Jakarta"); 
        $this->db->select('user_email, user_password, user_id');
        $this->db->from('user');
        $this->db->where('user_email', $name);
        $this->db->where('user_password', $pass);
        $waktu=date("Y-m-d h:i:sa");
        $this->db->query("UPDATE user SET user_last_login='$waktu' where user_email='$name'");

        $query = $this->db->get();
        $idid = $query->result();

        if($query->num_rows() == 1){
            $data = array();

            $newdata = array(
            'username'  => $name,
            'userid' => $idid[0]->user_id
            );
            $this->session->set_userdata($newdata);
            return true;
        }else {
            return false;
        }
    }
    public function insert($signusername, $signemail, $signpassword){
        date_default_timezone_set("Asia/Jakarta"); 
        $data = array (
            'user_username' => $signusername,
            'user_email' => $signemail,
            'user_password' => $signpassword,
            'user_register'=>date("Y-m-d h:i:sa"),
            'user_last_login'=>date("Y-m-d h:i:sa"),
            'user_jumlah_post'=>0


        );
        $this->db->insert('user', $data);
    }
    public function upload_photo($image, $image_name){

        $this->db->select_max('user_id');
        $this->db->from('user');
        $query = $this->db->get();
        //echo $query->row()->id;
        $id = $query->row()->user_id;
        $this->db->query("UPDATE user SET user_pict = '$image', user_pictname = '$image_name' WHERE user_id='$id'");
    }
}

?>