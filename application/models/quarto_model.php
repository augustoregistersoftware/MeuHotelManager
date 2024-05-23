<?php

class Quarto_model extends CI_Model {
    public function quartos()
    {
        return $this->db->query("SELECT
        *
        FROM quarto")->result_array();
    }

    public function quartos_visit()
    {
        return $this->db->query("SELECT
        quarto.*,
        config_quarto.*
        FROM quarto 
        LEFT JOIN config_quarto on config_quarto.id_quarto = quarto.id_quarto
        WHERE quarto.status = 'T'")->result_array();
    }

    public function fotos()
    {
        return $this->db->query("SELECT
        quarto.nome as nome_quarto,
        foto_quarto.*
        FROM foto_quarto
        INNER JOIN quarto on quarto.id_quarto = foto_quarto.id_quarto")->result_array();
    }

    public function select_fotos_id($id)
    {
        return $this->db->query('SELECT *
        FROM foto_quarto
        WHERE id_quarto = '.$this->db->escape($id).'')->result_array();
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

    public function get_images_by_id($id) {
        $this->db->select('caminho');
        $this->db->from('foto_quarto');
        $this->db->where('id_quarto', $id);
        $query = $this->db->get();
        return $query->result();
    }


    public function valida_ativacao($id)
    {
        return $this->db->query('SELECT *
        FROM config_quarto
        WHERE id_quarto = '.$this->db->escape($id).'')->result_array();
    }

    public function config_quarto($id)
    {
        return $this->db->query('SELECT *
        FROM config_quarto
        WHERE id_quarto = '.$this->db->escape($id).'')->row_array();
    }

    public function inserte_documento($data_foto)
    {
        $this->db->insert("foto_quarto", $data_foto);
    }

    public function inserte_config($data_foto)
    {
        $this->db->insert("config_quarto", $data_foto);
    }

}