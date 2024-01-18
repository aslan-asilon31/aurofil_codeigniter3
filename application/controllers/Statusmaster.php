<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusmaster extends CI_Controller {


        public function index()
        {
                $this->load->view('statusmaster_vw');
        }
}