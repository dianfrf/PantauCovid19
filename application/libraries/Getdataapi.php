<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Getdataapi
    {
        protected $data;
        protected $curl;
        protected $url;
        function __construct()
        {
            $this->CI =& get_instance();
        }

        protected function CurlGet()
        {
            $this->curl = curl_init();
            curl_setopt($this->curl, CURLOPT_URL, $this->url);
            curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        }

        public function getDataCovid()
        {
            $this->url = "https://covid19.mathdro.id/api/countries/Indonesia";
            $this->CurlGet();
            $this->data = curl_exec($this->curl);
            $httpcode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
            curl_close($this->curl);
            return json_decode($this->data);
        }

        public function getDataCovidProv()
        {
            $this->url = "https://data.covid19.go.id/public/api/prov.json";
            $this->CurlGet();
            $this->data = curl_exec($this->curl);
            $httpcode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
            curl_close($this->curl);
            return json_decode($this->data);
        }
    }