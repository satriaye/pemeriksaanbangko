<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skpfpp extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_skpfpp');
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
        $data['listskpfpp'] = $this->m_skpfpp->listskpfpp();

		$this->template->load('template/v_layout','skpfpp/v_index', $data);
	}

//Filter
    public function filter($status)
	{
        $data['userlogin'] = $this->userlogin;
        $data['listskpfpp'] = $this->m_skpfpp->filterlistskpfpp($status);

		$this->template->load('template/v_layout','skpfpp/v_index', $data);
	}

//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','skpfpp/v_tambah', $data);
	}

//Simpan
    public function simpan()
	{
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_kodepemeriksaan'] = $this->db->escape_str($this->input->post('kodepemeriksaan'));
        $in_data['t_nomorlhp'] = $this->db->escape_str($this->input->post('nomorlhp'));
        $in_data['t_skpkbterbit'] = $this->db->escape_str($this->input->post('skpkbterbit'));
        $in_data['t_skpkbdisetujui'] = $this->db->escape_str($this->input->post('skpkbdisetujui'));
        $in_data['t_skpkbcair'] = $this->db->escape_str($this->input->post('skpkbcair'));
        $in_data['t_sptlb'] = $this->db->escape_str($this->input->post('sptlb'));
        $in_data['t_skplbterbit'] = $this->db->escape_str($this->input->post('skplbterbit'));
        $in_data['t_skplbdisetujui'] = $this->db->escape_str($this->input->post('skplbdisetujui'));
        $in_data['t_rd'] = $this->db->escape_str($this->input->post('rd'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));

        if($this->m_skpfpp->insert($in_data))
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

        $data['datadatapemrikfpp'] = $this->m_skpfpp->listskpfpp_byid($id_datapemrikfpp);

		$this->template->load('template/v_layout','skpfpp/v_ubah', $data);
    }

//Update
    public function update($id_datapemrikfpp)
	{
        $id_data['id_datapemrikfpp'] = $id_datapemrikfpp;
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_kodepemeriksaan'] = $this->db->escape_str($this->input->post('kodepemeriksaan'));
        $in_data['t_nomorlhp'] = $this->db->escape_str($this->input->post('nomorlhp'));
        $in_data['t_jenisskp'] = $this->db->escape_str($this->input->post('jenisskp'));
        $in_data['t_skpkbterbit'] = $this->db->escape_str($this->input->post('skpkbterbit'));
        $in_data['t_skpkbdisetujui'] = $this->db->escape_str($this->input->post('skpkbdisetujui'));
        $in_data['t_skpkbcair'] = $this->db->escape_str($this->input->post('skpkbcair'));
        $in_data['t_sptlb'] = $this->db->escape_str($this->input->post('sptlb'));
        $in_data['t_skplbterbit'] = $this->db->escape_str($this->input->post('skplbterbit'));
        $in_data['t_skplbdisetujui'] = $this->db->escape_str($this->input->post('skplbdisetujui'));
        $in_data['t_rd'] = $this->db->escape_str($this->input->post('rd'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));	
        $in_data['t_tanggalupdateskpfpp'] = $this->db->escape_str($this->input->post('tanggalupdateskpfpp'));
       
        if($this->m_skpfpp->update($in_data, $id_data))
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

        if($this->m_skpfpp->delete($id_datapemrikfpp))
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
    public function exportlistskpfpp()
	{
        $listdata = $this->m_skpfpp->exportlistskpfpp();
        $data = array(
            'title' => 'List Data Usulan Pemeriksaan - ' . time(),
            'listdata' => $listdata
        );
        $this->load->view('skpfpp/v_listskpfpp_xls', $data);


	}

//Export PDF
    public function exportpdf($id_datapemrikfpp)
	{
        $data['userlogin'] = $this->userlogin;
        $id_data['id_datapemrikfpp'] = $id_datapemrikfpp;
        $data['dataskpfpp'] = $this->m_skpfpp->listskpfpp_byid($id_datapemrikfpp);
        
        $this->pdf->setPaper('A4','portrait');
        $this->pdf->filename = "Cetak ND & S.pdf";
        $this->pdf->load_view('skpfpp/v_cetakskpfpp', $data);
	}

//UploadFiles (masih gagal)+
    public function uploadfiles() 
    {
        $data["files"] = directory_map("./uploads");

        $this->load->view('template/v_layout','skpfpp/v_index', $data);

    }

//Import Dari Excel
    public function import_skpfpp()
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
                    $kodepemeriksaan= $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $tanggalinput= $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $np2= $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $tanggalnp2= $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $status= $worksheet->getCellByColumnAndRow(8, $row)->getValue();

                    if($namawp !="" && $npwp !="" && $alamatsurat !="" && $kodepemeriksaan !="" && $tanggalinput !="" &&
                    $np2 !="" && $tanggalnp2 !="" && $status !="" )
                    {
                        $data[] = array(
                            't_namawp' => $namawp,
                            't_npwp' => $npwp,
                            't_alamatsurat' => $alamatsurat,
                            't_masa_tahun_pajak' => $masa_tahun_pajak,
                            't_kodepemeriksaan' => $kodepemeriksaan,
                            't_tanggalinput' => $tanggalinput,
                            't_np2' => $np2,
                            't_tanggalnp2' => $tanggalnp2,
                            't_status' => $status,

                            

                        );
                    }

                }
            }
            if($this->m_skpfpp->import_data($data))
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