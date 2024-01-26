<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lbpphbadan extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lbpphbadan');
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
        $data['listlbpphbadan'] = $this->m_lbpphbadan->listlbpphbadan();

		$this->template->load('template/v_layout','lbpphbadan/v_index', $data);
	}

//Filter
    public function filter($status, $tgl_awal, $tgl_akhir)
	{
        $data['userlogin'] = $this->userlogin;
        $data['listlbpphbadan'] = $this->m_lbpphbadan->filterlistlbpphbadan($status, $tgl_awal, $tgl_akhir);

		$this->template->load('template/v_layout','lbpphbadan/v_index', $data);
	}

//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','lbpphbadan/v_tambah', $data);
	}

//Simpan
    public function simpan()
	{
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_jumlahlb'] = $this->db->escape_str($this->input->post('jumlahlb'));
        $in_data['t_tanggallapor'] = $this->db->escape_str($this->input->post('tanggallapor'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));

        if($this->m_lbpphbadan->insert($in_data))
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
    public function edit($id_lbpphbadan)
	{
        $data['userlogin'] = $this->userlogin;

        $data['datalbpphbadan'] = $this->m_lbpphbadan->listlbpphbadan_byid($id_lbpphbadan);

		$this->template->load('template/v_layout','lbpphbadan/v_ubah', $data);
    }

//Update
    public function update($id_lbpphbadan)
	{
        $id_data['id_lbpphbadan'] = $id_lbpphbadan;
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_jumlahlb'] = $this->db->escape_str($this->input->post('jumlahlb'));
        $in_data['t_tanggallapor'] = $this->db->escape_str($this->input->post('tanggallapor'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));

        if($this->m_lbpphbadan->update($in_data, $id_data))
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
    public function delete($id_lbpphbadan)
	{

        if($this->m_lbpphbadan->delete($id_lbpphbadan))
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
    public function exportlistlbpphbadan()
	{
        $listdata = $this->m_lbpphbadan->exportlistlbpphbadan();
        $data = array(
            'title' => 'List Data Usulan Pemeriksaan - ' . time(),
            'listdata' => $listdata
        );
        $this->load->view('lbpphbadan/v_listlbpphbadan_xls', $data);


	}

//Export PDF
    public function exportpdf($id_lbpphbadan)
	{
        $data['userlogin'] = $this->userlogin;
        $id_data['id_lbpphbadan'] = $id_lbpphbadan;
        $data['datalbpphbadan'] = $this->m_lbpphbadan->listlbpphbadan_byid($id_lbpphbadan);
        
        $this->pdf->setPaper('A4','portrait');
        $this->pdf->filename = "Cetak ND & S.pdf";
        $this->pdf->load_view('lbpphbadan/v_cetaklbpphbadan', $data);
	}

//UploadFiles (masih gagal)
    public function uploadfiles() 
    {
        $data["files"] = directory_map("./uploads");

        $this->load->view('template/v_layout','lbpphbadan/v_index', $data);

    }

//Import Dari Excel
    public function import_lbpphbadan()
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
            if($this->m_lbpphbadan->import_data($data))
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