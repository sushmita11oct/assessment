<?php
class Signup extends CI_Model{
    public function signup_Entry($data){

        $this->db->insert('sign_up',$data);
        return true;
    }
}


?>