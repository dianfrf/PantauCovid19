<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class CovidController extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('getdataapi');
        }     

        public function index()
        {
            $data['konten'] = "v_datacovid";
            $data['active'] = "Home";
            $data['datacovid'] = $this->getdataapi->getDataCovid();
            $getdata = $this->getdataapi->getDataCovidProv();
            $data['list'] = $getdata->list_data;
            $this->load->view('layout.php', $data);       
        }

        public function deteksidini()
        {
            $data['konten'] = "v_deteksidini";
            $data['active'] = "Deteksi";
            $this->load->view('layout', $data);
            
        }
    
    }
?>