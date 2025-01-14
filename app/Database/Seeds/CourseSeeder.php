<?php

namespace App\Database\Seeds;

use App\Enums\Roles;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $professor_role_id = Roles::PROFESSOR->getId();

        $faker = Factory::create();

        // Fetch all professor IDs from the users table
        $professors = $this->db->table('users')
            ->select('id')
            ->where('role_id', $professor_role_id)
            ->get()
            ->getResultArray();

        // Check if there are any professors available
        if (empty($professors)) {
            throw new \Exception("No professors found in the users table!");
        }

        // Extract only the IDs into an array
        $professor_ids = array_column($professors, 'id');

        // Generate courses with random professor IDs
        for ($i = 0; $i < 20; $i++) {
            $data = [
                'title' => $faker->sentence(2),
                'professor_id' => $faker->randomElement($professor_ids), // Random professor ID
            ];
            $this->db->table('courses')->insert($data);
        }
    }
}
