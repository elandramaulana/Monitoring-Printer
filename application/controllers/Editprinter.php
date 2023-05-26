<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Editprinter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }
    public function formedit($id){
        $this->load->database();
        $data['printer'] = $this->M_data->getIdPrinter($id);

        $this->form_validation->set_rules('loc', 'Loc', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('serial_number', 'Serial Number', 'required');
        $this->form_validation->set_rules('ip', 'Ip Address', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('edit', $data);
        }else{
           $this->M_data->edit_printer();
           redirect('Home');
        }
    }
}