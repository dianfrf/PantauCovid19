<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_pantaucovid extends CI_Model {
        public function add_laporan($nama, $alamat, $telepon)
        {
            $created = date('Y-m-d h:i:s');

            $this->db->query("INSERT INTO hasil_laporan VALUES('', '$nama', '$alamat', '$telepon', '$created')");
            return true;
        }   
    
    }
?>