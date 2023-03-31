<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DatosLaborales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'trabajoActual'         => ['type' => 'varchar', 'constraint' => 150, 'null' => true],
            'trabajoAnterior'       => ['type' => 'varchar', 'constraint' => 150, 'null' => true],
            'estudianteActivo'      => ['type' => 'boolean', 'default' => false],
            'created_at'            => ['type' => 'datetime', 'null' => false],
            'updated_at'            => ['type' => 'datetime', 'null' => true],
            'deleted_at'            => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('datoslaborales', true);
    }

    public function down()
    {
        // $this->forge->dropKey('datoslaborales', 'id');
        $this->forge->dropTable('datoslaborales', true);
    }
}
