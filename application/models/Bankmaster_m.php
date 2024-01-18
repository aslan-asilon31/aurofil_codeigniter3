<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bankmaster_m extends CI_Model {

    public function get_bankmaster()
    {
        //select semua data bank master
        $this->db->select('*');
        $this->db->from('bankmasters');
        $this->db->order_by('bankmaster_id', 'DESC');
        return $this->db->get();
    }


}