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
            $data['datacovid'] = $this->getdataapi->getDataCovid();
            $getdata = $this->getdataapi->getDataCovidProv();
            $data['list'] = $getdata->list_data;
            $this->load->view('v_datacovid', $data);       
        }
    
    }
?>