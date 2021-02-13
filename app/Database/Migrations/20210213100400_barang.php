<?php

namespace app\Database\Migrations;

class barang extends \CodeIgniter\Database\Migration
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
            'nama' => [
                'type' => 'TEXT',

            ],
            'harga' => [
                'type' => 'INT',
                'Constraint' => 11,
            ],
            'stok' => [
                'type' => 'INT',
                'Constraint' => 11,
            ],
            'gambar' => [
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
        $this->forge->CreateTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
