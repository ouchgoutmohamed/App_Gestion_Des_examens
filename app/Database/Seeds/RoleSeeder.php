<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Enums\Roles; // Import the Roles enum

class RoleSeeder extends Seeder
{
    public function run()
    {
        foreach (Roles::cases() as $role) {
            $data = [
                'id' => $role->getId(),     // Get ID from the enum
                'name' => $role->value,    // Get the name from the enum value
            ];
            $this->db->table('roles')->insert($data);
        }
    }
}
