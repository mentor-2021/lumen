<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private $tableName = 'users';

    private $rows = 100;

    public function run()
    {
        $faker = Faker::create();

        $data = [];
        $i = 0;
        $password = Hash::make('mentor2021');

        array_push($data, [
            'name' => 'cavani',
            'email' => 'haitm789@gmail.com',
            'password' => $password,
        ]);

        while ($i++ < $this->rows) {
            $tmp = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ];
            array_push($data, $tmp);
        }
        DB::table($this->tableName)->insert($data);
    }
}
