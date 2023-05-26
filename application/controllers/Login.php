<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

     public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('auth');
        if ($this->auth->generate_login()) {
            header('Location: ' . base_url() . 'index.php/home');
        } //Cek Session Login
    }

    public function index() {

        if ($this->input->post('username') == "") {
          
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
           // $temp = $this->input->post('nopeg');
            $set = $this->auth->index($username, $password);

            if ($set == 1) {
                $no = $this->session->userdata('no');
                $nama = $this->session->userdata('nama');
                $data = array(
                    'no' => $no,
                    'nama' => $nama,
                    'level' => $level
                );
                 header('Location: ' . base_url() . 'index.php/home');
            } else {
                
                $load['error'] = '<div class="alert alert-danger" role="alert">Kesalahan Dalam Username dan Password / Tidak Memiliki Akses untuk Masuk kedalam applikasi</div>';
              //  $this->template->load('Tema', 'ldap_user/page_login', $load);
            }

        }
    }

    function changeSession() {
        $company = $this->input->post('newCompany');
        $this->session->set_userdata('company', $company);
    }
    
    function logout() {
        $this->auth->do_logout();
        header('Location: ' . base_url());
    }

//Controller Login End
}
