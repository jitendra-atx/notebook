<?php

//namespace App;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

//use database\seeds\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
    }
}
