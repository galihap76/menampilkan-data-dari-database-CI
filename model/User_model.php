<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('pasien')->result_array();
    }
}
