<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_pantaucovid extends CI_Model {
        public function add_laporan()
        {
            $nama       = $this->input->post('nama');
            $alamat     = $this->input->post('alamat');
            $telepon    = $this->input->post('telepon');
            $created    = date('Y-m-d h:i:s');

            $this->db->query("INSERT INTO hasil_laporan VALUES('', '$nama', '$alamat', '$telepon', '$created')");
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
        
    
    }
?>