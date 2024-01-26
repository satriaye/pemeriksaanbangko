<?php

class M_user extends CI_Model
{
    public function login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username ='$username' AND 
        password = '$password' ");
       

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
            else return false;
    }

    
}


?>