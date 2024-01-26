<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sp2fpp extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sp2fpp');
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
        $data['listsp2fpp'] = $this->m_sp2fpp->listsp2fpp();

		$this->template->load('template/v_layout','sp2fpp/v_index', $data);
	}

//Filter
    public function filter($status)
	{
        $data['userlogin'] = $this->userlogin;
        $data['listsp2fpp'] = $this->m_sp2fpp->filterlistsp2fpp($status);

		$this->template->load('template/v_layout','sp2fpp/v_index', $data);
	}

//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','sp2fpp/v_tambah', $data);
	}

//Simpan
    public function simpan()
	{
        $in_data['t_namawp'] = $this->db->escape_str($this->input->post('namawp'));
        $in_data['t_npwp'] = $this->db->escape_str($this->input->post('npwp'));
        $in_data['t_alamatsurat'] = $this->db->escape_str($this->input->post('alamatsurat'));
        $in_data['t_masa_tahun_pajak'] = $this->db->escape_str($this->input->post('masa_tahun_pajak'));
        $in_data['t_kodepemeriksaan'] = $this->db->escape_str($this->input->post('kodepemeriksaan'));
        $in_data['t_tanggalinput'] = $this->db->escape_str($this->input->post('tanggalinput'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        
        if($this->m_sp2fpp->insert($in_data))
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

        $data['datadatapemrikfpp'] = $this->m_sp2fpp->listsp2fpp_byid($id_datapemrikfpp);

		$this->template->load('template/v_layout','sp2fpp/v_ubah', $data);
    }

//Update
    public function update($id_datapemrikfpp)
	{
        $id_data['id_datapemrikfpp'] = $id_datapemrikfpp;
        
        $in_data['t_namasupervisor'] = $this->db->escape_str($this->input->post('namasupervisor'));
        $in_data['t_pangkatsupervisor'] = $this->db->escape_str($this->input->post('pangkatsupervisor'));
        $in_data['t_namaketua'] = $this->db->escape_str($this->input->post('namaketua'));
        $in_data['t_pangkatketua'] = $this->db->escape_str($this->input->post('pangkatketua'));
        $in_data['t_namaanggota1'] = $this->db->escape_str($this->input->post('namaanggota1'));
        $in_data['t_pangkatanggota1'] = $this->db->escape_str($this->input->post('pangkatanggota1'));
        $in_data['t_namaanggota2'] = $this->db->escape_str($this->input->post('namaanggota2'));
        $in_data['t_pangkatanggota2'] = $this->db->escape_str($this->input->post('pangkatanggota2'));
        $in_data['t_sp2'] = $this->db->escape_str($this->input->post('sp2'));
        $in_data['t_tanggalsp2'] = $this->db->escape_str($this->input->post('tanggalsp2'));

        $in_data['t_namasupervisorbaru'] = $this->db->escape_str($this->input->post('namasupervisorbaru'));
        $in_data['t_pangkatsupervisorbaru'] = $this->db->escape_str($this->input->post('pangkatsupervisorbaru'));
        $in_data['t_namaketuabaru'] = $this->db->escape_str($this->input->post('namaketuabarubaru'));
        $in_data['t_pangkatketuabaru'] = $this->db->escape_str($this->input->post('pangkatketuabarubaru'));
        $in_data['t_namaanggota1baru'] = $this->db->escape_str($this->input->post('namaanggota1baru'));
        $in_data['t_pangkatanggota1baru'] = $this->db->escape_str($this->input->post('pangkatanggota1baru'));
        $in_data['t_namaanggota2baru'] = $this->db->escape_str($this->input->post('namaanggota2baru'));
        $in_data['t_pangkatanggota2baru'] = $this->db->escape_str($this->input->post('pangkatanggota2baru'));
        $in_data['t_sp2perubahan'] = $this->db->escape_str($this->input->post('sp2perubahan'));
        $in_data['t_tanggalsp2perubahan'] = $this->db->escape_str($this->input->post('tanggalsp2perubahan'));

        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));
        $in_data['t_tanggalupdatesp2fpp'] = $this->db->escape_str($this->input->post('tanggalupdatesp2fpp'));

        if($this->m_sp2fpp->update($in_data, $id_data))
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

        if($this->m_sp2fpp->delete($id_datapemrikfpp))
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
    public function exportlistsp2fpp()
	{
        $listdata = $this->m_sp2fpp->exportlistsp2fpp();
        $data = array(
            'title' => 'List Data Usulan Pemeriksaan - ' . time(),
            'listdata' => $listdata
        );
        $this->load->view('sp2fpp/v_listsp2fpp_xls', $data);


	}

//Export PDF
    public function exportpdf()
	{
        $data['listsp2fpp'] = $this->m_sp2fpp->listsp2fpp();
        

        $this->pdf->setPaper('A4','portrait');
        $this->pdf->filename = "Cetak ND & S.pdf";
        $this->pdf->load_view('sp2fpp/v_cetaksp2fpp', $data);
	}

//UploadFiles
    public function uploadfiles() 
    {
        $data["files"] = directory_map("./uploads");

        $this->load->view('template/v_layout','sp2fpp/v_index', $data);

    }
}