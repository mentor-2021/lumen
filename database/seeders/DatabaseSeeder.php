<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        // $exclude = ['DatabaseSeeder'];
        // $seeder = [];

        // $files = File::files(dirname(__FILE__));
        // foreach ($files as $path) {
        //     $filename = pathinfo($path)['filename'];
        //     if (in_array($filename, $exclude)) {
        //         continue;
        //     }
        //     array_push($seeder, $filename);
        // }

        // $this->call($seeder);
    }
}
