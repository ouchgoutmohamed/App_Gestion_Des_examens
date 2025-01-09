<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        // $this->call("RoleSeeder");
        $this->call("ProfessorSeeder");
        $this->call("StudentSeeder");
        $this->call("CourseSeeder");
        $this->call("StudentcourseSeeder");
    }
}
