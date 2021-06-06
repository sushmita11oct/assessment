<?php
class UserDetail extends CI_model
{
    
    
    function getAllDetail()
    {
        $data=$this->db->order_by('id',"desc")->limit(1)->get('sign_up')->row();
return $data;
print_r($data);
    }
   
}


?>