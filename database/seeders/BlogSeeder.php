<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
                'user_id' => 1,
                'title' => 'タイトルテスト',
                'body' => '本文テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        DB::table('blogs')->insert([
                'user_id' => 2,
                'title' => 'こんにちは',
                'body' => '今日はいい天気でした',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
