<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statusmaster_m extends CI_Model {

    public function get_statusmaster()
    {
        //select semua data status master
        $this->db->select('*');
        $this->db->from('statusmasters');
        $this->db->order_by('statusmaster_id', 'DESC');
        return $this->db->get();
    }


}