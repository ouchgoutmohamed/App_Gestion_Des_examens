<?php

namespace App\Database\Seeds;

use App\Enums\Roles;
use App\Models\RoleModel;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProfessorSeeder extends Seeder
{
    public function run()
    {
        $model = new RoleModel();
        $professor_role_id = $model->where('name', Roles::PROFESSOR->name)->first()['id'];

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
                'role_id' => $professor_role_id,
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
