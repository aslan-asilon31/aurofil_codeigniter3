<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bankmaster extends CI_Controller {


        public function index()
        {
                $this->load->view('bankmaster_vw');
        }
}