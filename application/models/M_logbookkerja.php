<?php

class M_Logbookkerja extends CI_Model
{

    private $tbl_logbookkerja = 'tbl_logbookkerja';
   
    public function listlogbookkerja()
    {
        return $this->db->query("SELECT * FROM tbl_logbookkerja")->result();
    }

    //public function listdafnom()
    //{
       // return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_inputdafnom d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_dafnom")->result();
   // }

    public function listlogbookkerja_byid($id_logbookkerja)
    {
        return $this->db->get_where($this->tbl_logbookkerja, ['id_logbookkerja' => $id_logbookkerja])->row();
    }
    
   //Input/Tambah
    public function insert($data)
    {
       if($this->db->insert($this->tbl_logbookkerja, $data))
            return true;
        return false;
    }

    public function update($data, $fieldkey)
    {
       if($this->db->update($this->tbl_logbookkerja, $data, $fieldkey))
            return true;
        return false;
    }

    public function delete($id_logbookkerja)
    {
        $this->db->where('id_logbookkerja', $id_logbookkerja);
        if($this->db->delete($this->tbl_logbookkerja))
            return true;
        return false;
    }
	
}

?>