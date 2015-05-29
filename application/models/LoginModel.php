<?php

class LoginModel extends CI_Model {
    public function login($name, $pass){
       
        $this->db->select('user_email, user_password');
        $this->db->from('user');
        $this->db->where('user_email', $name);
        $this->db->where('user_password', $pass);
        $waktu=date("Y-m-d h:i:sa");
        $this->db->query("UPDATE user SET user_last_login='$waktu' where user_email='$name'");
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            $newdata = array(
            'username'  => $name,
            'password'  => $pass
            );
            $this->session->set_userdata($newdata);
            return true;
        }else {
            return false;
        }
    }
    public function insert($signusername, $signemail, $signpassword){
      
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