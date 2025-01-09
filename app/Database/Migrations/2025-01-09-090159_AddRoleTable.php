<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoleTable extends Migration
{ public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
            ]
            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('roles');

    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
