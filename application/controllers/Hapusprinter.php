<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hapusprinter extends CI_Controller
{
    public function hapus($id){
        $this->load->database();
        $this->db->delete('tb_printer', array('id' => $id));
        redirect('Home');
    }
}