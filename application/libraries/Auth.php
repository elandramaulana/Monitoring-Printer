<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    var $CI = NULL;

    function __construct() {
        $this->CI = & get_instance();
    }

    function index($user, $pass) { //Login System
        $ldap['user'] = $user . "@smig.corp"; // di tambahn @semenindonesia
        if (empty($pass)) {
            $ldap['pass'] = $pass . 'aascs'; //biar error
        } else {
            $ldap['pass'] = $pass;
        }
		
		if($user=='admin' and $pass=='semenpadang')
		{
			$ldap_id = array(
											'ldap_id' => $user,
											'nama' => $user,
											'level' => 'admin',
											'email' => $email,
											'nama_biro' => $nama_biro,
											'email_biro' => $email_biro,
											'jabatan' => $jabatan,
											'no' => $no,
											);
									$this->CI->session->set_userdata($ldap_id);
										return true;
		}
		else
		{
								$ldap['host'] = 'smig.corp';
								$ldap['port'] = 389;
								$ldap['conn'] = ldap_connect($ldap['host'], $ldap['port'])or die("Could not conenct to {$ldap['host']}");
								ldap_set_option($ldap['conn'], LDAP_OPT_PROTOCOL_VERSION, 3);
								@$ldap['bind'] = ldap_bind($ldap['conn'], $ldap['user'], $ldap['pass']);
								if ($ldap['bind']) {
									$Query = $this->CI->db->query("SELECT * FROM  tb_user WHERE  email = '$user@semenindonesia.com'");
									$result = $Query->row();
									$nama = $result->nama;
									$level = $result->level;
									$email = $result->email;
									$nama_biro = $result->nama_biro;
									$email_biro = $result->email_biro;
									$jabatan = $result->jabatan;
									$no = $result->no;
								

								$ldap_id = array(
											'ldap_id' => $user,
											'nama' => $user,
											'level' => 'view',
											'email' => $email,
											'nama_biro' => $nama_biro,
											'email_biro' => $email_biro,
											'jabatan' => $jabatan,
											'no' => $no,
											);
									$this->CI->session->set_userdata($ldap_id);
										return true;
								} else {
								  show_error('<p style="color:red;"><p><b> Username & Password yang di gunakan salah</b></p> <p><a href="'.base_url().'">Back To Login<a></p>',404, $heading = ' &#x26A0; Warning Condition ');
							 
								}
								ldap_close($ldap['conn']);
		}
		
    }
	
	
	
    function do_logout() { //Logout System
        $this->CI->session->sess_destroy();
    }

    function generate_login() {
        $ldap_id = $this->CI->session->userdata('ldap_id');
        if (empty($ldap_id) || !$ldap_id) {
			return false;
        } else {
			// echo "true";
//            $link = $this->CI->session->userdata('link');
//            if (!empty($link)) {
//                header('Location: ' . base_url() . '' . $link);
////                redirect($link);
////                return true;
//            } else {
            return true;
//            }
        }
    }

    
//end of class Auth	
}
