<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BoardCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_comments')->insert([
                'body' => '本文テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
