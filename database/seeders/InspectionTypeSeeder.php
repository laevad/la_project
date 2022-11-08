<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InspectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inspection_types')->insert([
            ['name'=>'Inspection'],
            ['name'=>'Investigation'],
            ['name'=>'Admin'],
            ['name'=>'Other Docs'],
        ]);
    }
}
