<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfoUsuario extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false],
            'datosAcademicos'   => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false],
            'datosLaborales'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => false],
            'created_at'        => ['type' => 'datetime', 'null' => false],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
            'deleted_at'        => ['type' => 'datetime', 'null' => true]
        ]);

        // $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id', 'usuarios', 'id');
        $this->forge->addForeignKey('datosAcademicos', 'datosacademicos', 'id', 'CASCADE', 'SET_NULL');
        $this->forge->addForeignKey('datosLaborales', 'datoslaborales', 'id', 'CASCADE', 'SET_NULL');
        $this->forge->createTable('infousuario', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('infousuario', true);
    }
}
