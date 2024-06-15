<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BoardCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_categories')->insert([
                'board_id' => 1,
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('board_categories')->insert([
                'board_id' => 1,
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('board_categories')->insert([
                'board_id' => 2,
                'category_id' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
