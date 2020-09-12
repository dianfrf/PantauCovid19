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

        public function tesdeteksi()
        {
            if($this->input->post('cek')) {
                $jawaban1 = $this->input->post('jawaban1');
                $jawaban2 = $this->input->post('jawaban2');
                $jawaban3 = $this->input->post('jawaban3');
                $jawaban4 = $this->input->post('jawaban4');
                $jawaban5 = $this->input->post('jawaban5');
                $jawaban6 = $this->input->post('jawaban6');
                $jawaban7 = $this->input->post('jawaban7');
                $jawaban8 = $this->input->post('jawaban8');
                if($jawaban6 == 45 || $jawaban7 == 45 || $jawaban8 == 45) {
                    redirect('CovidController/laporsigap');
                }
                else if($jawaban1+$jawaban2+$jawaban3+$jawaban4+$jawaban5 >= 45) {
                    redirect('CovidController/laporsigap');
                }
                else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success">Selamat Anda masih sehat. Tetap jaga kesehatan dengan makan teratur dan istirahat cukup.
                    Jaga jarak dengan sesama dan #TetapDirumahSaja</div>');
                    redirect('CovidController/deteksidini');
                }
            }
        }

        public function rumahsakit()
        {
            $data['konten'] = "v_rumahsakit";
            $data['active'] = "RS";
            $data['datars'] = $this->getdataapi->getDataHospital();
            $this->load->view('layout', $data);
        }
    
    }
?>