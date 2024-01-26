<?php

class M_lbpphop extends CI_Model
{

    private $tbl_lbpphop = 'tbl_lbpphop';
   
    public function listlbpphop()
    {
        return $this->db->query("SELECT * FROM tbl_lbpphop")->result();
    }

    public function exportlistlbpphop()
    {
        return $this->db->query("SELECT * FROM tbl_lbpphop")->result_array();
    }

    //public function listlbpphop()
    //{
       //return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_lbpphop d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_lbpphop")->result();
   // }

    public function listlbpphop_byid($id_lbpphop)
    {
        return $this->db->get_where($this->tbl_lbpphop, ['id_lbpphop' => $id_lbpphop])->row();
    }

    //Filter ListPeminjaman
    public function filterlistlbpphop($status, $tgl_awal, $tgl_akhir)
    {
        if ($status == "semua")
            $filter = "WHERE t_tanggalinput BETWEEN '$tgl_awal' AND '$tgl_akhir'";
        else 
            $filter = "WHERE t_tanggalinput BETWEEN '$tgl_awal' AND '$tgl_akhir' AND t_status='$status'";

            return $this->db->query("SELECT * FROM tbl_lbpphop $filter")->result();
    }

    //Input/Tambah
    public function insert($data)
    {
       if($this->db->insert($this->tbl_lbpphop, $data))
            return true;
        return false;
    }

    //Update
    public function update($data, $fieldkey)
    {
       if($this->db->update($this->tbl_lbpphop, $data, $fieldkey))
            return true;
        return false;
    }

    //Delete
    public function delete($id_lbpphop)
    {
        $this->db->where('id_lbpphop', $id_lbpphop);
        if($this->db->delete($this->tbl_lbpphop))
            return true;
        return false;
    }

    
    //Insert Tabel Excel

    public function import_data($data)
    {
        if($this->db->insert_batch($this->tbl_lbpphop, $data))
            return true;
        return false;
       
    }

}

?>