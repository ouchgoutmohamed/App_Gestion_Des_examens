<?php

namespace App\Database\Migrations;

use App\Enums\Reclamations;
use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddReclamationTableMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "student_id"=> [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            "professor_id"=> [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            "course_id"=> [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            "justification_message" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            "file" => [
                "type" => "MEDIUMBLOB",
                'null' => true,
            ],
            "state" => [
                "type" => "VARCHAR",
                "constraint" => 20,
                "default" => Reclamations::EN_COURS->value,
            ],
            'date' => [
                'type' => 'DATE',
                'null' => false,
                'default' => new RawSql('(CURRENT_DATE)'),
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

        // Add primary key
        $this->forge->addPrimaryKey(['student_id', 'course_id', 'professor_id']);

        // Add unique constraint on student_id and course_id
        $this->forge->addUniqueKey(['student_id', 'course_id', 'professor_id']);

        // Add foreign keys
        $this->forge->addForeignKey('student_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('professor_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('reclamations');
    }

    public function down()
    {
        $this->forge->dropTable('reclamations');
    }
}
