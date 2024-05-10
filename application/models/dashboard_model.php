<?php

class Dashboard_model extends CI_Model {
    public function reservados()
    {
        return $this->db->query("SELECT COUNT(*) AS quantidade_reservado
        FROM checkin
        WHERE status = 'FF' AND MONTH(data_entrada) = MONTH(CURDATE()) AND YEAR(data_entrada) = YEAR(CURDATE());
        ")->result_array();
    }

    public function hospedado()
    {
        return $this->db->query("SELECT COUNT(*) AS quantidade_hospedado
        FROM checkin
        WHERE status = 'F' AND MONTH(data_entrada) = MONTH(CURDATE()) AND YEAR(data_entrada) = YEAR(CURDATE());
        ")->result_array();
    }

    public function livres()
    {
        return $this->db->query("SELECT COUNT(*) AS quantidade_livre
        FROM checkin
        WHERE status = 'T' AND MONTH(data_entrada) = MONTH(CURDATE()) AND YEAR(data_entrada) = YEAR(CURDATE());
        ")->result_array();
    }

    public function total_faturado()
    {
        return $this->db->query("SELECT SUM(total_final) AS total_final
        FROM checkin
        WHERE status = 'T' AND MONTH(data_entrada) = MONTH(CURDATE()) AND YEAR(data_entrada) = YEAR(CURDATE())
        ")->result_array();
    }

    public function select_clientes()
    {
        return $this->db->query("SELECT *
        FROM cliente
        ORDER BY id_cliente ASC
        LIMIT 5;
        ")->result_array();
    }

}