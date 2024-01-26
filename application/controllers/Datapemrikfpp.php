<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapemrikfpp extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datapemrikfpp');
        $this->load->library('pdf');
        //$this->load->helper(array('date_format'));
        $this->load->library(array('PHPExcel', 'excel'));
        $this->cekLogin();
        $this->userlogin = $this->getUserData();
        
    }

//Index
	public function index()
	{
       
        $data['userlogin'] = $this->userlogin;
        $data['listdatapemrikfpp'] = $this->m_datapemrikfpp->listdatapemrikfpp();
        $data['dataifpotensikkabelumterbitsp2'] = $this->m_datapemrikfpp->get_sum_count_if_np2thdpotensi();
        $data['counttunggakannp2'] = $this->m_datapemrikfpp->get_count_if_tunggakan_np2();
        $data['counttunggakansp2'] = $this->m_datapemrikfpp->get_count_if_tunggakan_sp2();
        $data['dataifpotensikkabelumterbitlhp'] = $this->m_datapemrikfpp->get_sum_count_if_sp2thdpotensi();
        $data['countlhpterbit'] = $this->m_datapemrikfpp->get_count_if_lhpterbit();
        $data['sumlhpkonversi'] = $this->m_datapemrikfpp->get_sum_lhpkonversi();
        $data['sumskpkbterbit'] = $this->m_datapemrikfpp->get_sum_skpkbterbit();
        $data['sumskpkbdisetujui'] = $this->m_datapemrikfpp->get_sum_skpkbdisetujui();

        $data['dataifpotensikkaterbitskpkb'] = $this->m_datapemrikfpp->get_sum_count_if_skpkbthdpotensi();

        $data['countketeranganwaktulhp'] = $this->m_datapemrikfpp->get_count_if_countketeranganwaktulhp();
        
        $data['pietunggakannp2darijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_tunggakannp2darijenispemeriksaan();
        $data['pietunggakansp2darijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_tunggakansp2darijenispemeriksaan();
        $data['pielhpselesaidarijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_lhpselesaijenispemeriksaan();




        $data['tunggakandarilb'] = $this->m_datapemrikfpp->get_count_tunggakandarilb();



        $data['lhpselesaitiapbulan'] = $this->m_datapemrikfpp->get_count_lhpselesaitiapbulan();


		$this->template->load('template/v_layout','datapemrikfpp/v_index', $data);
	}

//Filter
    public function filter($status)
	{
        $data['userlogin'] = $this->userlogin;
        $data['listdatapemrikfpp'] = $this->m_datapemrikfpp->filterlistdatapemrikfpp($status);

		$this->template->load('template/v_layout','datapemrikfpp/v_index', $data);
	}

//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','datapemrikfpp/v_tambah', $data);
	}

//Simpan
    public function simpan()
	{
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_jenispemeriksaan'] = $this->db->escape_str($this->input->post('jenispemeriksaan'));
        $in_data['t_kodepemeriksaan'] = $this->db->escape_str($this->input->post('kodepemeriksaan'));
        $in_data['t_sptlb'] = $this->db->escape_str($this->input->post('sptlb'));
        $in_data['t_potensikka'] = $this->db->escape_str($this->input->post('potensikka'));
        $in_data['t_ar'] = $this->db->escape_str($this->input->post('ar'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));
        $in_data['t_tanggalupdatedatapemrik'] = $this->db->escape_str($this->input->post('tanggalupdatedatapemrik'));
        
        if($this->m_datapemrikfpp->insert($in_data))
        {
            $output ['status_code'] = 200; //200, 400, 404, 500
            $output ['title'] = "Berhasil";
            $output ['message'] = "Berhasil menambahkan";
            $output ['type'] = "success"; //success, error, warning, info
        }
        else
        {
            $output ['status_code'] = 400; //200, 400, 404, 500
            $output ['title'] = "Gagal";
            $output ['message'] = "Gagal menambahkan";
            $output ['type'] = "error"; //success, error, warning, info 
        }

        echo json_encode($output);
	}

//Edit
    public function edit($id_datapemrikfpp)
	{
        $data['userlogin'] = $this->userlogin;

        $data['datadatapemrikfpp'] = $this->m_datapemrikfpp->listdatapemrikfpp_byid($id_datapemrikfpp);

		$this->template->load('template/v_layout','datapemrikfpp/v_ubah', $data);
    }

//Update
    public function update($id_datapemrikfpp)
	{
        $id_data['id_datapemrikfpp'] = $id_datapemrikfpp;
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_jenispemeriksaan'] = $this->db->escape_str($this->input->post('jenispemeriksaan'));
        $in_data['t_kodepemeriksaan'] = $this->db->escape_str($this->input->post('kodepemeriksaan'));
        $in_data['t_sptlb'] = $this->db->escape_str($this->input->post('sptlb'));
        $in_data['t_potensikka'] = $this->db->escape_str($this->input->post('potensikka'));
        $in_data['t_ar'] = $this->db->escape_str($this->input->post('ar'));
        $in_data['t_np2'] = $this->db->escape_str($this->input->post('np2'));
        $in_data['t_tanggalnp2'] = $this->db->escape_str($this->input->post('tanggalnp2'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));
        $in_data['t_tanggalupdatedatapemrik'] = $this->db->escape_str($this->input->post('tanggalupdatedatapemrik'));

        if($this->m_datapemrikfpp->update($in_data, $id_data))
        {
            $output ['status_code'] = 200; //200, 400, 404, 500
            $output ['title'] = "Berhasil";
            $output ['message'] = "Berhasil mengubah";
            $output ['type'] = "success"; //success, error, warning, info
        }
        else
        {
            $output ['status_code'] = 400; //200, 400, 404, 500
            $output ['title'] = "Gagal";
            $output ['message'] = "Gagal mengubah";
            $output ['type'] = "error"; //success, error, warning, info 
        }

        echo json_encode($output);
	}

//Delete
    public function delete($id_datapemrikfpp)
	{

        if($this->m_datapemrikfpp->delete($id_datapemrikfpp))
        {
            $output ['status_code'] = 200; //200, 400, 404, 500
            $output ['title'] = "Berhasil";
            $output ['message'] = "Berhasil menghapus";
            $output ['type'] = "success"; //success, error, warning, info
        }
        else
        {
            $output ['status_code'] = 400; //200, 400, 404, 500
            $output ['title'] = "Gagal";
            $output ['message'] = "Gagal menghapus";
            $output ['type'] = "error"; //success, error, warning, info 
        }

        echo json_encode($output);
	}

//Export Excel
    public function exportlistdatapemrikfpp()
	{
        $listdata = $this->m_datapemrikfpp->exportlistdatapemrikfpp();
        $data = array(
            'title' => 'Monitoring Data Pemeriksaan FPP - ' . time(),
            'listdata' => $listdata
        );
        $this->load->view('datapemrikfpp/v_listdatapemrikfpp_xls', $data);


	}

//Export PDF
    public function exportpdf($id_datapemrikfpp)
	{
        $data['userlogin'] = $this->userlogin;
        $id_data['id_datapemrikfpp'] = $id_datapemrikfpp;
        $data['datadatapemrikfpp'] = $this->m_datapemrikfpp->listdatapemrikfpp_byid($id_datapemrikfpp);
        
        $this->pdf->setPaper('A4','portrait');
        $this->pdf->filename = "Cetak ND & S.pdf";
        $this->pdf->load_view('datapemrikfpp/v_cetakdatapemrikfpp', $data);
	}

//UploadFiles (masih gagal)
    public function uploadfiles() 
    {
        $data["files"] = directory_map("./uploads");

        $this->load->view('template/v_layout','datapemrikfpp/v_index', $data);

    }

//Import Dari Excel
    public function import_datapemrikfpp()
    {
        if(isset($_FILES['file']['name']))
        {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet)
            {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for($row=2; $row <= $highestRow; $row++)
                {
                    $namawp= $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $npwp= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $alamatsurat= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $masa_tahun_pajak= $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $jenispemeriksaan= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $kodepemeriksaan= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $sptlb= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $potensikka= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $ar= $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $np2= $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $tanggalnp2= $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    
                    $namasupervisor= $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $pangkatsupervisor= $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $namaketua= $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $pangkatketua= $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $namaanggota1= $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $pangkatanggota1= $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $namaanggota2= $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                    $pangkatanggota2= $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                    $sp2= $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                    $tanggalsp2= $worksheet->getCellByColumnAndRow(20, $row)->getValue();

                    $namasupervisorbaru= $worksheet->getCellByColumnAndRow(21, $row)->getValue();
                    $pangkatsupervisorbaru= $worksheet->getCellByColumnAndRow(22, $row)->getValue();
                    $namaketuabaru= $worksheet->getCellByColumnAndRow(23, $row)->getValue();
                    $pangkatketuabaru= $worksheet->getCellByColumnAndRow(24, $row)->getValue();
                    $namaanggota1baru= $worksheet->getCellByColumnAndRow(25, $row)->getValue();
                    $pangkatanggota1baru= $worksheet->getCellByColumnAndRow(26, $row)->getValue();
                    $namaanggota2baru= $worksheet->getCellByColumnAndRow(27, $row)->getValue();
                    $pangkatanggota2baru= $worksheet->getCellByColumnAndRow(28, $row)->getValue();
                    $sp2perubahan= $worksheet->getCellByColumnAndRow(29, $row)->getValue();
                    $tanggalsp2perubahan= $worksheet->getCellByColumnAndRow(30, $row)->getValue();

                    $jatuhtempo= $worksheet->getCellByColumnAndRow(31, $row)->getValue();
                    $nomorlhp= $worksheet->getCellByColumnAndRow(32, $row)->getValue();
                    $tanggallhp= $worksheet->getCellByColumnAndRow(33, $row)->getValue();
                    $tanggalsampaip3= $worksheet->getCellByColumnAndRow(34, $row)->getValue();
                    $tanggalndkepelayanan= $worksheet->getCellByColumnAndRow(35, $row)->getValue();                    

                    $keteranganwaktulhp= $worksheet->getCellByColumnAndRow(36, $row)->getValue();
                    $lhpkonversi= $worksheet->getCellByColumnAndRow(37, $row)->getValue();
                    $jenisskp= $worksheet->getCellByColumnAndRow(38, $row)->getValue();

                    $skpkbterbit= $worksheet->getCellByColumnAndRow(39, $row)->getValue();
                    $skpkbdisetujui= $worksheet->getCellByColumnAndRow(40, $row)->getValue();
                    $skpkbcair= $worksheet->getCellByColumnAndRow(41, $row)->getValue();
                    $skplbterbit= $worksheet->getCellByColumnAndRow(42, $row)->getValue();
                    $skplbdisetujui= $worksheet->getCellByColumnAndRow(43, $row)->getValue();
                    $rd= $worksheet->getCellByColumnAndRow(44, $row)->getValue();
                    $status= $worksheet->getCellByColumnAndRow(45, $row)->getValue();
                    $keterangan= $worksheet->getCellByColumnAndRow(46, $row)->getValue();

                    if($namawp !="")
                    {
                        $data[] = array(
                            't_namawp' => $namawp,
                            't_npwp' => $npwp,
                            't_alamatsurat' => $alamatsurat,
                            't_masa_tahun_pajak' => $masa_tahun_pajak,
                            't_jenispemeriksaan' => $jenispemeriksaan,
                            't_kodepemeriksaan' => $kodepemeriksaan,
                            't_sptlb' => $sptlb,
                            't_potensikka' => $potensikka,
                            't_ar' => $ar,
                            't_np2' => $np2,
                            't_tanggalnp2' => $tanggalnp2,
                            
                            't_namasupervisor' => $namasupervisor,
                            't_pangkatsupervisor' => $pangkatsupervisor,
                            't_namaketua' => $namaketua,
                            't_pangkatketua' => $pangkatketua,
                            't_namaanggota1' => $namaanggota1,
                            't_pangkatanggota1' => $pangkatanggota1,
                            't_namaanggota2' => $namaanggota2,
                            't_pangkatanggota2' => $pangkatanggota2,
                            't_sp2' => $sp2,
                            't_tanggalsp2' => $tanggalsp2,

                            't_namasupervisorbaru' => $namasupervisorbaru,
                            't_pangkatsupervisorbaru' => $pangkatsupervisorbaru,
                            't_namaketuabaru' => $namaketuabaru,
                            't_pangkatketuabaru' => $pangkatketuabaru,
                            't_namaanggota1baru' => $namaanggota1baru,
                            't_pangkatanggota1baru' => $pangkatanggota1baru,
                            't_namaanggota2baru' => $namaanggota2baru,
                            't_pangkatanggota2baru' => $pangkatanggota2baru,
                            't_sp2perubahan' => $sp2perubahan,
                            't_tanggalsp2perubahan' => $tanggalsp2perubahan,

                            't_jatuhtempo' => $jatuhtempo,
                            't_nomorlhp' => $nomorlhp,
                            't_tanggallhp' => $tanggallhp,
                            't_tanggalsampaip3'=> $tanggalsampaip3,
                            't_tanggalndkepelayanan' => $tanggalndkepelayanan,

                            't_keteranganwaktulhp'=> $keteranganwaktulhp,
                            't_lhpkonversi' => $lhpkonversi,
                            't_jenisskp'=> $jenisskp,
                            
                            
                            't_skpkbterbit' => $skpkbterbit,
                            't_skpkbdisetujui' => $skpkbdisetujui,
                            't_skpkbcair' => $skpkbcair,
                            't_skplbterbit' => $skplbterbit,
                            't_skplbdisetujui' => $skplbdisetujui,
                            't_rd' => $rd,
                            't_status' => $status,
                            't_keterangan' => $keterangan,

                        );
                    }

                }
            }
            if($this->m_datapemrikfpp->import_data($data))
            {
                $output['status_code'] = 200;
                $output['title'] = "Berhasil";
                $output['type'] = "success";
                $output['message'] = "Berhasil Import Data";
            }
            else
            {
                $output['status_code'] = 400;
                $output['title'] = "Gagal";
                $output['type'] = "error";
                $output['message'] = "Gagal Import Data";
            }

            echo json_encode($output);
        }
    }
}