<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AddPrinter extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }

    public function form(){

        $this->form_validation->set_rules('loc', 'Loc', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('serial_number', 'Serial Number', 'required');
        $this->form_validation->set_rules('ip', 'Ip Address', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('add');
        }else{
           $this->M_data->tambah_printer();
           redirect('Home');
        }
    }

//    public function tambah(){
//        $this -> load -> view('')
//    }
}