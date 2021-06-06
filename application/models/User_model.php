<?php
class User_model extends CI_model
{
function doLogin($username,$password)
{
    $this->db->where('email',$username);
    $this->db->where('password',$password);
   $query= $this->db->get('sign_up');
    $user=$query->row_array();
     return $user;
}
}

?>