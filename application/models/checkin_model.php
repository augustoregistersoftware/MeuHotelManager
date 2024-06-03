<?php

class Checkin_model extends CI_Model {

    public function select_checkin()
    {
        return $this->db->query("SELECT  
        checkin.id_checkin,
        quarto.nome as nome_quarto,
        cliente.nome as nome_cliente,
        cliente.cpf,
        cliente.telefone,
        DATE_FORMAT(checkin.data_saida, '%d/%m/%Y') AS data_marcado,
        DATE_FORMAT(checkin.data_entrada, '%d/%m/%Y') AS data_entrada,
        DATE_FORMAT(checkin.data_saida, '%d/%m/%Y') AS data_saida,
        CASE
            WHEN checkin.status = 'TT' THEN
            'Reservado'
            WHEN checkin.status = 'T' THEN
            'Ocupado'
            WHEN checkin.status = 'FF' THEN
            'Cancelado'
            WHEN checkin.status = 'F' THEN
            'Checkout'
        END as status,
        checkin.total_final
        FROM checkin
        INNER JOIN cliente on cliente.id_cliente = checkin.id_cliente
        INNER JOIN quarto on quarto.id_quarto = checkin.id_quarto;
        ")->result_array();
    }

}