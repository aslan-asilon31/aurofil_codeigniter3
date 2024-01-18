<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {


        public function index()
        {
                $this->load->view('order_vw');
        }
}