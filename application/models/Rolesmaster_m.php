<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rolesmaster_m extends CI_Model {

    public function get_rolemaster()
    {
        //select semua data role master
        $this->db->select('*');
        $this->db->from('rolemasters');
        $this->db->order_by('rolemaster_id', 'DESC');
        return $this->db->get();
    }


}