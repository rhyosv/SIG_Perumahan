<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kampus extends CI_Model {

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kampus');
        return $this->db->get()->result();
    }
}