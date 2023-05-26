<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi extends CI_Controller {

    function __construct(){
	parent:: __construct();
	$this->load->library('form_validation');
	$this->load->database();
	$this->load->model('M_data');
	$this->load->library('session');

	if ($this->auth->generate_login()) {
           // header('Location: ' . base_url() . 'index.php/home');
    }
	else
	{
		    header('Location: ' . base_url() . 'index.php/login');
	}
		
	$this->load->database();
	$this->load->helper(array('form','url'));
	$this->load->library('form_validation');
	$this->load->model('M_data');
	$this->load->library('template');
	$this->load->library('session');
	}

	public function printer_padang()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER PADANG';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('padang')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	public function printer_jakarta()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER JAKARTA';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('jakarta')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	public function printer_rembang()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER REMBANG';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('rembang')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	public function printer_tuban()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER TUBAN';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('tuban')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	public function printer_gresik()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER GRESIK';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('gresik')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	public function printer_tonasa()
	{	
		 $data['menu']="menu/menu";	
		 $data['script']="tmp/script";		 
		 $data['head']="tmp/head";
		 $data['judul']='LIST PRINTER TONASA';
		 $data['nama']=$this->session->userdata('nama');
		 $data['level']=$this->session->userdata('level');
		 $data['email']=$this->session->userdata('email');
		 $data['list_app_group'] =$this->M_data->list_app_group()->result();
		 $data['list_data_printer'] =$this->M_data->tampil_data_printer('tonasa')->result();	
		 $this->template->load('home','laporan/printer',$data);
	}
	
	}