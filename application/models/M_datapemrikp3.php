<?php

class M_datapemrikp3 extends CI_Model
{

    private $tbl_datapemrikp3 = 'tbl_datapemrikp3';
   
    public function listdatapemrikp3()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikp3")->result();
    }

    public function exportlistdatapemrikp3()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikp3")->result_array();
    }


    public function listdatapemrikp3_byid($id_datapemrikp3)
    {
        return $this->db->get_where($this->tbl_datapemrikp3, ['id_datapemrikp3' => $id_datapemrikp3])->row();
    }

    //Filter
    public function filterlistdatapemrikp3($status)
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

 //////////////////////////////////////////////////////////////////////////////HITUNG-HITUNGAN////////////////////////////////////////////////////////////////////////   

//////////////////////////////Tunggakan NP2/////////////////////////////////

public function get_count_if_tunggakan_np2()
{
    $sql= "SELECT count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2', t_status, NULL)) as tunggakannp2
                FROM tbl_datapemrikp3";
        $result = $this->db->query($sql);
       return $result->row();
}    

//////////////////////////////Count IF Potensi KKA Belum Terbit SP2/////////////////////////////////

    public function get_sum_count_if_np2thdpotensi()
    {
        $sql= "SELECT sum(if( t_sp2 = '', t_potensikka, NULL)) as t_potensikkabelumterbitsp2
                FROM tbl_datapemrikp3";
        $result = $this->db->query($sql);
       return $result->row();
    }

//////////////////////////////Tunggakan SP2/////////////////////////////////

public function get_count_if_tunggakan_sp2()
{
    $sql= "SELECT count(if( t_status = 'SP2_terbit', t_status, NULL)) as tunggakansp2
                FROM tbl_datapemrikp3";
        $result = $this->db->query($sql);
       return $result->row();
}  

//////////////////////////////Count IF Potensi KKA Belum Terbit LHP/////////////////////////////////

public function get_sum_count_if_sp2thdpotensi()
{
    $sql= "SELECT sum(if( t_nomorlhp = '', t_potensikka, NULL)) as t_potensikkabelumterbitlhp
            FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
   return $result->row();
}


//////////////////////////////LHP Terbit/////////////////////////////////
public function get_count_if_lhpterbit()
{
    $sql= "SELECT count(if( t_status = 'LHP_terbit', t_status, NULL)) as lhpterbit
                FROM tbl_datapemrikp3";
        $result = $this->db->query($sql);
       return $result->row();
} 

//////////////////////////////LHP Konversi///////////////////////////////// 
public function get_sum_lhpkonversi()
{
    $sql= "SELECT sum(t_lhpkonversi) as t_lhpkonversi FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
    return $result->row()->t_lhpkonversi;
}  

//////////////////////////////SKPKB Terbit///////////////////////////////// 
public function get_sum_skpkbterbit()
{
    $sql= "SELECT sum(t_skpkbterbit) as t_skpkbterbit FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
    return $result->row()->t_skpkbterbit;
}  






//////////////////////////////Count IF Potensi KKA Dari SKPKB Cair///////////////////////////////// salah

public function get_sum_count_if_skpkbthdpotensi()
{
    $sql= "SELECT sum(if( t_skpkbcair = t_skpkbcair , t_potensikka, NULL)) as t_potensikkaterbitskpkb
            FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
   return $result->row();
}

//////////////////////////////Pie Tunggakan NP2 dari jenis Pemeriksaan//////////////////////////////// 
public function get_count_tunggakannp2darijenispemeriksaan()
{
    $sql= "SELECT count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as tunggakannp2darilb,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Pemsus', t_jenispemeriksaan, NULL)) as tunggakannp2daripemsus,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Rutin', t_jenispemeriksaan, NULL)) as tunggakannp2darirutin,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Lokasi', t_jenispemeriksaan, NULL)) as tunggakannp2darilokasi
    FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
    return $result->row();
}  

//////////////////////////////Pie Tunggakan SP2 dari jenis Pemeriksaan//////////////////////////////// 
public function get_count_tunggakansp2darijenispemeriksaan()
{
    $sql= "SELECT count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as tunggakansp2darilb,
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'Pemsus', t_jenispemeriksaan, NULL)) as tunggakansp2daripemsus,
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'Rutin', t_jenispemeriksaan, NULL)) as tunggakansp2darirutin,
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'Lokasi', t_jenispemeriksaan, NULL)) as tunggakansp2darilokasi
    FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
    return $result->row();
}  

//////////////////////////////Pie LHP Selesai dari jenis Pemeriksaan//////////////////////////////// 
public function get_count_lhpselesaijenispemeriksaan()
{
    $sql= "SELECT count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as lhpterbitdarilb,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Pemsus', t_jenispemeriksaan, NULL)) as lhpterbitdaripemsus,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Rutin', t_jenispemeriksaan, NULL)) as lhpterbitdarirutin,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Lokasi', t_jenispemeriksaan, NULL)) as lhpterbitdarilokasi
    FROM tbl_datapemrikp3";
    $result = $this->db->query($sql);
    return $result->row();
}  















}

?>