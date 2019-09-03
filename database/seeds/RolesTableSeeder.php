<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [[
            'id'         => 1,
            'title'      => 'Admin',
            'created_at' => '2019-09-03 09:26:17',
            'updated_at' => '2019-09-03 09:26:17',
            'deleted_at' => null,
        ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2019-09-03 09:26:17',
                'updated_at' => '2019-09-03 09:26:17',
                'deleted_at' => null,
            ]];

        Role::insert($roles);
    }
}
