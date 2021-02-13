<?php

namespace app\Database\Migrations;

class transaksi extends \CodeIgniter\Database\Migration
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
            'id_pembeli' => [
                'type' => 'INT',
                'Constraint' => 11,
                'unsigned' => true,

            ],
            'jumlah' => [
                'type' => 'TEXT',
                'Constraint' => 11,
            ],
            'total_harga' => [
                'type' => 'INT',
                'Constraint' => 11,
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
        $this->forge->addForeignKey('id_barang', 'user', 'id');
        $this->forge->addForeignKey('id_barang', 'barang', 'id');
        $this->forge->CreateTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
