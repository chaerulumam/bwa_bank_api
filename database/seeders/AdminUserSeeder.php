<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'admin',
            'email' => 'admin@bwabank.com',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
