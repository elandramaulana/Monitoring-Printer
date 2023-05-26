<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->auth->generate_login()) {
			// header('Location: ' . base_url() . 'index.php/home');
		} else {
			header('Location: ' . base_url() . 'index.php/login');
		}

		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->model('M_menu');
		$this->load->library("template");
		$this->load->model('M_data');
	}

	public function index()
	{
		$data['menu'] = "menu/menu";
		$data['script'] = "tmp/script";
		$data['head'] = "tmp/head";

		$data['judul'] = 'Monitoring Printer ' . date('M-Y');
		$data['list_data_printer_padang'] = $this->M_data->tampil_data_printer('padang')->result();
		$data['list_data_printer_jakarta'] = $this->M_data->tampil_data_printer('jakarta')->result();
		$data['list_data_printer_rembang'] = $this->M_data->tampil_data_printer('rembang')->result();
		$data['list_data_printer_tuban'] = $this->M_data->tampil_data_printer('tuban')->result();
		$data['list_data_printer_gresik'] = $this->M_data->tampil_data_printer('gresik')->result();
		$data['list_data_printer_tonasa'] = $this->M_data->tampil_data_printer('tonasa')->result();
	

		$this->template->load('home', 'welcome', $data);
	}
}
