<?php

class M_targetrealisasi extends CI_Model
{

    private $tbl_targetrealisasi = 'tbl_targetrealisasi';
   
    public function listtargetrealisasi()
    {
        return $this->db->query("SELECT * FROM tbl_targetrealisasi")->result();
    }

    //public function listdafnom()
    //{
       // return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_inputdafnom d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_dafnom")->result();
   // }

    public function listtargetrealisasi_byid($id_targetrealisasi)
    {
        return $this->db->get_where($this->tbl_targetrealisasi, ['id_targetrealisasi' => $id_targetrealisasi])->row();
    }
    
   //Input/Tambah
    public function insert($data)
    {
       if($this->db->insert($this->tbl_targetrealisasi, $data))
            return true;
        return false;
    }

    public function update($data, $fieldkey)
    {
       if($this->db->update($this->tbl_targetrealisasi, $data, $fieldkey))
            return true;
        return false;
    }

    public function delete($id_targetrealisasi)
    {
        $this->db->where('id_targetrealisasi', $id_targetrealisasi);
        if($this->db->delete($this->tbl_targetrealisasi))
            return true;
        return false;
    }
	
//////////////////////////////////////////////////////////////////////////////TARGET-REALISASI////////////////////////////////////////////////////////////////////////

public function get_targetpkm()
{
    $sql= "SELECT t_targetpkm as t_targetpkm
     FROM tbl_targetrealisasi";
    $result = $this->db->query($sql);
    return $result->row()->t_targetpkm;
}    

public function get_realisasipkm()
{
    $sql= "SELECT t_realisasipkm as t_realisasipkm
     FROM tbl_targetrealisasi";
    $result = $this->db->query($sql);
    return $result->row()->t_realisasipkm;
} 

public function get_targetlhpkonversi()
{
    $sql= "SELECT t_targetlhpkonversi as t_targetlhpkonversi
     FROM tbl_targetrealisasi";
    $result = $this->db->query($sql);
    return $result->row()->t_targetlhpkonversi;
} 

}

?>