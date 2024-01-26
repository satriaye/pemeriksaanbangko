<?php

class M_Berkaspemeriksaan extends CI_Model
{

    private $tbl_berkaspemeriksaan = 'tbl_berkaspemeriksaan';
   
    public function listberkaspemeriksaan()
    {
        return $this->db->query("SELECT * FROM tbl_berkaspemeriksaan")->result();
    }
    
    public function listberkaspemeriksaanvalue()
    {
        return $this->db->query("SELECT * FROM tbl_berkaspemeriksaan")->result();
    }
	
}

?>