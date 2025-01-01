<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddStudentCourseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'student_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'course_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'grade' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
                'null' => true,
            ],
            'semester' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
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
        $this->forge->addPrimaryKey(['student_id', 'course_id']);

        // Add unique constraint on student_id and course_id
        $this->forge->addUniqueKey(['student_id', 'course_id']);

        // Add foreign keys
        $this->forge->addForeignKey('student_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('students_courses');
    }

    public function down()
    {
        $this->forge->dropTable('students_courses');
    }
}
