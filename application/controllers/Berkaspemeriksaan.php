<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkaspemeriksaan extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berkaspemeriksaan');
        //$this->load->helper(array('date_format'));
        $this->load->library(array('PHPExcel', 'excel'));
        $this->cekLogin();
        $this->userlogin = $this->getUserData();
        
    }

//Index, upload, download
	public function index()
	{
        $data['userlogin'] = $this->userlogin;
        $data["listberkaspemeriksaan"] = directory_map("./upload");
        $data["listberkaspemeriksaanvalue"] = $this->m_berkaspemeriksaan->listberkaspemeriksaanvalue();



		$this->template->load('template/v_layout','berkaspemeriksaan/v_index', $data);
	}


    
    public function delete($fileName)
	{
        $fileName = urldecode($fileName);

		if(unlink("./upload/$fileName"))
        {
            redirect("berkaspemeriksaan");
        }
        else
        {
            echo "Gagal Menghapus File";
        }
            

	}
    public function upload()
	{
        $config["upload_path"] = "./upload/";
        $config['allowed_types']        = 'gif|jpg|jpeg|png|xlsx';
		$config['max_size']             = 100000000000000;
		$config['max_width']            = 10000000000000;
		$config['max_height']           = 10000000000000;

        $this->load->library("upload", $config);

        if($this->upload->do_upload('file'))
        {
            redirect("berkaspemeriksaan");
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
				$this->load->view('berkaspemeriksaan/v_index', $error);
        }
	}


}