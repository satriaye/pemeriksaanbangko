<?php

class M_kodepemeriksaan extends CI_Model
{

    private $tbl_kodepemeriksaan = 'tbl_kodepemeriksaan';
   
    public function listkodepemeriksaan()
    {
        return $this->db->query("SELECT * FROM tbl_kodepemeriksaan")->result();
    }
	
}

?>