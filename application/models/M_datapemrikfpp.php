<?php

class M_datapemrikfpp extends CI_Model
{

    private $tbl_datapemrikfpp = 'tbl_datapemrikfpp';
   
    public function listdatapemrikfpp()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikfpp")->result();
    }

    public function exportlistdatapemrikfpp()
    {
        return $this->db->query("SELECT * FROM tbl_datapemrikfpp")->result_array();
    }


    public function listdatapemrikfpp_byid($id_datapemrikfpp)
    {
        return $this->db->get_where($this->tbl_datapemrikfpp, ['id_datapemrikfpp' => $id_datapemrikfpp])->row();
    }

    //Filter
    public function filterlistdatapemrikfpp($status)
    {
        if ($status == "")
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

    public function get_sum_count_if_np2thdpotensi()
    {
        $sql= "SELECT sum(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2', t_potensikka, NULL)) as t_potensikkabelumterbitsp2
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
    $sql= "SELECT sum(if( t_status = 'SP2_terbit', t_potensikka, NULL)) as t_potensikkabelumterbitlhp
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

//////////////////////////////SKPKB Disetujui///////////////////////////////// 
public function get_sum_skpkbdisetujui()
{
    $sql= "SELECT sum(t_skpkbdisetujui) as t_skpkbdisetujui FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row()->t_skpkbdisetujui;
}  




//////////////////////////////Count IF Potensi KKA Dari SKPKB Cair///////////////////////////////// 

public function get_sum_count_if_skpkbthdpotensi()
{
    $sql= "SELECT sum(if( t_jenisskp = 'Nihil/ Kurang Bayar', t_potensikka, NULL)) as t_potensikkaterbitskp
            FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row();
}


//////////////////////////////Tunggakan Ketepatan Waktu LHP/////////////////////////////////

public function get_count_if_countketeranganwaktulhp()
{
    $sql= "SELECT count(if( t_keteranganwaktulhp = 'Tepat Waktu', t_keteranganwaktulhp, NULL)) as keteranganwaktulhp
                FROM tbl_datapemrikfpp";
        $result = $this->db->query($sql);
       return $result->row();
}  


//////////////////////////////Pie Tunggakan NP2 dari jenis Pemeriksaan//////////////////////////////// 
public function get_count_tunggakannp2darijenispemeriksaan()
{
    $sql= "SELECT count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as tunggakannp2darilb,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Pemsus', t_jenispemeriksaan, NULL)) as tunggakannp2daripemsus,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Rutin All Taxes', t_jenispemeriksaan, NULL)) as tunggakannp2darirutinalltaxes,
                count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'Rutin Single/ Beberapa', t_jenispemeriksaan, NULL)) as tunggakannp2darirutinsinglebeberapa,
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
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'Rutin All Taxes', t_jenispemeriksaan, NULL)) as tunggakansp2darirutinalltaxes,
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'Rutin Single/ Beberapa', t_jenispemeriksaan, NULL)) as tunggakansp2darirutinsinglebeberapa,
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
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Rutin All Taxes', t_jenispemeriksaan, NULL)) as lhpterbitdarirutinalltaxes,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Rutin Single/ Beberapa', t_jenispemeriksaan, NULL)) as lhpterbitdarirutinsinglebeberapa,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'Lokasi', t_jenispemeriksaan, NULL)) as lhpterbitdarilokasi
    FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row();
}  

//////////////////////////////LHP Selesai Tiap Bulan//////////////////////////////// 
public function get_count_lhpselesaitiapbulan()
{
    $sql= "SELECT count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 01, t_tanggallhp, NULL)) as lhpterbitjanuari,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 02, t_tanggallhp, NULL)) as lhpterbitfebruari,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 03, t_tanggallhp, NULL)) as lhpterbitmaret,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 04, t_tanggallhp, NULL)) as lhpterbitapril,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 05, t_tanggallhp, NULL)) as lhpterbitmei,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 06, t_tanggallhp, NULL)) as lhpterbitjuni,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 07, t_tanggallhp, NULL)) as lhpterbitjuli,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 08, t_tanggallhp, NULL)) as lhpterbitagustus,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 09, t_tanggallhp, NULL)) as lhpterbitseptember,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 10, t_tanggallhp, NULL)) as lhpterbitoktober,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 11, t_tanggallhp, NULL)) as lhpterbitnovember,
                count(if( t_status = 'LHP_terbit' AND MONTH(t_tanggallhp) = 12, t_tanggallhp, NULL)) as lhpterbitdesember
               
    FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row();
}  


//////////////////////////////Tunggakan NP2 dari LB//////////////////////////////// 
public function get_count_tunggakandarilb()
{
    $sql= "SELECT count(if( t_status = 'Perlengkapan_Berkas_&_Generate_NP2' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as tunggakannp2darilb,
                count(if( t_status = 'SP2_terbit' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as tunggakansp2darilb,
                count(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'LB', t_jenispemeriksaan, NULL)) as lhpterbitdarilb,
                sum(if( t_status = 'LHP_terbit' AND t_jenispemeriksaan = 'LB', t_skplbterbit, NULL)) as skplbterbitdarilb
               
    FROM tbl_datapemrikfpp";
    $result = $this->db->query($sql);
    return $result->row();
}  










}

?>