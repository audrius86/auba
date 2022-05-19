<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeed extends Seeder
{
    public function run()
    {
        $this->db->table('users')->truncate();

        $users = [
            [
                'email' => 'a@a.lt',
                'password' => md5('admin'),
                'firstname' => 'Audrius',
                'lastname' => 'Bareisis',
                'role' => 'admin',
            ],
            [
                'email' => 'angele@dangus.lt',
                'password' => md5('ang123'),
                'firstname' => 'Angele',
                'lastname' => 'Debesaite',
                'role' => 'user',
            ],
            [
                'email' => 'velnias@dangus.lt',
                'password' => md5('vel123'),
                'firstname' => 'Vaidas',
                'lastname' => 'Pragarauskas',
                'role' => 'user',
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
