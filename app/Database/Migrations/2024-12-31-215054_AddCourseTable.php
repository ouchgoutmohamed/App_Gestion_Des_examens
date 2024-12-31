<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddCourseTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
            ],
            'professor_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'deleted_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('professor_id', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->db->enableForeignKeyChecks();

        $this->forge->createTable('courses');
    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}
