<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_criar_tabela_configuracao_pix extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id_config' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'chave_pix' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'nome_beneficiario' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'cidade' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('id_config', TRUE);
        $this->dbforge->create_table('configuracao_pix');
    }

    public function down() {
        $this->dbforge->drop_table('configuracao_pix');
    }
}
