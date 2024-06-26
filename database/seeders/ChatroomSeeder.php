<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chatrooms')->insert([
                'owner_id' => 1,
                'name' => '名前テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
