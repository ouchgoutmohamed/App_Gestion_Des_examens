<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentcourseSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        // Fetch all students and courses
        $students = $this->db->table("users")
            ->where("is_professor", 0)
            ->get()
            ->getResultArray();

        $courses = $this->db->table("courses")
            ->get()
            ->getResultArray();

        if (empty($students)) {
            throw new \Exception("No students found in the users table!");
        }

        if (empty($courses)) {
            throw new \Exception("No courses found in the courses table!");
        }

        $student_ids = array_column($students, "id");
        $course_ids = array_column($courses, "id");

        $enrolled = []; // Keep track of inserted records

        for ($i = 0; $i < 50; $i++) {
            $student_id = $faker->randomElement($student_ids);
            $course_id = $faker->randomElement($course_ids);

            // Create a unique key for this enrollment
            $enrollmentKey = "{$student_id}_{$course_id}";

            // Check if this enrollment already exists
            if (!isset($enrolled[$enrollmentKey])) {
                // Insert into the table
                $data = [
                    "student_id" => $student_id,
                    "course_id" => $course_id,
                ];
                $this->db->table("students_courses")->insert($data);

                // Mark this enrollment as processed
                $enrolled[$enrollmentKey] = true;
            }
        }
    }
}
