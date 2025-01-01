<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProfessorSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'cin' => "J".$faker->randomNumber(6),
                'code' => $faker->randomNumber(8),
                'is_professor' => 1,
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
