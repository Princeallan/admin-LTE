<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$ZgXClghF7Gy2Tm6mUBiPy.VMhT2wVKufYkU.pvBeu1Z/ojbu40S/m',
            'remember_token' => null,
            'created_at'     => '2019-09-03 09:26:17',
            'updated_at'     => '2019-09-03 09:26:17',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
