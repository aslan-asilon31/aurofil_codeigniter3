<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model {

    public function get_brandmaster()
    {
        //select semua data user
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('user_id', 'DESC');
        return $this->db->get();
    }


}