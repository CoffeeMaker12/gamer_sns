<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
                'user_id' => 1,
                'chatroom_id' => 1,
                'body' => 'テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
