<?php

ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function cekLogin()
    {
        if(!$this->session->userdata('login_pemeriksaanbangko'))
            redirect('');
    }
    public function getUserData()
    {
        return $this->session->userdata('login_pemeriksaanbangko');
    }
}
ob_end_flush();


?>