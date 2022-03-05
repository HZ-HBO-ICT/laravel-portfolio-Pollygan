<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(PostSeeder::class);
    }
}
