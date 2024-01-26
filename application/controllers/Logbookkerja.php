<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logbookkerja extends MY_Controller 
{

    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_logbookkerja');
        $this->cekLogin();
        $this->userlogin = $this->getUserData();
        
    }
 //Index   
	public function index()
	{
        $data['userlogin'] = $this->userlogin;
        $data['listlogbookkerja'] = $this->m_logbookkerja->listlogbookkerja();

		$this->template->load('template/v_layout','logbookkerja/v_index', $data);
	}
//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','logbookkerja/v_tambah', $data);
	}
 
//Simpan    
    public function simpan()
	{
        $in_data['t_suratperintah'] = $this->db->escape_str($this->input->post('suratperintah'));
        $in_data['t_judulsuratperintah'] = $this->db->escape_str($this->input->post('judulsuratperintah'));
        $in_data['t_tanggalperintah'] = $this->db->escape_str($this->input->post('tanggalperintah'));
        $in_data['t_tanggalproses'] = $this->db->escape_str($this->input->post('tanggalproses'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));
        $in_data['t_pj'] = $this->db->escape_str($this->input->post('pj'));

        if($this->m_logbookkerja->insert($in_data))
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
    public function edit($id_logbookkerja)
	{
        $data['userlogin'] = $this->userlogin;

        $data['datalogbookkerja'] = $this->m_logbookkerja->listlogbookkerja_byid($id_logbookkerja);

		$this->template->load('template/v_layout','logbookkerja/v_ubah', $data);
    }

//Update    
    public function update($id_logbookkerja)
	{
        $id_data['id_logbookkerja'] = $id_logbookkerja;
        $in_data['t_suratperintah'] = $this->db->escape_str($this->input->post('suratperintah'));
        $in_data['t_judulsuratperintah'] = $this->db->escape_str($this->input->post('judulsuratperintah'));
        $in_data['t_tanggalperintah'] = $this->db->escape_str($this->input->post('tanggalperintah'));
        $in_data['t_status'] = $this->db->escape_str($this->input->post('status'));
        $in_data['t_keterangan'] = $this->db->escape_str($this->input->post('keterangan'));
        $in_data['t_pj'] = $this->db->escape_str($this->input->post('pj'));

        if($this->m_logbookkerja->update($in_data, $id_data))
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

    public function delete($id_logbookkerja)
	{

        if($this->m_logbookkerja->delete($id_logbookkerja))
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
    
}