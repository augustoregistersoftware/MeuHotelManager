<?php

class Login_model extends CI_Model {
    public function auth($email,$senha)
    {
        return $this->db->query("SELECT
        *
        FROM login where login =".$this->db->escape($email)." AND senha =".$this->db->escape($senha)."")->result_array();
    }
}