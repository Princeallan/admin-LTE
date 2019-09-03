<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-09-03 09:26:17',
            'updated_at' => '2019-09-03 09:26:17',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-09-03 09:26:17',
                'updated_at' => '2019-09-03 09:26:17',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-09-03 09:26:17',
                'updated_at' => '2019-09-03 09:26:17',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
