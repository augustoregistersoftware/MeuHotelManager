<?php

class Quarto_model extends CI_Model {
    public function quartos()
    {
        return $this->db->query("SELECT
        *
        FROM quarto")->result_array();
    }

    public function obter_dados($id)
    {
        return $this->db->query('SELECT 
        cliente.nome,
        DATE_FORMAT(checkin.data_entrada, "%d/%m/%Y") as data_entrada,
        DATE_FORMAT(checkin.data_saida, "%d/%m/%Y") as data_saida,
        CASE
             WHEN checkin.status = "T" THEN "Livre"
             WHEN checkin.status = "F" THEN "Ocupado"
             WHEN checkin.status = "FF" THEN "Reservado"
        END AS status
        FROM checkin
        INNER JOIN cliente on cliente.id_cliente = checkin.id_cliente
        WHERE id_quarto = '.$this->db->escape($id).'')->result_array();
    }

}