<?php

class M_berkaskinerjapemeriksaan extends CI_Model
{

    private $tb_berkas = 'tb_berkas';
   
    public function listberkaskinerjapemeriksaan()
    {
        return $this->db->query("SELECT * FROM tb_berkas")->result();
    }

     //Delete
     public function delete($id_berkas)
     {
         $this->db->where('id_berkas', $id_berkas);
         if($this->db->delete($this->tb_berkas))
             return true;
         return false;
     }
	
}