<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->userlogin = $this->getUserData();
        $this->load->model('m_datapemrikfpp');
        $this->load->model('m_datapemrikp3');
        $this->load->model('m_targetrealisasi');
    }
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
        
        $data['countketeranganwaktulhp'] = $this->m_datapemrikfpp->get_count_if_countketeranganwaktulhp();

        $data['dataifpotensikkaterbitskpkb'] = $this->m_datapemrikfpp->get_sum_count_if_skpkbthdpotensi();

        $data['pietunggakannp2darijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_tunggakannp2darijenispemeriksaan();
        $data['pietunggakansp2darijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_tunggakansp2darijenispemeriksaan();
        $data['pielhpselesaidarijenispemeriksaan'] = $this->m_datapemrikfpp->get_count_lhpselesaijenispemeriksaan();

        $data['lhpselesaitiapbulan'] = $this->m_datapemrikfpp->get_count_lhpselesaitiapbulan();

        $data['tunggakandarilb'] = $this->m_datapemrikfpp->get_count_tunggakandarilb();


        //Target-Realisasi//
        $data['targetpkm'] = $this->m_targetrealisasi->get_targetpkm();
        $data['realisasipkm'] = $this->m_targetrealisasi->get_realisasipkm();
        $data['targetlhpkonversi'] = $this->m_targetrealisasi->get_targetlhpkonversi();

       

		$this->template->load('template/v_layout','v_beranda', $data);
       
	}
    
}
