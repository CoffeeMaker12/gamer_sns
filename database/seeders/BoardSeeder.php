<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
                'user_id' => 1,
                'boardtype_id' => 1,
                'title' => 'タイトルテスト',
                'body' => '本文テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('boards')->insert([
                'user_id' => 2,
                'boardtype_id' => 2,
                'title' => 'このキャラのコンボについて',
                'body' => '基本的なコンボのやり方を教えてください',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
