<?php

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
        $this->call([
            HeadingsTableSeeder::class,
            PagesTableSeeder::class,
            SocialNetworkTableSeeder::class,
        ]);
        factory(\App\Book::class, 50)->create();
        factory(\App\Autor::class, 30)->create();
    }
}
