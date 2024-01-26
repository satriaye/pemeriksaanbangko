<?php

class M_skpp3 extends CI_Model
{

    private $tbl_datapemrikp3 = 'tbl_datapemrikp3';
   
    public function listskpp3()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikp3")->result();
    }

    public function exportlistskpp3()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikp3")->result_array();
    }

    //public function listskpp3()
    //{
       //return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_datapemrikp3 d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_datapemrikp3")->result();
   // }

    public function listskpp3_byid($id_datapemrikp3)
    {
        return $this->db->get_where($this->tbl_datapemrikp3, ['id_datapemrikp3' => $id_datapemrikp3])->row();
    }

    //Filter ListPeminjaman
    public function filterlistskpp3($status)
    {
        if ($status == "semua")
        $filter = "";
        else 
            $filter = "WHERE t_status='$status'";

            return $this->db->query("SELECT * FROM tbl_datapemrikp3 $filter")->result();
    }

    //Input/Tambah
    public function insert($data)
    {
       if($this->db->insert($this->tbl_datapemrikp3, $data))
            return true;
        return false;
    }

    //Update
    public function update($data, $fieldkey)
    {
       if($this->db->update($this->tbl_datapemrikp3, $data, $fieldkey))
            return true;
        return false;
    }

    //Delete
    public function delete($id_datapemrikp3)
    {
        $this->db->where('id_datapemrikp3', $id_datapemrikp3);
        if($this->db->delete($this->tbl_datapemrikp3))
            return true;
        return false;
    }

    
    //Insert Tabel Excel

    public function import_data($data)
    {
        if($this->db->insert_batch($this->tbl_datapemrikp3, $data))
            return true;
        return false;
       
    }

}

?>