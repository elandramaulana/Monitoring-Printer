<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class M_data extends CI_Model{

	function simpan_data($data,$table){
		$this->db->insert($table,$data);
	}
	function tampil_data_printer($site){
		return $this->db->query(" select * from tb_printer where site='".$site."'");											
	}
	// function tampil_data($tbl){
	// 	return $this->db->get($tbl); // SELECT * FROM $TBL
	// }

	
	function list_app_group(){
			        return $this->db->query("select * from tb_printer");

	}

	function tambah_printer(){

	    $data = [
	        "site" => $this->input->post('loc', true),
	        "nama_unit" => $this->input->post('unit', true),
	        "serial_number" => $this->input->post('serial_number', true),
	        "ip" => $this->input->post('ip', true)
        ];

        $this->db->insert('tb_printer',$data);
    }

	function edit_printer(){

	    $data = [
	        "site" => $this->input->post('loc', true),
	        "nama_unit" => $this->input->post('unit', true),
	        "serial_number" => $this->input->post('serial_number', true),
	        "ip" => $this->input->post('ip', true)
        ];

		$this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_printer',$data);
    }

	function getIdPrinter($id){
		return $this->db->get_where('tb_printer', ['id' => $id])-> row_array();
	}

	

}