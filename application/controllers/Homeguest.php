<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Homeguest extends CI_Controller{

    public function __construct()
    {
        
		parent::__construct();
		
    
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->model('M_menu');
		$this->load->library("template");
		$this->load->model('M_data');
    }

  public function guestview(){
    $data['guestmenu'] = "menu/guestmenu";
		$data['script'] = "tmp/script";
		$data['head'] = "tmp/head";

		$data['judul'] = 'Monitoring Printer ' . date('M-Y');
		$data['list_data_printer_padang'] = $this->M_data->tampil_data_printer('padang')->result();
		$data['list_data_printer_jakarta'] = $this->M_data->tampil_data_printer('jakarta')->result();
		$data['list_data_printer_rembang'] = $this->M_data->tampil_data_printer('rembang')->result();
		$data['list_data_printer_tuban'] = $this->M_data->tampil_data_printer('tuban')->result();
		$data['list_data_printer_gresik'] = $this->M_data->tampil_data_printer('gresik')->result();
		$data['list_data_printer_tonasa'] = $this->M_data->tampil_data_printer('tonasa')->result();
	

		$this->template->load('homeguest', 'welcomeguest', $data);
        // $this->load->view('homeguest');
  }

}