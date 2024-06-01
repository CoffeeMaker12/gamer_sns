<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BoardtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boardtypes')->insert([
                'name' => '募集',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('boardtypes')->insert([
                'name' => '質問',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('boardtypes')->insert([
                'name' => '大会',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
