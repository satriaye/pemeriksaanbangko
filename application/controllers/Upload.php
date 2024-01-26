<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

	//Login
private $userlogin;
public function __construct()
{
	parent::__construct();
    $this->load->model('m_berkaskinerjapemeriksaan');
	

	$this->cekLogin();
	$this->userlogin = $this->getUserData();
	
}







	function uploadberkaskinerjapemeriksaan()
	{
		$this->load->view('v_uploadberkaskinerjapemeriksaan');
	}

	function proses()
	{
		$config['upload_path']          = './uploadberkaskinerjapemeriksaan/';
		$config['allowed_types']        = 'xls|xlsx|rar|pdf|zip';
		$config['max_size']             = 100000000000000;
		$config['max_width']            = 10000000000000;
		$config['max_height']           = 10000000000000;
		

		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('v_uploadberkaskinerjapemeriksaan', $error);
		}
		else
		{
			$data['nama_berkas'] = $this->upload->data("file_name");
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['tipe_berkas'] = $this->upload->data('file_ext');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$this->db->insert('tb_berkas',$data);
			redirect('berkaskinerjapemeriksaan');
		}
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('tb_berkas');
		$this->load->view('tampil_berkas',$data);
	}


	function download($id)
	{
		$data = $this->db->get_where('tb_berkas',['kd_berkas'=>$id])->row();
		force_download('uploadberkaskinerjapemeriksaan/'.$data->nama_berkas,"berkas");
	}

//Delete
public function delete($id_berkas)
{

	if($this->m_berkaskinerjapemeriksaan->delete($id_berkas))
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
