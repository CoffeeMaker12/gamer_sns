<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert([
                'blog_id' => 1,
                'category_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('blog_categories')->insert([
                'blog_id' => 1,
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
