<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perfil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 50, 'unique' => true],
            'descripcion'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'created_at'    => ['type' => 'datetime', 'null' => true],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('perfiles', true);
    }

    public function down()
    {
        $this->forge->dropKey('id', true);
        $this->forge->dropTable('perfiles', true);
    }
}
