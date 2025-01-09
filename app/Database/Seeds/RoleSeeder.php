<?php

namespace App\Database\Seeds;

use App\Enums\Roles;
use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        foreach (Roles::cases() as $role) {
            $data = [
                'name' => $role->name,
            ];
            $this->db->table('roles')->insert($data);
        }
    }
}
