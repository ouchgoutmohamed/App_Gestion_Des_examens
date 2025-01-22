<?php

namespace App\Database\Seeds;

use App\Enums\Roles;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ReclamationSeeder extends Seeder
{
    public function run()
    {
        $student_role_id = Roles::STUDENT->getId();
        $professor_role_id = Roles::PROFESSOR->getId();

        $faker = Factory::create();

        // Fetch all students
        $students = $this->db->table("users")
            ->where("role_id", $student_role_id)
            ->get()
            ->getResultArray();

        // Fetch all professors
        $professors = $this->db->table("users")
            ->where("role_id", $professor_role_id)
            ->get()
            ->getResultArray();

        // Fetch all courses
        $courses = $this->db->table("courses")
            ->get()
            ->getResultArray();

        if (empty($students)) {
            throw new \Exception("No students found in the users table!");
        }

        if (empty($professors)) {
            throw new \Exception("No professors found in the users table!");
        }

        if (empty($courses)) {
            throw new \Exception("No courses found in the courses table!");
        }

        $student_ids = array_column($students, "id");
        $professor_ids = array_column($professors, "id");
        $course_ids = array_column($courses, "id");

        $reclamations = []; // Keep track of inserted records

        for ($i = 0; $i < 10; $i++) {
            $student_id = $faker->randomElement($student_ids);
            $professor_id = $faker->randomElement($professor_ids);
            $course_id = $faker->randomElement($course_ids);

            // Create a unique key for this enrollment
            $reclamationKey = "{$student_id}_{$course_id}_{$professor_id}";

            // Check if this enrollment already exists
            if (!isset($reclamations[$reclamationKey])) {
                // Insert into the table
                $data = [
                    "student_id" => $student_id,
                    "professor_id" => $professor_id,
                    "course_id" => $course_id,
                    "justification_message" => "This is a justification message placeholder."
                ];
                $this->db->table("reclamations")->insert($data);

                // Mark this enrollment as processed
                $reclamations[$reclamationKey] = true;
            }
        }
    }
}
