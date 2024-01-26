<?php

class M_sp2fpp extends CI_Model
{

    private $tbl_datapemrikfpp = 'tbl_datapemrikfpp';
   
    public function listsp2fpp()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikfpp")->result();
    }

    public function exportlistsp2fpp()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikfpp")->result_array();
    }

    //public function listsp2fpp()
    //{
       //return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_datapemrikfpp d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_datapemrikfpp")->result();
   // }

    public function listsp2fpp_byid($id_datapemrikfpp)
    {
        return $this->db->get_where($this->tbl_datapemrikfpp, ['id_datapemrikfpp' => $id_datapemrikfpp])->row();
    }

    //Filter List
    public function filterlistsp2fpp($status)
    {
        if ($status == "semua")
        $filter = "";
        else 
            $filter = "WHERE t_status='$status'";

            return $this->db->query("SELECT * FROM tbl_datapemrikfpp $filter")->result();
    }

    //Input/Tambah
    public function insert($data)
    {
       if($this->db->insert($this->tbl_datapemrikfpp, $data))
            return true;
        return false;
    }

    //Update
    public function update($data, $fieldkey)
    {
       if($this->db->update($this->tbl_datapemrikfpp, $data, $fieldkey))
            return true;
        return false;
    }

    //Delete
    public function delete($id_datapemrikfpp)
    {
        $this->db->where('id_datapemrikfpp', $id_datapemrikfpp);
        if($this->db->delete($this->tbl_datapemrikfpp))
            return true;
        return false;
    }

    
    //Insert Tabel Excel

    public function import_data($data)
    {
        if($this->db->insert_batch($this->tbl_datapemrikfpp, $data))
            return true;
        return false;
       
    }



}

?>