<?php

class Quarto_model extends CI_Model {
    public function quartos()
    {
        return $this->db->query("SELECT
        *
        FROM quarto")->result_array();
    }

    public function situacao()
    {
        return $this->db->query('SELECT 
        DATE_FORMAT(checkin.data_entrada, "%d/%m/%Y") as data_entrada,
        DATE_FORMAT(checkin.data_saida, "%d/%m/%Y") as data_saida,
        CASE
             WHEN checkin.status = "T" THEN "Livre"
             WHEN checkin.status <> "T" THEN "Ocupado"
        END AS status
        FROM checkin')->result_array();
    }

}