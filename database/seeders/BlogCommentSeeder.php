<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_comments')->insert([
                'user_id' => 1,
                'blog_id' => 1,
                'blog_comment_id' => 1,
                'body' => '本文テスト',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
