<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kodepemeriksaan extends MY_Controller 
{

//Login
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kodepemeriksaan');
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
        $data['listkodepemeriksaan'] = $this->m_kodepemeriksaan->listkodepemeriksaan();


		$this->template->load('template/v_layout','kodepemeriksaan/v_index', $data);
	}

}