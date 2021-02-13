<?php

namespace app\Database\Migrations;

class komentar extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'Constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_barang' => [
                'type' => 'INT',
                'Constraint' => 11,
                'unsigned' => true,

            ],
            'id_user' => [
                'type' => 'INT',
                'Constraint' => 11,
                'unsigned' => true,

            ],
            'komentar' => [
                'type' => 'TEXT',

            ],
            'created_by' => [
                'type' => 'INT',
                'constraint' => 11,

            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addkey('id', true);
        $this->forge->addForeignKey('id_user', 'user', 'id');
        $this->forge->addForeignKey('id_user', 'barang', 'id');
        $this->forge->CreateTable('id_barang');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
