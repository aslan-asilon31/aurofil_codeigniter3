<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	
	public function index()
	{
		$this->load->view('transaction_vw');
	}
}
