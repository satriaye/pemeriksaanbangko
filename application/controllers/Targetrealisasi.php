<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class targetrealisasi extends MY_Controller 
{

    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_targetrealisasi');
        $this->cekLogin();
        $this->userlogin = $this->getUserData();
        
    }
 //Index   
	public function index()
	{
        $data['userlogin'] = $this->userlogin;
        $data['listtargetrealisasi'] = $this->m_targetrealisasi->listtargetrealisasi();

        $data['targetpkm'] = $this->m_targetrealisasi->get_targetpkm();
        $data['realisasipkm'] = $this->m_targetrealisasi->get_realisasipkm();
        $data['targetlhpkonversi'] = $this->m_targetrealisasi->get_targetlhpkonversi();

		$this->template->load('template/v_layout','targetrealisasi/v_index', $data);
	}
//Tambah
    public function tambah()
	{
        $data['userlogin'] = $this->userlogin;

		$this->template->load('template/v_layout','targetrealisasi/v_tambah', $data);
	}
 
//Simpan    
    public function simpan()
	{
        $in_data['t_targetpkm'] = $this->db->escape_str($this->input->post('targetpkm'));
        $in_data['t_targetlhpkonversi'] = $this->db->escape_str($this->input->post('targetlhpkonversi'));
        $in_data['t_realisasipkm'] = $this->db->escape_str($this->input->post('realisasipkm'));


        if($this->m_targetrealisasi->insert($in_data))
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
    public function edit($id_targetrealisasi)
	{
        $data['userlogin'] = $this->userlogin;

        $data['datatargetrealisasi'] = $this->m_targetrealisasi->listtargetrealisasi_byid($id_targetrealisasi);

		$this->template->load('template/v_layout','targetrealisasi/v_ubah', $data);
    }

//Update    
    public function update($id_targetrealisasi)
	{
        $id_data['id_targetrealisasi'] = $id_targetrealisasi;
        $in_data['t_targetpkm'] = $this->db->escape_str($this->input->post('targetpkm'));
        $in_data['t_targetlhpkonversi'] = $this->db->escape_str($this->input->post('targetlhpkonversi'));
        $in_data['t_realisasipkm'] = $this->db->escape_str($this->input->post('realisasipkm'));

        if($this->m_targetrealisasi->update($in_data, $id_data))
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

    public function delete($id_targetrealisasi)
	{

        if($this->m_targetrealisasi->delete($id_targetrealisasi))
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