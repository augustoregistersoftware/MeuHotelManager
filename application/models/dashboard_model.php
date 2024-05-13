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

    public function select_diferenca_checkin()
    {
        return $this->db->query("SELECT
        hoje.quantidade AS quantidade_hoje,
        ontem.quantidade AS quantidade_ontem,
        ROUND(
            IF(ontem.quantidade = 0,
               100 * IF(hoje.quantidade > 0, 1, 0),  -- Se ontem = 0 e hoje > 0, 100%; se hoje = 0, 0%
               ((hoje.quantidade - ontem.quantidade) / ontem.quantidade) * 100),
            2
        ) AS diferenca_percentual
    FROM
        (SELECT COUNT(*) AS quantidade
         FROM checkin
         WHERE DATE(data_entrada) = CURDATE()) AS hoje,
        (SELECT COUNT(*) AS quantidade
         FROM checkin
         WHERE DATE(data_entrada) = CURDATE() - INTERVAL 1 DAY) AS ontem; ")->row_array();
    }

}