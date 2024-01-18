<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaction_m extends CI_Model {

    public function get_brandmaster()
    {
        //select semua data transaction 
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->order_by('user_id', 'DESC');
        return $this->db->get();
    }


}