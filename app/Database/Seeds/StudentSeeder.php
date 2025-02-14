<?php

namespace App\Database\Seeds;

use App\Enums\Roles;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $student_role_id = Roles::STUDENT->getId();

        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'cin' => "J".$faker->randomNumber(6),
                'cne' => "D".$faker->randomNumber(9),
                'role_id' => $student_role_id,
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
