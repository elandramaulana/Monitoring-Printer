<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasiguest extends CI_Controller {

    function __construct(){
	parent:: __construct();
	$this->load->database();
	$this->load->helper(array('form','url'));
	$this->load->library('form_validation');
	$this->load->model('M_data');
	$this->load->library('template');
	}

	public function printer_padang()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER PADANG';
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('padang')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	public function printer_jakarta()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER JAKARTA';
		 
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('jakarta')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	public function printer_rembang()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER REMBANG';
		
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('rembang')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	public function printer_tuban()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER TUBAN';
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('tuban')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	public function printer_gresik()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER GRESIK';
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('gresik')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	public function printer_tonasa()
	{	
		 $data['guestmenu']="menu/guestmenu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER TONASA';
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('tonasa')->result();	
		 $this->template->load('homeguest','laporan/printerguest',$data);
	}
	
//	public function form()
//	{
//		$this->load->library('form_validation');
//		$this->form_validation->set_rules('loc', 'Loc', 'required|trim' );
//		$this->form_validation->set_rules('unit', 'Unit', 'required|trim' );
//		$this->form_validation->set_rules('serial_number', 'required|trim' );
//		$this->form_validation->set_rules('ip', 'Ip', 'required|trim' );
//		if($this->form_validation->run()==false){
//			$this->load->view('add');
//		}else{
//
//			$site = $this->input->post('loc');
//			$unit = $this->input->post('unit');
//			$serial = $this->input->post('serial_number');
//			$ip = $this->input->post('ip');
//			$data = [
//				'site' => $site,
//				'nama_unit' => $unit,
//				'serial_number' => $serial,
//				'ip' => $ip
//			];
//
//
//			 $this->M_data->simpan_data($data, 'tb_printer');
//		}
//		echo $site;
//
//}
//
//
//	public function input() {
//
//			$site = $this->input->post('loc');
//			$unit = $this->input->post('unit');
//			$serial = $this->input->post('serial_number');
//			$ip = $this->input->post('ip');
//
//		$data = [
//			'site' => $site,
//			'nama_unit' => $unit,
//			'serial_number' => $serial,
//			'ip' => $ip
//		];
//		$this->M_data->simpan_data($data, 'tb_printer');
//	}
	}