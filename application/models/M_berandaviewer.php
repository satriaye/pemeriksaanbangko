<?php

class M_berandaviewer extends CI_Model
{

    private $tbl_berandaviewer = 'tbl_berandaviewer';
   
    public function listberandaviewer()
    {
        return $this->db->query("SELECT * FROM tbl_berandaviewer")->result();
    }

    public function exportlistberandaviewer()
    {
        return $this->db->query("SELECT * FROM tbl_berandaviewer")->result_array();
    }

    //public function listberandaviewer()
    //{
       //return $this->db->query("SELECT d.*,b.t_masa_tahun_pajak FROM tbl_berandaviewer d
        //JOIN tbl_berkasalket b ON b.id_berkasalket = d.id_berandaviewer")->result();
   // }

    public function listberandaviewer_byid($id_berandaviewer)
    {
        return $this->db->get_where($this->tbl_berandaviewer, ['id_berandaviewer' => $id_berandaviewer])->row();
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

















 //////////////////////////////////////////////////////////////////////////////HITUNG-HITUNGAN////////////////////////////////////////////////////////////////////////   

//////////////////////////////Tunggakan NP2/////////////////////////////////

public function get_count_if_tunggakan_np2()
{
    $sql= "SELECT count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2', t_status, NULL)) as tunggakannp2
                FROM tbl_datapemrikfpp";
        $result = $this->db->query($sql);
       return $result->row();
}    

//////////////////////////////Count IF Potensi KKA Belum Terbit SP2/////////////////////////////////

    public function get_sum_count_if()
    {
        $sql= "SELECT sum(if( t_status = '', t_potensikka, NULL)) as t_potensikkabelumterbitsp2
                FROM tbl_datapemrikfpp";
        $result = $this->db->query($sql);
       return $result->row();
    }

//////////////////////////////Tunggakan SP2/////////////////////////////////

public function get_count_if_tunggakan_sp2()
{
    $sql= "SELECT count(if( t_status = 'SP2_terbit', t_status, NULL)) as tunggakansp2
                FROM tbl_datapemrikfpp";
        $result = $this->db->query($sql);
       return $result->row();
}   

//////////////////////////////Count IF Potensi KKA Belum Terbit LHP/////////////////////////////////

public function get_sum_count_if_sp2thdpotensi()
{
    $sql= "SELECT sum(if( t_nomorlhp = '', t_potensikka, NULL)) as t_potensikkabelumterbitlhp
            FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
   return $result->row();
}



//////////////////////////////LHP Terbit/////////////////////////////////
public function get_count_if_lhpterbit()
{
    $sql= "SELECT count(if( t_status = 'LHP_terbit', t_status, NULL)) as lhpterbit
                FROM tbl_datapemrikfpp";
        $result = $this->db->query($sql);
       return $result->row();
} 

//////////////////////////////LHP Konversi///////////////////////////////// 
public function get_sum_lhpkonversi()
{
    $sql= "SELECT sum(t_lhpkonversi) as t_lhpkonversi FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row()->t_lhpkonversi;
}  

//////////////////////////////SKPKB Terbit///////////////////////////////// 
public function get_sum_skpkbterbit()
{
    $sql= "SELECT sum(t_skpkbterbit) as t_skpkbterbit FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row()->t_skpkbterbit;
}  


//////////////////////////////Count IF Potensi KKA Dari SKPKB Cair///////////////////////////////// salah

public function get_sum_count_if_skpkbthdpotensi()
{
    $sql= "SELECT sum(if( t_skpkbcair = t_skpkbcair , t_potensikka, NULL)) as t_potensikkaterbitskpkb
            FROM tbl_datapemrikfpp";
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
    FROM tbl_datapemrikfpp";
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
    FROM tbl_datapemrikfpp";
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
    FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row();
}  



}

?>