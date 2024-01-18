<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_m extends CI_Model {

    public function get_order()
    {
        //select semua data order
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->order_by('order_id', 'DESC');
        return $this->db->get();
    }


}