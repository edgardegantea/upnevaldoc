<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Asignatura extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 255],
            'descripcion'   => ['type' => 'text'],
            'creditos'      => [],
            'horasSemana'   => [],
            'temario'       => [],
            'created_at'    => ['type' => 'datetime', 'null' => false],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('asignaturas', true);
    }

    public function down()
    {
        $this->forge->dropTable('asignaturas', true);
    }
}
