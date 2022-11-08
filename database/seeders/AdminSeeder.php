<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' =>'a',
                'email' =>'a@a.a',       
                'email_verified_at' =>now(),
                'password' => bcrypt('1'),
                'user_type_id' => 1,            ],
        ]);
    }
}
