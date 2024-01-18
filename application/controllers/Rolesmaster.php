<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rolemaster extends CI_Controller {


        public function index()
        {
                $this->load->view('rolesmaster_vw');
        }
}