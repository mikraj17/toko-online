<?php

namespace app\Database\Migrations;

class user extends \CodeIgniter\Database\Migration
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
            'username' => [
                'type' => 'VARCHAR',
                'Constraint' => '100',
            ],
            'password' => [
                'type' => 'TEXT',
            ],
            'salt' => [
                'type' => 'TEXT',
            ],
            'avatar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'role' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
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
        $this->forge->CreateTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
