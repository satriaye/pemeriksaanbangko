<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    private $encryption_key = '0123456789';
    private $userlogin;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->userlogin = $this->getUserData();
    }
	public function index()
	{
		if($this->session->userdata('login_pemeriksaanbangko'))

        {
            foreach($this->session->userdata('login_pemeriksaanbangko') as $row)

            if($row->level=="Admin")
            {
                redirect('beranda');
            }

            else
            {
                redirect('beranda');
            }
        }
        else
            $this->load->view('v_login');

            
	}

    public function dologin()
	{
        //$username = $this->db->escape_str($this->input->post('username'));
		$username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        
        $result = $this->m_user->login($username, $password);
        

        if ($result)
        {
            //login berhasil
            $this->session->set_userdata('login_pemeriksaanbangko', $result);
            $output['status_code'] = 200;
            $output['title'] = "Berhasil";
            $output['type'] = "success";
            $output['message'] = "Berhasil login";
        }
        else
        {
            //login gagal
            $output['status_code'] = 400;
            $output['title'] = "Gagal";
            $output['type'] = "error";
            $output['message'] = "Gagal login";
        }
        echo json_encode($output);
	}

}
