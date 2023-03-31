<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {

        // Agregar datos de domicilio

        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'perfil'        => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false],
            'codigo'        => ['type' => 'varchar', 'constraint' => 20, 'unique' => true, 'null' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 50],
            'apaterno'      => ['type' => 'varchar', 'constraint' => 50],
            'amaterno'      => ['type' => 'varchar', 'constraint' => 50],
            'email'         => ['type' => 'varchar', 'constraint' => 100, 'unique' => true],
            'password'      => ['type' => 'varchar', 'constraint' => 255],
            'foto'          => [],
            'sexo'          => [],
            'created_at'    => ['type' => 'datetime', 'null' => false],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('perfil', 'perfiles', 'id');
        $this->forge->createTable('usuarios', true);
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropKey('id', true);
        $this->forge->dropTable('usuarios', true);
    }
}
